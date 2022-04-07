<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $role = 1; //Commencer par le role numero 1 = nbavant
        static $b = 1; //permet de faire le compte de combien d'élements de chaque rôle on a 
        static $equipe = 1; //equipe 1 pour dire qu'on commence la création des joueurs par là, 
        // jusqu'à ce que tous les postes soient occupés
        if ($b > 2) { //ex: si on a deux avants
            $role++;  //on change de rôle : ex : on passe au rôle suivant : arrière
            if ($role === 4) {  // si on arrive à remplaçant ($role 4 = remplacant et donc valeur max = 3)
                $b = 1;         // en passant à $b, on peut ajouter un tour enplus (et donc avoir 3 joueur au lieu de 2 pour la catégorie)
            } else {            
                $b = 2;         
            }
        } else { //si on a pas encore 2 (ou 3 pour remplacant) joueur de la même catégorie on en rajoute
            $b++;
        }
        if ($role > 4) {   //si on a rempli tous les rôles d'une équipe
            $role = 1;      // on recommence avec le premier rôle 
            $b = 2;         //MYSTERE
            $equipe++;      //on change d'équipe, on passe à la suivante parce que la première est full
        }


        static $position = 1;
        static $team = 1;
        static $counter = 1;

        
        
        if($counter > 2) {
            $position++;
            $counter=2;
        } else {
            $counter++;
        }

        

        //1 round - 1 1 2
        //2 round - 1 1 3
        //3 round - 2 1 2
        //4 round - 2 1 3
        //5 round - 3 1 2
        //6 round - 3 1 3



        return [
            "last_name"=> $this->faker->firstName(),
            "given_name"=> $this->faker->lastName(),
            "age"=> $this->faker->numberBetween($min = 5, $max = 25),
            "telephone"=>$this->faker->phoneNumber(),
            "email" =>$this->faker->freeEmail(),
            "gender"=> $this->faker->randomElement(["M", "F", "X"]),
            "country_of_origin"=> $this->faker->country(),
            "position_id"=> $role,
            "team_id"=> $equipe,
        ];
    }
}

