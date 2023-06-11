<x-app-layout>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <span class="text-capitalize">Conferences and Grant Status</span>
                </div>
                <div class="px-8 py-4">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Grant Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usersConferences as $uc)
                            <tr>
                                <td>{{$uc->name}}</td>
                                <td>{{$uc->location}}</td>
                                @if($uc->grantstatus_id == 1)
                                    <td>seeking</td>
                                    @endif
                                @if($uc->grantstatus_id == 2)
                                    <td>requested</td>
                                @endif
                                @if($uc->grantstatus_id == 3)
                                    <td>granted</td>
                                @endif
                                @if($uc->grantstatus_id == 4)
                                    <td>denied</td>
                                @endif
                            </tr>
                        @endforeach


</tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Grant Status</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>



</x-app-layout>


@push("scripts")

@endpush
