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
}


