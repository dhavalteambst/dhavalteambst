<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
    return view('backend.register');
    }

    function register(Request $req){        

       $register = new Register;
       $register->name = $req['name'];
       $register->username = $req['username'];
       $register->email = $req['email'];
       $register->password = Hash::make($req['password']);
       $register->role = $req['role'];
       $register->save();
    

       return redirect('/admin')->with('fail','user doesnt exist');


    }
}
