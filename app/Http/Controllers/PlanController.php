<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Type;

class PlanController extends Controller
{
    public function index()
    {
        $typeId = request('type_id');

        $plans = Plan::auery()
            ->with('type')
            ->when($typeId, function ($query, $typeId) {
                return $query->where('type_id', $typeId);
            })
            ->paginate(8);

        $types = Type::where('category', 'plans')->get();

        return view('plans.index', [
            'plans' => $plans,
            'types' => $types,
        ]);
    }

    public function create()
    {
        $types = Type::where('category', 'plans')->get();

        return view('plans.create', [
            'types' => $types,
        ]);
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => 'required|max:255',
            'type_id' => 'required|exists:types,id',
            'equipment' => 'nullable|max:255',
            'level' => 'nullable',
            'duration' => 'nullable|max:255',
            'description' => 'nullable|max:1000',
        ]);

        $validated['created_by'] = auth()->user()->id;

        Plan::create($validated);

        return redirect('/plans');
    }

    public function show(Plan $plan)
    {
        $plan->load(['exercises.sets' => function ($query) use ($plan) {
            $query->where('plan_id', $plan->id);
        }]);

        return view('plans.show', [
            'plan' => $plan,
        ]);
    }

    public function edit(Plan $plan)
    {
        $types = Type::where('category', 'plans')->get();

        return view('plans.edit', [
            'plan' => $plan,
            'types' => $types,
        ]);
    }

    public function update(Plan $plan)
    {
        $validated = request()->validate([
            'title' => 'required|max:255',
            'type_id' => 'required|exists:types,id',
            'equipment' => 'nullable|max:255',
            'level' => 'nullable',
            'duration' => 'nullable|max:255',
            'description' => 'nullable|max:1000',
        ]);

        $plan->update($validated);

        return redirect('/plans/' . $plan->id);
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect('/plans');
    }
}
