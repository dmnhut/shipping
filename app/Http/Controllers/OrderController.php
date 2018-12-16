<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    public function index()
    {
        $data = $this->order->list();
        return view('order.index', compact('data'));
    }

    public function store(Request $request)
    {
        $order = $this->order->store($request);
        return $order;
    }

    public function get(){
        $data = $this->order->index();
        return $data;
    }
}
