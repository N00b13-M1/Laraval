<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

// # Exerxcice 4
// 1. Dans un nouveau projet laravel-route-exo3
// 2. Videz le contenu de la page welcome
// 3. Ajoutez une structure html de base
// 4. Modifiez la route de base en route dynamique avec 2 variables
// 5. Affichez le contenu de ces deux variables dans la page welcome

Route::get('/{var1}/{var2}', function ($var1,$var2) {
    return "This is: " . $var1 . " ". $var2;



});

?>
</body>
</html>