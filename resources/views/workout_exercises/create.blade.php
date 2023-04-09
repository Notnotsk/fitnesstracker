<x-app-layout>
	<x-container>
		<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
			<h1>Add Exercise</h1>
			<form action="/workouts/{{ $workout->id }}/exercises" method="post">
				@csrf
				<div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
					<label for="exercise" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Exercise</label>
					<div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
						<select name="exercise_id">
							<option value=""></option>
							@foreach ($exercises as $exercise)
								<option value="{{ $exercise->id }}">{{ $exercise->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
					<label for="notes" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Notes</label>
					<div class="mt-2 sm:col-span-2 sm:mt-0">
						<textarea name="notes" cols="30" rows="10"></textarea>
						<p class="mt-2 text-sm text-gray-500">Write a note about this exercise.</p>
					</div>
				</div>
				<div class="sm:pt-5">
					<div class="flex justify-end gap-x-3">
						<a href="/workouts/{{ $workout->id }}" class="block rounded-md bg-white py-2 px-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
							Cancel
						</a>
						<button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
							Add</button>
					</div>
				</div>
			</form>
		</div>
	</x-container>
</x-app-layout>
