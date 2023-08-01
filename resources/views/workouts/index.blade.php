<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Workouts
            </h2>
            <div class="inline-flex rounded-md shadow-sm isolate">
                <x-button href="/workouts/create" styles="indigo" class="rounded-md hover:bg-indigo-500">
                    Create Workout
                </x-button>
            </div>
        </div>
    </x-slot>

    <x-container>
        <div class="py-4 mx-auto">
            @foreach ($workouts as $workout)
                <div class="my-2 overflow-hidden bg-white shadow sm:rounded-md">
                    <ul role="list" class="divide-y divide-gray-200">
                        <li>
                            <a href="/workouts/{{ $workout->id }}" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex-1 min-w-0 sm:flex sm:items-center sm:justify-between">
                                        <p>{{ $workout->name . ' - ' . $workout->date->toDayDateTimeString() }}</p>
                                    </div>
                                    <div class="flex-shrink-0 ml-5">
                                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
            <div class="mt-4">
                {{ $workouts->links() }}
            </div>
        </div>
    </x-container>
</x-app-layout>
