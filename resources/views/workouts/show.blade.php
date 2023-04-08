<x-app-layout>
	<div class="bg-white">
		<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-12 lg:gap-x-8 lg:px-8">
			<div class="lg:col-span-4">
				<h2 class="text-2xl font-bold tracking-tight text-gray-900">Workout</h2>
				<div class="mt-3 flex items-center">
					<div>
						<div class="flex items-center">
							<!-- Active: "text-yellow-400", Default: "text-gray-300" -->
							<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
							</svg>
							<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
							</svg>
							<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
							</svg>
							<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
							</svg>
							<svg class="h-5 w-5 flex-shrink-0 text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
							</svg>
						</div>
						<p class="sr-only">4 out of 5 stars</p>
					</div>
					<p class="ml-2 text-sm text-gray-900">Based on 1624 workouts</p>
				</div>
				<div class="mt-6">
					<h3 class="sr-only">Workout information</h3>
					<dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
						<div class="sm:col-span-1">
							<dt class="text-sm font-medium text-gray-500">Name</dt>
							<dd class="mt-1 text-sm text-gray-900">{{ $workout->name ?? 'N/A' }}</dd>
						</div>
						<div class="sm:col-span-1">
							<dt class="text-sm font-medium text-gray-500">Music</dt>
							<dd class="mt-1 text-sm text-gray-900">{{ $workout->music ?? 'N/A' }}</dd>
						</div>
						<div class="sm:col-span-1">
							<dt class="text-sm font-medium text-gray-500">Venue</dt>
							<dd class="mt-1 text-sm text-gray-900">{{ $workout->venue ?? 'N/A' }}</dd>
						</div>
						<div class="sm:col-span-1">
							<dt class="text-sm font-medium text-gray-500">Body Weight</dt>
							<dd class="mt-1 text-sm text-gray-900">{{ $workout->body_weight ?? 'N/A' }}</dd>
						</div>
						<div class="sm:col-span-1">
							<dt class="text-sm font-medium text-gray-500">Calories Burned</dt>
							<dd class="mt-1 text-sm text-gray-900">{{ $workout->calories_burned ?? 'N/A' }}</dd>
						</div>
						<div class="sm:col-span-1">
							<dt class="text-sm font-medium text-gray-500">Length</dt>
							<dd class="mt-1 text-sm text-gray-900">{{ $workout->length ?? 'N/A' }}</dd>
						</div>
						<div class="sm:col-span-2">
							<dt class="text-sm font-medium text-gray-500">Notes</dt>
							<dd class="mt-1 text-sm text-gray-900">{{ $workout->notes ?? 'N/A' }}</dd>
						</div>
					</dl>
				</div>
				<div class="mt-6">
					<h3 class="sr-only">Review data</h3>
					<dl class="space-y-3">
						<div class="flex items-center text-sm">
							<dt class="flex flex-1 items-center">
								<p class="w-3 font-medium text-gray-900">5<span class="sr-only"> star workouts</span></p>
								<div aria-hidden="true" class="ml-1 flex flex-1 items-center">
									<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
									</svg>

									<div class="relative ml-3 flex-1">
										<div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

										<div style="width: calc(1019 / 1624 * 100%)" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
									</div>
								</div>
							</dt>
							<dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">63%</dd>
						</div>
						<div class="flex items-center text-sm">
							<dt class="flex flex-1 items-center">
								<p class="w-3 font-medium text-gray-900">4<span class="sr-only"> star workouts</span></p>
								<div aria-hidden="true" class="ml-1 flex flex-1 items-center">
									<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
									</svg>

									<div class="relative ml-3 flex-1">
										<div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

										<div style="width: calc(162 / 1624 * 100%)" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
									</div>
								</div>
							</dt>
							<dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">10%</dd>
						</div>
						<div class="flex items-center text-sm">
							<dt class="flex flex-1 items-center">
								<p class="w-3 font-medium text-gray-900">3<span class="sr-only"> star workouts</span></p>
								<div aria-hidden="true" class="ml-1 flex flex-1 items-center">
									<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
									</svg>
									<div class="relative ml-3 flex-1">
										<div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

										<div style="width: calc(97 / 1624 * 100%)" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
									</div>
								</div>
							</dt>
							<dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">6%</dd>
						</div>
						<div class="flex items-center text-sm">
							<dt class="flex flex-1 items-center">
								<p class="w-3 font-medium text-gray-900">2<span class="sr-only"> star workouts</span></p>
								<div aria-hidden="true" class="ml-1 flex flex-1 items-center">
									<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
									</svg>
									<div class="relative ml-3 flex-1">
										<div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

										<div style="width: calc(199 / 1624 * 100%)" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
									</div>
								</div>
							</dt>
							<dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">12%</dd>
						</div>
						<div class="flex items-center text-sm">
							<dt class="flex flex-1 items-center">
								<p class="w-3 font-medium text-gray-900">1<span class="sr-only"> star workouts</span></p>
								<div aria-hidden="true" class="ml-1 flex flex-1 items-center">
									<svg class="h-5 w-5 flex-shrink-0 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
									</svg>

									<div class="relative ml-3 flex-1">
										<div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

										<div style="width: calc(147 / 1624 * 100%)" class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400"></div>
									</div>
								</div>
							</dt>
							<dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">9%</dd>
						</div>
					</dl>
				</div>
				<div class="mt-10">
					<h3 class="text-lg font-medium text-gray-900">Make an update</h3>
					<p class="mt-1 text-sm text-gray-600">If you’ve had a change in this workout, edit your workout.</p>
					<a href="/workouts/{{ $workout->id }}/edit" class="mt-6 inline-flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 sm:w-auto lg:w-full">Edit workout</a>
				</div>
				<div class="mt-10">
					<h3 class="text-lg font-medium text-gray-900">Delete workout</h3>
					<p class="mt-1 text-sm text-gray-600">If you’ve made a mistake, go ahead and start over.</p>
					<form action="/workouts/{{ $workout->id }}" method="post">
						@csrf 
						@method('delete')
						<input type="submit" value="Delete" class="mt-6 inline-flex w-full items-center justify-center rounded-md border border-red-300 bg-white px-8 py-2 text-sm font-medium text-red-600 hover:bg-red-50 sm:w-auto lg:w-full cursor-pointer">
					</form>
				</div>
			</div>
			<div class="mt-16 lg:col-span-7 lg:col-start-6 lg:mt-0">
				<h3 class="sr-only">Exercises</h3>
				<div class="flow-root">
					<div class="-my-12 divide-y divide-gray-200">
						@foreach ($workout->exercises as $i => $exercise)
							<div class="py-12">
								<div class="flex items-center">
									<span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-gray-500">
										<span class="text-lg font-medium leading-none text-white">{{ $i + 1 }}</span>
									</span>
									<div class="ml-4">
										<h4 class="text-sm font-bold text-gray-900">{{ $exercise->name }}</h4>
										<div class="mt-1 flex items-center">
											<!-- Active: "text-yellow-400", Default: "text-gray-300" -->
											<svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
											</svg>
											<svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
											</svg>
											<svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
											</svg>
											<svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
											</svg>
											<svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
											</svg>
										</div>
										<p class="sr-only">5 out of 5 stars</p>
									</div>
								</div>
								<div class="mt-4 space-y-6 text-base italic text-gray-600">
									<p>{{ $exercise->pivot->notes }}</p>
								</div>
								<div class="mt-4">
									<span class="isolate inline-flex rounded-md shadow-sm">
										@foreach ($exercise->sets as $i => $set)
											<a href="/sets/{{ $set->id }}/edit"
												@class([
												    'relative bg-white text-sm font-medium text-center text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10',
												    'rounded-l-md' => $loop->first,
												    '-ml-px' => !$loop->first,
												])>
												<h3 class="pt-1 font-bold uppercase text-xs text-gray-400">Set {{ $i + 1 }}</h3>
												<p class="px-3 py-1">{{ $set->weight }} x {{ $set->reps }}</p>
											</a>
										@endforeach
										<a href="/sets/create?exercise_id={{ $exercise->id }}&workout_id={{ $workout->id }}" class="relative -ml-px inline-flex items-center rounded-r-md bg-white px-3 py-2 text-sm font-medium text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Add Set</a>
									</span>
								</div>
							</div>
						@endforeach
						<div class="py-12">
							<div class="flex items-center">
								<div>
									<svg class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
									</svg>
								</div>
								<div class="ml-4">
									<h3 class="mt-2 text-sm font-bold text-gray-900">Add exercise</h3>
									<p class="mt-1 text-sm text-gray-500">{{ $workout->exercises->count() ? 'Keep going' : 'Get started' }} by adding a new exercise to the workout.</p>
								</div>
							</div>
							<div class="mt-6">
								<a href="/workouts/{{ $workout->id }}/exercises/create" class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-medium text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Add Exercise</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
