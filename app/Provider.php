<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Provider extends Model
{
    protected $fillable = [
        'name', 'address','email','nit','celular'];
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function people()
    {
        return $this->hasOne('App\People');
    }
}