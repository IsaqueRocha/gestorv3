<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigitalComplement extends Model
{
    public function digitalMark()
    {
        return $this->belongsTo(DigitalMark::class);
    }
}
