<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinHistory extends Model
{
    protected $table = 'coin_history';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'coins', 'id_user'
    ];
    public $incrementing = true;

    public function store($data)
    {
        $coinHistory = $this::create([
            'coins' => $data['coins'],
            'id_user' => $data['id_user']
        ]);
        return $coinHistory;
    }
}
