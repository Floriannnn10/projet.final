<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boutiq.css">
</head>

<body>
    <!-- L'instruction 'include' en PHP est utilisée pour inclure le contenu d'un fichier externe, Cela permet de réutiliser le même code de navigation sur plusieurs pages de votre site web, ce qui facilite la maintenance et la mise à jour du site. -->
    <?php include 'navbar.php'  ?>

    <br><br>
    <!-- bouttons de redirection -->
    <div class="buttons">
        <button class="button">
            <span class="button-content">Ordinateurs</span>
        </button>

        <button class="button">
            <span class="button-content">Accessoires & Périphériques</span>
        </button>

        <button class="button">
            <span class="button-content">Tablettes</span>
        </button>
    </div>
    <br>

    <!-- DISPOSITION PC , TABLETTES & ACCESSOIRES  -->
    <!-- dispositions des Ordinateurs  -->
    <h1 class="dispo-pc" style="margin-left: 20px;  text-decoration:underline">Nos Ordinateurs</h1>
    <br>
    <br>
    <br>
    <!-- responsive mais pas en petit ecran ( appliquer le margin-top en petit ecran) {{1}} -->
    <div class="all-pc-1">

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>
    </div>

    <!-- {{2}} -->
    <div class="all-pc-2">

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>
    </div>


    <!-- {{3}} -->
    <div class="all-pc-3">

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>

        <div class="card">
            <!-- image des pc + text description  -->
            <img src="img/pc.jpg-removebg-preview.png" height="260px" width="460px" alt="">
            <div class="card__content text-center">
                <p class="card__title">Pc 1</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <!-- /* boutton telecharger et boutton personnalisation */ -->
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/Panier.png" alt="panier de validation" height="20px"></button>
                </a>
                <a href="#">
                    <button type="button" style="margin-top: 10px;" class="btn btn-info"><img src="img/perso-removebg-preview.png" alt="personnalisation" height="25px"></button>
                </a>
            </div>
        </div>
    </div>

<br>
<br>
<br>
<hr>
    <!-- dispositions des Accessoires & Périphériques -->
    <h1 class="dispo-pc" style="margin-left: 20px; text-decoration:underline">Nos Accessoires & Périphériques</h1>





























    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <?php include 'footer.php'  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>