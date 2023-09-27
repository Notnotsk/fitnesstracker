<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Workouts
            </h2>
            <div class="inline-flex rounded-md shadow-sm isolate">
                <x-button href="/workouts/create" styles="indigo">
                    Create Workout
                </x-button>
            </div>
        </div>
    </x-slot>

    <x-container>
        <ul role="list"
            class="overflow-hidden bg-white divide-y divide-gray-100 shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
            @foreach ($workouts as $workout)
                <li class="relative flex justify-between px-4 py-5 gap-x-6 hover:bg-gray-50 sm:px-6">
                    <div class="flex min-w-0 gap-x-4">
                        <x-svg.user-circle class="flex-none w-12 h-12 bg-gray-400 rounded-full text-gray-50" />
                        <div class="flex-auto min-w-0">
                            <p class="text-sm font-semibold leading-6 text-gray-900">
                                <a href="/workouts/{{ $workout->id }}">
                                    <span class="absolute inset-x-0 bottom-0 -top-px"></span>
                                    {{ $workout->name ?? 'N/A' }}
                                </a>
                            </p>
                            <p class="flex mt-1 text-xs leading-5 text-gray-500">
                                <a href="mailto:leslie.alexander@example.com"
                                    class="relative truncate hover:underline">{{ $workout->type->name ?? 'N/A' }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center shrink-0 gap-x-4">
                        <div class="hidden sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm leading-6 text-gray-900">{{ $workout->venue ?? 'N/A' }}</p>
                            <p class="mt-1 text-xs leading-5 text-gray-500">{{ $workout->date->diffForHumans() }}
                            </p>
                        </div>
                        <x-svg.chevron-right class="flex-none w-5 h-5 text-gray-400" />
                    </div>
                </li>
            @endforeach
        </ul>
    </x-container>
    <div class="mt-4">
        {{ $workouts->links() }}
    </div>
</x-app-layout>
