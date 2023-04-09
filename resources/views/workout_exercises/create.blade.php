<x-app-layout>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Exercise
        </h2>
    </x-slot>

	<x-container>
		<div class="mx-auto py-4">
			<form action="/workouts/{{ $workout->id }}/exercises" method="post">
				@csrf
				<div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
					<label for="exercise" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Exercise</label>
					<div class="mt-2 sm:col-span-2 sm:mt-0 mb-4">
					{{-- <input type="exercise_id" name="body_weight" id="body_weight" autocomplete="body_weight" value="{{ old('body_weight')}}" class="block w-full max-w-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" placeholder="lbs"> --}}
					{{-- </div> --}}
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
