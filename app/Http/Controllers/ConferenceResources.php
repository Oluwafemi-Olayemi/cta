<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\GrantStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;


class ConferenceResources extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $conferences = DB::table('conferences')->paginate(5);

        return view('viewgrant', compact('conferences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Display a listing of the resource.
     *
     *
     */
    public function search(Request $request)
    {
        //validate data
        $request->validate([
            'search' => 'nullable',
            'date' => 'nullable|date',
            'location' => 'nullable'
        ]);

        $search = $request->input('search');
        $date = $request->input('date');
        $location = $request->input('location');

        $query = Conference::where("name", "like", "%{$search}%");

        // Add date criteria
        if ($date) {
            $query->whereDate('created_at', '>=' ,$date);
        }
        // Add location criteria
        if ($location) {
            $query->where('location', "like", "%{$location}%");
        }
        // Get the matching conferences
        $conferences = $query->get();


        return view('conferences.search', ['conferences' => $conferences]);
    }

    public function applyForGrant(){
        return "got here";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
