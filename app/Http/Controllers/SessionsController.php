<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except'=>'destroy']);
    }

    public function create() {
        return view('sessions.create');
    }

    public function store() {

        // Validate the user
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! auth()->attempt(request(['email','password']))) {
            return back()->withErrors([
               'message' => 'Wrong credentials please try again'
            ]);
        }

        return redirect('/');

    }

    public function destroy() {
        auth()->logout();

        session()->flash('msg','You have been logout successfully');

        return redirect('/login');
    }
}
