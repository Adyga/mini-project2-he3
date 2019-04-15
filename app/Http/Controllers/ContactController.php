<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view ('contact');
    }
    public function testsetupinstruction()
    {
        return view ('testsetupinstruction');
    }

    public function contactstore(Request $request)
    {
        $name = $request->name;
        return redirect()->route('thankyou', ['name' => $name]);
    }

    public function thankyou($name ,Request $request)
    {
        return view ('thankyou')->with(compact('name'));
    }
}
