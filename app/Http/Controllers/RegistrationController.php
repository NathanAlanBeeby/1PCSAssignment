<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{


    public function create(){

        return view('/register'); // linking to the register view

    }

    public function store(RegistrationRequest $request){

       $request->persist();

    return redirect()->home();
    }
}
