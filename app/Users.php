<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

 
class Users extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
    ];

    protected $fillable = ['name','email'];

    public function purchases()
    {
        return $this->hasMany('App\Purchase', 'user_id', 'id');
    }
    
    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }
}