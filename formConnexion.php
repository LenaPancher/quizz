<?php
require('sessionAndBdd.php');

// Inscription
// Vérification de la validité des informations
if (isset($_POST['lastname'], $_POST['firstname'], $_POST['emailInscription'], $_POST['passwordInscription'])) {
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $emailInscription = htmlspecialchars($_POST['emailInscription']);
    $passwordInscription = $_POST['passwordInscription'];

    // Vérification du pseudo et du mail
    $reponse = insertBdd()->query('SELECT lastname, firstname, email FROM user WHERE lastname = "' . $lastname . '" OR firstname = "' . $firstname . '" OR email = "' . $emailInscription . '"');
    if (!$donnees = $reponse->fetch()) {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['emailInscription'])) {
            if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $_POST['passwordInscription'])) {
                // Hachage du mot de passe
                $password_hache = password_hash($passwordInscription, PASSWORD_DEFAULT);
                // Insertion
                $req = insertBdd()->prepare('INSERT INTO user(lastname, firstname, email, password, id_status) VALUES(:lastname, :firstname, :email, :password, :id_status)');
                $req->execute(array(
                    ':lastname' => $lastname,
                    ':firstname' => $firstname,
                    ':email' => $emailInscription,
                    ':password'=> $password_hache,
                    ':id_status'=>1
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
    $reponse = insertBdd()->prepare('SELECT U.id_user, U.firstname, U.email, U.password, S.status FROM user as U, status as S WHERE U.id_status = S.id_status AND email = :emailConnexion');
    $reponse->execute(array(
        ':emailConnexion' => $emailConnexion));
    $resultat = $reponse->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['passwordConnexion'], $resultat['password']);

    if ($isPasswordCorrect) {
        $_SESSION['id'] = $resultat['id_user'];
        $_SESSION['status'] = $resultat['status'];
        $_SESSION['firstname'] = $resultat['firstname'];
        echo "<script> location.replace('index.php'); </script>";
    } else {
        echo "<script>alert(\"Mauvais identifiant ou mot de passe !\")</script>";
        echo "<script> location.replace('connexion.php'); </script>";
    }
}

?>
