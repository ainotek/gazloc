<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'stores_id',
        'name',
        'email',
        'password',
        'role',
        'active',
        'expire_at',
        'status',
    ];

    public  function logs(){
        return $this->hasMany(Log::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
