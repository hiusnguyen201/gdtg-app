<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = "roles";

    protected $fillable = [
        'name',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'description' => 'string',
        ];
    }
}
