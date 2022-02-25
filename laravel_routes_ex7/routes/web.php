<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// // 1. Vous allez créer 5 objets personne, et vous allez les placer dans un tableau et vous allez devoir le passer en compact dans la blade coding
// // 2. Vous allez faire une condition dans la boucle pour vérifier l'âge de chaque personne, et si la personne a plus de 18 ans, vous affichez dans l'html : Nom personne est majeur, ou sinon nom personne est mineur


// //     17. Créer un objet

// class User {

//     public $email;
//     public $name;

//     public function login(){
//         echo "the user logged in";
//     }

//     public function __construct($email,$name){
//         $this->email = $email;
//         $this->name = $name;
//     }
// }

// $userOne = new User("Test", "test2");
// $userOne->$email;

// //     18. Afficher une propriété de l'objet

// echo $userOne->name;

// $userTwo = new User("yoshi@email.com", "Yoshi");
// echo $userTwo->name;

// Route::get("/", function () {
//     return view("welcome");
// });


// Route::get("/coding", function () {
//     $prenoms = array("Maxime", "Elias", "Nicolas", "Ayhan", "Cactus");
//     $personne = (object)[
//         "nom" => "Coding",
//         "prenom" => "Elias",
//         "age" => 25
//     ];
//     return view("pages/coding", compact("prenoms", "personne"));
// });


