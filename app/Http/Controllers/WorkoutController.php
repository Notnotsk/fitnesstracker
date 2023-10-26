<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Workout;

class WorkoutController extends Controller
{
    public function index()
    {
        $typeId = request('type_id');

        $workouts = Workout::with('type')
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
            'date' => 'required',
            'name' => 'nullable',
            'music' => 'nullable',
            'venue' => 'nullable',
            'body_weight' => 'nullable',
            'calories_burned' => 'nullable',
            'length' => 'nullable',
            'notes' => 'nullable',
            'type_id' => 'required|exists:types,id',
        ]);

        $validated['user_id'] = auth()->user()->id;

        Workout::create($validated);

        return redirect('/workouts');
    }

    public function show($id)
    {
        $workout = Workout::with(['exercises.sets' => function ($query) use ($id) {
            $query->where('workout_id', $id);
        }])->find($id);

        return view('workouts.show', [
            'workout' => $workout,
        ]);
    }

    public function edit($id)
    {
        $workout = Workout::find($id);
        $types = Type::where('category', 'workouts')->get();

        return view('workouts.edit', [
            'workout' => $workout,
            'types' => $types,
        ]);
    }

    public function update($id)
    {
        $validated = request()->validate([
            'date' => 'required',
            'type' => 'required',
            'name' => 'nullable',
            'music' => 'nullable',
            'venue' => 'nullable',
            'body_weight' => 'nullable',
            'calories_burned' => 'nullable',
            'length' => 'nullable',
            'notes' => 'nullable',
        ]);

        $workout = Workout::find($id);
        $workout->update($validated);

        return redirect('/workouts/' . $id);
    }

    public function destroy($id)
    {
        $workout = Workout::find($id);
        $workout->delete();

        return redirect('/workouts');
    }
}
