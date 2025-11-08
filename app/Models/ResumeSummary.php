<?php

namespace App\Models;

use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeSummary extends Model
{
    /** @use HasFactory<\Database\Factories\ResumeSummaryFactory> */
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = [
        'type',
        'icon',
        'duration',
        'percentage',
        'link',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'percentage' => 'integer',
    ];

    protected array $translatableAttributes = ['title', 'subtitle', 'description'];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at');
    }

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeWithCurrentTranslations($query)
    {
        return $query->with(['translations' => function ($q) {
            $q->whereIn('locale', [app()->getLocale(), config('app.fallback_locale', 'en')]);
        }]);
    }
}
