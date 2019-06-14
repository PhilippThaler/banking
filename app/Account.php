<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function user() {
        return $this->hasOne(User::class);
    }

    public function transaction() {
        return $this->hasMany(Transaction::class);
    }
}
