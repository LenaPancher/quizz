<?php
include('navbar.php');
include('choiceDashboard.php');

?>

<body class="body">
<section class="container p-0">
    <div class="row my-5">
        <!-- Partie Quiz -->
        <div class="col-4 text-center" id="quiz">
            <div>
                <h3>
                    <img src="img/testing.png" width="10%" class="mr-3">
                    <button class="btnDashboard dropdown-toggle p-0" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Quiz
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" id="addQuiz">Ajouter</a>
                        <a class="dropdown-item" href="#" id="modifyQuiz">Modifier</a>
                        <a class="dropdown-item" href="#" id="deleteQuiz">Supprimer</a>
                    </div>
                </h3>
                <p>Nombre de quiz : <?php echo nb('quiz') ?></p>
            </div>

            <!-- Ajouter / Modifier / Supprimer -->
            <div class="modifyQuiz mt-5 py-4 blocDashBoard">
                <h4 class="mb-4">Modifier un quiz</h4>
                <form method="post" action="formDashboard.php">
                    <p class="">Quiz :
                        <select name="id_quiz">
                            <?php choiceQuiz(); ?>
                        </select>
                    </p>
                    <input type="text" name="modifyNameQuiz" placeholder="Nouveau nom du quiz" required> <br><br>
                    <p class="">Catégorie :
                        <select name="id_category">
                            <?php choiceCategory(); ?>
                        </select>
                    </p>
                    <br>
                    <input type="submit" class="btn btn-light" value="Modifier">
                </form>
            </div>
            <div class="deleteQuiz mt-5 py-4 blocDashBoard">
                <h4 class="mb-4">Supprimer un quiz</h4>
                <form method="post" action="formDashboard.php">
                    <p class="">Quiz :
                        <select name="deleteQuiz">
                            <?php choiceQuiz(); ?>
                        </select>
                    </p>
                    <br>
                    <input type="submit" class="btn btn-light" value="Supprimer">
                </form>
            </div>
        </div>

        <!-- Partie Catégorie -->
        <div class="col-4 text-center">
            <div>
                <h3>
                    <img src="img/testing.png" width="10%" class="mr-3">
                    <button class="btnDashboard dropdown-toggle p-0" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Catégorie
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Ajouter</a>
                        <a class="dropdown-item" href="#">Modifier</a>
                        <a class="dropdown-item" href="#">Supprimer</a>
                    </div>
                </h3>
                <p>Nombre de Catégorie : <?php echo nb('category'); ?></p>
            </div>

            <!-- Ajouter / Modifier / Supprimer -->
            <div class="addCategory mt-5 py-4 blocDashBoard">
                <h4 class="mb-4">Ajouter une catégorie</h4>
                <form method="post" action="formDashboard.php">
                    <input type="text" name="addNameCategory" placeholder="Nom de la catégorie" required> <br><br>
                    <br>
                    <input type="submit" class="btn btn-light" value="Ajouter">
                </form>
            </div>
            <div class="modifyCategory mt-5 py-4 blocDashBoard">
                <h4 class="mb-4">Modifier une catégorie</h4>
                <form method="post" action="formDashboard.php">
                    <p class="">Catégorie :
                        <select name="id_category">
                            <?php choiceCategory(); ?>
                        </select>
                    </p>
                    <input type="text" name="modifyNameCategory" placeholder="Nom de la catégorie" required> <br><br>
                    <br>
                    <input type="submit" class="btn btn-light" value="Modifier"</input>
                </form>
            </div>
            <div class="deleteQuiz mt-5 py-4 blocDashBoard">
                <h4 class="mb-4">Supprimer une catégorie</h4>
                <form method="post" action="formDashboard.php">
                    <p class="">Catégorie :
                        <select name="deleteCategory">
                            <?php choiceCategory(); ?>
                        </select>
                    </p>
                    <br>
                    <input type="submit" class="btn btn-light" value="Supprimer">
                </form>
            </div>
        </div>

        <!-- Partie Utilisateur -->
        <div class="col-4 text-center">
            <div>
                <h3>
                    <img src="img/testing.png" width="10%" class="mr-3">
                    <button class="btnDashboard dropdown-toggle p-0" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Utilisateur
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Modifier</a>
                        <a class="dropdown-item" href="#">Supprimer</a>
                    </div>
                </h3>
                <p>Nombre d'utilisateur : <?php echo nb('user'); ?></p>
            </div>

            <!-- Modifier / Supprimer -->
            <div class="modifyUser mt-5 py-4 blocDashBoard">
                <h4 class="mb-4">Modifier le status</h4>
                <form method="post" action="formDashboard.php">
                    <p class="">Utilisateur :
                        <select name="nameUser">
                            <?php choiceUser(); ?>
                        </select>
                    </p>
                    <p class="">Status :
                        <select name="status">
                            <?php choiceStatus(); ?>
                        </select>
                    </p>
                    <br>
                    <input type="submit" class="btn btn-light" value="Modifier">
                </form>
            </div>
            <div class="deleteUser mt-5 py-4 blocDashBoard">
                <h4 class="mb-4">Supprimer un utilisateur</h4>
                <form method="post" action="formDashboard.php">
                    <p class="">Utilisateur :
                        <select name="deleteUser">
                            <?php choiceUser(); ?>
                        </select>
                    </p>
                    <br>
                    <input type="submit" class="btn btn-light" value="Supprimer">
                </form>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="script/dashboard.js"></script>
</body>