@extends('layouts.app')

@section('content')
    <h1><span class="voir">Votre choix</span></h1>
    <div class="choix">
        <div class="image">
            <img src="{{ asset("assets/soro.png") }}" alt="">
        </div>
        <div class="texte">
            <h3>Localisation: abidjan, yopougon maroc KIMI</h3>
            <h3>Age: 22ans</h3>
            <h3>Nationalité: Ivoirienne</h3>
            <h3>Ethnie: Baoulé</h3>
            <h3>Statut: celibataire</h3>
            <h3>Nombre d'enfants: 0</h3>

        </div>
    </div>
    <a href="{{ route('envoyer') }}"><input type="submit" name="" value="valider choix" id="btnV"></a>

@endsection
