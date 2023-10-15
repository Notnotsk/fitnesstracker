<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function index()
    {
        $typeId = request('type_id');

        $exercises = Exercise::withCount('sets')
            ->when($typeId, function ($query, $typeId) {
                return $query->where('type_id', $typeId);
            })
            ->orderBy('name')
            ->paginate(8);

        $types = Type::all();

        return view('exercises.index', [
            'exercises' => $exercises,
            'types' => $types,
        ]);
    }

    public function create()
    {
        $muscles = Exercise::getMuscles();

        $types = Type::where('category', 'exercises')->get();

        return view('exercises.create', [
            'muscles' => $muscles,
            'types' => $types,
        ]);
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required',
            'muscles' => 'nullable|array',
            'size' => 'nullable',
            'type_id' => 'required|exists:types,id',
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
        $types = Type::all();

        return view('exercises.edit', [
            'exercise' => $exercise,
            'muscles' => $muscles,
            'types' => $types,
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
