<x-app-layout>
	<x-slot name="header">
		<div class="flex items-center justify-between">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Workout Information
			</h2>
			<div class="isolate inline-flex rounded-md shadow-sm">
				<a href="/workouts/{{ $workout->id }}/edit" class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
					Edit Workout
				</a>
			</div>
		</div>
	</x-slot>


	<div class="mt-0 p-5 border-t border-gray-200">
		<dl class="divide-y divide-gray-200">
			@if ($workout->date)
				<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
					<dt class="text-sm font-medium text-gray-500">Date</dt>
					<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
						<span class="flex-grow">{{ $workout ->date }}</span>
						<span class="ml-4 flex-shrink-0">
							<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
						</span>
					</dd>
				</div>
			@endif
			@if ($workout->length)
				<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
					<dt class="text-sm font-medium text-gray-500">Length</dt>
					<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
						<span class="flex-grow">{{ $workout->length }}</span>
						<span class="ml-4 flex-shrink-0">
							<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
						</span>
					</dd>
				</div>
			@endif
			@if ($workout->name)
				<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
					<dt class="text-sm font-medium text-gray-500">Name</dt>
					<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
						<span class="flex-grow">{{ $workout->name }}</span>
						<span class="ml-4 flex-shrink-0">
							<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
						</span>
					</dd>
				</div>
			@endif
			@if ($workout->venue)
			<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
			<dt class="text-sm font-medium text-gray-500">Venue</dt>
			<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
				<span class="flex-grow">{{ $workout->venue }}</span>
				<span class="ml-4 flex-shrink-0">
				<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
				</span>
			</dd>
			</div>
			@endif
			@if ($workout->body_weight)
			<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
			<dt class="text-sm font-medium text-gray-500">Body Weight</dt>
			<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
				<span class="flex-grow">{{ $workout->body_weight }}</span>
				<span class="ml-4 flex-shrink-0">
				<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
				</span>
			</dd>
			</div>
			@endif
			@if ($workout->calories_burned)
			<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
			<dt class="text-sm font-medium text-gray-500">Calories Burned</dt>
			<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
				<span class="flex-grow">{{ $workout->calories_burned }}</span>
				<span class="ml-4 flex-shrink-0">
				<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
				</span>
			</dd>
			</div>
			@endif
			@if ($workout->music)
			<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
			<dt class="text-sm font-medium text-gray-500">Music</dt>
			<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
				<span class="flex-grow">{{ $workout->music }}</span>
				<span class="ml-4 flex-shrink-0">
				<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
				</span>
			</dd>
			</div>
			@endif
			@if ($workout->notes)
				<div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5">
				<dt class="text-sm font-medium text-gray-500">Notes</dt>
				<dd class="mt-1 flex text-sm text-gray-900 sm:col-span-2 sm:mt-0">
					<span class="flex-grow">{{ $workout->notes }}</span>
					<span class="ml-4 flex-shrink-0">
					<button type="button" class="rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"></button>
					</span>
				</dd>
				</div>
			@endif
  		</dl>
	</div>

	<a href="/workouts/{{ $workout->id }}/exercises/create" class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Add Exercise</a>
	<ul class="list-disc">
		@foreach ($workout->exercises as $exercise)
			<li class="mt-2">
				<div class="flex items-center space-x-2">
					<div>
						<button class="text-red-500">X</button>
					</div>
					<div>
						<p>{{ $exercise->name }}</p>
						<div>{{ $exercise->pivot->notes }}</div>
					</div>
					<div>
						@foreach ($exercise->sets as $set)
							<a href="/sets/{{ $set->id }}/edit">
								<span>{{ $set->weight }}</span>
								<span>{{ $set->reps }}</span>
							</a>
						@endforeach
						<a href="/sets/create?exercise_id={{ $exercise->id }}&workout_id={{ $workout->id }}">Add Set</a>
					</div>
				</div>
			</li>
		@endforeach
	</ul>

	<div class="mt-4">
		<form action="/workouts/{{ $workout->id }}" method="post">
			@csrf 
			@method('delete')
			<input type="submit" value="Delete" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
		</form>
	</div>
</x-app-layout>
