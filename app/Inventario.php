<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;


    protected $fillable = [
        
        'product_id',
        'quantity',
        'quantity',
        'price',
        'codigo',
        // 'precio_compra',
        'precio_venta',
        'stock',
       
        // 'status',
        
        
        

    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    
}