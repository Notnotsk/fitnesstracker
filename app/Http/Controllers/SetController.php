<?php

namespace App\Http\Controllers;

use App\Models\Set;

class SetController extends Controller
{
    public function create()
    {
        return view('sets.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'workout_id' => 'required|integer|exists:workouts,id',
            'exercise_id' => 'required|integer|exists:exercises,id',
            'weight' => 'nullable|numeric|min:0',
            'reps' => 'required|integer|min:1',
        ]);

        Set::create($validated);

        return redirect('/workouts/' . $validated['workout_id']);
    }

    public function edit(Set $set)
    {
        return view('sets.edit', [
            'set' => $set,
        ]);
    }

    public function update(Set $set)
    {
        $validated = request()->validate([
            'weight' => 'nullable|numeric|min:0',
            'reps' => 'required|integer|min:1',
        ]);

        $set->update($validated);

        return redirect('/workouts/' . $set->workout_id);
    }
}
