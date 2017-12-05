<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product.
 *
 * @author  The scaffold-interface created at 2017-12-05 12:05:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Product extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'products';

	
}
