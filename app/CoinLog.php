<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinLog extends Model
{
    protected $table = 'coin_log';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'coins', 'content', 'id_user', 'id_user_pay', 'id_order', 'id_pay'
    ];
    public $incrementing = true;
}
