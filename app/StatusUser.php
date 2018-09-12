<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusUser extends Model
{
    protected $table = 'status_user';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'name'
    ];
    public $incrementing = true;
}
