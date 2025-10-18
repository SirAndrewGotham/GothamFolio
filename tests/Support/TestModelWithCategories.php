<?php

namespace Tests\Support;

use App\Concerns\HasCategories;
use Illuminate\Database\Eloquent\Model;

class TestModelWithCategories extends Model
{
    use HasCategories;

    protected $table = 'test_model_with_categories';
    protected $fillable = ['name'];
    public $timestamps = false; // Not needed for basic category tests
}
