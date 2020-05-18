<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cvtest.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Montserrat&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script src="cvtest.js"></script>

</head>

<body>

    <!-- Page du début -->
    <div class="page1" style="position: relative;">
        <div class="photo" style="position: absolute;">
            <input id="trigger" type="checkbox" hidden>
            <label class="trigger" for="trigger"></label>

            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="nom" style="position: absolute;">
                <p class="nom2">Julie SAINT MARTIN</p>
            </div>
        </div>
    </div>

    <!-- Page d'accueil -->
    <div style="position: relative;" class="page2">
        <button class="case case1">Profil</button>
        <button class="case case2">Formations</button>
        <button class="case case3">Expériences</button>
        <button class="case case4">Compétences</button>
        <button class="case case5">Intérêts</button>
        <button class="case case6">Formulaire</button>
    </div>

    <!-- Page profil -->
    <div style="position: relative;" class="pageprofil">
        <!-- Bouton home -->
        <button class="home"></button>
        <!-- Titre profil -->
        <button class="titre profil">Profil</button>
        <!-- Case "informations personnelles" -->
        <div class="infos">
            <span>Informations personnelles </span>
            <!-- Texte à l'intérieur de la case -->
            <p class="infostexte">
                Joinville-le-Pont (94) <br><br><br><br><br>
                jstmartin17@gmail.com <br><br><br><br><br>
                06 24 17 61 91 <br><br><br><br><br>
                <a class="infosite" href="https://jstmartin17.wixsite.com/website"
                    target="_bank">jstmartin17.wixsite.com/website</a></p>
            <!-- Logo des informations -->
            <div class="adresse"></div>
            <div class="mail adresse"></div>
            <div class="tel adresse"></div>
            <div class="site adresse"></div>
        </div>
         <!-- Case "qui suis-je ?" -->
        <div class="infos infos2">
            <span>Qui suis-je ?</span>
            <!-- Texte à l'intérieur de la case -->
            <p class="infostexte infostexte2">
                Je suis actuellement en 1ère année de DUT Métiers du Multimédia et de l’Internet.
                Après avoir obtenu mon diplôme MMI, j’aimerais continuer mes études dans une
                école d’ingénieurs pour devenir un développeur Front-End ou un UI/IX Designer.
            </p>
            <!-- Photo -->
            <div class="infosphoto"></div>
        </div>
    </div>
    
<!-- Page formations -->
    <div style="position: relative;" class="pageformations">
        <!-- Bouton home -->
        <button class="home"></button>
        <!-- Titre formations -->
        <button class="titre formations">Formations</button>
        <!-- Case formation 1 -->
        <div class="formation1">
            <!-- Année -->
            <p class="annéeformations">2019 <br> - <br>2021</p>
            <!-- Texte à l'intérieur de la case -->
            <p class="formationtexte1">
                <span class="gras">DUT des Métiers du Multimédia et de l’Internet |</b> Université Gustave Eiffel - IUT
                    de Marne la Vallée (77)</span><br>
                Les principales matières étudiées en cours : Intégration Web, Algorithme et
                programmation, Ecriture pour les médias numériques, Infograpgie, Culture scientifique, Anglais,
                Production Audiovisuelle, Marketing, Droit, Services sur Réseaux
            </p>
        </div>
        <!-- Case formation 2 -->
        <div class="formation1 formation2">
            <!-- Année -->
            <p class="annéeformations annéeformations2">2019</p>
            <!-- Texte à l'intérieur de la formation -->
            <p class="formationtexte1">
                <span class="gras"> Baccalauréat Scientifique spécialité SVT et option physique
                    chimie|
                    Lycée d’Arsonval - Saint-Maur -des-Fossés
                    (94) </span>
                    <br>Mention bien
            </p>
        </div>
    </div>

<!-- Page expériences -->
    <div style="position: relative;" class="pageexperiences">
    <!-- Bouton home -->
        <button class="home"></button>
        <!-- Titre expériences -->
        <button class="titre experiences">Expériences</button>
        <!-- Case expérience 1 -->
        <div class="experience1">
            <!-- Année et mois -->
            <p class="annéeexperiences">2020 <br> <span class="moisexperiences">Fév - Juin </span></p>
            <!-- Texte à l"intérieur de la case -->
            <p class="experiencetexte1">
                <span class="gras">Développeur agence étudiante | Université Gustave Eiffel - IUT de Marne la Vallée
                    (77) </span><br>
                Dans un groupe de quatre étudiants (chef de projets, communiquants, développeur), j’ai été chargé du
                rôle de développeur afin de mettre en forme un site en HTML/CSS et d’assurer son fonctionnement avec
                JavaScript, jQuerry, Sql et PHP. <br>
                Notre but était de concevoir un site internet informant les étudiants MMI des poursuites d’études après
                l'obtention de leur diplôme.
            </p>
        </div>
          <!-- Case expérience 2 -->
        <div class="experience1 experience2">
             <!-- Année et mois -->
            <p class="annéeexperiences annéeexperiences2">2020 <br> <span class="moisexperiences">Mars </span></p>
                   <!-- Texte à l"intérieur de la case -->
            <p class="experiencetexte1">
                <span class="gras">Réalisatrice, scénariste et actrice d'un court-métrage | Université Gustave Eiffel -
                    IUT de Marne la Vallée (77) </span><br>
                Dans un groupe de cinq étudiants, j’ai participé à l'écriture et à la réalisation d'un court-métrage que
                nous avons présenté <br> au festival MMI 2020.<br><a href="http://www.youtube.com/watch?v=YS4JWmJCxu8"
                    target="_blank" rel="noopener noreferrer" class="teaser">Teaser</a>&emsp;<a
                    href="http://www.youtube.com/watch?v=YS4JWmJCxu8" target="_blank" rel="noopener noreferrer"
                    class="teaser">Court-métrage</a>

            </p>
        </div>
          <!-- Case expérience 3 -->
        <div class="experience1 experience3">
             <!-- Année -->
            <p class="annéeexperiences annéeexperiences3">2016 </p>
            <!-- Texte à l"intérieur de la case -->
            <p class="experiencetexte1">
                <span class="gras"> Stage de 3ème | Chez un fleuriste (1 semaine) </span>
                <br>
                • Préparation des fleurs avant leur exposition dans la boutique <br>
                • Réalisation de composition florale et de bouquets <br>
                • Apprendre à aménager une boutique, voir son fonctionnement et son organisation
            </p>
        </div>
    </div>

<!-- Page compétences -->
    <div style="position: relative;" class="pagecompetences">
        <!-- Bouton home -->
        <button class="home"></button>
        <!-- Titre compétences -->
        <button class="titre competences">Compétences</button>
        <!-- Barre d'exemple -->
        <!-- Contour de la barre -->
        <div class="modelecontour">
            <!-- Intérieur de la barre -->
            <div class="anglaisbar modelebar">
                <div class="anglaisbar notionsbar"></div>
                <div class="anglaisbar notionsbar connaissancesbar"></div>
                <div class="anglaisbar notionsbar bonnesbar"></div>
                <div class="anglaisbar notionsbar maitrisebar"></div>
                <div class="anglaisbar notionsbar expertbar"></div>
            </div>
            <!-- Nom des différentes parties de la barre -->
            <p class="notions">Notions</p>
            <p class="connaissances">Connaissances</p>
            <p class="bonnes">Bonnes <br> connaissances</p>
            <p class="maitrise">Maîtrise</p>
            <p class="expert">Expert</p>
            <!-- Traits séparant les parties -->
            <p class="bar1"></p>
            <p class="bar2"></p>
            <p class="bar3"></p>
            <p class="bar4"></p>
            <!-- Pourcentages correspondant aux traits -->
            <p class="barpourcent1">20%</p>
            <p class="barpourcent2">40%</p>
            <p class="barpourcent3">60%</p>
            <p class="barpourcent4">80%</p>
        </div>
        <!-- Compétences du domaine "langues" -->
        <fieldset class="competence1">
            <!-- Titre du domaine -->
            <legend class="competencetitre1">Langues</legend>
            <!-- Nom correspondant à la barre -->
            <p class="anglais">Anglais</p>
            <!-- Pourcentage de la barre anglais -->
            <p class="anglais anglaispourcent">70%</p>
            <!-- Contour de la barre anglais -->
            <div class="anglaiscontour">
                <!-- Intérieur de la barre anglais -->
                <div class="anglaisbar"></div>
            </div>
            <!-- Pareil que pour la barre anglais -->
            <p class="anglais espagnol">Espagnol</p>
            <p class="anglais espagnolpourcent">25%</p>
            <div class="anglaiscontour espagnolcontour">
                <div class="anglaisbar espagnolbar"></div>
            </div>
        </fieldset>

        <!-- Compétences du domaine "Langages" -->
        <fieldset class="competence1 competence2">
            <legend class="competencetitre1 competencetitre2">Langages</legend>
            <p class="anglais html">HTML/CSS</p>
            <p class="anglais anglaispourcent">80%</p>
            <div class="anglaiscontour htmlcontour">
                <div class="anglaisbar htmlbar"></div>
            </div>
            <p class="espagnol anglais javascript">JavaScript</p>
            <p class="anglais espagnolpourcent">20%</p>
            <div class="anglaiscontour espagnolcontour javascriptcontour">
                <div class="anglaisbar javascriptbar"></div>
            </div>
            <p class="anglais jquery">jQuery</p>
            <p class="anglais anglaispourcent jquerypourcent">40%</p>
            <div class="anglaiscontour anglaiscontour jquerycontour">
                <div class="anglaisbar jquerybar"></div>
            </div>
            <p class="anglais espagnol php">PHP</p>
            <p class="anglais espagnolpourcent  phppourcent">5%</p>
            <div class="anglaiscontour espagnolcontour phpcontour">
                <div class="anglaisbar phpbar"></div>
            </div>
            <p class="anglais sql">SQL</p>
            <p class="anglais anglaispourcent sqlpourcent">50%</p>
            <div class="anglaiscontour sqlcontour">
                <div class="anglaisbar sqlbar"></div>
            </div>
        </fieldset>

        <!-- Compétences du domaine "Logiciels" -->
        <fieldset class="competence1 competence3">
            <legend class="competencetitre1 competencetitre3">Logiciels</legend>
            <p class="anglais photoshop">Photoshop</p>
            <p class="anglais anglaispourcent htmlpourcent">60%</p>
            <div class="anglaiscontour htmlcontour">
                <div class="anglaisbar photoshopbar"></div>
            </div>
            <p class="anglais espagnol indesign">Indesign</p>
            <p class="anglais espagnolpourcent">60%</p>
            <div class="anglaiscontour espagnolcontour javascriptcontour">
                <div class="anglaisbar indesignbar"></div>
            </div>
            <p class="anglais jquery illustrator">Illustrator</p>
            <p class="anglais anglaispourcent jquerypourcent">60%</p>
            <div class="anglaiscontour jquerycontour">
                <div class="anglaisbar illustratorbar"></div>
            </div>
            <p class="anglais espagnol php adobe">Adobe XD</p>
            <p class="anglais espagnolpourcent phppourcent">60%</p>
            <div class="anglaiscontour espagnolcontour phpcontour">
                <div class="anglaisbar adobebar"></div>
            </div>
            <p class="anglais sql premiere">Première Pro</p>
            <p class="anglais anglaispourcent sqlpourcent">60%</p>
            <div class="anglaiscontour sqlcontour">
                <div class="anglaisbar premierebar"></div>
            </div>
        </fieldset>
    </div>

<!-- Page intérêts -->
    <div style="position: relative;" class="pageinterets">
        <button class="home"></button>
        <button class="titre interets">Intérêts</button>
        <!-- Case intérêt dessin -->
        <div class="interet1">Dessin
            <!-- Texte à l'intérieur de la case -->
            <p class="interettexte1">J'adore dessiner des portraits ou des objets au crayon à papier. Mon style est le
                dessin réaliste. <br> Allez voir mon site où j'ai publié tous mes dessins en cliquant <a
                    class="interetsite" href="https://jstmartin17.wixsite.com/website" target="_bank">ici</a>
            </p>
        </div>
        <!-- Case intérêt séries TV -->
        <div class="interet2">Séries TV
            <p class="interettexte2">Je regarde énormément de séries (de tout type). Ca me permet de me divertir, de me
                détendre et d'apprendre de nouvelles choses, tout en m'améliorant en anglais.
            </p>
        </div>
         <!-- Case intérêt Musique -->
        <div class="interet3">Musique
            <p class="interettexte3">J'écoute de la musique tous les jours, en allant et rentrant de l'école, en
                travaillant, en dessinant, sous la douche, bref tout le temps !
                J'écoute principalement du rap francais et de la pop urbaine. La musique me relaxe, me permet de penser
                à autres choses mais également de me concentrer quand je fais quelque chose.
            </p>
        </div>
         <!-- Case intérêt Jeux vidéo -->
        <div class="interet4">Jeux vidéo
            <p class="interettexte4">J'ai grandi avec les jeux vidéo, avec les gameboys, les DS, les PSP et les
                Playstations. Ça a pris une énorme place dans ma vie, je jouais tous les jours pendant mon temps libre,
                plus particulièrement à Minecraft . Aujourd'hui je ne joue presque plus à cause du manque de temps mais
                ce milieu m'attire toujours. J'aime beacoupe les jeux vidéo de rôle (RPG et MMORPG), de tir, de
                simulation et de stratégie.
            </p>
        </div>
         <!-- Case intérêt voyages -->
        <div class="interet5">Voyages
            <p class="interettexte5">J'adore voyager dans les autres pays, découvrir de nouvelles cultures et visiter
                des endroits dépaysants.
                Un de mes rêves serait de voyager un peu partout dans les quatre coins du monde.
            </p>
        </div>
    </div>

<!-- Page formulaire -->
    <form action="cvtest2.php" method="post" style="position: relative;" class="pageformulaire">
        <button class="home"></button>
        <button class="titre formulaire">Formulaire</button>
        <!-- Les champs du formulaire -->
        <input type="text" name="nom" id="nom" class="formulairenom" required placeholder="NOM Prénom">
        <input type="email" name="email" id="email" class="formulairenom formulaireemail" required placeholder="Email">
        <input type="text" name="objet" id="objet" class="formulairenom formulaireobjet" required placeholder="Objet">
        <textarea name="commentaire" id="commentaire" cols="50" rows="50" class="formulairenom formulairecom" required
            placeholder="Commentaire"></textarea>
        <!-- Le bouton envoyer -->
        <button type="submit" class="envoyer">Envoyer !</button>
    </form>

</body>

</html>