<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Sidebar -->
    <div class="flex">
        <div class="bg-gray-800 text-white h-screen w-64 flex flex-col">
            <div class="p-4 bg-gray-900 text-center">Organizer Dashboard</div>
            <ul class="flex-1 overflow-y-auto">
                <a href="{{ route('organizer.index') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📊 <!-- Dashboard Icon -->
                        <span class="ml-2">Dashboard</span>
                    </li>
                </a>
                <a href="{{ route('events.create') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        ✨ <!-- Users Icon -->
                        <span class="ml-2">Create An Event</span>
                    </li>
                </a> 
                {{-- <a href="{{ route('events.index') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📁 <!-- Categories Icon -->
                        <span class="ml-2">Categories</span>
                    </li>
                </a>
                <a href="{{ route('event.show_unvalidated') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📅 <!-- Validated Events Icon -->
                        <span class="ml-2">Validated Events</span>
                    </li>
                </a> --}}
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="p-10 bg-gray-800 rounded text-gray-100">
                        <form action="{{ route('events.store') }}" method="POST" class="max-w-lg grid grid-cols-2 gap-6">
                            @csrf
                    
                            <div class="col-span-2">
                                <label for="title" class="text-lg">Title</label>
                                <input type="text" name="title" id="title" class="block mt-1 w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 text-black">
                            </div>
                    
                            <div class="col-span-2">
                                <label for="description" class="text-lg">Description</label>
                                <input type="text" name="description" id="description" class="block mt-1 w-full text-black rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            
                            <div>
                                <label for="numberOfPlacesAvailable" class="text-lg">Number of Places Available</label>
                                <input type="number" min="1" name="numberOfPlacesAvailable" id="numberOfPlacesAvailable" class="block mt-1 w-full rounded-md text-black border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            
                            <div>
                                <label for="location" class="text-lg">Location</label>
                                <input type="text" name="location" id="location" class="block mt-1 w-full text-black rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                    
                            <div class="col-span-2">
                                <label for="categories_id" class="text-lg">Select Type of Class</label>
                                <select name="categories_id" id="categories_id" class="block mt-1 w-full text-black rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <div>
                                <label for="start_time" class="text-lg">Start Time</label>
                                <input type="datetime-local" name="start_time" id="start_time" class="block mt-1 w-full rounded-md border-gray-300 text-black focus:ring-indigo-500 focus:border-indigo-500" min="{{ now()->format('Y-m-d\TH:i') }}">
                            </div>
                            
                            <div>
                                <label for="end_time" class="text-lg">End Time</label>
                                <input type="datetime-local" name="end_time" id="end_time" class="block mt-1 w-full rounded-md border-gray-300 text-black focus:ring-indigo-500 focus:border-indigo-500" min="{{ now()->format('Y-m-d\TH:i') }}">
                            </div>
                            
                            <div class="col-span-2">
                                @error('date_time')
                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                    
                            <div class="col-span-2 flex justify-end">
                                <button class="bg-green-600 hover:bg-green-900 p-2 rounded mt-3">Create</button>
                            </div>
                        </form>
                    </div>
                    
                   
             </div>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
