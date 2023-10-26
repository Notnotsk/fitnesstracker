<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Type;

class PlanController extends Controller
{
    public function index()
    {
        $typeId = request('type_id');

        $plans = Plan::with('type')
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
            'title' => 'required',
            'type_id' => 'required|exists:types,id',
            'equipment' => 'nullable',
            'level' => 'nullable',
            'duration' => 'nullable',
            'description' => 'nullable',
        ]);

        $validated['created_by'] = auth()->user()->id;

        Plan::create($validated);

        return redirect('/plans');
    }

    public function show($id)
    {
        $plan = Plan::with(['exercises.sets' => function ($query) use ($id) {
            $query->where('plan_id', $id);
        }])->find($id);

        return view('plans.show', [
            'plan' => $plan,
        ]);
    }

    public function edit($id)
    {
        $plan = Plan::find($id);
        $types = Type::where('category', 'plans')->get();

        return view('plans.edit', [
            'plan' => $plan,
            'types' => $types,
        ]);
    }

    public function update($id)
    {
        $validated = request()->validate([
            'title' => 'required',
            'type_id' => 'required|exists:types,id',
            'equipment' => 'nullable',
            'level' => 'nullable',
            'duration' => 'nullable',
            'description' => 'nullable',
        ]);

        $plan = Plan::find($id);
        $plan->update($validated);

        return redirect('/plans/' . $id);
    }

    public function destroy($id)
    {
        $plan = Plan::find($id);
        $plan->delete();

        return redirect('/plans');
    }
}
