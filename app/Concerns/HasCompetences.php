<?php

namespace App\Concerns;

use App\Models\Competence;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasCompetences
{
    public function competences(): MorphToMany
    {
        return $this->morphToMany(Competence::class, 'competenceable');
    }
}
