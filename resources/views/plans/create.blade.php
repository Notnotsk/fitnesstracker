<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Create Plan
        </h2>
    </x-slot>

    <x-container>
        <div class="space-y-12 sm:space-y-16">
            <div>
                <div class="space-y-8 border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:pb-0">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="title">Title</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input type="text" name="title" id="title" autocomplete="title" :value="old('title')" />
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="type">Type</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-select name="type_id" id="type" :value="old('type')">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </x-select>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="equipment">Equipment</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <select id="equipment" name="equipment" autocomplete="equipment" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option></option>
                                <option>Full Gym</option>
                                <option>Home Gym</option>
                                <option>Kettlebells</option>
                                <option>Bands</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="level">Level</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <select id="level" name="level" autocomplete="level" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option></option>
                                <option>Novice</option>
                                <option>Intermediate</option>
                                <option>Advanced</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="category">Duration</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <select id="duration" name="duration" autocomplete="duration" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option></option>
                                <option>2X/Week</option>
                                <option>3X/Week</option>
                                <option>4X/Week</option>
                                <option>5X/Week</option>
                                <option>6X/Week</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="description">Description</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <textarea id="description" name="description" rows="3" value="{{ old('description') }}" class="block w-full max-w-lg rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                            <p class="mt-2 text-sm text-gray-500">Write a few sentences about this plan.</p>
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
        </div>
    </x-container>
</x-app-layout>
