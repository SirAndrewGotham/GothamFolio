<?php

namespace App\Models;

use App\Concerns\HasCategories;
use App\Concerns\HasSlug;
use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasCategories, HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover_image',
        'year',
        'is_featured',
        'is_published',
        'order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'year' => 'integer',
        'order' => 'integer',
    ];

    protected $translatableAttributes = [
        'title',
        'description',
    ];

    public function getSluggableField(): string
    {
        return 'title';
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function publishedImages(): HasMany
    {
        return $this->images()->where('is_published', true);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at', 'desc');
    }
}
