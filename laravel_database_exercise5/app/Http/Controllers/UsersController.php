<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        //     // //- Affichez tous les utilisateurs
//     $users = User::all();
//     // //- Affichez le premier utilisateur
//     // $userFirst = User::all()->first();
//     // //- Affichez le dernier utilisateur
//     // $userLast = User::all()->last();
//     // // - Affichez les utilisateurs grâce à leur nom
//     // $filterOnName = User::where("nom", "=", "Bruce")->value("email");
//     // // - Affichez l'utilisateur qui a l'id 5
//     // $userFive = User::find(5);
//     // // - Affichez le nombre d'utilisateurs qu'il y a dans la table
//     $numberOfUsers = User::all()->count();
//     // - Affichez deux utilisateurs qui font partie du même pays
//     $sameCountry = User::where("pays", "West April")->get();
//     // foreach ($sameCountry as $value) {
//     //     dd($value->nom);
//     // }
//     // - Affichez le premier utilisateur qui habite dans un pays spécifique --
//     $specificCountry = User::where("pays", "West April")->get()->first;
//     // dd($users, $userFirst->nom, $userLast->nom, $userFive, $numberOfUsers, $filterOnName);
//     // dd($numberOfUsers, $sameCountry, $specificCountry->nom);
//     //$userLast= User::all()->last();
//     // dd($userLast)
//     // dd($firstUser->nom);
//     // dd($users[$users->length -1 ]);
        return view('/pages/users',compact('users'));
    }
}
