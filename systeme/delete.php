
<?php 

session_start();

include './fonctions.php'; 

$pdo = connection_bdd();
$requete = 'DELETE FROM users WHERE mail = :email';
$statement = $pdo->prepare($requete);
$statement->execute([ 
    'email' => $_SESSION['mail']
]);

$_SESSION = array();
session_destroy();

header('location: ../page/front-page.php');
