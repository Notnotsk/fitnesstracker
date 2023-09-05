<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Exercises
            </h2>
            <x-button href="/exercises/create" styles="indigo">
                Create Exercise
            </x-button>
        </div>
    </x-slot>

    <x-container>
        <div class="py-4 mx-auto">
            @foreach ($exercises as $exercise)
                <div class="my-2 overflow-hidden bg-white shadow sm:rounded-md">
                    <ul role="list" class="divide-y divide-gray-200">
                        <li>
                            <a href="/exercises/{{ $exercise->id }}" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex-1 min-w-0 sm:flex sm:items-center sm:justify-between">
                                        <p>{{ $exercise->name }}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
            <div class="mt-4">
                {{ $exercises->links() }}
            </div>
        </div>
    </x-container>
</x-app-layout>
