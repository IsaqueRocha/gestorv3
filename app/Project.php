<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $dates = ['start', 'deadline'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',

    ];

    public function setStartAttribute($date){
        $date = explode('/', $date);
        $date = $date[2].'-'.$date[1].'-'.$date[0];
        $this->attributes['start'] = Carbon::parse($date);
    }

    public function setDeadlineAttribute($date){
        $date = explode('/', $date);
        $date = $date[2].'-'.$date[1].'-'.$date[0];
        $this->attributes['deadline'] = Carbon::parse($date);
    }

    public function users(){
        return $this->hasMany(App\User::class);
    }

    public function course(){
        return $this->hasOne(App\Course::class);
    }

    public function teacher(){
        return $this->hasOne(App\Teacher::class);
    }

    public function types(){
        return $this->hasMany(App\Type::class);
    }

    public function status(){
        return $this->hasOne(App\Status::class);
    }

}
