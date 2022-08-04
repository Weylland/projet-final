
<?php



include './fonctions.php';  /* j'appelle le fichier avec les fonctions (la connexion à la bdd) */

/* Protection des données de tous les éléments du tableau $_POST gràce à & */

array_walk_recursive($_POST, function (&$v) {
    $v = strip_tags(htmlspecialchars(trim($v))); /* strip tag retire les balises html et php, htmlspecialstar = Convertit les caractères spéciaux en entités HTML, trim = enlève espace avant et après */
});

/* ici on prépare la requete pour après l'éxécuter : Connexion préparation exécution */


$pdo = connection_bdd();
$requete = 'SELECT * 
            FROM score, users 
            WHERE users.id = score.id_users
            AND mail = :email'; /* SQL : Je selectionne TOUT de la table users quand la colonne de la bb mail est égale à :mail */
$statement = $pdo->prepare($requete);
$statement->execute([ /* je crée un tableau dans la méthode execute, l'argument est un tableau */
    'email' => $_POST['emails'] /* la clef c'est email (lié à :email), j'attribus la valeur à l'aide de => $_POST emails qui est lié au name de notre forulaire */
]);


/* TOUT ça en gros nous permet de vérifier que dans la bdd, il y a bien un utilisateur qui a rentré le mail dans le formaulaire */

if (isset($_POST['submit'])) { /* 1 : ici on vérifie qu'on a bien envoyer un formuaire en appuyant sur le bouton submit */ /* isset = Détermine si une variable est déclarée et est différente de null */
    if (empty($_POST['emails']) || empty($_POST['password'])) { /* 2 : on vérifie si mail et mdp est vide avec empty */ /* || = ou */
        header('location: ../page/connection.php'); /* Si c'est vide, on tes renvoyer à la page du formulaire de connection */
    }

    $count = $statement->rowCount(); /* RowCount est une méthode de l'objet PDO qui permet de véfirer le nombre de rangées dans notre tableau statement qui est de ce qui se trouve dans la bdd */ /* renvoie le nombre de rangée correspondant à l'eamil, sil est égale à 0  le mail n'existe pas dans la bdd et si il ets supérieur à 0 , le mail existe danbs la bdd */
    if ($count > 0) { /* si le nombre de rangée est supérieur à 0 */ /* un suel utilisateur auran accès aux infos perso */
        $result = $statement->fetch(); /* je déclare une variable qui me permet de récupérer un élement dans le tableau, créatio du tableau avec les données de la bdd */
        if (password_verify($_POST['password'], $result->mdp)) {
            // if($_POST['password'] == $result->mdp) { /* je vérifie que le mot de passe envoyé dans le formulaire est égale au mot de la bdd*/ /*-> pour cibler un élement d'unt tableau de type objet */ /* la dans mon tableau ou il ya les infos de la bdd, je cible le mdp de la bdd*/
            $_SESSION = [ /* $_SESSIOn est acessible sur tous les fichier car c une superglobale , il contient les données de l'utilisateur*/ /* one fait ce tableau ici car c a ce moment qu'on donne l'acces au infos de l'utilisateur */
                'connecter' => true, /* j'utlise la superglobale $_SESSION dans laquelle j'ajoute dans le tableau l'élément connecter avec une valeur à true */
                'nom' =>  $result->nom,
                'prenom' =>  $result->prenom,
                'age' => $result->age,
                'mail' => $result->mail,
                'poid' => $result->poid,
                'taille' => $result->taille,
                'genre' => $result->genre,
                'sang' => $result->sang,
                'csp_1' => $result->csp_1,
                'csp_2' => $result->csp_2,
                'revenu_1' => $result->revenu_1,
                'revenu_2' => $result->revenu_2,/* je créer dans le tableau seesion que je vais pouvoir utiliser dans les autres fichier, les clef à laquelle je leur attribut la valeur du tableau crée avec la méthode fetch de l'objet PDO, et je cible les colonnes de la table avec -> */
                'ageScore' => $result->ageScore,
                'imcScore' => $result->ageScore,
                'genreScore' => $result->ageScore,
                'gpScore' => $result->ageScore,
                'csp_1Score' => $result->ageScore,
                'csp_2Score' => $result->ageScore,
            ];
            header('location: ../page/dashboard.php');
        } else {
            header('location: ../page/connection.php'); /* si le mot de passe est faut on est renvoyer à la page du formuamire ed connexion */
        }
    } else {
        header('location: ../page/connection.php'); /* si ça n'existe pas on est sur la page du formulaire de connection */
    }
}

/* $_POST est une variable superglobale qui contient un tableau des données envoyé dans le formulaire */
