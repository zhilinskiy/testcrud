<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'email', 'password', 'group_id','expiration_date_time', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = true;

    protected $dates = ['expiration_date_time'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
//    public static function boot() {
//        static::deleting(function ($obj) {
//            $name = str_replace('uploads/', '', $obj->image);
//            \Storage::disk('uploads')->delete($name);
//        });
//    }
    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
    /**
     * Get the groups for the user.
     */
    public function group() {
        return $this->belongsTo('App\Group');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
//    public function getExpirationDateTimeAttribute($value) {
//        return Carbon::parse($value);
//    }
    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
    public function setPasswordAttribute($value) {
//        if (!is_null($value)){
            $this->attributes['password'] = bcrypt($value);
//        }

    }
    public function setExpirationDateTimeAttribute($value) {
        $this->attributes['expiration_date_time'] = Carbon::parse($value);
    }
}
