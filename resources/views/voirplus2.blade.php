@extends('layouts.app')

@section('content')
    <h1><span class="voir">offre1</span></h1>
    <div class="choix">
        <div class="image">
            <img class="kibi" src="{{ asset("assets/kibi.jpg") }}" alt="">
        </div>
        <div class="texte">
            <h3>Localisation: abidjan, yopougon maroc anador</h3>
            <h3>Nationalité: Ivoirienne</h3>
            <h3>Ethnie: Baoulé</h3>
            <h3>Statut: celibataire</h3>
            <h3>Nombre d'enfants: 0</h3>

        </div>
    </div>
    <a href="{{ route('envoyer') }}"><input type="submit" name="accepter" value="valider" id="btnV"></a>

@endsection
