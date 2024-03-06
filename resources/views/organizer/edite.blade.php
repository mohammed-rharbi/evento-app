<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Event
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('events.update', $event->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ $event->title }}" class="mt-1 p-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        </div>
                        <div class="flex gap-6">
                            <div class="flex-1">
                                <label class="text-sm">description</label>
                                <input type="text" name="description" id="description" value="{{ $event->description }}" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                            </div>
                        </div>
                        
                        <div class="flex gap-6">
                            <div class="flex-1">
                                <label class="text-sm">numberOfPlacesAvailable</label>
                                <input type="number" id="numberOfPlacesAvailable" name="numberOfPlacesAvailable" value="{{ $event->numberOfPlacesAvailable}}" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex-1">
                                <label class="text-sm">location</label>
                                <input type="text" name="location" id="location" value="{{ $event->location}}"  class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                            </div>
                        </div>

                        <div>
                            <label class="text-sm">Select type of class</label>
                            <select name="categories_id" id="categories_id" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $event->categories_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
                            <input type="datetime-local" name="start_time" id="start_time" value="{{ $event->start_time->format('Y-m-d\TH:i') }}" class="...">

                        </div>

                        <div class="mb-4">
                            <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
                            <input type="datetime-local" name="end_time" id="end_time" value="{{ $event->end_time->format('Y-m-d\TH:i') }}" class="...">

                        </div>
                        <!-- Add input fields for other event details (description, date, location, etc.) -->
                        <div class="mb-4">
                            <button type="submit" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
