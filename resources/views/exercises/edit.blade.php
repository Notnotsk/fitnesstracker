<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Edit Exercise
        </h2>
    </x-slot>

    <x-container class="max-w-7xl mx-auto">
        <div class="p-5 overflow-hidden bg-white border-t border-gray-200 shadow sm:rounded-md">
            <x-validation-errors />
            <form action="/exercises/{{ $exercise->id }}" method="post">
                @csrf
                @method('patch')
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-gray-200 sm:pt-5">
                        <x-label for="name">Name</x-label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <x-input type="text" name="name" id="date" :value="old('name', $exercise->name)" />
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <x-label for="muscle">Muscles</x-label>
                        <div class="mt-2 mb-4 sm:col-span-2 sm:mt-0">
                            <div class="space-y-5">
                                @foreach ($muscles as $muscle)
                                    <div class="relative flex items-start">
                                        <div class="flex items-center h-6">
                                            <input @checked(in_array($muscle, $exercise->muscles)) id="muscles[]" name="muscles[]"
                                                type="checkbox" value="{{ $muscle }}"
                                                class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-600">
                                        </div>
                                        <div class="ml-3 text-sm leading-6">
                                            <x-label for="muscles[]"
                                                class="font-medium text-gray-900">{{ $muscle }}</x-label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <x-label for="size">Exercise Size</x-label>
                        <div class="mt-2 mb-4 sm:col-span-2 sm:mt-0">
                            <select id="size" name="size" autocomplete="size"
                                class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option></option>
                                <option @selected(old('size', $exercise->size) == 'Small (isolation/small multi-jointed)')>Small (isolation/small multi-jointed)</option>
                                <option @selected(old('size', $exercise->size) == 'Medium (less complex multi-jointed)')>Medium (less complex multi-jointed)</option>
                                <option @selected(old('size', $exercise->size) == 'Large (complex multi-jointed)')>Large (complex multi-jointed)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="sm:pt-5">
            <div class="flex justify-end gap-x-3">
                <a href="/exercises"
                    class="block px-3 py-2 text-sm font-semibold text-gray-900 bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    Cancel
                </a>
                <x-button type="submit" styles="indigo">
                    Save</x-button>
            </div>
        </div>
    </x-container>
</x-app-layout>
