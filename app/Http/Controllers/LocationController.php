<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Location();
    }

    public function storeOrUpdate(Request $request)
    {
        return $this->model->storeOrUpdate($request);
    }

    public function getLocation(Request $request)
    {
        return $this->model->getLocation($request);
    }
}
