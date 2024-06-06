<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment_Method extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "payment_methods";

    protected $fillable = [
        'logo',
        'name',
        'description',
        'fee',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'logo' => "string",
            'name' => "string",
            'description' => "string",
            'fee' => "integer",
            'status' => "integer",
        ];
    }
}
