<?php
include('navBar.php')
?>

<body class="body">
    <div class="containerSignInAndUp" id="container">
        <div class="formContainer signUpContainer">
            <form action="#">
                <h1>Inscription</h1>
                <input type="text" placeholder="Prénom" require />
                <input type="email" placeholder="Email" require />
                <input type="password" placeholder="Mot de passe" require />
                <button class="signUp">S'inscrire</button>
            </form>
        </div>
        <div class="formContainer signInContainer">
            <form action="#">
                <h1>Connexion</h1>
                <input type="email" placeholder="Email" require />
                <input type="password" placeholder="Mot de passe" require />
                <button class="signIn">Se connecter</button>
            </form>
        </div>
        <div class="overlayContainer">
            <div class="overlaySignInSignUp">
                <div class="overlayPanel overlayLeft">
                    <h1>Welcome Back !</h1>
                    <p>Pour rester en contact avec nous, veuillez vous connecter avec vos informations personnelles</p>
                    <button class="ghostSignIn" id="signIn">Se connecter</button>
                </div>
                <div class="overlayPanel overlayRight">
                    <h1>Hello, Wanderer!</h1>
                    <p>Entrez vos données personnelles et commencez votre voyage avec nous</p>
                    <button class="ghostSignUp" id="signUp">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
</body>