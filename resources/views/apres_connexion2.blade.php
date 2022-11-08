@extends('layouts.app')

@section('content')
    <div class="entete">
        <h1 class="ad"><span>Bienvenue  Mlle Adjoua</span></h1>
        <img class="adjoua" src="{{ asset("assets/soro.png") }}" alt="">
    </div>
    <h2 class="H2">Vos offres d'emplois</h2>
    <div class="grid1">
        <div class="gridElement1">
            <div class="grid-item1">
                <div class="img">
                    <img src="{{ asset("assets/kibi.jpg") }}" alt="">
                </div>
                <div class="text">
                    <h3>abidjan, yopougon maroc anador</h3>
                    <h3>celibataire</h3>
                    <h3>Ivoirienne</h3>
                    <h3><a href="{{ route('voirplus2') }}">Voir plus</a></h3>
                </div>
            </div>
            <div class="grid-item1">
                <div class="img">
                    <img src="{{ asset("assets/kibi.jpg") }}" alt="">
                </div>
                <div class="text">
                    <h3>abidjan, yopougon maroc anador</h3>
                    <h3>celibataire</h3>
                    <h3>Ivoirienne</h3>
                    <h3><a href="{{ route('voirplus2') }}">Voir plus</a></h3>
                </div>
            </div>

        </div>
        <div class="gridElement1">
            <div class="grid-item1">
                <div class="img">
                    <img src="{{ asset("assets/kibi.jpg") }}" alt="">
                </div>
                <div class="text">
                    <h3>abidjan, yopougon maroc anador</h3>
                    <h3>celibataire</h3>
                    <h3>Ivoirienne</h3>
                    <h3><a href="{{ route('voirplus2') }}">Voir plus</a></h3>
                </div>
            </div>
            <div class="grid-item1">
                <div class="img">
                    <img src="{{ asset("assets/kibi.jpg") }}" alt="">
                </div>
                <div class="text">
                    <h3>abidjan, yopougon maroc anador</h3>
                    <h3>celibataire</h3>
                    <h3>Ivoirienne</h3>
                    <h3><a href="{{ route('voirplus2') }}">Voir plus</a></h3>
                </div>
            </div>
        </div>

    </div>
@endsection
