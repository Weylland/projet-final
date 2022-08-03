
<?php

include './fonctions.php';  /* j'appelle le fichier avec les fonctions (la connexion à la bdd) */

array_walk_recursive($_POST, function (&$v) {
    $v = strip_tags(htmlspecialchars(trim($v)));
});

var_dump($_POST);

$pdo = connection_bdd();
$requete = 'SELECT * FROM users WHERE mail = :email';
$statement = $pdo->prepare($requete);
$statement->execute([
    'email' => $_POST['mail']
]);
$count = $statement->rowCount();

if (isset($_POST['submit'])) {

    if ( /* Dans une premier temps on vérifie si c'est vide */
        empty($_POST['mail']) || filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false /* vérification du mail */
        || empty($_POST['confMail']) || filter_var($_POST['confMail'], FILTER_VALIDATE_EMAIL) === false
        || empty($_POST['nom'])
        || empty($_POST['prenom'])
        || empty($_POST['age'])
        || empty($_POST['password'])
        || empty($_POST['confPass'])
        || empty($_POST['taille'])
        || empty($_POST['poids'])
        || empty($_POST['genre'])
        || empty($_POST['groupeSanguins'])
        || $_POST['mail'] !== $_POST['confMail'] /* Ici on vérifie si mail est différent de confMail avec !== */
        || $_POST['password'] !== $_POST['confPass'] /* la meme avec le mdp */
        || $count > 0
    ) {
        header('location: ../page/inscription.php'); /* Si c'est vide on est redirigé vers la page du formulaire */
    }

    // $requete = "INSERT INTO `welcome`.`users` (`id`,`age`, `nom`, `prenom`, `mail`, `mdp`, `poid`, `taille`, `genre`, `sang`, `csp_1`, `csp_2`, `revenu_1`, `revenu_2`) VALUES (:age, :nom, :prenom, :mail, :mdp, :poid, :taille, :genre, :sang, :csp_1, :csp_2, :revenu_1, :revenu_2 )";
    $requete = "INSERT INTO `welcome`.`users` VALUES (null, :age, :nom, :prenom, :mail, :mdp, :poid, :taille, :genre, :sang, :csp_1, :csp_2, :revenu_1, :revenu_2, null )";
    $statement = $pdo->prepare($requete);

    // $age = intval($_POST['age']);      // permet de forcer le type en int 
    var_dump(intval($_POST['age']));

    $result = $statement->execute([
        "age" =>  intval($_POST['age']), 
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "mail" => $_POST['mail'],
        "mdp" => password_hash( $_POST['password'], PASSWORD_ARGON2I),
        "poid" => intval($_POST['poids']),
        "taille" => intval($_POST['taille']),
        "genre" => $_POST['genre'],
        "sang" => $_POST['groupeSanguins'],
        "csp_1" => $_POST['catSocP1'],
        "csp_2" => $_POST['catSocP2'],
        "revenu_1" => intval($_POST['salaireP1']),
        "revenu_2" => intval($_POST['salaireP2']),
    ]);

    
}
