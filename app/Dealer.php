<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dealer
 *
 * @property $id
 * @property $name
 * @property $address
 * @property $email
 * @property $nit
 * @property $celular
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dealer extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','address','email','nit','celular'];



}
