<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'name'
    ];
    public $incrementing = true;

    public function getName($id)
    {
        return $this::where('id', $id)->first()->name;
    }
}
