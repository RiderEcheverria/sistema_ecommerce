<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    
  
    public function products(){
      return $this->hasMany(Product::class);
  }


    protected $fillable = ['name'];

    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }

   


}