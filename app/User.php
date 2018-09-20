<?php

namespace App;

use http\Env\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'nickname', 'sex', 'coins', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function list()
    {
        $result = $this::leftjoin('user_role', 'user_role.id_user', '=', 'users.id')
            ->where('users.status', helpers::$STATUS_USER['ACTIVE'])
            ->where('user_role.id_role', helpers::$ROLE['USER'])
            ->orderby('users.name', 'asc')
            ->get([
                'users.name as name',
                'users.email as email',
                'users.phone as phone',
                'users.nickname as nickname',
                'users.sex as sex'
            ]);
        return $result;
    }

    public function store($data, $container)
    {
        $data['password'] = Hash::make($data['password']);
        $data['sex'] = $data['sex'] == helpers::$USER_SEX['MALE'] ? 'Nam' : 'Nữ';
        $data['coins'] = helpers::$COINS_INIT;
        $data['status'] = helpers::$STATUS_USER['ACTIVE'];
        $container['user'] = $container['user']::create($data);
        $container['user'] = $container['user']->toArray();
        $data['id_user'] = $container['user']['id'];
        $data['coins'] = $container['user']['coins'];
        $container['userProfile'] = $container['userProfile']->store($data);
        $container['coin'] = $container['coin']->store($data);
        $container['coinHistory'] = $container['coinHistory']->store($data);
        $container['userRole'] = $container['userRole']->store($data);
        return [
            'user' => $container['user'],
            'user profile' => $container['userProfile'],
            'coin' => $container['coin'],
            'coin history' => $container['coinHistory'],
            'user role' => $container['userRole']
        ];
    }

    public function edit($data)
    {

    }

    public function remove($data)
    {

    }
}
