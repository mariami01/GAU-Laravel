<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function login(Request $req){
        // user should be matched with the data in db
        $user= User::where(['email'=>$req->email])->first();

        // if user is blank of passwords do not match return err
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            // store data in the session 
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req){
        // return $req->input();

        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }

    public function fetchUser(){
        $user = User::all();
        return view('dashboard', compact('user'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $user = new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->save();

        return redirect('dashboard')->with('status', 'User Added Successfully!');
    }
    public function edit($id){
        $user = User::find($id);
        return view('edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->update();

        return redirect('dashboard')->with('status', 'User Data Updated Successfully!');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('dashboard')->with('status', 'User Data Deleted Successfully!');
    }
}
