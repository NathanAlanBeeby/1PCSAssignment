<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{
    public function __construct(){

        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create(){ // direct to the login page

        return view('/login');

    }

    public function store(){ //signing in
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors(['message' => 'Make sure your password is correct and try again',]);
        }

        return redirect()->home();
    }

    public function destroy(){ // logging out
        auth()->logout();
        return view('logout');
    }
}
