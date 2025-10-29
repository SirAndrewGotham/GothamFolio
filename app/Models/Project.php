<?php

namespace App\Models;

use App\Concerns\HasCategories;
use App\Concerns\HasCompetences;
use App\Concerns\HasSlug;
use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasCategories, HasCompetences, HasFactory, HasSlug, HasTranslations, SoftDeletes;

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
            $slug = $originalSlug . '-' . $suffix++;
        }

        return $slug;
    }

    protected array $translatableAttributes = ['name', 'description'];

    public function projectType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ProjectType::class);
    }

    public function withTranslations(): static
    {
        return $this->afterCreating(function (\App\Models\Project $project) {
            $project->setTranslation('name', 'Project '.$project->id, 'en');
            $project->setTranslation('name', 'Проект '.$project->id, 'ru');
            $project->setTranslation('description', 'Description for project '.$project->id, 'en');
            $project->setTranslation('description', 'Описание проекта '.$project->id, 'ru');
        });
    }

    /**
     * Get the name of the field that should be used for slug generation.
     */
    public function getSluggableField(): string
    {
        return 'name';
    }
}
