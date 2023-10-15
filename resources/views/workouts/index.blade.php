<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Workouts
            </h2>
            <div class="isolate inline-flex rounded-md shadow-sm">
                <x-button href="/workouts/create" styles="indigo">
                    Create Workout
                </x-button>
            </div>
        </div>
    </x-slot>

    <x-container>
        <x-select x-data="{ typeId: '{{ request('type_id') }}' }" @change="window.location.href = $event.target.value ? '/workouts?type_id=' + $event.target.value : '/workouts'" class="mb-4">
            <option value="">All Types</option>
            @foreach ($types as $type)
                <option :selected="typeId == '{{ $type->id }}'" value="{{ $type->id }}">{{ $type->name }}
                </option>
            @endforeach
        </x-select>

        <ul role="list" class="divide-y divide-gray-100 overflow-hidden bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
            @if ($workouts->count())
                @foreach ($workouts as $workout)
                    <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6">
                        <div class="flex min-w-0 gap-x-4">
                            <x-svg.user-circle class="h-12 w-12 flex-none rounded-full bg-gray-400 text-gray-50" />
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">
                                    <a href="/workouts/{{ $workout->id }}">
                                        <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                        {{ $workout->name ?? 'N/A' }}
                                    </a>
                                </p>
                                <p class="mt-1 flex text-xs leading-5 text-gray-500">
                                    <a href="mailto:leslie.alexander@example.com" class="relative truncate hover:underline">{{ $workout->type->name ?? 'N/A' }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="flex shrink-0 items-center gap-x-4">
                            <div class="hidden sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900">{{ $workout->venue ?? 'N/A' }}</p>
                                <p class="mt-1 text-xs leading-5 text-gray-500">{{ $workout->date->diffForHumans() }}
                                </p>
                            </div>
                            <x-svg.chevron-right class="h-5 w-5 flex-none text-gray-400" />
                        </div>
                    </li>
                @endforeach
            @else
                <li class="flex items-center justify-center py-5">
                    <div class="text-center">
                        <x-svg.user-circle class="mx-auto h-12 w-12 rounded-full bg-gray-400 text-gray-50" />
                        <h3 class="mt-2 text-sm font-semibold text-gray-900">No workouts</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by creating a workout.</p>
                    </div>
                </li>
            @endif
        </ul>
    </x-container>
    <div class="mt-4">
        {{ $workouts->links() }}
    </div>
</x-app-layout>
