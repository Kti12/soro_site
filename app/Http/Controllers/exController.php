<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exController extends Controller
{
    public function index()
    {
        $titre=[
            'Bienvenue sur MaServante.com!',
            'le site qui vous permetra de touver une servante à votre convenance facilement et rapidement '
        ];
        return view('accueil', compact('titre'));
    }

    public function show()
    {
        $post= [
            'Bienvenue sur MaServante.com!',
            'Trouver la nounou de votre choix ici'
        ];
        return view('nounou', compact('post'));
    }
    public function show1()
    {
        $post= [
            'Bienvenue sur MaServante.com!',
            'Trouver la nounou de votre choix ici'
        ];
        return view('nounou', compact('post'));
    }
    public function voir()
    {
        $pre= [
            'Bienvenue sur MaServante.com!',
            'Trouver la ménagère de votre choix ici'
        ];
        return view('ménagère', compact('pre'));
    }
    public function voir1()
    {
        $pre= [
            'Bienvenue sur MaServante.com!',
            'Trouver la ménagère de votre choix ici'
        ];
        return view('ménagère', compact('pre'));
    }
    public function montrer()
    {
        $after= [
            'Bienvenue sur MaServante.com!',
            'Trouver la cuisinière de votre choix ici'
        ];
        return view('cuisinière', compact('after'));
    }
    public function montrer1()
    {
        $after= [
            'Bienvenue sur MaServante.com!',
            'Trouver la cuisinière de votre choix ici'
        ];
        return view('cuisinière', compact('after'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function aide()
    {
        return view('aide');
    }
    public function inscrit()
    {
        return view('inscription');
    }
    public function se_connecter()
    {
        return view('connexion');
    }
    public function se_connecter2()
    {
        return view('connexion');
    }
    public function connect()
    {
        return view('connexion_employeur');
    }
    public function connecte()
    {
        return view('connexion_employeur');
    }
    public function connect1()
    {
        return view('connexion_servante');
    }
    public function espace()
    {
        return view('après_connexion');
    }
    public function espace2()
    {
        return view('après_connexion');
    }
    public function plus()
    {
        return view('voirplus');
    }
    public function plus1()
    {
        return view('voirplus2');
    }
    public function envoie()
    {
        return view('envoyer');
    }
    public function envoie2()
    {
        return view('apres_connexion2');
    }

    public function envoies()
    {
        return view('apres_connexion2');
    }
    public function voirplus1()
    {
        return view('connexion_voirplus1');
    }
    public function voirplusun()
    {
        return view('connexion_voirplus1');
    }
    public function voirplus2()
    {
        return view('connexion_voirplus2');
    }
    public function voirplusdeux()
    {
        return view('connexion_voirplus2');
    }
    public function voirplus3()
    {
        return view('connexion_voirplus3');
    }
    public function voirplustrois()
    {
        return view('connexion_voirplus3');
    }


}
