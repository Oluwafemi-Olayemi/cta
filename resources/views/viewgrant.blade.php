<x-app-layout>
    @push("styles")

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
            {{ $conferences->links() }}
        </div>
    </div>
    @push("scripts")
        <script>
            $(document).ready(function () {
                // initialize with defaults
                $("#input-id").fileinput();
            });
        </script>

    @endpush
</x-app-layout>
