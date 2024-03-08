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
                    <div class="bg-gray-800 rounded">
                    <div class="p-6">
                        <form action="{{ route('events.update', $event->id) }}" method="POST" class="max-w-lg grid grid-cols-2 gap-6">
                            @csrf
                            @method('PUT')
                    
                            <div class="col-span-2">
                                <label for="title" class="text-lg text-white">Title</label>
                                <input type="text" name="title" id="title" value="{{ $event->title }}" class="block mt-1 w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                    
                            <div class="col-span-2">
                                <label for="description" class="text-lg text-white">Description</label>
                                <input type="text" name="description" id="description" value="{{ $event->description }}" class="block mt-1 w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            
                            <div>
                                <label for="numberOfPlacesAvailable" class="text-lg text-white">Number of Places Available</label>
                                <input type="number" name="numberOfPlacesAvailable" id="numberOfPlacesAvailable" value="{{ $event->numberOfPlacesAvailable }}" class="block mt-1 w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            
                            <div>
                                <label for="location" class="text-lg text-white">Location</label>
                                <input type="text" name="location" id="location" value="{{ $event->location }}" class="block mt-1 w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                    
                            <div class="col-span-2">
                                <label for="categories_id" class="text-lg text-white">Select Type of Class</label>
                                <select name="categories_id" id="categories_id" class="block mt-1 w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $event->categories_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <div class="col-span-2">
                                <label for="start_time" class="text-lg text-white">Start Time</label>
                                <input type="datetime-local" name="start_time" id="start_time" value="{{ $event->start_time->format('Y-m-d\TH:i') }}" class="block mt-1 w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                    
                            <div class="col-span-2">
                                <label for="end_time" class="text-lg text-white">End Time</label>
                                <input type="datetime-local" name="end_time" id="end_time" value="{{ $event->end_time->format('Y-m-d\TH:i') }}" class="block mt-1 w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                    
                            <div class="col-span-2 flex justify-end">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Event</button>
                            </div>
                        </form>
                    </div>
                </div>      
             </div>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
