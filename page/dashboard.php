<?php

include 'include/header.php';

// Traitement d'affichage des métiers

include '../systeme/fonctions.php';

$pdo = connection_bdd();
$statement = $pdo->prepare('SELECT * FROM metiers WHERE note <= :note');
$statement->execute([
    'note' => $_SESSION['score']
]);

$result = $statement->fetchAll(); /* y récupère toutes les données quon lui a demander sous forme de tableau de type objet */

?>

<main class="dash">

    <div class="main__container__dash">

        <!-- Bloc gauche -->

        <div class="container__left__dash">
            <div class="first__frame__name">
                <div class="second__frame__name">
                    <p><?= $_SESSION['prenom']; ?></p> <!-- On utilise notre tableau crée dans le traitement de connection pour afficher les données -->
                    <p><?= $_SESSION['nom']; ?></p>
                    <p><?= $_SESSION['age']; ?></p>
                </div>
            </div>
            <div class="img__left__dash">
                <img src="../asset/img/img_dash_left.png" alt="">
            </div>
        </div>

        <!-- Bloc centre -->

        <div class="container__center__dash">
            <div class="first__bloc__center">
                <div class="row__center">
                    <div class="content__1">
                        <p>Genre</p>
                        <p><?= $_SESSION['genre']; ?></p>
                    </div>
                    <div class="content__2">
                        <p>Taille</p>
                        <p><?= $_SESSION['taille']; ?>cm</p>
                        <button class="">Modifier</button>
                    </div>
                    <div class="content__3">
                        <p>Revenu</p>
                        <p><?= $_SESSION['revenu_1']; ?>€</p>
                        <button class="">Modifier</button>
                    </div>
                    <div class="content__4">
                        <p>Catégories sociaux professionelles</p>
                        <p><?= $_SESSION['csp_1']; ?></p>
                        <button class="">Modifier</button>
                    </div>
                </div>
                <div class="row__center">
                    <div class="content__1">
                        <p>Groupe Sanguin</p>
                        <p><?= $_SESSION['sang']; ?></p>
                    </div>
                    <div class="content__2">
                        <p>Poid</p>
                        <p><?= $_SESSION['poid']; ?>Kg</p>
                        <button class="">Modifier</button>
                    </div>
                    <div class="content__3">
                        <p>Revenu 2</p>
                        <p><?= $_SESSION['revenu_2']; ?>€</p>
                        <button class="">Modifier</button>
                    </div>
                    <div class="content__4">
                        <p>Catégories sociaux professionelles 2</p>
                        <p><?= $_SESSION['csp_2']; ?></p>
                        <button class="">Modifier</button>
                    </div>
                </div>
            </div>
            <div class="second__bloc__center">
                <div class="first__bloc__score">
                    <div class="bloc__1">
                        <p>Score IMC</p>
                        <p><?= $_SESSION['imcScore']; ?>/20</p>
                    </div>
                    <div class="bloc__2">
                        <p>Score Genre</p>
                        <p><?= $_SESSION['genreScore']; ?>/20</p>
                    </div>
                    <div class="bloc__3">
                        <p>Score Groupe<br>Sanguin</p>
                        <p><?= $_SESSION['gpScore']; ?>/20</p>
                    </div>
                    <div class="bloc__4">
                        <p>Score Age</p>
                        <p><?= $_SESSION['ageScore']; ?>/20</p>
                    </div>
                    <div class="bloc__5">
                        <p>Score CSP 1</p>
                        <p><?= $_SESSION['csp_1Score']; ?>/20</p>
                    </div>
                    <div class="bloc__6">
                        <p>Score CSP 2</p>
                        <p><?= $_SESSION['csp_2Score']; ?>/20</p>
                    </div>
                </div>
                <div class="second__bloc__score">
                    <div class="frame__score">
                        <p>Score total</p>
                        <p><?= $_SESSION['score']; ?>/20</p>
                    </div>
                </div>
            </div>
            <div class="three__bloc__center">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach($result as $metier): ?>
                                <div class="swiper-slide">
                                    <p><?= $metier->categorie ?></p>
                                    <p>grade<?= $metier->grade ?></p>
                                </div>   
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!-- Bloc droite -->

        <div class="container__right__dash">
            <div class="img__right__dash">
                <img src="../asset/img/img_dash_right.png" alt="">
            </div>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="../asset/js/swiper.js"></script>


<?php
include 'include/footer.php';
?>