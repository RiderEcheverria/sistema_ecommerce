<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Provider extends Model
{
    protected $fillable = [
        'name', 'address','email','nit','celular',
        // 'ruc_numbre','phone',
        // 'name', 'email','ruc_numbre','address','phone',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function people()
    {
        return $this->hasOne('App\People');
    }
}
