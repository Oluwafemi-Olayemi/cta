<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrantResources extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $conf_id)
    {
        try {
            $user = User::findOrFail(Auth::id());
            $conference = Conference::findOrFail($conf_id);

            // Create a new record in the pivot table

            if($request->input('grantrequest') == 'apply'){
                $user->conferences()->syncWithoutDetaching([
                    $conference->id => ['grantstatus_id' => config('grantstatus.requested')]
                ]);
                $conference->grantstatus_id = config('grantstatus.requested');
                $conference->save();
                return redirect()->back()->with('success', 'You have successfully requested for a grant');
            }else{
                $user->conferences()->detach($conference->id);
                return redirect()->back()->with('failure', 'you are not permitted to request for a grant');
            }

        } catch (\Exception $e) {
            // Error handling

            return redirect()->back()->with('error', 'Unable to request for a grant');
        }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
