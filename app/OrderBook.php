<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderBook extends Model
{
    protected $table = 'order_book';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'code', 'status', 'id_order', 'id_user', 'id_user_book'
    ];
    public $incrementing = true;
}
