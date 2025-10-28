<?php

namespace App\Models;

use App\Concerns\HasSlug;
use App\Concerns\HasTags;
use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory, HasSlug, HasTags, HasTranslations;

    protected $fillable = [
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
