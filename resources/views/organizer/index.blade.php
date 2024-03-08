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

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-lg font-semibold mb-4">Statistics</h2>
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">

                                {{-- <div class="col-span-2 bg-indigo-100 dark:bg-indigo-700 rounded-md p-4 text-center">
                                    <h3 class="text-xl font-semibold mb-2">Total Members</h3>
                                    <p class="text-3xl font-bold">{{ $totalMembers }}</p>
                                </div> --}}

                                {{-- <div class="col-span-2 bg-red-100 dark:bg-red-700 rounded-md p-4 text-center">
                                    <h3 class="text-xl font-semibold mb-2">Total Organizers</h3>
                                    <p class="text-3xl font-bold">{{ $totalOrganizers }}</p>
                                </div> --}}

                                {{-- <div class="col-span-2 bg-green-100 dark:bg-green-700 rounded-md p-4 text-center">
                                    <h3 class="text-xl font-semibold mb-2">Total Categories</h3>
                                    <p class="text-3xl font-bold">{{ $totalCategories }}</p>
                                </div> --}}

                                {{-- <div class="col-span-2 bg-yellow-100 dark:bg-yellow-700 rounded-md p-4 text-center">
                                    <h3 class="text-xl font-semibold mb-2">Total Events</h3>
                                    <p class="text-3xl font-bold">{{ $totalEvents }}</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('events.create') }}">
                        <button class="bg-green-500 p-2 rounded mb-3 text-white hover:bg-green-700 ">Create Event</button> 
                     </a>
              
                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                     @if ($events)
                     @foreach ($events as $event)
                         <div class="bg-gray-300 hover:bg-gray-700 hover:text-white overflow-hidden shadow-sm sm:rounded-lg">
                             <div class="p-6">
                                 <h3 class="font-semibold text-lg mb-2">{{ $event->title }}</h3>
                                 <p class=" mb-4">{{ $event->description }}</p>
                                 <p class="">Start Time: {{ $event->start_time }}</p>
                                 <p class="">End Time: {{ $event->end_time }}</p>
                                 <p class="">Location: {{ $event->location }}</p>
                                 {{-- <p class="text-gray-500">Location: {{ $event->categories_id }}</p> --}}
                                 <p class="">Places Available: {{ $event->numberOfPlacesAvailable }}</p>
                                 <!-- Add more details as needed -->
                                 <div class="mt-4">
                                     <a href="{{ route('events.show', $event->id) }}" class="text-blue-500 hover:text-blue-700">View Details</a>
                                     <a href="{{ route('events.edit', $event->id) }}" class="text-green-500 hover:text-green-700 ml-4">Edit</a>
                                     <form id="delete-form" action="{{ route('events.destroy', $event->id) }}" method="POST" class="inline-block">
                                         @csrf
                                         @method('DELETE')
                                     
                                         <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')" class="text-red-500 hover:text-red-700 ml-4">Delete</button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                     @else
                          <p class="text-white">No events available.</p>
                     @endif
                 </div>  
             </div>
                  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>






