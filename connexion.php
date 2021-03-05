<?php
include('navBar.php')
?>

<body class="bodyConnexion position-relative d-flex flex-column justify-content-center align-items-center">
<div class="containerSignInAndUp position-relative overflow-hidden" id="container">
    <div class="formContainer signUpContainer position-absolute h-100 w-50">
        <form class="d-flex flex-column justify-content-center text-center align-items-center h-100" action="formConnexion.php" method="post">
            <h1>Inscription</h1>
            <input class="w-100" type="text" name="lastname" placeholder="Nom" require/>
            <input class="w-100" type="text" name="firstname" placeholder="Prénom" require/>
            <input class="w-100" type="email" name="emailInscription" placeholder="Email" require/>
            <input class="w-100" type="password" name="passwordInscription" placeholder="Mot de passe" require/>
            <button class="signUp">S'inscrire</button>
        </form>
    </div>
    <div class="formContainer signInContainer position-absolute h-100 w-50">
        <form class="d-flex flex-column justify-content-center text-center align-items-center h-100" action="formConnexion.php" method="post">
            <h1>Connexion</h1>
            <input class="w-100" type="email" name="emailConnexion" placeholder="Email" require/>
            <input class="w-100" type="password" name="passwordConnexion" placeholder="Mot de passe" require/>
            <button class="signIn">Se connecter</button>
        </form>
    </div>
    <div class="overlayContainer position-absolute w-50 h-100 overflow-hidden">
        <div class="overlaySignInSignUp position-relative h-100">
            <div class="overlayPanel overlayLeft position-absolute d-flex flex-column justify-content-center align-items-center text-center h-100 w-50">
                <h1>Welcome Back !</h1>
                <p>Pour rester en contact avec nous, veuillez vous connecter avec vos informations personnelles</p>
                <button class="ghostSignIn" id="signIn">Se connecter</button>
            </div>
            <div class="overlayPanel overlayRight position-absolute d-flex flex-column justify-content-center align-items-center text-center h-100 w-50">
                <h1>Hello, Wanderer!</h1>
                <p>Entrez vos données personnelles et commencez votre voyage avec nous</p>
                <button class="ghostSignUp" id="signUp">S'inscrire</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="script/script.js"></script>
</body>