<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sets
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
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
                <label for="weight" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Weight</label>
                <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                <input type="integer" name="weight" id="weight" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                </div>
            </div> 
            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="reps" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Reps</label>
                <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                <input type="integer" name="reps" id="reps" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
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
</x-app-layout>

