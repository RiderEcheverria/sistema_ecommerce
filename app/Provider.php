<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Provider extends Model
{
    protected $fillable = [
        'name', 'address','email','nit','celular','estatus'];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function people()
    {
        return $this->hasOne('App\People');
    }


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