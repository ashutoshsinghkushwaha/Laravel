<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class UserController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        
        
        
         return view('admin.app');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:users',
            'password'=>'required|min:5|max:12',
            'confirmpassword'=>'required|min:5|max:12|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->confirmpassword = Hash::make($request->confirmpassword);
        $res = $user->save();
        if($res){
            return back()->with('success', 'Registration Successful');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }



    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=> 'required|email',
            'password'=>'required|min:5|max:12',
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Incorrect Password');
            }
 
        }else{
            return back()->with('fail','This E-mail is not Registered');
        }
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }



}
