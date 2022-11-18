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

    protected $perPage = 20;

    protected $fillable = ['name','surname','cedula','address','email','celular','estatus','created_at'];

}