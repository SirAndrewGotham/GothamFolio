<?php

namespace App\Models;

use App\Concerns\HasSlug;
use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Category extends Model
{
    use HasFactory, HasSlug, HasTranslations, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'cover',
        'is_featured',
        'is_active',
    ];

    /**
     * Get the parent categorizable model.
     */
    public function categorizable(): MorphTo
    {
        return $this->morphTo();
    }

    protected array $translatableAttributes = ['name', 'description'];

    /**
     * Get the competences that belong to this category.
     */
    public function competences(): MorphToMany
    {
        return $this->morphedByMany(Competence::class, 'categorizable');
    }

    /**
     * Get the name of the field that should be used for slug generation.
     */
    public function getSluggableField(): string
    {
        return 'name';
    }
}
