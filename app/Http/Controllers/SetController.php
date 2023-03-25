<?php

namespace App\Http\Controllers;

use App\Models\Set;
use Illuminate\Http\Request;

class SetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validated = request()->validate([ 
            'workout_id' => 'required',
            'exercise_id' => 'required',
            'weight' => 'nullable',
            'reps' => 'required',
        ]);
        
        Set::create($validated);
        
        // return redirect('/workouts/' . $validated['workout_id']);
        return redirect('/workouts/' . $workout->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Set $set)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $set = Set::find($id);

        return view('sets.edit', [
            'set' => $set,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $validated = request()->validate([
            'workout_id' => 'required',
            'exercise_id' => 'required',
            'weight' => 'nullable',
            'reps' => 'required',
        ]);

        $set = Set::find($id);
        $set->update($validated);
        
        return redirect('/sets/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $set = Set::find($id);
        $set->delete();

        return redirect('/workouts/' . $id);
    }
}
