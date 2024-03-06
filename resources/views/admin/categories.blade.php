<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <a href="{{ route('category.create') }}"> 
                 <button  class="bg-green-700 p-2 text-white rounded mb-3 hover:bg-green-900">Create category</button> 
            </a>
            
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-semibold mb-4">Categories</h2>
                    <ul class="space-y-4">
                        @foreach($categories as $category)
                            <li class="bg-gray-100 dark:bg-gray-700 p-4 rounded-md flex justify-between items-center">
                                <span>{{ $category->name }}</span>
                                <div class="flex gap-2">
                                    <a href="{{ route('category.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-800">Edit</a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
