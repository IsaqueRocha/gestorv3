<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Carbon\Carbon;
use App\WorkSchedule;
use Artesaos\Defender\Traits\HasDefender;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, AuthorizableContract
{
    use Authenticatable, Authorizable, CanResetPassword, HasDefender;

    protected $dates = ['entrance_date'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'phone',
        'address',
        'role',
        'area',
    ];

    public function setEntranceDateAttribute($date){
        $date = explode('/', $date);
        $date = $date[2].'-'.$date[1].'-'.$date[0];
        $this->attributes['entrance_date'] = Carbon::parse($date);
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function work_schedule(){
        return $this->hasOne(WorkSchedule::class, 'user_id');
    }
}
