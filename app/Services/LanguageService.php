<?php
namespace App\Services;

use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageService
{
    public function __construct()
    {
    }

    public function getCurrentLanguage()
    {
        $locale = Session::get('locale');
        error_log('LanguageService - getCurrentLanguage: Session Locale: ' . ($locale ?? 'null'));
        $currentLanguage = $this->findByLocale($locale) ?? $this->getDefaultLanguage();
        error_log('LanguageService - getCurrentLanguage: Resolved Current Language Code: ' . ($currentLanguage ? $currentLanguage->code : 'null'));
        return $currentLanguage;
    }

    public function setLanguage($languageCode)
    {
        error_log('LanguageService - Attempting to set language to: ' . $languageCode);
        $language = Language::active()->where('code', $languageCode)->first();

        if ($language) {
            Session::put('locale', $language->code);
            App::setLocale($language->code);
            error_log('LanguageService - Language set to: ' . $language->code . ', Session Locale: ' . Session::get('locale'));
            error_log('LanguageService - App locale after set: ' . App::getLocale());
            return true;
        }
        error_log('LanguageService - Failed to set language for code: ' . $languageCode . '. Language not found or not active.');
        return false;
    }

    public function getAvailableLanguages()
    {
        $languages = Language::active()->ordered()->get();
        return $languages;
    }

    public function getDefaultLanguage()
    {
        $defaultLanguage = Language::active()->default()->first()
            ?? Language::active()->first();
        error_log('LanguageService - getDefaultLanguage: Resolved Default Language Code: ' . ($defaultLanguage ? $defaultLanguage->code : 'null'));
        return $defaultLanguage;
    }

    public function getFallbackLanguage()
    {
        return Language::active()->fallback()->first()
            ?? $this->getDefaultLanguage();
    }

    public function findByLocale($locale)
    {
        // First try to find by regional code
        $language = Language::active()->where('regional', $locale)->first();

        if (!$language) {
            // Then try by base code
            $language = Language::active()->where('code', $locale)->first();
        }

        return $language;
    }

    public function getSupportedLocales()
    {
//        return Language::active()->get()->pluck('code', 'code')->toArray();
        return Language::active()->get()->pluck('full_locale', 'code')->toArray();
    }

    public function isRtl($locale = null)
    {
        if (!$locale) {
            $locale = Session::get('locale');
        }

        $language = $this->findByLocale($locale);
        return $language ? $language->is_rtl : false;
    }

    // NEW: Get the current application locale from database default
    public function getApplicationLocale()
    {
        $currentLanguage = $this->getCurrentLanguage();
        return $currentLanguage ? $currentLanguage->code : 'en';
    }

    // NEW: Get the current application direction
    public function getApplicationDirection()
    {
        return $this->isRtl() ? 'rtl' : 'ltr';
    }

    // NEW: Check if current language is RTL
    public function getApplicationIsRtl()
    {
        return $this->isRtl();
    }
}
