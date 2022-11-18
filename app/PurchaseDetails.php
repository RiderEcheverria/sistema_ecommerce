<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    protected $fillable = [
        'purchase_id',
         'product_id',
         'quantity',
         'price',        
    ];
    public function purchese(){
        return $this->belongsTo(Purchese::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
   
}