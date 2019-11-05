<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    public function store() {
        return $this->belongsTo(Store::class);
    }
}
