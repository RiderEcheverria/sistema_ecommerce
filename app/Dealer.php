<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    
    static $rules = [
		'name' => 'required'];

    protected $perPage = 20;

    protected $fillable = ['name','address','email','nit','celular'];



}