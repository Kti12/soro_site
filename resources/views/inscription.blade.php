@extends('layouts.app')

@section('content')
    <h1><span>Page d'inscription </span></h1>
    <form method="POST" action="{{ route('connexion2') }}">
        @csrf

        <div class="class2">
            <label class="N" for="nom">Nom:</label>
            <input type="text" name="un" id="N">

            <label class="P" for="prénom">Prénoms:</label>
            <input type="text" name="un" id="P">

            <label class="M" for="mail">Mail:</label>
            <input type="email" name="un" id="M">

            <label class="Mo" for="pass">Mot de passe:</label>
            <input type="password" name="un" id="Pa">

            <label class="Mo" for="pass">Confirmer mot de passe:</label>
            <input type="password" name="un" id="Pa">

            <label class="na" for="nation">Nationalité:</label>
            <input type="text" name="un" id="Na">

            <label class="ethnie" for="ethnie">Ethnie:</label>
            <input type="text" name="un" id="E">



                  <span class="sexe"> sexe: </span>
            <label class="mas" for="masculin">M</label>
            <input type="radio" name="un" id="masculin">

            <label class="fem" for="féminin">F</label>
            <input type="radio" name="un" id="féminin">

            <span class="compte">Statut:</span>
            <label class="employeur" for="employeur">célibataire</label>
            <input type="radio" name="un" id="Em">

            <label class="servante" for="servante">Marié(e)</label>
            <input type="radio" name="un" id="Se">

            <label class="na" for="nation">Nombre d'enfants:</label>
            <input type="text" name="un" id="Na">


                   <span class="local"> Localisation: </span>
            <label class="yop" for="yop">Yopougon</label>
            <input type="radio" name="un" id="Y">

            <label class="mar" for="mar">Marcory</label>
            <input type="radio" name="un" id="Mar">

            <label class="T" for="Treichville">Treichville</label>
            <input type="radio" name="un" id="T">

            <label class="kou" for="koumassi">Koumassi</label>
            <input type="radio" name="un" id="K">

            <label class="abo" for="abobo">Abobo</label>
            <input type="radio" name="un" id="A">

            <label class="plat" for="plateau">Plateau</label>
            <input type="radio" name="un" id="Plat">

            <label class="coc" for="cocody">Cocody</label>
            <input type="radio" name="un" id="Coc">

            <label class="port" for="portbouet">Port-bouet</label>
            <input type="radio" name="un" id="Port">

            <label class="quart" for="tierk">Quartier:</label>
            <input type="text" name="un" id="tierk">

            <span class="compte">Création de compte pour:</span>
            <label class="employeur" for="employeur">personne à la recherche de servante</label>
            <input type="radio" name="un" id="Em">

            <label class="servante" for="servante">personne voulant postuler à un poste de servante</label>
            <input type="radio" name="un" id="Se">

            <span class="sexe"> catégorie(réservé aux servantes): </span>

            <label class="mas" for="masculin">Nounou</label>
            <input type="radio" name="un" id="masculin">

            <label class="fem" for="féminin">Cuisinière</label>
            <input type="radio" name="un" id="féminin">

            <label class="fem" for="féminin">Ménagère</label>
            <input type="radio" name="un" id="féminin">

            <input type="submit" id="btn2" value="Envoyer">

        </div>
@endsection

