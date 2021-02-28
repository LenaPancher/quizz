<?php
require('session.php');

// Inscription
// Vérification de la validité des informations
if (isset($_POST['lastname'], $_POST['firstname'], $_POST['emailInscription'], $_POST['passwordInscription'])) {
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $emailInscription = htmlspecialchars($_POST['emailInscription']);
    $passwordInscription = $_POST['passwordInscription'];

    // Vérification du pseudo et du mail
    $reponse = $bdd->query('SELECT lastname, firstname, email FROM user WHERE lastname = "' . $lastname . '" OR firstname = "' . $firstname . '" OR email = "' . $emailInscription . '"');
    if (!$donnees = $reponse->fetch()) {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['emailInscription'])) {
            if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $_POST['passwordInscription'])) {
                // Hachage du mot de passe
                $password_hache = password_hash($passwordInscription, PASSWORD_DEFAULT);
                // Insertion
                $req = $bdd->prepare('INSERT INTO user(lastname, firstname, email, password) VALUES(:lastname, :firstname, :email, :password)');
                $req->execute(array(
                    ':lastname' => $lastname,
                    ':firstname' => $firstname,
                    ':email' => $emailInscription,
                    ':password'=> $password_hache
                ));
                echo "<script>alert(\"Inscription réussi, vous pouvez désormais vous connecter !\")</script>";
                echo "<script> location.replace('connexion.php'); </script>";
            } else {
                echo "<script>alert(\"Mot de passe invalide !\")</script>";
                echo "<script> location.replace('connexion.php'); </script>";
            }
        } else {
            echo "<script>alert(\"L'adresse email n'est pas valide !\")</script>";
            echo "<script> location.replace('connexion.php'); </script>";
        }
    } else {
        echo "<script>alert(\"Le compte est déjà crée, veuillez vous connecter !\")</script>";
        echo "<script> location.replace('connexion.php'); </script>";
    }
}

// Connexion
// Récupération de l'utilisateur et de son pass hashé
if (isset($_POST['emailConnexion'], $_POST['passwordConnexion'])) {
    $emailConnexion = htmlspecialchars($_POST['emailConnexion']);
    $reponse = $bdd->prepare('SELECT id, firstname, email, password, status FROM user WHERE email = :emailConnexion');
    $reponse->execute(array(
        ':emailConnexion' => $emailConnexion));
    $resultat = $reponse->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['passwordConnexion'], $resultat['password']);

    if ($isPasswordCorrect) {
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['status'] = $resultat['status'];
        $_SESSION['firstname'] = $resultat['firstname'];
        echo "<script> location.replace('index.php'); </script>";
    } else {
        echo "<script>alert(\"Mauvais identifiant ou mot de passe !\")</script>";
        echo "<script> location.replace('connexion.php'); </script>";
    }
}

?>
