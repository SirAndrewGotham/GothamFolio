<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'referrer',
        'path',
        'country',
        'city',
        'device_type',
        'browser',
        'platform',
        'is_bot',
    ];

    public static function trackVisit()
    {
        // Skip tracking for bots and certain paths
        if (self::isBot() || self::shouldSkipTracking()) {
            return;
        }

        return self::create([
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
            'referrer' => Request::header('referer'),
            'path' => Request::path(),
            'country' => self::getCountry(),
            'city' => self::getCity(),
            'device_type' => self::getDeviceType(),
            'browser' => self::getBrowser(),
            'platform' => self::getPlatform(),
            'is_bot' => self::isBot(),
        ]);
    }

    protected static function isBot()
    {
        $userAgent = Request::userAgent();

        if (!$userAgent) {
            return false;
        }

        // Common legitimate browser indicators
        $browserPatterns = [
            'chrome', 'safari', 'firefox', 'opera', 'edge', 'webkit', 'gecko'
        ];

        // If it looks like a real browser, it's probably not a bot
        foreach ($browserPatterns as $browser) {
            if (stripos($userAgent, $browser) !== false) {
                return false;
            }
        }

        // Known bots and crawlers
        $bots = [
            'bot', 'crawl', 'spider', 'slurp', 'archiver', 'tracker',
            'facebookexternalhit', 'twitterbot', 'linkedinbot',
            'googlebot', 'bingbot', 'yandexbot', 'baiduspider',
            'duckduckbot', 'ahrefsbot', 'semrushbot', 'pinterestbot'
        ];

        foreach ($bots as $bot) {
            if (stripos($userAgent, $bot) !== false) {
                return true;
            }
        }

        return false;
    }

    protected static function shouldSkipTracking()
    {
        $skipPaths = ['admin', 'api', 'health', 'horizon', 'telescope'];
        $currentPath = Request::path();

        foreach ($skipPaths as $path) {
            if (strpos($currentPath, $path) === 0) {
                return true;
            }
        }

        return false;
    }

    protected static function getDeviceType()
    {
        $userAgent = Request::userAgent();
        if (preg_match('/(mobile|android|iphone|ipod|ipad)/i', $userAgent)) {
            return 'mobile';
        } elseif (preg_match('/(tablet|ipad)/i', $userAgent)) {
            return 'tablet';
        }
        return 'desktop';
    }

    protected static function getBrowser()
    {
        // Simple browser detection
        $userAgent = Request::userAgent();
        if (stripos($userAgent, 'Chrome') !== false) return 'Chrome';
        if (stripos($userAgent, 'Firefox') !== false) return 'Firefox';
        if (stripos($userAgent, 'Safari') !== false) return 'Safari';
        if (stripos($userAgent, 'Edge') !== false) return 'Edge';
        if (stripos($userAgent, 'Opera') !== false) return 'Opera';
        return 'Unknown';
    }

    protected static function getPlatform()
    {
        $userAgent = Request::userAgent();
        if (stripos($userAgent, 'Windows') !== false) return 'Windows';
        if (stripos($userAgent, 'Mac') !== false) return 'macOS';
        if (stripos($userAgent, 'Linux') !== false) return 'Linux';
        if (stripos($userAgent, 'Android') !== false) return 'Android';
        if (stripos($userAgent, 'iPhone') !== false) return 'iOS';
        return 'Unknown';
    }

    protected static function getCountry()
    {
        // You can integrate with a geoIP service later
        return null;
    }

    protected static function getCity()
    {
        // You can integrate with a geoIP service later
        return null;
    }
}
