<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("back.pages.users.users", compact("users"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view("back.pages.users.create", compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'given_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'date_of_birth' => 'required',
        ]);


        $user = new User();
        $user->last_name = $request->last_name;
        $user->given_name = $request->given_name;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->date_of_birth = $request->date_of_birth;
        $user->genre = $request->genre;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.index')->with("success", "Successfully added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $user = User::find($id);
        return view("back.pages.users.show", compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view("back.pages.users.edit", compact('user',"roles" ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'given_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'date_of_birth' => 'required',
        ]);
        
        $user = User::find($id);
        $user->last_name = $request->last_name;
        $user->given_name = $request->given_name;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->date_of_birth = $request->date_of_birth;
        $user->genre = $request->genre;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.index')->with("update", "Successfully Updated");

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with("delete", "Successfully Deleted");
    }
}

