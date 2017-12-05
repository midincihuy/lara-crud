<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post.
 *
 * @author  The scaffold-interface created at 2017-12-05 12:01:50pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Post extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'posts';

	
}
