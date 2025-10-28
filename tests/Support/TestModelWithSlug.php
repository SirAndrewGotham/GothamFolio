<?php

namespace Tests\Support;

use App\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Model;

class TestModelWithSlug extends Model
{
    use HasSlug;

    protected $table = 'test_model_with_slugs';

    protected $fillable = ['title', 'slug'];

    // Default sluggable field is 'title'

    protected static function boot()
    {
        parent::boot();

        // This is necessary because the HasSlug trait expects a boot* method
        // but since this is a dummy model, we need to manually call it.
        static::bootHasSlug();
    }
}
