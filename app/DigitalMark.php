<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigitalMark extends Model
{
    public function complement()
    {
        return $this->hasOne(App\DigitalComplement::class);
    }

    public function project()
    {
        return $this->belongsTo(App\Project::class);
    }
}
