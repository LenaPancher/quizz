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
        <div class="col-12 text-center">
            <h2>Qui suis-je ?</h2>
            <p>Après avoir obtenue une licence STAPS APAS j'ai décidé de travailler pendant deux ans afin de
                financer mon diplôme de coach sportif. Hors, j'ai dû quitter le milieu sportif et donc me
                réorienter. Le domaine de l'informatique s'est alors présenté à moi et j'ai désormais le souhait de
                devenir développeuse full-stack.</p>
        </div>
    </div>
</section>

<section class="container">
    <h1 class="text-center mt-5 mb-5">COMPETENCES</h1>
    <div class="row d-flex">
        <div class="col-6 align-self-center">
            <h2>Langages informatiques</h2>
            <p>Grâce à mon école, mon entreprise et des sites de formations en ligne, j'ai pu découvrir, développer et
                acquérir des connaissances sur plusieurs langages.</p>
        </div>
        <div class="col-6">
            <div class="skill ml-auto">
                <div class="d-flex justify-content-between">
                    <p>HTML 5</p>
                    <p>80%</p>
                </div>
                <div class="bar">
                    <div class="progressBar1"></div>
                </div>
            </div>

            <div class="skill ml-auto">
                <div class="d-flex justify-content-between">
                    <p>CSS 3</p>
                    <p>80%</p>
                </div>
                <div class="bar">
                    <div class="progressBar2"></div>
                </div>
            </div>

            <div class="skill ml-auto">
                <div class="d-flex justify-content-between">
                    <p>JAVA</p>
                    <p>60%</p>
                </div>
                <div class="bar">
                    <div class="progressBar3"></div>
                </div>
            </div>

            <div class="skill ml-auto">
                <div class="d-flex justify-content-between">
                    <p>JAVASCRIPT</p>
                    <p>70%</p>
                </div>
                <div class="bar">
                    <div class="progressBar4"></div>
                </div>
            </div>

            <div class="skill ml-auto">
                <div class="d-flex justify-content-between">
                    <p>MySQL</p>
                    <p>70%</p>
                </div>
                <div class="bar">
                    <div class="progressBar5"></div>
                </div>
            </div>

            <div class="skill ml-auto">
                <div class="d-flex justify-content-between">
                    <p>PHP</p>
                    <p>60%</p>
                </div>
                <div class="bar">
                    <div class="progressBar6"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="container">
    <h1 class="text-center mt-5 mb-5">ECOLE ET ENTREPRISE</h1>
    <div class="main-timeline position-relative">
        <div class="timeline position-relative mb-5">
            <div class="icon position-absolute m-auto"></div>
            <div class="date-content float-left position-relative w-50 mt-3">
                <div class="date-outer text-center m-auto">
                    <span class="date w-100 m-auto position-absolute">
                        <span class="month h5 font-weight-bold">2020</span>
                        <span class="year d-block h2 font-weight-bold">2023</span>
                    </span>
                </div>
            </div>
            <div class="timeline-content float-right w-50 py-4 pl-5">
                <h5 class="title">Bachelor Développement Web et Mobile en alternance</h5>
                <p class="description">Coding factory by Itescia, école de la CCI de Paris IDF, Cergy</p>
            </div>
        </div>
        <div class="timeline position-relative mb-5">
            <div class="icon  position-absolute m-auto"></div>
            <div class="date-content float-right position-relative w-50 mt-3">
                <div class="date-outer text-center m-auto">
                <span class="date w-100 m-auto position-absolute">
                    <span class="month h5 font-weight-bold">Depuis</span>
                    <span class="year d-block h2 font-weight-bold">octobre</span>
                </span>
                </div>
            </div>
            <div class="timeline-content float-right w-50">
                <h5 class="title">Apprentie développeuse</h5>
                <p class="description">Helpline, Nanterre</p>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <h1 class="text-center mt-5 mb-5">PROJETS</h1>
    <p class="text-center">Mes projets ont été réalisés en autodidacte suite à l'apprentissage de certains langages.</p>
    <div class="projet-flex d-flex flex-wrap justify-content-around">
        <div class="bloc-projet text-center">
            <div class="blog-img">
                <a href="https://lenapancher.github.io/klia.github.io/" target="_blank"><img src="img/shop.png"></a>
            </div>
            <div class="bloc-text text-left">
                <div class="bloc-tag">
                    <h6><small>HTML - CSS - JAVASCRIPT</small></h6>
                </div>
                <div class="bloc-titre">
                    <h2>E-SHOP</h2>
                </div>
                <div class="bloc-date">
                    <p>Septembre 2020</p>
                </div>
                <div class="bloc-description">
                    <p>Ce site web a été développé au sein de mon école, en équipe, lors de notre semaine en JavaScript.
                    Ce projet a permis de lier nos connaissances et de travailler de façon Agile.</p>
                </div>
            </div>
        </div>

        <div class="bloc-projet">
            <div class="blog-img">
                <a href="https://github.com/LenaPancher/Forum" target="_blank"><img src="img/forum.png"></a>
            </div>
            <div class="bloc-text">
                <div class="bloc-tag">
                    <h6><small>PHP - MySQL</small></h6>
                </div>
                <div class="bloc-titre">
                    <h2>FORUM</h2>
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
            </div>
        </div>

        <div class="bloc-projet">
            <div class="blog-img">
                <a href="https://github.com/LenaPancher/JeuPlusOuMoins" target="_blank"><img src="img/plus_ou_moins.png"></a>
            </div>
            <div class="bloc-text">
                <div class="bloc-tag text-left">
                    <h6><small>HTML, CSS, JAVASCRIPT</small></h6>
                </div>
                <div class="bloc-titre">
                    <h2>JUSTE PRIX</h2>
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
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>

</body>
</html>