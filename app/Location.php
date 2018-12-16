<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Location extends Model
{
    protected $table = 'location';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'id_order', 'lat', 'lon'
    ];

    public function storeOrUpdate(Request $request)
    {
        try {
            $data = $this::where('id_order', $request->get('id_order'))->first();
            if (empty($data)) {
                $this::create([
                    'id' => $request->get('id'),
                    'id_order' => $request->get('id_order'),
                    'lat' => $request->get('lat'),
                    'lon' => $request->get('lon')
                ]);
            } else {
                $data->lat = $request->get('lat');
                $data->lon = $request->get('lon');
                $data->save();
            }
            return [
                'status' => true
            ];
        } catch (\Exception $e) {
            return [
                'status' => false
            ];
        }
    }

    public function getLocation(Request $request)
    {
        $model = $this::where('id_order', $request->get('id_order'))->first();
        if (empty($model)) {
            return [
                'status' => false,
                'lat' => '',
                'lon' => ''
            ];
        }
        return [
            'status' => true,
            'lat' => $model->lat,
            'lon' => $model->lon
        ];
    }
}