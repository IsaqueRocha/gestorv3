<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Status;
use App\Teacher;
use App\Type;

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
        return $this->belongsToMany(User::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function teacher(){
        return $this->hasOne(Teacher::class);
    }

    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

}
