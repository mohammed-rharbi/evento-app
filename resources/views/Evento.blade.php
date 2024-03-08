<x-app-layout>
    <div class="tnakt">
        {{-- <x-slot name="header">
            <!-- Add any header content here -->
        </x-slot> --}}

        {{-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold mb-6 text-center">Latest Events</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                    @foreach($latestEvents as $event)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/events.jpeg') }}" alt="Event Image" class="w-full h-40 object-cover object-center">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $event->title }}</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">{{ $event->description }}</p>
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-600">Start Time: <span class="font-semibold">{{ $event->start_time }}</span></p>
                                    <p class="text-gray-600">End Time: <span class="font-semibold">{{ $event->end_time }}</span></p>
                                    <p class="text-gray-600">Location: <span class="font-semibold">{{ $event->location }}</span></p>
                                </div>
                                <div>
                                    <p class="text-gray-600">Places Available: <span class="font-semibold">{{ $event->numberOfPlacesAvailable }}</span></p>
                                    <form action="{{ route('reserve.confirm', $event->id) }}" method="GET" class="inline-block">
                                        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Book Now</button>
                                    </form>
                                    <a href="{{ route('events.show', $event->id) }}" class="text-blue-600 hover:text-blue-800">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
         --}}

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Search Section -->
                <div class="mb-6">
                    <form action="{{ route('search') }}" method="GET" class="flex items-center">
                        <input type="text" name="query" placeholder="Search events" class="w-full bg-white border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:border-blue-500">
                        <button type="submit" class="bg-blue-600 text-white py-2 px-4 ml-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Search</button>
                    </form>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach($events as $event)
                    <div class="bg-gray-200 bg-opacity-90 rounded-lg shadow-md overflow-hidden">
                        <div class="relative">
                            <img src="{{ asset('images/events.jpeg') }}" alt="event image" class="w-full h-40 object-cover object-center">
                            <span class="absolute top-0 right-0 bg-green-500 text-white px-2 py-1 text-sm font-semibold">{{ $event->category->name }}</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800">{{ $event->title }}</h3>
                            <p class="text-gray-600 mt-2">Description: <span class="font-semibold">{{ $event->description }}</span></p>
                            <p class="text-gray-600 mt-2">Start Time: <span class="font-semibold">{{ $event->start_time }}</span></p>
                            <p class="text-gray-600 mt-2">End Time: <span class="font-semibold">{{ $event->end_time }}</span></p>
                            <p class="text-gray-600 mt-2">Location: <span class="font-semibold">{{ $event->location }}</span></p>
                            <p class="text-gray-600 mt-2">Places Available: <span class="font-semibold">{{ $event->numberOfPlacesAvailable }}</span></p>
                            <div class="mt-4 flex justify-between items-center">
                                <form action="{{ route('reserve.confirm', $event->id) }}" method="GET">
                                    <!-- Form fields -->
                                    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Book Now</button>
                                </form>
                                {{-- <a href="{{ route('events.show', $event->id) }}" class="text-blue-600 hover:text-blue-800">More Details</a> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-4 flex justify-center bg-opacity-70">
            {{ $events->links() }}
        </div>
            </div>
</x-app-layout>


