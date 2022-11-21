<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    
    static $rules = [
		'name' => 'required'];

    // protected $perPage = 20;

    protected $fillable = ['name','address','email','nit','celular'];

    
    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }



    public function scopeNit($query, $nit) {
    	if ($nit) {
    		return $query->where('nit','like',"%$nit%");
    	}
    }


}