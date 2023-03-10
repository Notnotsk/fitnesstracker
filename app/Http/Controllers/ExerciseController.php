<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();

        return view('exercises.index', [
            'exercises' => $exercises,
        ]);
    }

    public function create()
    {
        return view('exercises.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'date' => 'required',
            'equipment' => 'nullable',
            'muscle' => 'nullable',
            'auxiliary' => 'nullable',
            'size' => 'nullable',
        ]);

        Workout::create($validated);
        
        return redirect('/workouts');
    }

    public function show(Exercise $exercise)
    {
        //
    }

    public function edit(Exercise $exercise)
    {
        //
    }

    public function update(Request $request, Exercise $exercise)
    {
        //
    }

    public function destroy(Exercise $exercise)
    {
        //
    }
}
