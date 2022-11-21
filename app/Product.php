<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'image',
        'status',//estado
        'category_id',//categoria

    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
   


    
    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }
   
    

}