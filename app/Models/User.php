<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'user';
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    protected $hidden = [
        'password'
    ];

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
