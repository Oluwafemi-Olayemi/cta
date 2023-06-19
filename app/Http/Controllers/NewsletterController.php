<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function createNewsletter(Request $request){
        $request->validate([
           'email' => 'required'
        ]);

        $newsletter = new Newsletter();
        $newsletter->email = $request->input('email');
        $newsletter->save();

        return redirect()->back()->with('success', 'you have been added to the newsletter');
    }
}
