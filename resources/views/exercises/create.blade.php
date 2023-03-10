<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Exercises
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
        <form action="/exercises" method="post">
            @csrf
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Name</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                    <input type="text" name="name" id="name" autocomplete="name" value="{{ old('name')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="equipment" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Equipment</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <select id="equipment" name="equipment" autocomplete="equipment" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option></option>
                            <option>Bands</option>
                            <option>Barbells</option>
                            <option>Bodyweight</option>
                            <option>Cable</option>
                            <option>Dumbbells</option>
                            <option>Kettlebells</option>
                            <option>Machine</option>
                            <option>Other</option>
                        </select>
                    </div> 
                </div>       
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="muscle" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Muscle</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <select id="muscle" name="muscle" autocomplete="muscle" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option></option>
                            <option>Abductors</option>
                            <option>Abs</option>
                            <option>Adductors</option>
                            <option>Biceps</option>
                            <option>Calves</option>
                            <option>Chest</option>
                            <option>Forearms</option>
                            <option>Front Delts</option>
                            <option>Glutes</option>
                            <option>Hams</option>
                            <option>Lats</option>
                            <option>Lower Back</option>
                            <option>Quads</option>
                            <option>Rear Delts</option>
                            <option>Side Delts</option>
                            <option>Traps</option>
                            <option>Triceps</option>
                            <option>Upper Back</option>
                        </select>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="size" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Exercise Size</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <select id="size" name="size" autocomplete="size" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option></option>
                            <option>Isolation/Small Multi-jointed</option>
                            <option>Less Complex Multi-jointed</option>
                            <option>Complex Multi-jointed</option>
                        </select>
                    </div>
                </div>
                <div class="sm:pt-5">
                    <div class="flex justify-end gap-x-3">
                        <a href="/exercises" class="block rounded-md bg-white py-2 px-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            Cancel
                        </a>
                        <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Create</button>
                    </div>
                </div>
        </form>
    </div>
</x-app-layout>
