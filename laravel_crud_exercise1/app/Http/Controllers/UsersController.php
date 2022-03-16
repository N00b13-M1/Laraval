<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
            return view("back.pages.users.users", compact("users"));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        // dd($article[1]);
        $user->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view("back.pages.users.edit", compact('user'));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->given_name = $request->given_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->image_path = $request->image_path;
        $user->role = $request->role;

        $user->save();
        return redirect()->route('users.index');
    }

    public function create()
    {
        return view("back.pages.users.create");
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->given_name = $request->given_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->image_path = $request->image_path;
        $user->role = $request->role;

        $user->save();
        return redirect()->route('users.index');
    }

}


