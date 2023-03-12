<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\RedirectResponse;
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

        // return view('exercises.show', compact ('exercise'));

    }

    public function edit($id)
    {
        $exercise = Exercise::find($id);

        return view('exercises.edit', [
            'exercises' => $exercises,
        ]);
    }

    public function update(Request $request, Exercise $exercise)
    {
        //
    }

    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();

        return redirect('/exercises');
    }
}
