<x-app-layout>
	<x-slot name="header">
		<div class="flex items-center justify-between">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Exercise Information
			</h2>
			<div class="isolate inline-flex rounded-md shadow-sm">
				<x-button href="/exercises/{{ $exercise->id }}/edit" styles="indigo" class="rounded-md hover:bg-indigo-500">
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
						<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
							<span class="flex-grow">{{ $exercise->name }}</span>
							<span class="ml-4 flex-shrink-0">
								<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
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
		<form action="/exercises/{{ $exercise->id }}" method="post" class="mt-4 flex justify-end gap-x-3">
			@csrf 
			@method('delete')
			<input type="submit" value="Delete" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
		</form>
	</x-container>
</x-app-layout>    