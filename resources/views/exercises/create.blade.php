<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Create Exercise
        </h2>
    </x-slot>

    <x-container>
        <div class="py-4 mx-auto">
            <x-validation-errors />
            <form action="/exercises" method="post">
                @csrf
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-gray-200 sm:pb-5">
                    <x-label for="type">Type</x-label>
                    <div class="mt-2 sm:col-span-2 sm:mt-0">
                        <x-select name="type_id" id="type" :value="old('type')">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:border-t sm:gap-4 sm:border-gray-200 sm:pt-5">
                    <x-label for="name">Name</x-label>
                    <div class="mt-2 mb-4 sm:col-span-2 sm:mt-0">
                        <x-input type="text" name="name" id="name" autocomplete="name" :value="old('name')" />
                    </div>
                </div>
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <x-label for="muscle">Muscles</x-label>
                    <div class="mt-2 mb-4 sm:col-span-2 sm:mt-0">
                        <div class="space-y-5">
                            @foreach ($muscles as $muscle)
                                <div class="relative flex center">
                                    <div class="flex items-center h-6">
                                        <input id="muscles[]" name="muscles[]" type="checkbox"
                                            value="{{ $muscle }}"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-600">
                                    </div>
                                    <div class="ml-3 text-sm leading-6">
                                        <label for="muscles[]"
                                            class="font-medium text-gray-900">{{ $muscle }}</label>
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
                            <option>Small (isolation/small multi-jointed)</option>
                            <option>Medium (less complex multi-jointed)</option>
                            <option>Large (complex multi-jointed)</option>
                        </select>
                    </div>
                </div>
                <div class="sm:pt-5">
                    <div class="flex justify-end gap-x-3">
                        <x-button href="/exercises">
                            Cancel
                        </x-button>
                        <x-button type="submit" styles="indigo"
                            class="inline-flex justify-center px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline--400">
                            Create</x-button>
                    </div>
                </div>
            </form>
        </div>
    </x-container>
</x-app-layout>
