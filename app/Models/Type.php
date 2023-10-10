<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'category',
    ];

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }
}
