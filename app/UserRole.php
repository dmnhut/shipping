<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_role';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'id_user', 'id_role'
    ];
    public $incrementing = true;

    public function store($data)
    {
        $userRole = $this::create([
            'id_user' => $data['id_user'],
            'id_role' => helpers::$ROLE['USER']
        ]);
        return $userRole;
    }

    public function getIdRole($id)
    {
        return $this::where('id_user', $id)->first()->id_role;
    }
}
