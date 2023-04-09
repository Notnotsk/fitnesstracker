<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Exercise
        </h2>
    </x-slot>

    <x-container class="max-w-6xl mx-auto">
        <div class="overflow-hidden bg-white shadow sm:rounded-md p-5 border-t border-gray-200">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/exercises/{{ $exercise->id }}" method="post">
                @csrf
                @method('patch')
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-gray-200 sm:pt-5">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Name</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0">
                            <input type="text" name="name" id="date" value="{{ $exercise->name }}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="muscle" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Muscles</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                            <div class="space-y-5">
                                @foreach ($muscles as $muscle)
                                    <div class="relative flex items-start">
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
                    <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="size" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Exercise Size</label>
                        <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                            <select id="size" name="size" autocomplete="size" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option></option>
                                <option @selected($exercise->size === 'Small (isolation/small multi-jointed)')>Small (isolation/small multi-jointed)</option>
                                <option @selected($exercise->size === 'Medium (less complex multi-jointed)')>Medium (less complex multi-jointed)</option>
                                <option @selected($exercise->size === 'Large (complex multi-jointed)')>Large (complex multi-jointed)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="sm:pt-5">
            <div class="flex justify-end gap-x-3">
                <a href="/exercises" class="block rounded-md bg-white py-2 px-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Save</button>
            </div>
        </div>
    </x-container>
</x-app-layout>
