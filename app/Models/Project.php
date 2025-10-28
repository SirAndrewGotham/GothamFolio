<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Concerns\HasTranslations;
use App\Concerns\HasCategories;
use App\Concerns\HasCompetences;
use App\Models\Category;

class Project extends Model
{
    use HasFactory, SoftDeletes, HasCategories, HasCompetences, HasTranslations;

    protected $fillable = [
        'uuid',
        'category_id',
        'name',
        'description',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
