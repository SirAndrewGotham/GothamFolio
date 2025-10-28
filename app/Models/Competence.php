<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Concerns\HasTranslations;
use App\Concerns\HasSlug;
use App\Concerns\HasTags;

class Competence extends Model
{
    use HasFactory, HasSlug, HasTranslations, HasTags;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'is_featured',
        'is_active',
    ];

    protected array $translatableAttributes = ['name', 'description'];

    public function getSluggableField(): string
    {
        return 'name';
    }
}
