<x-app-layout>
	<h1>Add Exercise</h1>
	<form action="/workouts/{{ $workout->id }}/exercises" method="post">
		@csrf
		<div>
			<label>Exercise</label>
			<select name="exercise_id">
				<option value=""></option>
				@foreach ($exercises as $exercise)
					<option value="{{ $exercise->id }}">{{ $exercise->name }}</option>
				@endforeach
			</select>
		</div>
		<div>
			<label>Notes</label>
			<textarea name="notes" cols="30" rows="10"></textarea>
		</div>
		<input type="submit">
	</form>
</x-app-layout>
