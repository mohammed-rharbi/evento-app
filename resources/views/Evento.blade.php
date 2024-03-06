<x-app-layout>
    <div class="tnakt">
    {{-- <x-slot name="header">
     
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 bg-opacity-85 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   

                    @foreach($events as $event)

                    <div class="bg-gray-200 bg-opacity-90 rounded-lg shadow-md p-6 mt-8">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $event->title }}</h3>
                        <p class="text-gray-600">Description :  <span>{{ $event->description }}</span></p>
                        <p class="text-gray-600">Start Time: {{ $event->start_time }}</p>
                        <p class="text-gray-600">End Time: {{ $event->end_time }}</p>
                        <p class="text-gray-600">Location: {{ $event->location }}</p>  
                        <form action="{{ route('events.book', $event) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded">Book Now</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
