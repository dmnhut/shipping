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

    public function store($data)
    {
        $coinLog = $this::create([
            'coins' => $data['coins'],
            'content' => $data['content'],
            'id_user' => $data['id_user'],
            'id_user_pay' => $data['id_user_pay'],
            'id_order' => $data['id_order'],
            'id_pay' => $data['id_pay']
        ]);
        return $coinLog;
    }
}
