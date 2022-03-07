<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persons;
use App\Http\Requests\RequestReg;

class RequestLog extends Controller
{
    public function Home()
    {
        return view('home');
    }
    public function Reg()
    {
        return view('reg');
    }
    public function Submit(RequestReg $req)
    {
        $person = new Persons();    

        $person->email = $req->input('email');
        $person->password = $req->input('password');

        $person->save();

        return redirect()->route('home')->with('success', "Registration successfully");
    }
}
