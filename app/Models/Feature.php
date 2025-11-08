<?php

namespace App\Models;

use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
{
    /** @use HasFactory<\Database\Factories\FeatureFactory> */
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = [
        'icon',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected array $translatableAttributes = ['title', 'description'];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at');
    }

    public function scopeWithCurrentTranslations($query)
    {
        return $query->with(['translations' => function ($q) {
            $q->whereIn('locale', [app()->getLocale(), config('app.fallback_locale', 'en')]);
        }]);
    }
}
