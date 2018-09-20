<?php

namespace App\Http\Controllers;

use App\Coin;
use App\CoinHistory;
use App\CoinLog;
use App\User;
use Illuminate\Http\Request;

class PayController extends Controller
{
    protected $user;
    protected $coin;
    protected $coinHistory;
    protected $coinLog;

    public function __construct()
    {
        $this->user = new User();
        $this->coin = new Coin();
        $this->coinHistory = new CoinHistory();
        $this->coinLog = new CoinLog();
    }

    public function index()
    {
        $data = $this->coin->listRecharge();
        return view('pay.index', compact('data'));
    }

    public function recharge(Request $request)
    {
        $data = $request->all();
        $container = [
            'user' => $this->user,
            'coin' => $this->coin,
            'coinHistory' => $this->coinHistory,
            'coinLog' => $this->coinLog
        ];
        $result = $this->coin->recharge($data, $container);
        return $result;
    }
}
