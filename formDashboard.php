<?php
require('sessionAndBdd.php');

// Ajouter un quiz
if (isset($_POST['addNameQuiz'], $_POST['id_category'])) {
    $rep = insertBdd()->query('SELECT nameQuiz, id_category FROM quiz WHERE nameQuiz = "' . $_POST['addNameQuiz'] . '" AND id_category = "' . $_POST['id_category'] . '"');
    $donnee = $rep->fetch();
    if ($donnee) {
        echo "<script>alert(\"Ce produit existe déjà\")</script>";
    } else {
        $req = insertBdd()->prepare('INSERT INTO quiz (nameQuiz, id_category) VALUES (:nameQuiz, :id_category)');
        $req->execute(array(
            ':nameQuiz' => $_POST['addNameQuiz'],
            ':id_category' => $_POST['id_category']
        ));
        ?>
        <script> location.replace("dashboard.php"); </script>
        <?php
    }
}

//Modifier un quiz
if (isset($_POST['id_quiz'], $_POST['modifyNameQuiz'], $_POST['id_category'])) {
    $rep = insertBdd()->query('SELECT nameQuiz, id_category FROM quiz WHERE nameQuiz = "' . $_POST['modifyNameQuiz'] . '" AND id_category = "' . $_POST['id_category'] . '"');
    $donnee = $rep->fetch();
    if ($donnee) {
        echo "<script>alert(\"Ce produit existe déjà\")</script>";
    } else {
        $req = insertBdd()->prepare('UPDATE quiz SET nameQuiz=:nameQuiz, id_category=:id_category WHERE id_quiz=:id_quiz');
        $req->execute(array(
            ':id_quiz' => $_POST['id_quiz'],
            ':nameQuiz' => $_POST['modifyNameQuiz'],
            ':id_category' => $_POST['id_category']

        ));
        ?>
        <script> location.replace("dashboard.php"); </script>
        <?php
    }
}

// Supprimer un quiz
if (isset($_POST['deleteQuiz'])) {
    $req = insertBdd()->prepare('DELETE FROM quiz WHERE id_quiz=:id_quiz');
    $req->execute(array(
        ':id_quiz' => $_POST['deleteQuiz'],
    ));
    ?>
    <script> location.replace("dashboard.php"); </script>
    <?php
}

// Ajouter une catégorie
if (isset($_POST['addNameCategory'])) {
    $rep = insertBdd()->query('SELECT id_category, nameCategory FROM category WHERE nameCategory = "' . $_POST['addNameCategory'] . '"');
    $donnee = $rep->fetch();
    if ($donnee) {
        echo "<script>alert(\"Cette catégorie existe déjà\")</script>";
    } else {
        $req = insertBdd()->prepare('INSERT INTO category (nameCategory) VALUES (:addNameCategory)');
        $req->execute(array(
            ':addNameCategory' => $_POST['addNameCategory']
        ));
        ?>
        <script> location.replace("dashboard.php"); </script>
        <?php
    }
}

//Modifier une catégorie
if (isset($_POST['modifyNameCategory'], $_POST['id_category'])) {
    $rep = insertBdd()->query('SELECT id_category, nameCategory FROM category WHERE nameCategory = "' . $_POST['modifyNameCategory'] . '"');
    $donnee = $rep->fetch();
    if ($donnee) {
        echo "<script>alert(\"Cette catégorie existe déjà\")</script>";
    } else {
        $req = insertBdd()->prepare('UPDATE category SET nameCategory=:modifyNameCategory WHERE id_category=:id_category');
        $req->execute(array(
            ':id_category' => $_POST['id_category'],
            ':modifyNameCategory' => $_POST['modifyNameCategory']
        ));
        ?>
        <script> location.replace("dashboard.php"); </script>
        <?php
    }
}

// Supprimer une catégorie
if (isset($_POST['deleteCategory'])) {
    $req = insertBdd()->prepare('DELETE FROM category WHERE id_category=:id_category');
    $req->execute(array(
        ':id_category' => $_POST['deleteCategory']
    ));
    ?>
    <script> location.replace("dashboard.php"); </script>
    <?php
}

//Modifier un status d'un utilisateur
if (isset($_POST['nameUser'], $_POST['status'])) {
    $req = insertBdd()->prepare('UPDATE user SET id_status=:status WHERE id_user=:id_user');
    $req->execute(array(
        ':id_user' => $_POST['nameUser'],
        ':status' => $_POST['status']
    ));
    ?>
    <script> location.replace("dashboard.php"); </script>
    <?php
}

// Supprimer un utilisateur
if (isset($_POST['deleteUser'])) {
    $req = insertBdd()->prepare('DELETE FROM user WHERE id_user=:id_user');
    $req->execute(array(
        ':id_user' => $_POST['deleteUser'],
    ));
    ?>
    <script> location.replace("dashboard.php"); </script>
    <?php
}
?>