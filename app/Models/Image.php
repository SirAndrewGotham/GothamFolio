<?php

namespace App\Models;

use App\Concerns\HasSlug;
use App\Concerns\HasTags;
use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasTags, HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'file_path',
        'file_name',
        'file_size',
        'mime_type',
        'width',
        'height',
        'camera_model',
        'camera_settings',
        'location',
        'year',
        'is_published',
        'order',
        'gallery_id',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'year' => 'integer',
        'order' => 'integer',
        'file_size' => 'integer',
        'width' => 'integer',
        'height' => 'integer',
    ];

    protected $translatableAttributes = [
        'title',
        'description',
    ];

    public function getSluggableField(): string
    {
        return 'title';
    }

    public function gallery(): BelongsTo
    {
        return $this->belongsTo(Gallery::class);
    }

    public function galleries(): BelongsToMany
    {
        return $this->belongsToMany(Gallery::class, 'gallery_image')
            ->withTimestamps()
            ->withPivot('order')
            ->orderBy('gallery_image.order');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at', 'desc');
    }
}
