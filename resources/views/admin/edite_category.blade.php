<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Sidebar -->
    <div class="flex">
        <div class="bg-gray-800 text-white h-screen w-64 flex flex-col">
            <div class="p-4 bg-gray-900 text-center">Admin Dashboard</div>
            <ul class="flex-1 overflow-y-auto">
                <a href="{{ route('admin.index') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        📊 <!-- Dashboard Icon -->
                        <span class="ml-2">Dashboard</span>
                    </li>
                </a>
                <a href="{{ route('admins.getAllusers') }}">
                    <li class="p-4 hover:bg-gray-700 flex items-center">
                        👥 <!-- Users Icon -->
                        <span class="ml-2">Users</span>
                    </li>
                </a>
                <a href="{{ route('category.index') }}">
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
                </a>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1">


           
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-10">
                <form action="{{ route('category.update' , $category->id ) }}" method="POST" class="max-w-lg">
                    @csrf
                    @method('PUT')

                        <div class="flex gap-6">
                            <div class="flex-1">
                                <label class="text-white">Title</label>
                                <input type="text" id="name" name="name" value="{{ $category->name }}" class="text-white block mt-2 w-full border-gray-500 bg-gray-500 focus:ring-0 focus:border-gray-500 rounded">
                            </div>
                        </div>

                        <div>
                            <button class="bg-blue-400 p-2 rounded mt-3">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
            
                </div>
            </div>
</x-app-layout>
