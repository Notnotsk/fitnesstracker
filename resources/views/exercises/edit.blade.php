<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Exercises
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/exercises/{{ $exercises->id }}" method="post">
            @csrf
            @method('patch')
            <div class="mt-0 p-5 border-t border-gray-200">
                <dl class="divide-y divide-gray-200">
                    @if ($exercises->name)
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
                            <dt class="text-sm font-medium text-gray-500">Name</dt>
                            <dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <span class="flex-grow">{{ $exercises->name }}</span>
                                <span class="ml-4 flex-shrink-0">
                                    <button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
                                </span>
                            </dd>
                        </div>
                    @endif
                </dl>
            </div>
            <div class="mt-0 p-5 border-t border-gray-200">
                <dl class="divide-y divide-gray-200">
                    @if ($exercises->muscles)
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
                            <dt class="text-sm font-medium text-gray-500">Muscles</dt>
                            <dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <span class="flex-grow">{{ $exercises->muscles }}</span>
                                <span class="ml-4 flex-shrink-0">
                                    <button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
                                </span>
                            </dd>
                        </div>
                    @endif
                </dl>
            </div>
            <div class="mt-0 p-5 border-t border-gray-200">
                <dl class="divide-y divide-gray-200">
                    @if ($exercises->size)
                        <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
                            <dt class="text-sm font-medium text-gray-500">Size</dt>
                            <dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <span class="flex-grow">{{ $exercises->size }}</span>
                                <span class="ml-4 flex-shrink-0">
                                    <button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
                                </span>
                            </dd>
                        </div>
                    @endif
                </dl>
            </div>
        </form>
    </div>
</x-app-layout>
                