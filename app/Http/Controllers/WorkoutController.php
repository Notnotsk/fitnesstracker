<?php

namespace App\Http\Controllers;

use App\Models\fitness;
use App\Models\workouts;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Workouts::all();
        return view ('workouts.index', [
            'workouts' => $workouts, 
        ]);
    }

    public function create()
    {
        return view('workouts.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'date' => 'required',
            'week_day' => 'nullable',
            'venue' => 'nullable',
            'length' => 'nullable',
            'music' => 'nullable',
            'body_weight' => 'nullable',
            'calories_burned' => 'nullable',
            'notes' => 'nullable'
        ]);

        Workouts::create($validated);
        
        return redirect('/workouts');
    }

    public function show(fitness $fitness)
    {
        //
    }

    public function edit(fitness $fitness)
    {
        //
    }

    public function update(Request $request, fitness $fitness)
    {
        $validated = request()->validate([
            'date' => 'required',
            'week_day' => 'nullable',
            'venue' => 'nullable',
            'length' => 'nullable',
            'music' => 'nullable',
            'body_weight' => 'nullable',
            'calories_burned' => 'nullable',
            'notes' => 'nullable'
        ]);
    }

    public function destroy(fitness $fitness)
    {
        //
    }
}
