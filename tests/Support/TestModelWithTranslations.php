<?php

namespace Tests\Support;

use App\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class TestModelWithTranslations extends Model
{
    use HasTranslations;

    protected $table = 'test_model_with_translations';
    protected $fillable = ['name'];
    public $timestamps = false;

    public array $translatable = ['name'];

    protected $casts = [
        'name' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();
    }

    public function translations(): MorphMany
    {
        return $this->morphMany(\App\Models\Translation::class, 'translatable');
    }
}
