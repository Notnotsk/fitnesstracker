<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}
