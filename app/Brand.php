<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Brand extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['name'];



}