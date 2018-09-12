<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusBook extends Model
{
    protected $table = 'status_book';
    protected $primaryKey = 'id';
    protected $keyType ='varchar';
    protected $fillable = [
        'id', 'name'
    ];
    public $incrementing = true;
}
