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
    public function store(Request $request)
    {
        $validated = request()->validate([ 
            'name' => 'required',
            'weight' => 'nullable',
            'reps' => 'nullable',
        ]);
        
        Exercise::create($validated);
        
        return redirect('/exercises');
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
    public function edit(Set $set)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Set $set)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Set $set)
    {
        //
    }
}
