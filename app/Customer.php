<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer.
 *
 * @author  The scaffold-interface created at 2017-12-05 12:06:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Customer extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'customers';

	
}
