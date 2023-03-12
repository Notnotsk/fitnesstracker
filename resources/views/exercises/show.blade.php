<x-app-layout>
	<x-slot name="header">
		<div class="flex items-center justify-between">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Exercise Information
			</h2>
			<div class="isolate inline-flex rounded-md shadow-sm">
				<a href="/exercises/{{ $exercise->id }}/edit" class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
					Edit Exercise
				</a>
			</div>
		</div>
	</x-slot>


	<div class="mt-0 p-5 border-t border-gray-200">
		<dl class="divide-y divide-gray-200">
			@if ($exercise->name)
				<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
					<dt class="text-sm font-medium text-gray-500">Name</dt>
					<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
						<span class="flex-grow">{{ $exercise->name }}</span>
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
			@if ($exercise->muscles)
				<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
					<dt class="text-sm font-medium text-gray-500">Muscles</dt>
					<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
						<span class="flex-grow">{{ $exercise->muscles }}</span>
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
			@if ($exercise->size)
				<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
					<dt class="text-sm font-medium text-gray-500">Size</dt>
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
  		