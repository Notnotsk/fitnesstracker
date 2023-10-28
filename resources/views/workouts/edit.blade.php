<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Edit Workout
        </h2>
    </x-slot>

    <x-container>
        <div class="space-y-12 sm:space-y-16">
            <x-validation-errors />
            <form action="/workouts/{{ $workout->id }}" method="post">
                @csrf
                @method('patch')
                <div>
                    <div class="space-y-8 border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:pb-0">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="type">Type</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-select name="type_id" id="type" :value="old('type', $workout->type_id)">
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @selected(old('type', $workout->type_id) == $type->id)>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </x-select>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="date">Date</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-input type="datetime-local" name="date" id="date" :value="old('date', $workout->date)" />
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="length">Length</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-input type="number" name="length" id="length" autocomplete="length" :value="old('length', $workout->length)" placeholder="minutes" />
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="name">Name</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-input type="text" name="name" id="name" autocomplete="name" :value="old('name', $workout->name)" placeholder="Routine/Week/Day" />
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="venue">Venue</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-input type="text" name="venue" id="venue" autocomplete="venue" :value="old('venue', $workout->venue)" />
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="body_weight">Body Weight</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-input type="number" name="body_weight" id="body_weight" autocomplete="body_weight" :value="old('body_weight', $workout->body_weight)" placeholder="lbs" />
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="calories_burned">Calories Burned</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-input type="number" name="calories_burned" id="calories_burned" autocomplete="calories_burned" :value="old('calories_burned', $workout->calories_burned)" />
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="music">Music</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-input type="text" name="music" id="music" autocomplete="music" :value="old('music', $workout->music)" />
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label for="notes">Notes</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <textarea id="notes" name="notes" rows="3" class="block w-full max-w-lg rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6">{{ $workout->notes }}</textarea>
                                <p class="mt-2 text-sm text-gray-500">Write a few sentences about your workout.</p>
                            </div>
                        </div>

                        <div class="sm:pt-5">
                            <div class="flex justify-end gap-x-3">
                                <x-button a href="/workouts">
                                    Cancel
                                </x-button>
                                <x-button type="submit" styles="indigo">
                                    Save</x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </x-container>
</x-app-layout>
