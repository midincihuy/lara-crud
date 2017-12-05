<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Products.
 *
 * @author  The scaffold-interface created at 2017-12-05 12:05:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('products',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('sku');
        
        /**
         * Foreignkeys section
         */
        
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
