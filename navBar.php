<?php
require('sessionAndBdd.php');
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Quizz</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-default fixed-top">
        <a href="index.php" class="mx-5">
            <img src="img/logo.png" alt="logo" height="60px" width="60px"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse my-2 justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link active" href="index.php">Accueil</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quizz
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Tous les thèmes</a>
                        <a class="dropdown-item" href="#">Test</a>
                        <a class="dropdown-item" href="#">Test</a>
                        <a class="dropdown-item" href="#">Test</a>
                        <a class="dropdown-item" href="#">Test</a>
                    </div>
                </li>
                <?php
                if (isset($_SESSION['status'])) {
                    if (!empty($_SESSION['status'] == 'Client')) {
                        ?>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="profil.php">Mon Profil</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="dashboard.php">Tableau de Bord</a>
                        </li>
                        <?php
                    }
                }
                ?>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="aboutMe.php">A Propos</a>
                </li>
                <?php
                if (isset($_SESSION['id'])) {
                    ?>
                    <li class="nav-item mx-2">
                        <form method="post" action="formDeconnexion.php">
                            <a type="submit" class="nav-link coAndDeco p-2" href="formDeconnexion.php">Déconnexion</a>
                        </form>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item mx-2">
                        <a class="nav-link coAndDeco p-2" href="connexion.php">Connexion</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</header>

<script type="text/javascript" src="script/navbar.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>