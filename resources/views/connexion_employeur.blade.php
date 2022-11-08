@extends('layouts.app')

@section('content')
    <h1><span>Page de connexion</span></h1>
    <form method="POST" action="{{ route('apres') }}">
        @csrf

        <div class="class3">

            <label class="M" for="mail">Mail:</label>
            <input type="email" name="un" id="M">

            <label class="Mo" for="pass">Mot de passe:</label>
            <input type="password" name="un" id="Pa">

            <label class="Mo" for="pass">Confirmer mot de passe:</label>
            <input type="password" name="un" id="Pa">

            <input type="submit" id="btn2" value="Envoyer">

        </div>
@endsection

