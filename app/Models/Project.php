<?php

namespace App\Models;

use App\Concerns\HasCategories;
use App\Concerns\HasCompetences;
use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasCategories, HasCompetences, HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = [
        'uuid',
        'category_id',
        'year',
        'status',
        'duration',
        'type',
        'image',
        'demo_url',
        'github_url',
        'featured',
    ];

    protected array $translatableAttributes = ['name', 'description'];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
