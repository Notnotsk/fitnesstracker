<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Workout;

class WorkoutController extends Controller
{
    public function index()
    {
        $typeId = request('type_id');

        $workouts = Workout::query()
            ->with('type')
            ->when($typeId, function ($query, $typeId) {
                return $query->where('type_id', $typeId);
            })
            ->paginate(8);

        $types = Type::where('category', 'workouts')->get();

        return view('workouts.index', [
            'workouts' => $workouts,
            'types' => $types,
        ]);
    }

    public function create()
    {
        $types = Type::where('category', 'workouts')->get();

        return view('workouts.create', [
            'types' => $types,
        ]);
    }

    public function store()
    {
        $validated = request()->validate([
            'date' => 'required|date|before_or_equal:now',
            'name' => 'nullable|max:255',
            'music' => 'nullable|max:255',
            'venue' => 'nullable|max:255',
            'body_weight' => 'nullable|string|max:10',
            'calories_burned' => 'nullable|integer|min:0',
            'length' => 'nullable',
            'notes' => 'nullable|max:1000',
            'type_id' => 'required|exists:types,id',
        ]);

        $validated['user_id'] = auth()->user()->id;

        Workout::create($validated);

        return redirect('/workouts');
    }

    public function show(Workout $workout)
    {
        return view('workouts.show', [
            'workout' => $workout,
        ]);
    }

    public function edit(Workout $workout)
    {
        $types = Type::where('category', 'workouts')->get();

        return view('workouts.edit', [
            'workout' => $workout,
            'types' => $types,
        ]);
    }

    public function update(Workout $workout)
    {
        $validated = request()->validate([
            'date' => 'required|date|before_or_equal:now',
            'name' => 'nullable|max:255',
            'music' => 'nullable|max:255',
            'venue' => 'nullable|max:255',
            'body_weight' => 'nullable|string|max:10',
            'calories_burned' => 'nullable|integer|min:0',
            'length' => 'nullable',
            'notes' => 'nullable|max:1000',
            'type_id' => 'required|exists:types,id',
        ]);

        $workout->update($validated);

        return redirect('/workouts/' . $workout->id);
    }

    public function destroy(Workout $workout)
    {
        $workout->delete();

        return redirect('/workouts');
    }
}
