<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Edit Set
        </h2>
    </x-slot>

    <x-container>
        <div class="py-4 mx-auto">
            <x-validation-errors />
            <form action="/sets/{{ $set->id }}" method="post">
                @csrf
                @method('patch')
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <x-label for="weight">Weight</x-label>
                    <div class="mt-2 mb-4 sm:col-span-2 sm:mt-0">
                        <x-input type="integer" name="weight" id="weight" :value="old('weight', $set->weight)" />
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <x-label for="reps">Reps</x-label>
                    <div class="mt-2 mb-4 sm:col-span-2 sm:mt-0">
                        <x-input type="integer" name="reps" id="reps" :value="old('reps', $set->reps)" />
                    </div>
                </div>
                <div class="sm:pt-5">
                    <div class="flex justify-end gap-x-3">
                        <a href="/workouts"
                            class="block px-3 py-2 text-sm font-semibold text-gray-900 bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            Cancel
                        </a>
                        <x-button type="submit" styles="indigo">
                            Save</x-button>
                    </div>
                </div>
            </form>
        </div>
    </x-container>
</x-app-layout>
