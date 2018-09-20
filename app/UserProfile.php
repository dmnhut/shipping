<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profile';
    protected $primaryKey = 'id';
    protected $keyType = 'varchar';
    protected $fillable = [
        'id', 'address', 'id_provincce', 'id_district', 'id_ward', 'id_user'
    ];
    public $incrementing = true;

    public function store($data)
    {
        $profile = $this::create([
            'address' => $data['address'],
            'id_provincce' => $data['id_provincce'],
            'id_district' => $data['id_district'],
            'id_ward' => $data['id_ward'],
            'id_user' => $data['id_user']
        ]);
        return $profile;
    }
}
