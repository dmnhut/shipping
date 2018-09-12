<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'code', 'title', 'content', 'price', 'address_from', 'address_to', 'image', 'status', 'id_user', 'id_user_ship'
    ];
    public $incrementing = true;
}
