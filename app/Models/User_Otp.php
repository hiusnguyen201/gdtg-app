<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Otp extends Model
{
    use HasFactory;

    protected $table = "user_otp";

    protected $fillable = [
        'otp',
        'user_id',
        'expire_at',
        'token'
    ];

    protected function casts(): array
    {
        return [
            'otp' => 'string',
            'user_id' => 'integer',
            'expire_at' => 'datetime',
            'token' => 'string'
        ];
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
