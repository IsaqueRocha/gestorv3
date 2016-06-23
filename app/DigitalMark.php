<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigitalMark extends Model
{
    public function complement()
    {
        return $this->hasOne(App\complement::class);
    }
}
