<?php
include('navbar.php');
?>

<body class="body">

<section class="headerAboutMe container-fluid p-0 d-flex text-center">
    <div class="row mt-5 mb-5 w-100">
        <div class="col-7 align-self-center">
            <h1>Pancher Léna</h1>
            <hr/>
            <p>Développeuse / full-stack</p>
            <div class="align-social">
                <a href="https://github.com/LenaPancher" target="_blanck"><i class="fab fa-github fa-2x space"></i></a>
                <a href="https://www.linkedin.com/in/lenapancher/" target="_blanck"><i
                            class="fab fa-linkedin fa-2x space"></i></a>
                <a href="mailto:lenapancher@gmail.com" target="_blanck"><i class="fas fa-envelope fa-2x space"></i></a>
            </div>
        </div>
        <div class="col-5">
            <span class="image"><img src="img/moi.png" alt="Photo Léna Pancher"/></span>
        </div>
    </div>
</section>

<section class="container">
    <h1 class="text-center mt-5 mb-5">A PROPOS</h1>
    <div class="row d-flex">
        <div class="col-9">
            <h2>Qui suis-je ?</h2>
            <p>Après avoir obtenue une licence STAPS APAS j'ai décidé de travailler pendant deux ans afin de
                financer mon diplôme de coach sportif. Hors, j'ai dû quitter le milieu sportif et donc me
                réorienter. Le domaine de l'informatique s'est alors présenté à moi et j'ai désormais le souhait de
                devenir développeuse full-stack.</p>
        </div>
        <div class="col-3 align-self-center coordonneeAboutMe">
            <ul>
                <li>06 06 06 06 06</li>
                <a href="mailto:lenapancher@gmail.com" target="_blank">
                    <li>lenapancher@gmail.com</li>
                </a>
                <li>Paris, Ile-de-France</li>
            </ul>
        </div>
    </div>
</section>

<section class="container">
    <h1 class="text-center mt-5 mb-5">COMPETENCES</h1>
    <div class="row d-flex">
        <div class="col-5 align-self-center">
            <h2>Langages informatiques</h2>
            <p>Grâce à des sites de formations en ligne, tel que OpenClassrooms, j'ai pu découvrir, développer et
                acquérir des connaissances sur plusieurs langages.</p>
        </div>
        <div class="col-7">
            <div class="skill">
                <div class="langage">
                    <p>HTML 5</p>
                    <p>70%</p>
                </div>
                <div class="bar">
                    <div class="progressBar1"></div>
                </div>
            </div>

            <div class="skill">
                <div class="langage">
                    <p>CSS 3</p>
                    <p>70%</p>
                </div>
                <div class="bar">
                    <div class="progressBar2"></div>
                </div>
            </div>

            <div class="skill">
                <div class="langage">
                    <p>JAVA</p>
                    <p>30%</p>
                </div>
                <div class="bar">
                    <div class="progressBar3"></div>
                </div>
            </div>

            <div class="skill">
                <div class="langage">
                    <p>JAVASCRIPT</p>
                    <p>60%</p>
                </div>
                <div class="bar">
                    <div class="progressBar4"></div>
                </div>
            </div>

            <div class="skill">
                <div class="langage">
                    <p>MySQL</p>
                    <p>50%</p>
                </div>
                <div class="bar">
                    <div class="progressBar5"></div>
                </div>
            </div>

            <div class="skill">
                <div class="langage">
                    <p>PHP</p>
                    <p>50%</p>
                </div>
                <div class="bar">
                    <div class="progressBar6"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="timeline-section" class="container">
    <h1 class="text-center mt-5 mb-5">ECOLE ET ENTREPRISE</h1>
    <div class="timeline-container">
        <div class="timeline">
            <ul>
                <li>
                    <div class="timeline-content">
                        <h2 class="date">Septembre 2020 - Septembre 2023</h2>
                        <h1>Bachelor Développement Web et Mobile en alternance</h1>
                        <p>Coding factory by Itescia, école de la CCI de Paris IDF, Cergy</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h2 class="date">Octobre 2020 à maintenant</h2>
                        <h1>Apprentie développeuse</h1>
                        <p>Helpline</p>
                        <img>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="container">
    <h1 class="text-center mt-5 mb-5">PROJETS</h1>
    <p class="text-center">Mes projets ont été réalisés en autodidacte suite à l'apprentissage de certains
        langages.</p>
    <div class="projet-flex">
        <div class="bloc-projet">
            <div class="blog-img">
                <a href="https://github.com/LenaPancher/JeuPlusOuMoins" target="_blank"><img src="images/forum.png"></a>
            </div>
            <div class="bloc-text">
                <div class="bloc-tag">
                    <h6><small>PHP - MySQL</small></h6>
                </div>
                <div class="bloc-titre">
                    <h4>FORUM</h4>
                </div>
                <div class="bloc-date">
                    <p>Juillet 2020</p>
                </div>
                <div class="bloc-description">
                    <p>Ce projet a été crée afin de découvrir et de développer des compétences sur les langages PHP et
                        MYSQL.
                        L'objectif est de pouvoir communiquer avec la base de donnée pour ajouter des posts, des
                        commentaires, pour se connecter, se déconnecter etc.</p>
                </div>
                <div class="bloc-auteur">
                    <p>Pancher Léna</p>
                </div>
            </div>
        </div>

        <div class="bloc-projet">
            <div class="blog-img">
                <a href="https://github.com/LenaPancher/cv" target="_blank"><img src="images/cv.png"></a>
            </div>
            <div class="bloc-text">
                <div class="bloc-tag">
                    <h6><small>HTML - CSS - BOOTSTRAP - PHP</small></h6>
                </div>
                <div class="bloc-titre">
                    <h4>CV</h4>
                </div>
                <div class="bloc-date">
                    <p>Mai 2020</p>
                </div>
                <div class="bloc-description">
                    <p>Ce site web a été développé en HTML et CSS lorsque j'ai découvert le code.
                        Il a été modifié et amélioré grâce à mes nouvelles connaissances, comme le framework Bootstrap.
                        Il a pour but d'afficher mon cv comme un véritable site web.</p>
                </div>
                <div class="bloc-auteur">
                    <p>Pancher Léna</p>
                </div>
            </div>
        </div>

        <div class="bloc-projet">
            <div class="blog-img">
                <a href="https://github.com/LenaPancher/Forum" target="_blank"><img src="images/plus_ou_moins.png"></a>
            </div>
            <div class="bloc-text">
                <div class="bloc-tag">
                    <h6><small>HTML, CSS, JAVASCRIPT</small></h6>
                </div>
                <div class="bloc-titre">
                    <h4>JUSTE PRIX</h4>
                </div>
                <div class="bloc-date">
                    <p>Avril 2020</p>
                </div>
                <div class="bloc-description">
                    <p>Ce jeu a été concu pour mettre en pratique mes connaissances sur le langage JavaScript.
                        L'objectif de ce jeu est de retrouver le bon nombre choisi aléatoirement par l'ordinateur, avec
                        des indices tel que "c'est plus" ou "c'est moins".
                    </p>
                </div>
                <div class="bloc-auteur">
                    <p>Pancher Léna</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PROJET -->

<!-- FOOTER -->
<footer class="footer">
    <div class="align-social">
        <a href="https://github.com/LenaPancher" target="_blanck"><i class="fab fa-github fa-2x space"></i></a>
        <a href="https://www.linkedin.com/in/lenapancher/" target="_blanck"><i class="fab fa-linkedin fa-2x space"></i></a>
        <a href="mailto:lenapancher@gmail.com" target="_blanck"><i class="fas fa-envelope fa-2x space"></i></a>
    </div>
    <p class="copyright">Copyright - Pancher Léna - ©2020 Tous droits réservés.</p>
    </p>
</footer>
<!-- FOOTER -->

</body>
</html>