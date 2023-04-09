<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Exercise
        </h2>
    </x-slot>
    
    <x-container>
        <div class="mx-auto py-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/exercises" method="post">
                @csrf
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-gray-200 sm:pt-5">
                    <x-label for="name">Name</x-label> 
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                    <input type="text" name="name" id="name" autocomplete="name" value="{{ old('name')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    </div>
                </div> 
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <x-label for="muscle">Muscles</x-label> 
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <div class="space-y-5">
                            @foreach ($muscles as $muscle)
                                <div class="relative flex items-start">
                                    <div class="flex h-6 items-center">
                                        <input id="muscles[]" name="muscles[]" type="checkbox" value="{{ $muscle }}" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
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
                    <x-label for="size">Exercise Size</x-label> 
                    <div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
                        <select id="size" name="size" autocomplete="size" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option></option>
                            <option>Small (isolation/small multi-jointed)</option>
                            <option>Medium (less complex multi-jointed)</option>
                            <option>Large (complex multi-jointed)</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="sm:pt-5">
            <div class="flex justify-end gap-x-3">
                <x-button href="/exercises" class="rounded-md hover:bg-gray-50">
                    Cancel
                </x-button>
                <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline--400">
                    Create</button>
            </div>
        </div>
    </x-container>
</x-app-layout>
