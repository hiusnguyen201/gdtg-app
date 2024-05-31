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
    ];

    protected function casts(): array
    {
        return [
            'otp' => 'string',
            'user_id' => 'integer',
            'expire_at' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
