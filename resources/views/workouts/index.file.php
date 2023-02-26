<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Workouts
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @foreach ($workouts as $workout)
                {{$workout}}

        </div>
        </div>
    </div>
</x-app-layout>