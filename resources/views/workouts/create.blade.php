<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Create Workout
        </h2>
    </x-slot>
    <x-container>
        <div class="space-y-12 sm:space-y-16">
            <x-validation-errors />
            <form action="/workouts" method="post">
                @csrf
                <div class="pb-12 space-y-8 border-gray-900/10 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:pb-0">
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
                        <x-label class="sm:pt-1.5" for="date">Date</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input type="datetime-local" name="date" id="date" :value="old('date') ?? now()->format('Y-m-d\TH:i')" />
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="name">Name</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input type="text" name="name" id="name" autocomplete="name" :value="old('name')"
                                placeholder="Routine/Week/Day" />
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="venue">Venue</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input type="text" name="venue" id="venue" autocomplete="venue"
                                :value="old('venue')" />
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label class="sm:pt-1.5" for="body_weight">Body Weight</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input type="text" name="body_weight" id="body_weight" autocomplete="body_weight"
                                :value="old('body_weight')" placeholder="lbs" />
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                        <x-label for="preworkout_notes">Preworkout Notes</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-textarea id="preworkout_notes" name="preworkout_notes" rows="3"
                                :value="old('preworkout_notes')"></x-textarea>
                        </div>
                    </div>
                    <div class="sm:pt-5">
                        <div class="flex justify-end gap-x-3">
                            <x-button a href="/workouts">
                                Cancel
                            </x-button>
                            <x-button type="submit" styles="indigo">
                                Save
                            </x-button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </x-container>
</x-app-layout>
