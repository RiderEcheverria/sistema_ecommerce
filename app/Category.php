<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description','estatus'
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }

}