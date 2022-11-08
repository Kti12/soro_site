@extends('layouts.app')

@section('content')
<h1><span> Contactez-nous ou laissez-nous un message</span></h1>
<div class="formulaire">
    <form action="" method="POST">
        <div class="form">
            <label for="Nom">Nom:</label>
            <input type="text" name="Nom" id="Nom">

            <label for="Nom">Prénoms:</label>
            <input type="text" name="Nom" id="Nom">

            <label for="Mail">Email:</label>
            <input type="email" name="email" id="mail">

            <label for="com">Votre commentaire ici</label>
            <textarea name="comment" id="com" cols="20" rows="3"></textarea>

            <input type="submit" id="btn1" value="Envoyer">
        </div>
    </form>
</div>
@endsection

