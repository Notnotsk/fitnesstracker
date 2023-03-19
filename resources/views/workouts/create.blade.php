<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Workouts
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
        <form action="/workouts" method="post">
            @csrf
            <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="date" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Date</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0">
                        <input type="datetime-local" name="date" id="date" value="{{ old('date')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="length" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Length</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4"> 
                        <input type="number" name="length" id="length" autocomplete="length" value="{{ old('length')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" placeholder="minutes">
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                        </div>
                    </div>
                </div>
            </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Name</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                    <input type="text" name="name" id="name" autocomplete="name" value="{{ old('name')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" placeholder="Routine/Week/Day">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="venue" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Venue</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                    <input type="text" name="venue" id="venue" autocomplete="venue" value="{{ old('venue')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="body_weight" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Body Weight</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                    <input type="number" name="body_weight" id="body_weight" autocomplete="body_weight" value="{{ old('body_weight')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" placeholder="lbs">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="calories_burned" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Calories Burned</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <input type="number" name="calories_burned" id="calories_burned" autocomplete="calories_burned" value="{{ old('calories_burned')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="music" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Music</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <input type="text" name="music" id="music" autocomplete="music" value="{{ old('music')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="notes" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Notes</label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0">
                        <textarea id="notes" name="notes" rows="3" value="{{ old('notes')}}" class="block w-full max-w-lg rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                        <p class="mt-2 text-sm text-gray-500">Write a few sentences about your workout.</p>
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
            </div>
        </form>
    </div>
</x-app-layout>
