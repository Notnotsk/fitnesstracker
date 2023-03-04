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
            <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
      <div class="space-y-6 sm:space-y-5">
        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Date</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="datetime-local" name="date" id="date" value="{{ old('date')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Length</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0"> 
            <input type="number" name="length" id="length" autocomplete="length" value="{{ old('length')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"> minutes 
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Week/Day</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input id="week_day" name="week_day" type="text" autocomplete="week_day" value="{{ old('week_day')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Venue</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <select id="venue" name="venue" autocomplete="venue" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Gym</option>
              <option>Home</option>
              <option>Away</option>
            </select>
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Body Weight</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="number" name="body_weight" id="body_weight" autocomplete="body_weight" value="{{ old('body_weight')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> lbs
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="city" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Calories Burned</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="number" name="calories_burned" id="calories_burned" autocomplete="calories_burned" value="{{ old('calories_burned')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="region" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Music</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="text" name="music" id="music" autocomplete="music" value="{{ old('music')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Notes</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <textarea id="notes" name="notes" rows="3" value="{{ old('notes')}}" class="block w-full max-w-lg rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
            <p class="mt-2 text-sm text-gray-500">Write a few sentences about your workout.</p>
          </div>
          <a href="/workouts">
                <span class="isolate inline-flex rounded-md shadow-sm">
                <button type="button" input type="submit" value=create class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Create</button>
            </span>
            </a>
        </div>
      </div>
    </div>

</form>

            <div>
                <label>Date</label>
                <input type="datetime-local" name="date" value="{{ old('date')}}">
            </div>
            <div>
                <label>Venue</label>
                <input type="text" name="venue" value="{{ old('venue')}}">
            </div>
            <div>
                <label>Length</label>
                <input type="number" name="length" value="{{ old('length')}}">
            </div>
            <div>
                <label>Music</label>
                <input type="text" name="music" value="{{ old('music')}}">
            </div>
            <div>
                <label>Body Weight</label>
                <input type="number" name="body_weight" value="{{ old('body_weight')}}">
            </div>
            <div>
                <label>Calories Burned</label>
                <input type="number" name="calories_burned" value="{{ old('calories_burned')}}">
            </div>
            <div>
                <label>Notes</label>
                <textarea name="notes" cols="30" rows="10">{{ old('notes')}}
                </textarea>
            </div>
            <div>
                <input type="submit" value="Create">
            </div>
        </form>
    </div>
</x-app-layout>

