<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function projects()
    {
        return $this->hasMany(App\Project::class);
    }
}
