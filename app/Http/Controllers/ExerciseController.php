<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Type;

class ExerciseController extends Controller
{
    public function index()
    {
        $typeId = request('type_id');

        $exercises = Exercise::query()
            ->withCount('sets')
            ->when($typeId, function ($query, $typeId) {
                return $query->where('type_id', $typeId);
            })
            ->orderBy('name')
            ->paginate(8);

        $types = Type::where('category', 'exercises')->get();

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
            'name' => 'required|max:255',
            'muscles' => 'nullable|array',
            'muscles.*' => 'integer|exists:muscles,id',
            'size' => 'nullable',
            'type_id' => 'required|exists:types,id',
        ]);

        Exercise::create($validated);

        return redirect('/exercises');
    }

    public function show(Exercise $exercise)
    {
        return view('exercises.show', [
            'exercise' => $exercise,
        ]);
    }

    public function edit(Exercise $exercise)
    {
        $muscles = $exercise->getMuscles();
        $types = Type::where('category', 'exercises')->get();

        return view('exercises.edit', [
            'exercise' => $exercise,
            'muscles' => $muscles,
            'types' => $types,
        ]);
    }

    public function update(Exercise $exercise)
    {
        $validated = request()->validate([
            'name' => 'required|max:255',
            'muscles' => 'nullable|array',
            'muscles.*' => 'integer|exists:muscles,id',
            'size' => 'nullable',
            'type_id' => 'required|exists:types,id',
        ]);

        $exercise->update($validated);

        return redirect('/exercises/' . $exercise->id);
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        return redirect('/exercises');
    }
}
