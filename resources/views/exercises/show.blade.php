<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Exercise Information
            </h2>
            <div class="isolate inline-flex gap-x-3 rounded-md shadow-sm">
                <form action="/exercises/{{ $exercise->id }}" method="post">
                    @csrf
                    @method('delete')
                    <x-button type="submit" value="Delete" class="text-red-600">Delete</x-button>
                </form>
                <x-button href="/exercises/{{ $exercise->id }}/edit" styles="indigo">
                    Edit Exercise
                </x-button>
            </div>
        </div>
    </x-slot>
    <x-container>
        <div class="mx-auto py-4">
            <dl class="divide-y divide-gray-200">
                @if ($exercise->name)
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
                        <dt class="text-base font-semibold text-gray-800">Name</dt>
                        <dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <span class="flex-grow">{{ $exercise->name }}</span>
                            <span class="ml-4 flex-shrink-0">
                            </span>
                        </dd>
                    </div>
                @endif
                @if (count($exercise->muscles))
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
                        <dt class="text-base font-semibold text-gray-800">Muscles</dt>
                        <dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            @foreach ($exercise->muscles as $muscle)
                                <span class="">{{ $muscle }}</span>,&nbsp;
                            @endforeach
                        </dd>
                    </div>
                @endif
                @if ($exercise->size)
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
                        <dt class="text-base font-semibold text-gray-800">Size</dt>
                        <dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <span class="flex-grow">{{ $exercise->size }}</span>
                            <span class="ml-4 flex-shrink-0">
                                <button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
                            </span>
                        </dd>
                    </div>
                @endif
            </dl>
        </div>
    </x-container>
</x-app-layout>
