<x-app-layout>
    @push("styles")
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @endpush
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container mx-auto p-4">
                    <div class="flex justify-center">
                        <form class="w-full max-w-lg" action="{{route('conferences.search')}}" method="POST">
                            @csrf
                            @error('search')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            <div class="flex items-center border-b border-b-2 border-teal-500 py-2">

                                <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Search for conferences..." name="search">
                                <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                                    Search
                                </button>
                            </div>

                            <div class="mt-4">
                                <button class="flex items-center mb-2 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 4h-1V2h-2v2H5V2H3v2H2a2 2 0 00-2 2v9a2 2 0 002 2h1v2h2v-2h8v2h2v-2h1a2 2 0 002-2V6a2 2 0 00-2-2zm0 11H2V6h16v9z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-medium">Advanced Options</span>
                                </button>
                                @error('date')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                @error('location')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <div class="container">
                                    <div class="grid grid-cols-2 gap-4">

                                        <div class="relative max-w-sm">

                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input datepicker type="text" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                        </div>


                                        <div>

                                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" placeholder="Enter location" name="location">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            @isset($conferences)
            <h1 class="text-2xl font-bold mb-4">Search result</h1>
            @foreach ($conferences as $conference)
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <ul class="space-y-4">
                            <li class="bg-white shadow-md rounded-lg p-4">
                                <h2 class="text-lg font-bold border-b-2 border-indigo-400">{{$conference->name}}</h2>
                                <p><span class="font-semibold">Date:</span> {{$conference->created_at->format('Y F j') }} ({{$conference->created_at->diffForHumans()}}) </p>
                                <p><span class="font-semibold">Location:</span>{{$conference->location}}</p>
                                <p><span class="font-semibold">Description:</span> {{$conference->description}}</p>
                                <div class="flex justify-end">
                                    <x-secondary-button href="{{$conference->id}}" class="mr-2">Cancel Application</x-secondary-button>
                                    <x-primary-button href="{{$conference->id}}">Apply for grant</x-primary-button>
                                </div>

                            </li>
                        </ul>
                    </div>

                </div>
            @endforeach
            @endisset
        </div>

    </div>
    @push("scripts")
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script>
    @endpush
</x-app-layout>
