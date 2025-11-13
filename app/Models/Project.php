<?php

namespace App\Models;

use App\Concerns\HasCategories;
use App\Concerns\HasCompetences;
use App\Concerns\HasSlug;
use App\Concerns\HasTranslations;
use App\Services\PortfolioImageService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasCategories, HasCompetences, HasFactory, HasSlug, HasTranslations, SoftDeletes;

    protected PortfolioImageService $imageService;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->imageService = app(PortfolioImageService::class);
    }

    public function getImageUrlsAttribute()
    {
        return $this->imageService->getProjectImageUrls($this->id, 'card');
    }

    public function hasImages()
    {
        $images = $this->imageService->getProjectImageUrls($this->id, 'card');
        return !empty($images);
    }

    protected $fillable = [
        'uuid',
        'slug',
        'project_type_id',
        'year',
        'status',
        'duration',
        'image',
        'demo_url',
        'github_url',
        'featured',
        'is_active',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Generate a unique slug for the model, handling translatable names.
     * Overrides the HasSlug trait's method to work with translations.
     */
    protected function generateUniqueSlug(): string
    {
        // Use English translation for slug generation
        $name = $this->getTranslation('name', 'en') ?? 'project';

        $slug = \Illuminate\Support\Str::slug($name);
        $originalSlug = $slug;
        $suffix = 1;

        while (static::where('slug', $slug)
            ->where($this->getKeyName(), '!=', $this->getKey())
            ->exists()) {
            $slug = $originalSlug.'-'.$suffix++;
        }

        return $slug;
    }

    protected array $translatableAttributes = ['name', 'description'];

    public function projectType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ProjectType::class);
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectImage::class);
    }

    /**
     * Get the name of the field that should be used for slug generation.
     */
    public function getSluggableField(): string
    {
        return 'name';
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at', 'desc');
    }

    public function scopeWithCurrentTranslations($query)
    {
        return $query->with(['translations' => function ($q) {
            $q->whereIn('locale', [app()->getLocale(), config('app.fallback_locale', 'en')]);
        }]);
    }
}
