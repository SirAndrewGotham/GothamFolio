<?php

namespace Tests\Support;

use App\Concerns\HasTags;
use Illuminate\Database\Eloquent\Model;

class TestModelWithTags extends Model
{
    use HasTags;

    protected $table = 'test_model_with_tags';

    protected $fillable = ['name'];

    public $timestamps = false; // Not needed for basic tag tests
}
