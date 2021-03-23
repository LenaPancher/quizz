<?php
function nb($tableBdd)
{
    $reponse = insertBdd()->query('SELECT COUNT(id_' . $tableBdd . ') FROM ' . $tableBdd);
    $resultat = $reponse->fetch();
    return $resultat[0];
}

function choiceCategory()
{
    $reponse = insertBdd()->query('SELECT id_category, nameCategory FROM category');
    while ($donnees = $reponse->fetch()) {
        ?>
        <option value="<?php echo $donnees['id_category'] ?>"><?php echo $donnees['nameCategory'] ?></option>
        <?php
    }
}

function choiceQuiz()
{
    $reponse = insertBdd()->query('SELECT id_quiz, nameQuiz FROM quiz');
    while ($donnees = $reponse->fetch()) {
        ?>
        <option value="<?php echo $donnees['id_quiz'] ?>"><?php echo $donnees['nameQuiz'] ?></option>
        <?php
    }
}

function choiceUser()
{
    $reponse = insertBdd()->query('SELECT id_user, firstname, lastname FROM user');
    while ($donnees = $reponse->fetch()) {
        ?>
        <option value="<?php echo $donnees['id_user'] ?>"><?php echo $donnees['firstname'] ?><?php echo $donnees['lastname'] ?></option>
        <?php
    }
}

function choiceStatus()
{
    $reponse = insertBdd()->query('SELECT id_status, status FROM status');
    while ($donnees = $reponse->fetch()) {
        ?>
        <option value="<?php echo $donnees['id_status'] ?>"><?php echo $donnees['status'] ?></option>
        <?php
    }
}

?>
