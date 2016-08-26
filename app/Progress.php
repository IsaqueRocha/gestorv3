<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Project;

class Progress extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'progress';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
