<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name','ci','address','phone','email','estatus'];
    
    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }



    public function scopeCedula($query, $cedula) {
    	if ($cedula) {
    		return $query->where('ci','like',"%$cedula%");
    	}
    }
}