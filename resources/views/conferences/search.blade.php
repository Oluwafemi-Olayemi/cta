<x-app-layout>
    @push("styles")
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @endpush
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
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
            <h1 class="text-2xl font-bold">Search result</h1>
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
                                        <div class="py-2">
                                            <x-secondary-button @click="open = !open">View and Apply for Grant
                                            </x-secondary-button>
                                        </div>
                                        <div x-show="open" x-transition>
                                            {!! html_entity_decode($conference->full_description) !!}
                                            <div class="d-flex justify-content-end py-2">
                                                <x-primary-button type="button" class="btn btn-primary"
                                                                  data-bs-toggle="modal"
                                                                  data-bs-target="#exampleModal{{$conference->id}}">
                                                    Proceed with Application
                                                </x-primary-button>
                                            </div>
                                            <form method="POST" action="{{route('grants.update', $conference->id)}}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal fade" id="exampleModal{{$conference->id}}" tabindex="-1"
                                                     aria-labelledby="exampleModalLabel{{$conference->id}}"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="exampleModalLabel{{$conference->id}}">{{$conference->name}}
                                                                    Grant Application</h1>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="mb-3 form-group">
                                                                            <label for="name" class="form-label">Full
                                                                                Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="{{ Auth::user()->name }}"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="mb-3 form-group">
                                                                            <label for="email"
                                                                                   class="form-label">email</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="{{ Auth::user()->email }}"
                                                                                   disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="mb-3 form-group">
                                                                            <label for="city"
                                                                                   class="form-label">City</label>
                                                                            <input type="text" class="form-control"
                                                                                   id="city"
                                                                                   name="city">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="mb-3 form-group">
                                                                            <label for="state"
                                                                                   class="form-label">State</label>
                                                                            <input type="text" class="form-control"
                                                                                   id="state"
                                                                                   name="state">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="mb-3 form-group">
                                                                            <label for="pcode" class="form-label">Postal
                                                                                Code</label>
                                                                            <input type="text" class="form-control"
                                                                                   id="pcode"
                                                                                   name="pcode">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="mb-3 form-group">
                                                                            <label for="qualiication" class="form-label">Highest
                                                                                Qualification</label>
                                                                            <select class="form-control" id="qualification" name="qualification">
                                                                                <option value="">Select an option</option>
                                                                                <option value="high_school">High School
                                                                                    Certificate
                                                                                </option>
                                                                                <option value="bachelor_degree">Bachelor's
                                                                                    Degree
                                                                                </option>
                                                                                <option value="honours_degree">Honours
                                                                                    Degree
                                                                                </option>
                                                                                <option value="graduate_certificate">
                                                                                    Graduate
                                                                                    Certificate
                                                                                </option>
                                                                                <option value="graduate_diploma">Graduate
                                                                                    Diploma
                                                                                </option>
                                                                                <option value="masters_coursework">Master's
                                                                                    Degree
                                                                                    (Coursework)
                                                                                </option>
                                                                                <option value="masters_research">Master's
                                                                                    Degree
                                                                                    (Research)
                                                                                </option>
                                                                                <option value="phd">Doctor of Philosophy
                                                                                    (PhD)
                                                                                </option>
                                                                                <option value="professional_doctorate">
                                                                                    Professional
                                                                                    Doctorate
                                                                                </option>
                                                                                <option value="postdoctoral_fellowship">
                                                                                    Postdoctoral
                                                                                    Fellowship
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="mb-3 form-group">
                                                                            <input id="input-id" type="file" class="file"
                                                                                   name="attachments[]"
                                                                                   data-preview-file-type="text"
                                                                                   accept="image/*"
                                                                                   multiple>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <x-primary-button type="button" class="btn"
                                                                                  data-bs-dismiss="modal">Close
                                                                </x-primary-button>
                                                                <input type="hidden" name="grantrequest" value="apply">
                                                                <x-primary-button type="submit">Apply for grant
                                                                </x-primary-button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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
