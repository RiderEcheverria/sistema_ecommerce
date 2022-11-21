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
		'imagen' => 'required|imagen:jpeg,jpg,png',
    ];

    

    protected $fillable = ['name','imagen'];

    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }

   


}