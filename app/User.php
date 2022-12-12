<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;



    protected $fillable = [ 'name', 'email', 'password','created_at','estatus'];
    protected $hidden = ['password', 'remember_token',];
    protected $casts = ['email_verified_at' => 'datetime', ];

    static $rules = [
		'name' => 'required',
		'email' => 'required',
    ];

    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }

    public function purchases()
    {
        return $this->hasMany('App\Purchase', 'user_id', 'id');
    }
    
}