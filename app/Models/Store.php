<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Store extends Model
{
    protected $fillable = ['memberships_id', 'name', 'city', 'email', 'rating', 'voted', 'active', 'expire_at', 'status'];

    public function users(){
        return $this->hasMany(User::Class);
    }

    public function hours(){
        return $this->hasMany(Hour::Class);
    }

    public function membership() {
        return $this->belongsTo(Membership::class);
    }
}
