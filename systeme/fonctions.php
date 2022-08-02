<?php

session_start(); /* on met la session star ici car ce fichier et toujours dans les fichier du dossier syst */

/* création de la fonction pour se connecter à la bdd */

function connection_bdd() {
    $pdo = new PDO("mysql:host=localhost;dbname=welcome", 'root', ''); /* PDO = Objet avec focntion déja préfaite */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /* setattribute est une méthode de l'objet PDO */ /* Traitement de serreurs */
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); /* mode par défault du renvoie des données */
    return $pdo; 
}




