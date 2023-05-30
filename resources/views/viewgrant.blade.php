<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold mb-4">Upcoming Conferences</h1>
            @foreach ($conferences as $conference)
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <ul class="space-y-4">
                            <li class="bg-white shadow-md rounded-lg p-4">
                                <h2 class="text-lg font-bold border-b-2 border-indigo-400">{{$conference->name}}</h2>
                                <p><span class="font-semibold">Date:</span> {{$conference->created_at->format('Y F j')}}
                                    ({{$conference->created_at->diffForHumans()}})</p>
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

            {{ $conferences->links() }}
        </div>
    </div>
</x-app-layout>