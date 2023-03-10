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
        return view('exercises.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([ 
            'name' => 'required',
            'equipment' => 'nullable',
            'muscle' => 'nullable',
            'auxiliary' => 'nullable',
            'size' => 'nullable',
        ]);
        
        Exercise::create($validated->all($id));
        
        return redirect('/exercises');
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
