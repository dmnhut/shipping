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
}
