<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name_native',
        'name_english',
        'regional',
        'script',
        'is_rtl',
        'emoji',
        'flag_svg',
        'is_active',
        'is_default',
        'is_fallback',
        'sort_order',
    ];

    protected $casts = [
        'is_rtl' => 'boolean',
        'is_active' => 'boolean',
        'is_default' => 'boolean',
        'is_fallback' => 'boolean',
        'sort_order' => 'integer',
    ];

    // Use 'code' as route key for pretty URLs
    public function getRouteKeyName()
    {
        return 'code';
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name_english');
    }

    public function scopeDefault($query)
    {
        return $query->where('is_default', true);
    }

    public function scopeFallback($query)
    {
        return $query->where('is_fallback', true);
    }

    public function scopeRtl($query)
    {
        return $query->where('is_rtl', true);
    }

    public function scopeLtr($query)
    {
        return $query->where('is_rtl', false);
    }

    public function getDisplayFlagAttribute()
    {
        return $this->emoji ?? $this->flag_svg;
    }

    public function getDisplayNameAttribute()
    {
        return $this->name_native.' ('.$this->name_english.')';
    }

    public function getFullLocaleAttribute()
    {
        return $this->regional ?? $this->code;
    }

    public function getDirectionAttribute()
    {
        return $this->is_rtl ? 'rtl' : 'ltr';
    }

    // Ensure only one default language
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->is_default) {
                static::where('id', '!=', $model->id)->update(['is_default' => false]);
            }

            if ($model->is_fallback) {
                static::where('id', '!=', $model->id)->update(['is_fallback' => false]);
            }
        });
    }
}
