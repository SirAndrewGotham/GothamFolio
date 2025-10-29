<?php

namespace App\Models;

use App\Concerns\HasSlug;
use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectType extends Model
{
    use HasFactory, HasSlug, HasTranslations, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    protected array $translatableAttributes = ['name', 'description'];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function getSluggableField(): string
    {
        return 'name';
    }
}
