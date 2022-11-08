@extends('layouts.app')

@section('content')
    <h1><span>Se connecter en tant que</span></h1>


        <div class="cag1">
            <a class="nou" href="{{route('connect1')}}">Servante</a>

            <a class="cuis" href="{{route('connect')}}">Employeur</a>
        </div>
@endsection
