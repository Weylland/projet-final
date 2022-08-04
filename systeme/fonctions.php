<?php

session_start(); /* on met la session star ici car ce fichier et toujours dans les fichier du dossier syst */

/* création de la fonction pour se connecter à la bdd */

function connection_bdd() {
    $pdo = new PDO("mysql:host=localhost;dbname=welcome", 'root', ''); /* PDO = Objet avec focntion déja préfaite */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* setattribute est une méthode de l'objet PDO */ /* Traitement de serreurs */
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); /* mode par défault du renvoie des données */
    return $pdo; 
}

function calcul_csp($csp, $salaire) { 

    // condition du csp
    if($csp == 3) {
        $cspScore = 20; /* on va chercher les valeurs qui sont dans le selc des csp du formualire d'inscription, si la valeur est égale à 3 représentantn les cadre, alors le score est égale à 20*/
    } elseif($csp == 4) {
        $cspScore = 15;
    } elseif($csp == 1 || $csp == 2) {
        $cspScore = 12;
    } elseif($csp == 5) {
        $cspScore = 10;
    } elseif($csp == 6) {
        $cspScore = 5;
    } elseif($csp == 7) {
        $cspScore = 1;
    }
     else {
        // header('location: ../page/inscription.php');
        echo 'ta écrit de la merde dans csp';
    }

    //condition du salaire
    if($salaire <= 599) {
        $salaireScore = 2;
    } elseif($salaire >= 600 && $salaire <= 1099) {
        $salaireScore = 5;
    } elseif($salaire >= 1100 && $salaire <= 1499) {
        $salaireScore = 10;
    } elseif($salaire >= 1500 && $salaire <= 1999) {
        $salaireScore = 15;
    } elseif($salaire >= 2000) {
        $salaireScore = 20;
    } 
    else {
        // header('location: ../page/inscription.php');
        echo 'ta écrit de la merde dans salaire';
    }

    $result = ($cspScore + $salaireScore) / 2;
    return $result;

}




