<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $name
 * @property $surname
 * @property $cedula
 * @property $address
 * @property $email
 * @property $celular
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'name' => 'required',
		'surname' => 'required',
		'cedula' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','surname','cedula','address','email','celular','estatus','created_at'];



}
