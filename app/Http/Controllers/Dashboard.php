<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index(){
        $usersConferences = DB::table('users')->where('users.id', '=', Auth::id())
            ->join('conference_user', 'users.id', '=', 'conference_user.user_id')
            ->join('conferences', 'conferences.id', '=', 'conference_user.conference_id')
            ->get();

        return view('dashboard', compact('usersConferences'));
    }
}
