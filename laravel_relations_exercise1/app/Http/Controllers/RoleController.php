<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view("back.pages.roles.roles", compact("roles"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.pages.roles.create");
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
        ]);
        
        $role = new Role();
        $role->last_name = $request->last_name;
        $role->save();

        return redirect()->route('roles.index')->with("success", "Successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        // dd($role);
        return view("back.pages.roles.show", compact('role'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view("back.pages.roles.edit", compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'last_name' => 'required',
        ]);
        
        $role = Role::find($id);
        $role->last_name = $request->last_name;
        $role->save();

        return redirect()->route('roles.index')->with("update", "Successfully Updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->with("delete", "Successfully Deleted");
    }
}
