<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBrandIdToProducts extends Migration
{
   
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {   
            $table->foreign('brand_id')->references('id')->on('brands'); 
        });
    }

   
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
           $table->dropForeign(['brand_id']);
           $table->dropColumn(['brand_id']);
           
        });
    }
}