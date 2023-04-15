<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Set
        </h2>
    </x-slot>
    
    <x-container>
        <div class="mx-auto py-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/sets/{{ $set->id }}" method="post">
                @csrf
                @method('patch')
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <x-label for="weight">Weight</x-label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <x-input type="integer" name="weight" id="weight" value="{{ $set->weight }}" />
                    </div>
                </div> 
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <x-label for="reps">Reps</x-label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <x-input type="integer" name="reps" id="reps" value="{{ $set->reps }}" />
                    </div>
                </div> 
                <div class="sm:pt-5">
                    <div class="flex justify-end gap-x-3">
                        <a href="/workouts" class="block rounded-md bg-white py-2 px-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            Cancel
                        </a>
                        <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Save</button>
                    </div>
                </div>
            </form>
        </div>
    </x-container>
</x-app-layout>


