<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Workouts
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="/workouts" method="post">
                @csrf
                <div>
                    <label>Date</label>
                    <input type="date" name="date">
                <div>
                    <label>Length</label>
                    <input type="time" name="length">
                </div>
                <div>
                    <label>Body Weight</label>
                    <input type="number" name="body_weight">
                </div>
                <div>
                    <label>Calories Burned</label>
                    <input type="number" name="calories_burned">
                </div>
                <div>
                    <label>Music</label>
                    <input type="text" name="music">
                </div>
                <div>
                    <label>Notes</label>
                    <textarea name="notes" cols="30" rows="10"></textarea>
                </div>
                </div>
                    <input type="submit" value="Create">
                

            </form>

        </div>
    </div>
</x-app-layout>
