@extends('layouts.app')

@section('content')
    <h1><span>Bienvenue sur MaServante.com <br> selectionner la catégorie de servante que vous recherchez</span></h1>

    <div class="categorie">
        <div class="cat1">
            <a class="nounou" href="{{route('nounou')}}">Nounou</a>

            <a class="cuisine" href="{{route('cuisine')}}">Cuisinière</a>
        </div>

        <div class="cat2">
            <a class="menage" href="{{route('ménage')}}">Ménagère</a>

            <a class="autres" href="#">Autres</a>
        </div>
    </div>
@endsection

