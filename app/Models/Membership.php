<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    //
    public function stores() {
        return $this->hasMany(Store::class);
    }
}
