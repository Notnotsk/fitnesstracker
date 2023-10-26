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
        'type_id',
        'venue',
        'name',
        'music',
        'body_weight',
        'calories_burned',
        'length',
        'notes',
    ];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class)
            ->withPivot('notes')
            ->withTimestamps();
    }

    public function plans()
    {
        return $this->belongsToMany(Plan::class);
    }

    public function sets()
    {
        return $this->hasMany(Set::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
