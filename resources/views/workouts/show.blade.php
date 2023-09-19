<x-app-layout>
    <x-slot name="header">
        <h2 class="py-2 text-xl font-semibold leading-tight text-gray-800">
            Workout
        </h2>
    </x-slot>

    <x-container>
        <div class="overflow-hidden bg-white shadow sm:rounded-md">
            <div
                class="max-w-2xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-12 lg:gap-x-8 lg:px-8">
                <div class="lg:col-span-4">
                    <div>
                        <h3 class="sr-only">Workout information</h3>
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Name</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $workout->name ?? 'N/A' }}</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Music</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $workout->music ?? 'N/A' }}</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Venue</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $workout->venue ?? 'N/A' }}</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Body Weight</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $workout->body_weight ?? 'N/A' }}</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Calories Burned</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $workout->calories_burned ?? 'N/A' }}</dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Length</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $workout->length ?? 'N/A' }}</dd>
                            </div>
                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">Notes</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $workout->notes ?? 'N/A' }}</dd>
                            </div>
                        </dl>
                    </div>
                    <div class="mt-10">
                        <h3 class="text-lg font-medium text-gray-900">Make an update</h3>
                        <p class="mt-1 text-sm text-gray-600">If you’ve had a change in this workout, edit your workout.
                        </p>
                        <a href="/workouts/{{ $workout->id }}/edit"
                            class="inline-flex items-center justify-center w-full px-8 py-2 mt-6 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-md hover:bg-gray-50 sm:w-auto lg:w-full">Edit
                            workout</a>
                    </div>
                    <div class="mt-10">
                        <h3 class="text-lg font-medium text-gray-900">Delete workout</h3>
                        <p class="mt-1 text-sm text-gray-600">If you’ve made a mistake, go ahead and start over.</p>
                        <form action="/workouts/{{ $workout->id }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"
                                class="inline-flex items-center justify-center w-full px-8 py-2 mt-6 text-sm font-medium text-red-600 bg-white border border-red-300 rounded-md cursor-pointer hover:bg-red-50 sm:w-auto lg:w-full">
                        </form>
                    </div>
                </div>
                <div class="mt-16 lg:col-span-7 lg:col-start-6 lg:mt-0" x-data="{ ratings: Array({{ $workout->exercises->count() }}).fill(0) }">
                    <h3 class="sr-only">Exercises</h3>
                    <div class="flow-root">
                        <div class="-my-12 divide-y divide-gray-200">
                            @foreach ($workout->exercises as $i => $exercise)
                                <div class="py-12">
                                    <div class="flex items-center">
                                        <span
                                            class="inline-flex items-center justify-center w-12 h-12 bg-gray-500 rounded-full">
                                            <span
                                                class="text-lg font-medium leading-none text-white">{{ $i + 1 }}</span>
                                        </span>
                                        <div class="ml-4">
                                            <h4 class="text-sm font-bold text-gray-900">{{ $exercise->name }}</h4>
                                        </div>
                                    </div>
                                    <div class="mt-4 space-y-6 text-base italic text-gray-600">
                                        <p>{{ $exercise->pivot->notes }}</p>
                                    </div>
                                    <div class="mt-4">
                                        <span class="inline-flex rounded-md shadow-sm isolate">
                                            @foreach ($exercise->sets as $i => $set)
                                                <a href="/sets/{{ $set->id }}/edit" @class([
                                                    'relative bg-white text-sm font-medium text-center text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10',
                                                    'rounded-l-md' => $loop->first,
                                                    '-ml-px' => !$loop->first,
                                                ])>
                                                    <h3 class="pt-1 text-xs font-bold text-gray-400 uppercase">Set
                                                        {{ $i + 1 }}</h3>
                                                    <p class="px-3 py-1">{{ $set->weight }} x {{ $set->reps }}</p>
                                                </a>
                                            @endforeach
                                            <a href="/sets/create?exercise_id={{ $exercise->id }}&workout_id={{ $workout->id }}"
                                                class="relative inline-flex items-center px-3 py-2 -ml-px text-sm font-medium text-gray-900 bg-white rounded-r-md ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Add
                                                Set</a>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                            <div class="py-12">
                                <div class="flex items-center">
                                    <div>
                                        <svg class="w-12 h-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path vector-effect="non-scaling-stroke" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="mt-2 text-sm font-bold text-gray-900">Add exercise</h3>
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ $workout->exercises->count() ? 'Keep going' : 'Get started' }} by adding
                                            a
                                            new exercise to the workout.</p>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <a href="/workouts/{{ $workout->id }}/exercises/create"
                                        class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-gray-900 bg-white rounded-md ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Add
                                        Exercise</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</x-app-layout>
