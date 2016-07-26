<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Format;

class DigitalMark extends Model
{

    protected $guarded = [];

    public function complement()
    {
        return $this->hasOne(\App\DigitalComplement::class, 'digitalmark_id');
    }

    public function project()
    {
        return $this->belongsTo(App\Project::class);
    }

    public function format(){
        return $this->belongsTo(Format::class);
    }
}
