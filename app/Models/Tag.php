<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use App\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Tag extends Model
{
    use HasFactory, HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Get the parent taggable model.
     */
    public function taggable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the name of the field that should be used for slug generation.
     *
     * @return string
     */
    public function getSluggableField(): string
    {
        return 'name';
    }
}
