@extends('front/layouts.app')

{{-- # Exercice 3
laravel-relations-exercice3 (one to many)
## Database
Il faut réaliser un site internet pour un club de volleyball, la seule chose qu'on sait c'est que le client veut pouvoir créer des équipes et les modifier.
Chaque équipe a un nom de club, une ville qu'elle représente , un pays et un maximum de joueur possible dans leur équipe et par role(2 avant, 2 centraux, 2 arriere, 3remplacants)..
Il faut definir des roles avec un nom (avant, centraux, arriere et remplaçants)

Et bien sur les joueurs doivent pouvoir etre rajoutés dans la plateforme. Ils ont : un nom , prénom,age, téléphone,email, un genre, un pays d'origine,role dans une partie ( avant, central, arrière, remplaçant )
Il faut définir dans une table photo, la photo de chaque joueur (one to one)
Si l'équipe n'a plus de place dans un poste alors le joueur ne peut pas être rajouter et on reçoit un message pour nous en prévenir.

Il faut une page pour afficher toutes les équipes
nom , ville , nombre de joueurs sur/maximum de place
exemple :
Les fifous , anderlecht 5/7 et un button voir
dans le show de chaque équipes on peut revoir le nom de l'quipe la ville le nombre de joueurs sur/maximum de place et tous les joueurs qui en font partis juste leur nom prénom et leur role et un button voir qui nous ramene sur le show du joueur pour y voir TOUTES ses informations et meme son équipe. ( utiliser les methode dans les modeles pour récupérer cette information.)

Il faut une page pour afficher tous les joueurs
Nom Prénom Nom d'équipe button pour voir le show du joueur
le nom de l'équipe du joueur est cliquable également pour aller voir le show de l'équipe avec toutes les informations !

Une page Dashboard avec :
une section ( 2 équipes remplies au hasard )
une section ( 4 joueurs sans équipes au hasard )
une section ( 4 joueurs avec équipe )
une section ( 2 équipes non remplies au hasard )
une section ( les equipes d'europes )
une section ( les équipes hors europes )
une section ( les joueurs qui représente leur pays( meme pays dorigine que l'équipe dans la quelle ils jouent )
Une section 5 joueuses au hasard qui ont une équipe !
Une section 5 joueurs homme et qui ont une équipe ! --}}
@section('content')
    @include('front/partials/navbar')
    <h2>2 équipes remplies au hasard</h2>
    <!-- Table with outer spacing -->
    <div class="table-responsive">
        <table class="table table-lg">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Continent</th>
                    <th>Forwards</th>
                    <th>Midfielders</th>
                    <th>Defenders</th>
                    <th>Substitutes</th>
                    <th>Max Players</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 0;
                @endphp
                @foreach ($teams->shuffle() as $team)
                    @if ($team->players->count() === $team->number_forwards + $team->number_midfielders + $team->number_defenders + $team->number_substitutes && $count < 2)
                        <tr>
                            <td style="font-weight: 900">{{ $team->id }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->city }}</td>
                            <td>{{ $team->country }}</td>
                            <td>{{ $team->continent }}</td>
                            <td>{{ $team->players->where('role_id', 1)->count() }} / {{ $team->number_forwards }}</td>
                            <td>{{ $team->players->where('role_id', 2)->count() }} / {{ $team->number_midfielders }}</td>
                            <td>{{ $team->players->where('role_id', 3)->count() }} / {{ $team->number_defenders }}</td>
                            <td>{{ $team->players->where('role_id', 4)->count() }} / {{ $team->number_substitutes }}</td>
                            <td>{{ count($team->players) }} /
                                {{ $team->number_forwards + $team->number_midfielders + $team->number_defenders + $team->number_substitutes }}
                            </td>
                        </tr>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>


 
    @include('front/partials/footer') 
@endsection