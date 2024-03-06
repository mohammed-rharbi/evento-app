<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    hey admin
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Hey admin! Would you like to see all the categories?</p>
                    <a href="{{ route('category.index') }}" class="text-blue-500 hover:text-blue-700">See category</a>
                </div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Event title
                </th>
                <th scope="col" class="px-6 py-3">
                    description
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Start Time
                </th>
                <th scope="col" class="px-6 py-3">
                    End Time
                </th>
                <th scope="col" class="px-6 py-3">
                    Location
                </th>
                <th scope="col" class="px-6 py-3">
                    Available places
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
     
        <tbody>
            @foreach($events as $event)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$event->title}}
                </th>
                <td class="px-6 py-4">
                   {{$event->description}}
                </td>
                <td class="px-6 py-4">
                    {{ $event->category->name}}
                </td>
                <td class="px-6 py-4">
                    {{ $event->start_time}}
                </td>
                <td class="px-6 py-4">
                    {{ $event->end_time}}
                </td>
                <td class="px-6 py-4">
                    {{ $event->location}}
                </td>
                <td class="px-6 py-4">
                    {{ $event->numberOfPlacesAvailable }}
                </td>
                <td>
                    <form action="{{ route('event.validate', $event->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Validate</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


            </div>
        </div>
    </div>
</x-app-layout>
