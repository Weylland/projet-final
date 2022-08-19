
<?php

session_start();

include './fonctions.php';  /* j'appelle le fichier avec les fonctions (la connexion à la bdd) */

array_walk_recursive($_POST, function (&$v) {
    $v = strip_tags(htmlspecialchars(trim($v)));
});

// Traitement du score

// IMC
$taille = $_POST['taille'] / 100;
$imc = $_POST['poids'] / ($taille * $taille);
$imc = round($imc, 1);

if ($imc <= 18.5 || $imc >= 35) { /* On fait la condition si c'est inférieur ou égale à 18.5 ou si supérieur ou égale à 35 */
    $imcScore = 1; /* alors l score est égale à 1 */
} elseif ($imc >= 18.5 && $imc <= 24.9) { /* Si imc est supérieur ou égale à 18.5 ET s'il est inférieur ou égale à 24.9 */
    $imcScore = 20; /* le score ed l'imc est égale à 20 */
} elseif ($imc >= 25 && $imc <= 29.9) {
    $imcScore = 10;
} elseif ($imc >= 30 && $imc <= 34.9) {
    $imcScore = 5;
}

// Age
if ($_POST['age'] <= 17 || $_POST['age'] >= 60) {
    $ageScore = 5;
} elseif ($_POST['age'] >= 18 && $_POST['age'] <= 25) {
    $ageScore = 20;
} elseif ($_POST['age'] >= 26 && $_POST['age'] <= 35) {
    $ageScore = 15;
} elseif ($_POST['age'] >= 36 && $_POST['age'] <= 45) {
    $ageScore = 12;
} elseif ($_POST['age'] >= 46 && $_POST['age'] <= 60) {
    $ageScore = 8;
}

// Genre
if ($_POST['genre'] == 1) { /* on va cherhcer la valeur qui est dans la balise option du selct du formualire */
    $genreScore = 20;
} elseif ($_POST['genre'] == 2) {
    $genreScore = 15;
} else {
    $genreScore = 5;
}

// GroupeSanguin
switch ($_POST['groupeSanguins']) { /* permet de vérifier dans une condition dans le meme élément */
    case 'ab+':
        $gpScore = 20;
        break;
    case 'ab-':
        $gpScore = 10;
        break;
    case 'a+':
        $gpScore = 10;
        break;
    case 'a-':
        $gpScore = 5;
        break;
    case 'b+':
        $gpScore = 10;
        break;
    case 'b-':
        $gpScore = 5;
        break;
    case 'o+':
        $gpScore = 5;
        break;
    case 'o-':
        $gpScore = 2;
        break;
    default:
         header('location: ../page/update.php');
}

// CSP

$cspScore1 = 0;
$cspScore2 = 0;
$parentNumber = 0;
$catSocP1 = NULL;
$catSocP2 = NULL;

/* On doit d'abords vérifier que les valeurs des csp et salaires soient vides pour que le score ne soit pas prit en compte */

if (isset($_POST['catSocP1']) && $_POST['salaireP1'] !== '') { /* isset = si la variable existe, en gros si c pas rempli par l'utilisateur. Si les valeurs ne sont pas NULL ou ne sont pas des chaine de caractère vide (!), de ce fait on lance le calcul */
    $cspScore1 = calcul_csp($_POST['catSocP1'], $_POST['salaireP1']); /* $result qui est le resultat des condtions dans la fonction calcul sera stocké comme valeur dans la variable $cspScore 1 ou 2 */
    $parentNumber++; /* ça ajout +1 sur la variable $parentNumber, en gros un parent est prit en compte */
    $catSocP1 = $_POST['catSocP1'];
}

/* Du coup si c'est vide, que l'utilisateur na pas rempli et du que la condition ne peut pas démarrer, alors on avance dans le code il ne se passe rien */

if (isset($_POST['catSocP2']) && $_POST['salaireP2'] !== '') {
    $cspScore2 = calcul_csp($_POST['catSocP2'], $_POST['salaireP2']);
    $parentNumber++; /* de ce fait, la valeur de la varaibles ds parents peut etre égale soit à 0, 1 ou 2*/
    $catSocP2 = $_POST['catSocP2'];
}

/* Ici on fait le calcul du score */

$score = round(($imcScore + $ageScore + $genreScore + $gpScore + $cspScore1 + $cspScore2) / (4 + $parentNumber)); /* On fait le calcul moyen du score en prenant en compte le nombre de parent dans la division */


// Connection à la bdd 

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
        header('location: ../page/update.php'); /* Si c'est vide on est redirigé vers la page du formulaire */
    }


    // Ici c'est la modification des données dans la base de données 
    $requete = "UPDATE users, score 
    SET age = :age, 
    nom = :nom, 
    prenom = :prenom, 
    mail = :mail, 
    mdp = :mdp, 
    poid = :poid, 
    taille = :taille, 
    genre = :genre, 
    sang = :sang, 
    csp_1 = :csp_1, 
    csp_2 = :csp_2, 
    revenu_1 = :revenu_1, 
    revenu_2 = :revenu_2, 
    score = :score, 
    ageScore = :ageScore, 
    imcScore = :imcScore, 
    genreScore = :genreScore, 
    gpScore = :gpScore, 
    csp_1Score = :csp_1Score, 
    csp_2Score = :csp_2Score 
    WHERE users.id = :id";
    $statement = $pdo->prepare($requete);


    $result = $statement->execute([
        "age" =>  intval($_POST['age']),
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "mail" => $_POST['mail'],
        "mdp" => password_hash($_POST['password'], PASSWORD_ARGON2I),
        "poid" => intval($_POST['poids']),
        "taille" => intval($_POST['taille']),
        "genre" => $_POST['genre'],
        "sang" => $_POST['groupeSanguins'],
        "csp_1" => $catSocP1,
        "csp_2" => $catSocP2,
        "revenu_1" => intval($_POST['salaireP1']),
        "revenu_2" => intval($_POST['salaireP2']),
        "score" => $score,
        "id" => $_SESSION['id'],
        "ageScore" => $ageScore,
        "imcScore" => $imcScore,
        "genreScore" => $genreScore,
        "gpScore" => $gpScore,
        "csp_1Score" => $cspScore1,
        "csp_2Score" => $cspScore2,
    ]);


    $requete = 'SELECT * 
            FROM score, users 
            WHERE users.id = score.id_users
            AND users.id = :id'; 
    $statement = $pdo->prepare($requete);
    $statement->execute([ 
        'id' => $_SESSION['id'] 
    ]);


    $result = $statement->fetch();

    $_SESSION = [ 
        'id' => $result->id,
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
        'revenu_2' => $result->revenu_2,
        'score' => $result->score,
        'ageScore' => $result->ageScore,
        'imcScore' => $result->imcScore,
        'genreScore' => $result->genreScore,
        'gpScore' => $result->gpScore,
        'csp_1Score' => $result->csp_1Score,
        'csp_2Score' => $result->csp_2Score,
    ];


     header('location: ../page/dashboard.php');
}
