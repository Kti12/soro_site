<footer>
        <div class="contenu1">
            <div class="bloc footer-service">
                <h3>Nos pages</h3>
                <ul class="ul1">
                    <li><a href="{{route('welcome')}}">Accueil</a></li>
                    <li><a href="{{route('connexion_voirplusun')}}">Nounou</a></li>
                    <li><a href="{{route('connexion_voirplusdeux')}}">Cuisinière</a></li>
                    <li><a href="{{route('connexion_voirplustrois')}}">Ménagère</a></li>

                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('aide')}}">Aide</a></li>
                </ul>

            </div>

            <div class="bloc footer-droit"><h3>@tous droits réservés</h3></div>
            <div class="bloc footer-form">
                <h3>Laissez un message</h3>
                <form action="" method="POST">
                    <div class="class1">
                        <label for="Nom">NOM:</label>
                        <input type="text" name="Nom" id="nom">

                        <label for="Mail">E-MAIL:</label>
                            <input type="email" name="email" id="Mail">



                        <input type="submit" id="btn" value="Envoyer">
                    </div>
                </form>
            </div>

            <div class="bloc footer-reseau">
                <h3>Nos réseaux</h3>
                <ul class="ul2">
                    <li><a href="http://www.facebook.com"><img class="fa" src="{{ asset("assets/facebook.png") }}">Facebook</a></li>
                    <li><a href="http://www.instagram.com"><img class="ti" src="{{ asset("assets/instagram.png") }}">instagram</a></li>
                    <li><a href="http://www.linkedin.com"><img class="yo" src="{{ asset("assets/linkedin.png") }}">linkedin</a></li>
                    <li><a href="mailto:katienesoro12@gmail.com"><img class="ma" src="{{ asset("assets/letter.png") }}">Mail</a></li>
                </ul>

            </div>
        </div>
    </footer>
