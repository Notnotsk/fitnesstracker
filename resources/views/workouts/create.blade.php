<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Workouts
        </h2>
    </x-slot>

    <div>
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
            <form action="/workouts" method="post">
                @csrf
                <div>
                    <label>Date</label>
                    <input type="date" name="date" value="{{ old('date')}}">
                <div>
                    <label>Length</label>
                    <input type="number" name="length" value="{{ old('length')}}">
                </div>
                <div>
                    <label>Body Weight</label>
                    <input type="number" name="body_weight" value="{{ old('body_weight')}}">
                </div>
                <div>
                    <label>Calories Burned</label>
                    <input type="number" name="calories_burned" value="{{ old('calories_burned')}}">
                </div>
                <div>
                    <label>Music</label>
                    <input type="text" name="music" value="{{ old('music')}}">
                </div>
                <div>
                    <label>Notes</label>
                    <textarea name="notes" cols="30" rows="10">{{ old('notes')}}
                    </textarea>
                </div>
                </div>
                    <input type="submit" value="Create">
                

            </form>

        </div>
    </div>
</x-app-layout>
