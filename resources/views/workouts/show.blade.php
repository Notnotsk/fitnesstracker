<x-app-layout>
<x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Workout
            </h2>
            <div class="isolate inline-flex rounded-md shadow-sm">
                <a href="/workouts/{{ $workout->id }}/edit" class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                    Edit Workout
                </a>
            </div>
        </div>
    </x-slot>

    <div>
        <h2>Date</h2>
        <p>{{ $workout->date }}</p>
    </div>
    @if ($workout->name)
        <div>
            <h2>Name</h2>
            <p>{{ $workout->name }}</p>
        </div>
    @endif
    @if ($workout->venue)
        <div>
            <h2>Venue</h2>
            <p>{{ $workout->venue }}</p>
        </div>
    @endif
    @if ($workout->music)
        <div>
            <h2>Music</h2>
            <p>{{ $workout->music }}</p>
        </div>
    @endif
    @if ($workout->calories_burned)
        <div>
            <h2>calories_burned</h2>
            <p>{{ $workout->calories_burned }}</p>
        </div>
    @endif
    @if ($workout->body_weight)
        <div>
            <h2>body_weight</h2>
            <p>{{ $workout->body_weight }}</p>
        </div>
    @endif
    @if ($workout->length)
        <div>
            <h2>length</h2>
            <p>{{ $workout->length }}</p>
        </div>
    @endif
    @if ($workout->notes)
        <div>
            <h2>notes</h2>
            <p>{{ $workout->notes }}</p>
        </div>
    @endif

    <hr>

    <h3>Exercises</h3>
    <a href="/exercises/create?workout_id=1">
        Add Exercise
    </a>
</x-app-layout>    