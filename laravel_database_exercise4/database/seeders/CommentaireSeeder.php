<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("commentaires")->insert([
            "nom"=> "Abutaharan",
            "prenom" => "Elias",
            "date_de_publication" => date("2022/12/2"),
            "commentaire" => "Bonjour les amis",
            "poste" => "Manager",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Primo",
            "prenom" => "Elias",
            "date_de_publication" => date("2022/12/3"),
            "commentaire" => "Abc",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "date_de_publication" => date("2022/12/4"),
            "commentaire" => "123",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "date_de_publication" => date("2022/12/4"),
            "commentaire" => "123",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "date_de_publication" => date("2022/12/4"),
            "commentaire" => "123",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "date_de_publication" => date("2022/12/4"),
            "commentaire" => "123",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "date_de_publication" => date("2022/12/4"),
            "commentaire" => "123",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "date_de_publication" => date("2022/12/4"),
            "commentaire" => "123",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "date_de_publication" => date("2022/12/4"),
            "commentaire" => "123",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
        DB::table("commentaires")->insert([
            "nom"=> "Abc",
            "prenom" => "Marcyl",
            "date_de_publication" => date("2022/12/4"),
            "commentaire" => "123",
            "poste" => "Etudiant",
            "created_at"=>now()
        ]);
    
    }
}
