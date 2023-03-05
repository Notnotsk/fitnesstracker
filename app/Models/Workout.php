<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $casts = [
        'date' => 'datetime',
    ];

    protected $fillable = [
        'date',
        'venue',
        'name',
        'music',
        'body_weight',
        'calories_burned',
        'length',
        'notes',
    ];
}
