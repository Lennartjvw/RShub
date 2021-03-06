<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'user_role', 'role_id', 'user_id');
    }

//    public function user(){
//        return $this->belongsTo(User::class);
//    }
}
