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
            'workout_id' => 'required',
            'exercise_id' => 'required',
            'weight' => 'nullable',
            'reps' => 'required',
        ]);

        Set::create($validated);

        return redirect('/workouts/'.$validated['workout_id']);
    }

    public function edit($id)
    {
        $set = Set::find($id);

        return view('sets.edit', [
            'set' => $set,
        ]);
    }

    public function update($id)
    {
        $validated = request()->validate([
            'weight' => 'nullable',
            'reps' => 'required',
        ]);

        $set = Set::find($id);
        $set->update($validated);

        return redirect('/workouts/'.$set->workout_id);
    }
}
