<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Edit Exercise
        </h2>
    </x-slot>

    <x-container>
        <div class="space-y-12 sm:space-y-16">
            <x-validation-errors />
            <form action="/exercises/{{ $exercise->id }}" method="post">
                @csrf
                @method('patch')
                <div>
                    <div class="space-y-8 border-gray-900/10 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-900/10 sm:pb-0">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="type">Type</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-select name="type_id" id="type" :value="old('type_id')">
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @selected(old('type_id', $exercise->type_id) == $type->id)>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </x-select>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="name">Name</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <x-input type="text" name="name" id="name" autocomplete="name" :value="old('name', $exercise->name)" />
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="muscle">Muscles</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <div class="space-y-5">
                                    @foreach ($muscles as $muscle)
                                        <div class="center relative flex">
                                            <div class="flex h-6 items-center">
                                                <input @checked(in_array($muscle, $exercise->muscles)) id="muscles[]" name="muscles[]" type="checkbox" value="{{ $muscle }}" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            </div>
                                            <div class="ml-3 text-sm leading-6">
                                                <label for="muscles[]" class="font-medium text-gray-900">{{ $muscle }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                            <x-label class="sm:pt-1.5" for="size">Exercise Size</x-label>
                            <div class="mt-2 sm:col-span-2 sm:mt-0">
                                <select id="size" name="size" autocomplete="size" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option></option>
                                    <option @selected(old('size', $exercise->size) == 'Small (isolation/small multi-jointed)')>Small (isolation/small multi-jointed)</option>
                                    <option @selected(old('size', $exercise->size) == 'Medium (less complex multi-jointed)')>Medium (less complex multi-jointed)</option>
                                    <option @selected(old('size', $exercise->size) == 'Large (complex multi-jointed)')>Large (complex multi-jointed)</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:pt-5">
                            <div class="flex justify-end gap-x-3">
                                <x-button a href="/exercises">
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
