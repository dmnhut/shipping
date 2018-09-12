<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusShip extends Model
{
    protected $table = 'status_ship';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'name'
    ];
    public $incrementing = true;
}
