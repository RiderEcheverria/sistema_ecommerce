<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'image',
        'description',
        'status',
        'brand_id',//estado
        'category_id',//categoria

    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
   
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    
   

    
    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('name','like',"%$nombres%");
    	}
    }
   
    

}