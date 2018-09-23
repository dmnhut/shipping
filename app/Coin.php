<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $table = 'coins';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'coins', 'id_user'
    ];
    public $incrementing = true;

    public function store($data)
    {
        $coin = $this::create([
            'coins' => $data['coins'],
            'id_user' => $data['id_user']
        ]);
        return $coin;
    }

    public function recharge($data, $container)
    {
        $container['user'] = $container['user']::find($data['id_user']);
        $container['user']->coins += $data['coins'];
        $container['user']->save();
        $container['coin'] = $container['coin']::where('id_user', $data['id_user'])->first();
        $container['coin']->coins += $data['coins'];
        $container['coin']->save();
        $container['coinHistory'] = $container['coinHistory']::where('id_user', $data['id_user'])->first();
        $container['coinHistory']->coins += $data['coins'];
        $container['coinHistory']->save();
        $data['content'] = 'Khách hàng ' . $container['user']->name . ', có số điện thoại ' . $container['user']->phone . ', đã nạp tiền vào lúc ' . date('H:i:s') . ' giờ, ngày ' . date('d/m/Y') . '.';
        $data['id_user_pay'] = null;
        $data['id_order'] = null;
        $data['id_pay'] = helpers::$COIN_PAY['RECHARGE'];
        $container['coinLog'] = $container['coinLog']->store($data);
        return [
            'user' => $container['user'],
            'coin' => $container['coin'],
            'coin history' => $container['coinHistory'],
            'coin log' => $container['coinLog']
        ];
    }

    public function listRecharge()
    {
        $result = CoinLog::leftjoin('users', 'users.id', '=', 'coin_log.id_user')
            ->where('coin_log.id_pay', helpers::$COIN_PAY['RECHARGE'])
            ->orderby('coin_log.created_at', 'desc')
            ->get([
                'coin_log.id as id_coin_log',
                'users.name as name',
                'users.phone as phone',
                'users.email as email',
                'coin_log.coins as coins',
                'coin_log.content as content',
                "coin_log.created_at as created_at",
            ]);
        return $result;
    }
}
