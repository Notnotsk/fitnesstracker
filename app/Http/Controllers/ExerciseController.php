<?php

namespace App\Http\Controllers;

use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::orderBy('name')->paginate(8);

        return view('exercises.index', [
            'exercises' => $exercises,
        ]);
    }

    public function create()
    {
        $muscles = [
            'Abductors',
            'Abs',
            'Adductors',
            'Biceps',
            'Calves',
            'Chest',
            'Forearms',
            'Front Delts',
            'Glutes',
            'Hams',
            'Lats',
            'Lower Back',
            'Quads',
            'Rear Delts',
            'Side Delts',
            'Traps',
            'Triceps',
            'Upper Back',
        ];

        return view('exercises.create', [
            'muscles' => $muscles,
        ]);
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required',
            'muscles' => 'nullable',
            'size' => 'nullable',
            'type' => 'required',
        ]);

        Exercise::create($validated);

        return redirect('/exercises');
    }

    public function show($id)
    {
        $exercise = Exercise::find($id);

        return view('exercises.show', [
            'exercise' => $exercise,
        ]);
    }

    public function edit($id)
    {
        $exercise = Exercise::find($id);
        $muscles = $exercise->getMuscles();

        return view('exercises.edit', [
            'exercise' => $exercise,
            'muscles' => $muscles,
        ]);
    }

    public function update($id)
    {
        $validated = request()->validate([
            'name' => 'required',
            'muscles' => 'nullable',
            'size' => 'nullable',
            'type' => 'required',
        ]);

        $exercise = Exercise::find($id);
        $exercise->update($validated);

        return redirect('/exercises/' . $id);
    }

    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();

        return redirect('/exercises');
    }
}
