<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
        //validate data
        $validator = Validator::make($request->all(), [
            'city' => 'required',
            'state' => 'required',
            'pcode' => 'required',
            'qualification' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->with('error', 'There were validation errors on the form. City, State and
                Postal code are mandatory for application.');
        }

        $uploadedFiles = collect();

        foreach ($request->file('attachments') as $file) {
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::random(20).'.'.$extension;

                $file->storeAs('uploads', $fileName);
                $uploadedFiles->push($fileName);
            }
        }

        try {
            $user = User::findOrFail(Auth::id());
            $conference = Conference::findOrFail($conf_id);

            // Create a new record in the pivot table
            if($request->input('grantrequest') == 'apply'){
                $user->conferences()->syncWithoutDetaching([
                    $conference->id => [
                        'grantstatus_id' => config('grantstatus.requested'),
                        'city'=> $request->input('city'),
                        'state' => $request->input('state'),
                        'pcode' => $request->input('pcode'),
                        'qualification' => $request->input('qualification'),
                        'attachments' => $uploadedFiles
                    ]
                ]);
                return redirect()->back()->with('success', 'You have successfully requested for a grant');
            }else{
                $user->conferences()->detach($conference->id);
                return redirect()->back()->with('failure', 'you are not permitted to request for a grant');
            }
        } catch (\Exception $e) {
            // Error handling
            logger($e);
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
