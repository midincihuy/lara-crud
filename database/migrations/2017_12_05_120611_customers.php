<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Customers.
 *
 * @author  The scaffold-interface created at 2017-12-05 12:06:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('customers',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('email');
        
        $table->String('name');
        
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
        Schema::drop('customers');
    }
}
