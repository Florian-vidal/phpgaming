<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpGaming</title>
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Permanent+Marker|Press+Start+2P|Saira&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <!------------------------------------------------NAVBAR-------------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">phpGaming</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Panier</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Jeux
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Sélection par titre</a>
                            <a class="dropdown-item" href="#">Sélection par plateform</a>
                            <a class="dropdown-item" href="#">Sélection par éditeur</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Rétro</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">OK</button>
                </form>
            </div>
        </nav>
    </header>
    <!------------------------------------------------JUMBOTRON-------------------------------------------------------->
    <h1>T'as vu mon premier commit</h1>

    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="h1banniere">Votre super site de jeux vidéo !</h1>
                <p>Bienvenue sur le super site consacré aux jeux vidéo.</p>
            </div>
        </div>
    </section>
    <!------------------------------------------------CAROUSEL-------------------------------------------------------->
    <section>
        <h1 class="h1title">EN CE MOMENT</h1>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="assets/img/carousel4.jpg" class="img-fluid offset-lg-2" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel2.jpg" class="img-fluid offset-lg-2" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel3.jpg" class="img-fluid offset-lg-2" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left" style="color: black"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <i class="fa fa-chevron-right" style="color: black"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <hr>
    <!------------------------------------------------NOUVEAUTES-------------------------------------------------------->
    <section>
        <div class="container">
            <h1 class="h1title">ILS FONT L'ACTU !</h1>
            <div class="card-deck">
                <div class="card">
                    <img src="assets/img/codevein.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Code Vein</h5>
                        <p class="card-plateforme">PS4</p>
                        <p class="card-stock">En stock</p>
                        <p class="card-price">54,99€</p>
                        <a href="#" class="btn btn-info">Voir plus</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/fifa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fifa 2020</h5>
                        <p class="card-plateforme">XBOX One</p>
                        <p class="card-stock">En stock</p>
                        <p class="card-price">54,99€</p>
                        <a href="#" class="btn btn-info">Voir plus</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/ghostrecon.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">GhostRecon: Breakpoint</h5>
                        <p class="card-plateforme">PS4</p>
                        <p class="card-stock">En stock</p>
                        <p class="card-price">54,99€</p>
                        <a href="#" class="btn btn-info">Voir plus</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/theouterworlds.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">The Outer Worlds</h5>
                        <p class="card-plateforme">XBOX One</p>
                        <p class="card-stock">En stock</p>
                        <p class="card-price">54,99€</p>
                        <a href="#" class="btn btn-info">Voir plus</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="card-deck">
                <div class="card">
                    <img src="assets/img/medievil.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Medie Evil</h5>
                        <p class="card-plateforme">PS4</p>
                        <p class="card-stock">En stock</p>
                        <p class="card-price">54,99€</p>
                        <a href="#" class="btn btn-info">Voir plus</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/callof.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Call Of Duty : Modern Warframe</h5>
                        <p class="card-plateforme">PS4</p>
                        <p class="card-stock">En stock</p>
                        <p class="card-price">54,99€</p>
                        <a href="#" class="btn btn-info">Voir plus</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/w2k20.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">W2K2020</h5>
                        <p class="card-plateforme">PS4</p>
                        <p class="card-stock">En stock</p>
                        <p class="card-price">54,99€</p>
                        <a href="#" class="btn btn-info">Voir plus</a>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/thewitcher.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">The Witcher 3: Wild Hunt</h5>
                        <p class="card-plateforme">Nintendo Switch</p>
                        <p class="card-stock">En stock</p>
                        <p class="card-price">54,99€</p>
                        <a href="#" class="btn btn-info">Voir plus</a>
                    </div>
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-info btn-lg btn-block">Voir tous les jeux</button>
        </div>
    </section>
    <hr>
    <!---------------------------------------------------FOOTER-------------------------------------------------------->
    <div>
        <div class="container-fluid footer">
            <div class="row">
                <!-------------------------------------Réseaux Sociaux------------------------------------------------->
                <div class="col-lg-4 text-center">
                    <h2 class="h2title m-4">Réseaux Sociaux</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <h2 class="h2title m-4">Retrouvez notre magasin au coeur de Bordeaux, en Gironde</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <h2 class="h2title m-4">Contact</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="row mb-5" style="justify-content: center">
                        <div class="col-4 col-lg-2">
                            <img src="assets/img/facebookicon.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-4 col-lg-2">
                            <img src="assets/img/twittericon.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-4 col-lg-2">
                            <img src="assets/img/instagramicon.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <label for="exampleInputEmail1">Offres et nouveautés en avant-première.</label>
                    <form class="form-inline my-2 my-lg-0" style="justify-content: center">
                        <input class="form-control m-sm-3" type="email" placeholder="Tapez votre adresse" aria-label="Search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">OK</button>
                    </form>
                    <p>Vous pouvez à tout moment vous désinscrire via le lien de désabonnement présent dans la newsletter.
                        En savoir plus sur notre politique de protection des données personnelles, cliquez ici</p>
                </div>
                <!-----------------------------------------Google Maps------------------------------------------------->
                <div class="col-lg-4 text-center">
                    <div class="coordonnees">
                        <p>phpGaming
                            <br>
                            34 Cours Clémenceau, 33000 Bordeaux
                            <br>
                            Téléphone:  0667823245
                            <br>
                            Horaires: Du Lundi au Vendredi de 9h à 19h
                        </p>
                    </div>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.9220945195784!2d-0.5810551845542706!3d44.84351988266385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527dc3f618e6d%3A0xacfc76da5d346144!2sCours%20Georges%20Clemenceau%2C%2033000%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1572099996054!5m2!1sfr!2sfr" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <!-----------------------------------------------Contact----------------------------------------------->
                <div class="col-lg-4 text-center">
                        <div class="form-group label-floating">
                            <label class="control-label" for="name">Nom</label>
                            <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- email -->
                        <div class="form-group label-floating">
                            <label class="control-label" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Sujet -->
                        <div class="form-group label-floating">
                            <label class="control-label">Sujet</label>
                            <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Message -->
                        <div class="form-group label-floating">
                            <label for="message" class="control-label">Message</label>
                            <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!-- Submit -->
                        <div class="form-submit m-5">
                            <button class="btn btn-primary" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i>Envoyer</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


   <?php

   $bdd = new PDO("mysql:host=localhost;dbname=phpgaming", "root", "root");
   $requete = $bdd->query("SELECT * FROM customer");
   $resultat = $requete->fetch();
   echo $resultat['lastname'];

    ?>

    </footer>
    <script src="https://kit.fontawesome.com/835008fdf4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>