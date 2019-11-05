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

    public function services(){
        return $this->belongsToMany(Service::class, 'offered_services')->withPivot(
            'active', 'price')->withTimestamps();
    }
    public function membership() {
        return $this->belongsTo(Membership::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'stores_products')->withPivot(
            'active', 'quantity', 'price')->withTimestamps();
    }
}
