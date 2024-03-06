<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Schedule a Class
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10">
                    <form action="{{ route('category.store') }}" method="POST" class="max-w-lg">
                        @csrf

                            <div class="flex gap-6">
                                <div class="flex-1">
                                    <label class="text-white">Title</label>
                                    <input type="text" name="name" class="text-white block mt-2 w-full border-gray-500 bg-gray-500 focus:ring-0 focus:border-gray-500 rounded">
                                </div>
                            </div>
  
                            <div>
                                <button class="bg-blue-400 p-2 rounded mt-3">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>