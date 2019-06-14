<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function user_role() {
        return $this->hasOne(UserRole::class);
    }

    public function account() {
        return $this->belongsTo(Account::class);
    }
}
