<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function stores(){
        return $this->belongsToMany(Store::class, 'offered_services')->withPivot(
            'active', 'price')->withTimestamps();
    }
}
