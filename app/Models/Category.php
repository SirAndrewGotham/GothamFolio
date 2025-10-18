<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Concerns\HasSlug;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasSlug;

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
     * Get the name of the field that should be used for slug generation.
     *
     * @return string
     */
    protected function getSluggableField(): string
    {
        return 'name';
    }
}
