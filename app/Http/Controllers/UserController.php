<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
class UserController extends Controller
{
    function login(Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username or Password is not matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function logout(){
        Session::forget('user');
        return redirect('/login');
    }
    function register(Request $request){
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|unique:users',
        //     'password' => 'required',
        // ]);
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        if($user){
            return redirect('/login');
        }else{
            return "Not working";
        }

    }
}
