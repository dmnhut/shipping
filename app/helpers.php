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
    public static $ROLE = ['ADMIN' => 0, 'USER' => 1];
    public static $USER_SEX = ['MALE' => 1, 'FEMALE' => 0];
    public static $STATUS_USER = ['BLOCK' => 0, 'ACTIVE' => 1];
    public static $COINS_INIT = 0;
    public static $COIN_PAY = ['RECHARGE' => 0, 'FEES' => 1, 'WAGE' => 2];

    public static function isActive($name)
    {
        return Route::current()->getName() == $name ? 'class=active' : '';
    }
}