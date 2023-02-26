<?php

namespace App\Http\Controllers;

use App\Models\fitness;
use App\Models\workouts;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 

class FitnessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return request()->all();
        $validated = request()->validate([
            'date' => 'required|date',
        ]);

        Workouts::create($validated);
        return redirect('/workouts');
    }

    /**
     * Display the specified resource.
     */
    public function show(fitness $fitness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fitness $fitness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fitness $fitness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fitness $fitness)
    {
        //
    }
}
