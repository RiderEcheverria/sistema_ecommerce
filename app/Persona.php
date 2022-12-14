<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    
    static $rules = [
		'name' => 'required',
		'surname' => 'required',
		'cedula' => 'required',
    ];
    protected $table="personas";
    protected $primaryKey="id";
    protected $fillable = ['name','surname','cedula','address','email','celular','estatus','created_at'];
   
   
    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }



    public function scopeCedulas($query, $cedulas) {
    	if ($cedulas) {
    		return $query->where('cedula','like',"%$cedulas%");
    	}
    }
}