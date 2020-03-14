<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }


    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
