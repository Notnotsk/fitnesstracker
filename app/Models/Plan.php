<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'created_by',
        'title',
        'level',
        'equipment',
        'description',
        'duration',
        'is_custom',

    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function workouts()
    {
        return $this->belongsToMany(Workout::class);
    }
}
