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
          <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">First name</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Last name</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Email address</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Country</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <select id="country" name="country" autocomplete="country-name" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Street address</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="city" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">City</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="region" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">State / Province</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">ZIP / Postal code</label>
          <div class="mt-2 sm:col-span-2 sm:mt-0">
            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
        </div>
      </div>
    </div>

    <div class="space-y-6 divide-y divide-gray-200 pt-8 sm:space-y-5 sm:pt-10">
      <div>
        <h3 class="text-base font-semibold leading-6 text-gray-900">Notifications</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">We'll always let you know about important changes, but you pick what else you want to hear about.</p>
      </div>
      <div class="space-y-6 divide-y divide-gray-200 sm:space-y-5">
        <div class="pt-6 sm:pt-5">
          <div role="group" aria-labelledby="label-email">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4">
              <div>
                <div class="text-sm font-semibold leading-6 text-gray-900" id="label-email">By Email</div>
              </div>
              <div class="mt-4 sm:col-span-2 sm:mt-0">
                <div class="max-w-lg space-y-4">
                  <div class="relative flex items-start">
                    <div class="flex h-6 items-center">
                      <input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="ml-3">
                      <label for="comments" class="text-sm font-medium leading-6 text-gray-900">Comments</label>
                      <p class="text-sm text-gray-500">Get notified when someones posts a comment on a posting.</p>
                    </div>
                  </div>
                  <div class="relative flex items-start">
                    <div class="flex h-6 items-center">
                      <input id="candidates" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="ml-3">
                      <label for="candidates" class="text-sm font-medium leading-6 text-gray-900">Candidates</label>
                      <p class="text-sm text-gray-500">Get notified when a candidate applies for a job.</p>
                    </div>
                  </div>
                  <div class="relative flex items-start">
                    <div class="flex h-6 items-center">
                      <input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <div class="ml-3">
                      <label for="offers" class="text-sm font-medium leading-6 text-gray-900">Offers</label>
                      <p class="text-sm text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-6 sm:pt-5">
          <div role="group" aria-labelledby="label-notifications">
            <div class="sm:grid sm:grid-cols-3 sm:items-baseline sm:gap-4">
              <div>
                <div class="text-sm font-semibold leading-6 text-gray-900" id="label-notifications">Push Notifications</div>
              </div>
              <div class="sm:col-span-2">
                <div class="max-w-lg">
                  <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                  <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                      <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      <label for="push-everything" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Everything</label>
                    </div>
                    <div class="flex items-center">
                      <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      <label for="push-email" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Same as email</label>
                    </div>
                    <div class="flex items-center">
                      <input id="push-nothing" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                      <label for="push-nothing" class="ml-3 block text-sm font-medium leading-6 text-gray-900">No push notifications</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-5">
    <div class="flex justify-end gap-x-3">
      <button type="button" class="rounded-md bg-white py-2 px-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Cancel</button>
      <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
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
