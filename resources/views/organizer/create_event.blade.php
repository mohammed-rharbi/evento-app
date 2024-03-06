<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Schedule a Class
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900">
                    <form action="{{ route('events.store') }}" method="POST" class="max-w-lg">
                        @csrf

                            <div class="flex gap-6">
                                <div class="flex-1">
                                    <label class="text-sm">Title</label>
                                    <input type="text" name="title" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                                </div>
                            </div>

                            <div class="flex gap-6">
                                <div class="flex-1">
                                    <label class="text-sm">descption</label>
                                    <input type="text" name="description" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                                </div>
                            </div>
                            
                            <div class="flex gap-6">
                                <div class="flex-1">
                                    <label class="text-sm">numberOfPlacesAvailable</label>
                                    <input type="number" name="numberOfPlacesAvailable" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                                </div>
                            </div>

                            <div class="flex gap-6">
                                <div class="flex-1">
                                    <label class="text-sm">location</label>
                                    <input type="text" name="location" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                                </div>
                            </div>

                            <div>
                                <label class="text-sm">Select type of class</label>
                                <select name="categories_id" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="flex gap-6">
                                <div class="flex-1">
                                    <label class="text-sm">Date</label>
                                    <input type="date" name="date" class="block mt-2 w-full border-gray-300 focus:ring-0 focus:border-gray-500" min="{{ date('Y-m-d', strtotime('tomorrow')) }}">
                                </div>
                            </div> --}}
                            <div class="mb-4">
                                <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
                                <input type="datetime-local" name="start_time" id="start_time" class="mt-1 p-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" min="{{ now()->format('Y-m-d\TH:i') }}">
                            </div>
                            <div class="mb-4">
                                <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
                                <input type="datetime-local" name="end_time" id="end_time" class="mt-1 p-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" min="{{ now()->format('Y-m-d\TH:i') }}">
                            </div>
                            
                            <div>
                                @error('date_time')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <x-primary-button>Schedule</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>