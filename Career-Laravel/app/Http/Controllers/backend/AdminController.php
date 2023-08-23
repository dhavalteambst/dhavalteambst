<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }



    public function login(Request $req){
        
        //$user = Register::where('username',$req->input('username'))->first();
        
        //$decrypted1 = $user[0]->password;

        //$ency = Crypt::encryptString('12345');
        // $user = Register::where('username',$req->input('email'))->get();
        // $decrypted = $user[0]->password;
        // $inputpw = $req->input('password');
        // $hashed = Hash::make($inputpw);
        // print_r($dcp);
   
        
        
        // if($user === ''){
        //     print_r('user not found');
        //     print_r($user[0]->username);
        // }
        // else{
        //     print_r('user not found1');
        //     print_r($user[0]->username);
        // }
        // $y = $req['email']; 
        // $x = $user[0]->username;
        // echo $y;
        
        //Check password hash
        //print_r($name);
        $user = Register::where('username', $req->input('email'))->get();
        $user1 = Register::where('username', '=', $req->input('email'))->first();
        $user2 = $user[0]->role;
        if ($user1) {
        // user doesn't exist
            if((!$user || !Hash::check($req->password, $user[0]->password))){
                //Invalid login username or password!
                //print_r("Passoword Not match");
                //echo $user[0]->password;
              return back()->with('fail','Passoword Not match');
            } else {
                //username & password matches
                print_r("match");
                $req->session()->put('user',$user[0]->name);
                echo session('user');
                if($user2 == '0'){                
                    return redirect('/admin/dashboard');
                }
                else{                
                    return redirect('/admin/subscriber');
                }
                //echo $user[0]->password;
            }
        }
        else{            
            return back()->with('fail','user doesnt exist');
        }


        

        
    }
    public function dashboard(){       
        return view('backend.dashboard');
    }

}
