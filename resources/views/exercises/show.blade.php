<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Exercise Information
            </h2>
            <div class="inline-flex rounded-md shadow-sm isolate">
                <x-button href="/exercises/{{ $exercise->id }}/edit" styles="indigo">
                    Edit Exercise
                </x-button>
            </div>
        </div>
    </x-slot>
    <x-container class="max-w-6xl mx-auto">
        <div>
            <dl class="divide-y divide-gray-200">
                @if ($exercise->name)
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:py-5">
                        <dt class="text-base font-semibold text-gray-800">Name</dt>
                        <dd class="flex mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <span class="flex-grow">{{ $exercise->name }}</span>
                            <span class="flex-shrink-0 ml-4">
                                <x-button type="button" styles="indigo"></x-button>
                            </span>
                        </dd>
                    </div>
                @endif
                @if (count($exercise->muscles))
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
                        <dt class="text-base font-semibold text-gray-800">Muscles</dt>
                        <dd class="flex mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            @foreach ($exercise->muscles as $muscle)
                                <span class="">{{ $muscle }}</span>,&nbsp;
                            @endforeach
                        </dd>
                    </div>
                @endif
                @if ($exercise->size)
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
                        <dt class="text-base font-semibold text-gray-800">Size</dt>
                        <dd class="flex mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <span class="flex-grow">{{ $exercise->size }}</span>
                            <span class="flex-shrink-0 ml-4">
                                <button type="button"
                                    class="font-medium text-indigo-600 bg-white rounded-md hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
                            </span>
                        </dd>
                    </div>
                @endif
            </dl>
        </div>
        <form action="/exercises/{{ $exercise->id }}" method="post" class="flex justify-end mt-4 gap-x-3">
            @csrf
            @method('delete')
            <input type="submit" value="Delete"
                class="inline-flex justify-center px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        </form>
    </x-container>
</x-app-layout>
