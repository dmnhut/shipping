<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderShipping extends Model
{
    protected $table = 'order_shipping';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'code', 'note', 'status', 'id_order', 'id_user', 'id_user_ship'  
    ];
    public $incrementing =true;
}
