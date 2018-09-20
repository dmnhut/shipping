<?php

namespace App\Http\Controllers;

use App\Coin;
use App\CoinHistory;
use App\User;
use App\UserProfile;
use App\UserRole;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    protected $userProfile;
    protected $coin;
    protected $coinHistory;
    protected $userRole;

    public function __construct()
    {
        $this->user = new User();
        $this->userProfile = new UserProfile();
        $this->coin = new Coin();
        $this->coinHistory = new CoinHistory();
        $this->userRole = new UserRole();
    }

    public function index()
    {
        $data = $this->user->list();
        return view('users.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $container = [
            'user' => $this->user,
            'userProfile' => $this->userProfile,
            'coin' => $this->coin,
            'coinHistory' => $this->coinHistory,
            'userRole' => $this->userRole
        ];
        $result = $this->user->store($data, $container);
        return $result;
    }
}
