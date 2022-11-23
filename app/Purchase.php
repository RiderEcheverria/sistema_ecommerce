<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
      
        'provider_id',
         'user_id',
         'purchase_date',
         'tax',
         'total',
         'status',
         'picture',
    ];

    public function scopeNombres($query, $nombres) {
    	if ($nombres) {
    		return $query->where('purchase_date','like',"%$nombres%");
    	}
    }





   
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function provider(){
        return $this->belongsTo(Provider::class);
    }
    
    public function purchaseDetails(){
        return $this->hasMany(PurchaseDetails::class);
    }
}