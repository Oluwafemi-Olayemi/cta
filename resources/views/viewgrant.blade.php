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
                                <p><span
                                        class="font-semibold">Date:</span> {{ Carbon\Carbon::parse($conference->created_at)->format('Y F j') }}
                                    ({{Carbon\Carbon::parse($conference->created_at)->diffForHumans()}})</p>
                                <p><span class="font-semibold">Location:</span>{{$conference->location}}</p>
                                <p><span class="font-semibold">Description:</span> {{$conference->description}}</p>

                                <div x-data="{ open: false }">
                                    <x-secondary-button @click="open = ! open">View and Apply for Grant
                                    </x-secondary-button>

                                    <span x-show="open" x-transition>
                                            <div>

                                                {!! html_entity_decode($conference->full_description) !!}
                                            <form method="POST" action="{{route('grants.update', $conference->id)}}">
                                        @csrf
                                                @method('PUT')
                                            <input type="hidden" name="grantrequest" value="apply">
                                            <x-primary-button type="submit">Apply for grant</x-primary-button>

                                    </form>
                                                </div>
                                        </span>


                                    {{--                                    <form method="POST" action="{{route('grants.update', $conference->id)}}">--}}
                                    {{--                                        @csrf--}}
                                    {{--                                        @method('PUT')--}}
                                    {{--                                        <input type="hidden" name="grantrequest" value="cancel">--}}
                                    {{--                                        <x-secondary-button type="submit" class="ml-2">Cancel Application--}}
                                    {{--                                        </x-secondary-button>--}}
                                    {{--                                    </form>--}}
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
