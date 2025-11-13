<?php

namespace App\Http\Middleware;

use App\Models\Language;
use App\Services\LanguageService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class Localization
{
    protected $languageService;

    public function __construct(LanguageService $languageService)
    {
        $this->languageService = $languageService;
    }

    public function handle(Request $request, Closure $next): Response
    {
        // die('Localization middleware hit!'); // Removed for further debugging
        $locale = Session::get('locale');
        Log::info('Localization Middleware - Initial Locale: '.($locale ?? 'null'));

        // If no locale in session, try to detect from browser, then use the database default
        if (! $locale) {
            $browserLocales = $request->getLanguages();
            if (! empty($browserLocales)) {
                $detectedLocale = $this->detectBrowserLanguage($browserLocales);
                if ($detectedLocale) {
                    $locale = $detectedLocale;
                    Session::put('locale', $locale);
                    Log::info('Localization Middleware - Locale detected from browser: '.$locale);
                }
            }
            if (! $locale) {
                $defaultLanguage = $this->languageService->getDefaultLanguage();
                $locale = $defaultLanguage ? $defaultLanguage->code : 'en';
                Session::put('locale', $locale);
                Log::info('Localization Middleware - No locale in session and not detected from browser, set to default: '.$locale);
            }
        }

        // Set application locale to the database-driven locale
        App::setLocale(Session::get('locale'));
        Log::info('Localization Middleware - App Locale after set: '.App::getLocale());
        Log::info('Localization Middleware - Session Locale after App::setLocale: '.Session::get('locale'));

        // Set fallback locale to the database fallback
        $fallbackLanguage = $this->languageService->getFallbackLanguage();
        if ($fallbackLanguage) {
            App::setFallbackLocale($fallbackLanguage->code);
            Log::info('Localization Middleware - Fallback Locale set to: '.$fallbackLanguage->code);
        }

        // Share application locale data with all views
        $this->shareLocaleDataWithViews();

        return $next($request);
    }

    protected function shareLocaleDataWithViews()
    {
        $currentLocale = $this->languageService->getApplicationLocale();
        $direction = $this->languageService->getApplicationDirection();
        $isRtl = $this->languageService->getApplicationIsRtl();
        $availableLanguages = $this->languageService->getAvailableLanguages();

        view()->share('current_locale', $currentLocale);
        view()->share('direction', $direction);
        view()->share('is_rtl', $isRtl);
        view()->share('availableLanguages', $availableLanguages);
    }

    protected function detectBrowserLanguage(array $browserLocales): string
    {
        $supportedLanguages = $this->languageService->getSupportedLocales();

        foreach ($browserLocales as $browserLocale) {
            $browserLocale = str_replace('_', '-', $browserLocale);
            $baseLocale = explode('-', $browserLocale)[0];

            // First try exact match
            foreach ($supportedLanguages as $code => $fullLocale) {
                if (str_starts_with($browserLocale, str_replace('_', '-', $fullLocale))) {
                    return $fullLocale;
                }
            }

            // Then try base code match
            foreach ($supportedLanguages as $code => $fullLocale) {
                if ($code === $baseLocale) {
                    return $fullLocale;
                }
            }
        }

        // Use default language from database as last resort
        $defaultLanguage = $this->languageService->getDefaultLanguage();

        return $defaultLanguage ? $defaultLanguage->full_locale : 'en';
    }
}
