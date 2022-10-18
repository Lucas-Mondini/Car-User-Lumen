<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    protected $table = 'car';
    protected $fillable = [
            "user_id",
            "model",
            "license_plate",
            "value"
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
