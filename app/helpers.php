<?php

/**
 * Created by PhpStorm.
 * User: who
 * Date: 9/11/18
 * Time: 1:24 AM
 */

namespace App;

use Illuminate\Support\Facades\Route;

class helpers
{
    public static function isActive($name)
    {
        return Route::current()->getName() == $name ? 'class=active' : '';
    }
}