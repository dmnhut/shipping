<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinPay extends Model
{
    protected $table = 'coin_pay';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'name'
    ];
    public $incrementing = true;
}
