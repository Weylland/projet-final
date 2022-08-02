<?php
include 'include/header.php';
?>

<main class="transition_start">


    <!-- Header Nav-->

    <section class="header_nav f1" id="home">

        <!-- Nav -->

        <nav class="nav_top f1">
            <div class="logo">
                <p>Logo</p>
            </div>
            <div class="nav_link">
                <ul>
                    <li>
                        <a href="#home">Accueil</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#donnees">Chiffres</a>
                    </li>
                    <li>
                        <a href="#">Actualités</a>
                    </li>
                    <li>
                        <a href="formulaire.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="link_connexion">
                <?php 
                    if(isset($_SESSION['connecter'])) { /* je cible la clef connecter crée dans le fichier connexion du syst du  tableau $_SESSION qui est égale à true, on utilise isset pour voir si le tableau est vide, et s'il est vide donc si tes pas connecter du coup c égal à false, du coup pas connecter */
                        echo '<a class="btn" href="../systeme/deconnexion.php">Se déconnecter</a>'; /* on focus dans le href le fichier de traitement de déconnexion */
                    } else {
                        echo '<a class="btn" href="connection.php">Se connecter</a>';
                    }
                ?>
            </div>
        </nav>

        <!-- Header -->

        <header class="header">
            <div class="title_line f2">
                <p>Accueil</p>
                <div class="line"></div>
                <p>01</p>
            </div>
            <div class="content_header f3">
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet suscipit ullam delectus laboriosam voluptas, similique harum fugiat repellat repudiandae aut quas autem cupiditate eos veritatis beatae ut illum alias! Libero!</p>
                <div class="link_header">
                    <a href="" class="btn">Lorem Ipsum</a>
                    <div class="link_arrow">
                        <a href="">Lorem Ipsum dolor</a>
                        <img src="../asset/img/arrow.png" alt="">
                    </div>
                </div>
            </div>
        </header>

    </section>

    <!-- Img Header -->

    <div class="img_header f4">
        <img src="../asset/img/img_header.png" alt="">
    </div>

    <!-- Section Service -->

    <section class="service" id="services">
        <div class="title_line f1 arf">
            <p>Service</p>
            <div class="line"></div>
            <p>02</p>
        </div>
        <div class="container_service">
            <div class="content_service f2">
                <p>Lorem ipsum dolor sit amet <span class="color_span">illum</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ab animi earum illum obcaecati laboriosam porro, tempora nobis esse placeat</p>
            </div>
            <div class="content_service f3">
                <p>Lorem ipsum dolor sit<span>consectetur</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ab animi earum illum obcaecati laboriosam porro, tempora nobis esse placeat</p>
            </div>
            <div class="content_service f4">
                <p>Lorem ipsum dolor sit amet <span class="color_span_2">consectetur</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ab animi earum illum obcaecati laboriosam porro, tempora nobis esse placeat</p>
            </div>
            <div class="content_service f2">
                <p>Lorem ipsum dolor sit<span>consectetur</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ab animi earum illum obcaecati laboriosam porro, tempora nobis esse placeat</p>
            </div>
            <div class="content_service f3">
                <p>Lorem ipsum dolor sit amet <span class="color_span_3">elit</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ab animi earum illum obcaecati laboriosam porro, tempora nobis esse placeat</p>
            </div>
            <div class="content_service f4">
                <p>Lorem ipsum dolor sit<span>consectetur</span></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ab animi earum illum obcaecati laboriosam porro, tempora nobis esse placeat.</p>
            </div>
        </div>
    </section>

    <!-- SECTION DONNEES -->

    <section class="donnees" id="donnees">
        <div class="title_line f2">
            <p>Chiffres</p>
            <div class="line"></div>
            <p>03</p>
        </div>
        <div class="container_donnees">
            <div class="content_donnees f2">
                <div class="circle_donnees">
                    <div class="card">
                        <div class="percent" style="--clr:#6862dc;--num:85;">
                            <div class="dot"></div>
                            <svg>
                                <circle cx='70' cy=70 r='70'></circle>
                                <circle cx='70' cy=70 r='70'></circle>
                            </svg>
                            <div class="number">
                                <h2>85<span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="content_donnees f3">
                <div class="circle_donnees">
                    <div class="card">
                        <div class="percent" style="--clr:#b771e8;--num:25;">
                            <div class="dot"></div>
                            <svg>
                                <circle cx='70' cy=70 r='70'></circle>
                                <circle cx='70' cy=70 r='70'></circle>
                            </svg>
                            <div class="number">
                                <h2>25<span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="content_donnees f4">
                <div class="circle_donnees">
                    <div class="card">
                        <div class="percent" style="--clr:#66adea;--num:50;">
                            <div class="dot"></div>
                            <svg>
                                <circle cx='70' cy=70 r='70'></circle>
                                <circle cx='70' cy=70 r='70'></circle>
                            </svg>
                            <div class="number">
                                <h2>50<span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="content_donnees f4">
                <div class="circle_donnees">
                    <div class="card">
                        <div class="percent" style="--clr:#b771e8;--num:90;">
                            <div class="dot"></div>
                            <svg>
                                <circle cx='70' cy=70 r='70'></circle>
                                <circle cx='70' cy=70 r='70'></circle>
                            </svg>
                            <div class="number">
                                <h2>90<span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <!-- Section Actus -->

    <section class="actus">
        <div class="title_line f2 margin">
            <p>Actualités</p>
            <div class="line"></div>
            <p>04</p>
        </div>
        <div class="container_actus padding">
            <div class="content_actus f2">
                <figure>
                    <img src="../asset/img/actus_1.png" alt="">
                </figure>
                <div class="text_actus">
                    <p>Lorem Ipsum dolor sit amet</p>
                    <div class="live_actus"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum Risus commodo.</p>
                </div>
            </div>
            <div class="content_actus f3">
                <figure>
                    <img src="../asset/img/actus_2.png" alt="">
                </figure>
                <div class="text_actus">
                    <p>Lorem Ipsum dolor</p>
                    <div class="live_actus"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum Risus commodo.</p>
                </div>
            </div>
            <div class="content_actus f4">
                <figure>
                    <img src="../asset/img/actus_3.png" alt="">
                </figure>
                <div class="text_actus">
                    <p>Lorem Ipsum dolor sit </p>
                    <div class="live_actus"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum Risus.</p>
                </div>
            </div>
        </div>
        <div class="image_actus f5">
            <img src="../asset/img/img_actus.png" alt="">
        </div>
    </section>

</main>

<script src="https://unpkg.com/scrollreveal"></script>
<script type="text/javascript" src="../asset/js/front-page.js"></script>
<script type="text/javascript" src="../asset/js/scrollreveal.js"></script>


<?php
include 'include/footer.php';
?>