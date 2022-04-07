<?php
/* use Core\Routeur\Routeur;

define("ROOT", dirname(__DIR__));
require_once ROOT . "/vendor/autoload.php";
Routeur::Routes(); */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Burger Burger no mi</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="test.css">
    </head>
    <body>

        <!-- balise pour le haut de page -->
        <header>

            <div class="title-box">
                <!-- titre pour ma page -->
                <h1>Burger Burger No Mi</h1>
                <!-- slogan pour ma page -->
                <p>Le Shin Sekai des burger</p>
            </div>

            <!-- slider d'images -->
            <div class="slider">
                <div class="slides">
                    <div class="slide"><img src="images/1.png"></div>
                </div>
            </div>

        </header>

        <div id="sticky-header" class="section-menu">
            <!-- menu de navigation -->
            <nav class="menu">
                <ul>
                    <li class="nav-item menu"><a href="#pizza"><img src="images/unknown.png"> Menu</a></li>
                    <li class="nav-item burger"><a href="#salade">Burger</a></li>
                    <li class="nav-item dessert"><a href="#burger">Dessert</a></li>
                    <li class="nav-item autres"><a href="#boisson">Autres</a></li>
                </ul>
            </nav>
        </div>

        <main id="main">

            <!-- section pizza -->
            <section id="menu" class="menu">

                <div class="item">
                    <img src="images/menu1.jpg">
                    <div class="item-infos">
                        <h3>Gomu Gomu</h3>
                        <hr>
                        <p>Pain, Steak 180g, Tomate, Cheddar, Salade + frites + boissons</p>
                        <p class="prix">10€00</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/menu2.jpg">
                    <div class="item-infos">
                        <h3>Menu 2</h3>
                        <hr>
                        <p>Description</p>
                        <p class="prix">11€00</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/menu3.jpg">
                    <div class="item-infos">
                        <h3>Menu 3</h3>
                        <hr>
                        <p>CDescription</p>
                        <p class="prix">12€00</p>
                    </div>
                </div>

            </section>

            <!-- section pizza -->
            <section id="burger" class="burger">

                <div class="item">
                    <img src="images/burger1.jpg">
                    <div class="item-infos">
                        <h3> Nom </h3>
                        <hr>
                        <p>Poulet, mache, betterave, avocat</p>
                        <p class="prix">7€00</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/burger2.jpg">
                    <div class="item-infos">
                        <h3> Nom </h3>
                        <hr>
                        <p>description</p>
                        <p class="prix">7,50€</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/burger3.jpg">
                    <div class="item-infos">
                        <h3> Nom </h3>
                        <hr>
                        <p>Description</p>
                        <p class="prix">9€00</p>
                    </div>
                </div>

            </section>

            <!-- section burger -->
            <section id="burger" class="burger">

                <div class="item">
                    <img src="images/dessert1.jpg">
                    <div class="item-infos">
                        <h3>Légendaire</h3>
                        <hr>
                        <p>description</p>
                        <p class="prix">4€00</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/dessert2.jpg">
                    <div class="item-infos">
                        <h3>Amiral</h3>
                        <hr>
                        <p>description</p>
                        <p class="prix">5€00</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/dessert3.jpg">
                    <div class="item-infos">
                        <h3>Shin Sekai</h3>
                        <hr>
                        <p>description</p>
                        <p class="prix">5€00</p>
                    </div>
                </div>

            </section>

            <!-- section boisson -->
            <section id="boisson" class="boisson">

                <div class="item">
                    <img src="images/boisson1.jpg">
                    <div class="item-infos">
                        <h3>Jus multifruits</h3>
                        <hr>
                        <p>Banane, orange, fraise</p>
                        <p class="prix">3€00</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/boisson2.jpg">
                    <div class="item-infos">
                        <h3>Jus de pastèque</h3>
                        <hr>
                        <p>La pastèque du jardin</p>
                        <p class="prix">2€20</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/boisson3.jpg">
                    <div class="item-infos">
                        <h3>Café</h3>
                        <hr>
                        <p>Nexpresso, café, ..</p>
                        <p class="prix">1€20</p>
                    </div>
                </div>

            </section>


        </main>

        <!-- pied de page -->
        <!-- <footer>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1215.8477370203423!2d7.009924806269946!3d43.548428402165804!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ce81882273aecb%3A0xbd005f6dea4c4a9c!2zT-KAmUtleSBCZWFjaA!5e0!3m2!1sfr!2sfr!4v1588434675888!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
        </footer> -->

    </body>
</html>
