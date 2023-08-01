<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutExerciseController extends Controller
{
    public function create(Workout $workout)
    {
        $exercises = Exercise::orderby('name')->get();

        return view('workout_exercises.create', [
            'exercises' => $exercises,
            'workout' => $workout,
        ]);
    }

    public function store(Workout $workout)
    {
        // return request()->all();
        $validated = request()->validate([
            'exercise_id' => 'required',
            'notes' => 'nullable',
        ]);

        $workout->exercises()->attach($validated['exercise_id'], ['notes' => $validated['notes']]);

        return redirect('/workouts/'.$workout->id);
    }
}
