<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'code', 'title', 'content', 'price', 'address_from', 'address_to', 'image', 'status', 'id_user', 'id_user_ship'
    ];
    public $incrementing = true;

    public function list()
    {
        $result = $this::leftjoin('users as user', 'user.id', '=', 'orders.id_user')
            ->leftjoin('users as user_ship', 'user_ship.id', '=', 'orders.id_user_ship')
            ->join('status_order', 'status_order.id', '=', 'orders.status')
            ->where('user.status', helpers::$STATUS_USER['ACTIVE'])
            ->orderby('orders.created_at', 'desc')
            ->get([
                'orders.id as id',
                'orders.code as code',
                'orders.title as title',
                'orders.content as content',
                'orders.price as price',
                'orders.address_from as address_from',
                'orders.address_to as address_to',
                'orders.image as image',
                'orders.created_at as created_at',
                'status_order.name as status_order_name',
                'user.name as user_name',
                'user.phone as user_name_phone',
                'user_ship.name as user_ship_name',
                'user_ship.phone as user_ship_phone'
            ]);
        return $result;
    }

    public function store($data)
    {
        $order = $this::create([
            'code' => helpers::genCodeOrder(),
            'title' => $data['title'],
            'content' => $data['content'],
            'price' => $data['price'],
            'address_from' => $data['address_from'],
            'address_to' => $data['address_to'],
            'image' => $data['image'],
            'status' => helpers::$STATUS_ORDER['INIT'],
            'id_user' => $data['id_user'],
            'id_user_ship' => null
        ]);
        return $order;
    }
}
