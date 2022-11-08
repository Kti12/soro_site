<nav>
    <div class="autent">
        <div class="au">
        <a class="autent1" href="{{route('inscrit')}}">S'inscrire </a></li>
        <a class="autent2" href="{{route('connexion')}}">Se connecter <i class="fa-solid fa-user"></i> </a></li></div>
        <div class="search">
            <h2>Recherche</h2>
            <form>
                <input type="text" name="" placeholder="tape ici...">
                <input type="submit" name="" value="search">
            </form>
        </div>
    </div>
    <img class="ima" src="{{ asset("assets/femme1.jpg") }}" alt="logo">
    <div class="liens">
        <ul>
            <li class="gal">Categories
                <ul>
                    <li><a href="{{route('welcome')}}">Accueil</a></li>
                    <li><a href="{{route('connexion_voirplusun')}}">Nounou</a></li>
                    <li><a href="{{route('connexion_voirplusdeux')}}">Cuisinière</a></li>
                    <li><a href="{{route('connexion_voirplustrois')}}">Ménagère</a></li>

                </ul>
            </li>

            <li class="apd">A-propos-de
                <ul>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('aide')}}">Aide</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="slider">
            <img src="{{ asset("assets/servante.jpeg") }}" alt="femme de ménage">

    </div>
</nav>

