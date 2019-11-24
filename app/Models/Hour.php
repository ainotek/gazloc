<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $fillable = ['store_id', 'day', 'open', 'close'];

    public function store() {
        return $this->belongsTo(Store::class);
    }
}
