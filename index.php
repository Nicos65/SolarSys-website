<?php
//on met en place les variables pour le header
$titre = "SolarSys";
$style = "accueil/css";
$pathIcon = "accueil/ressources/icons";
//on inclut le header
include "accueil/vue/header.php";
?>

<body id="start">

    <?php
    //on met en place les variables pour la nav
    $titre_logo = "index.php";
    $lien_nav1 = "#ancre_0";
    $lien_nav2 = "#ancre_1";
    $lien_nav3 = "#ancre_2";
    $lien_nav4 = "#ancre_3";
    $lien_nav5 = "#ancre_4";
    //on inclut le header
    include "accueil/vue/nav.php";
    ?>

    <video autoplay="true" loop muted>
        <source src="accueil/ressources/background/home.mp4" type="video/mp4">
    </video>

    <section class="s0" id="ancre_0">
        <div class="btn-section">
            <a href="accueil/vue/news.php" class="init"><button class="btn-first">Découvrir</button></a>
        </div>
        <div class="section-nav">
            <a href="#start"><img width="60" src="accueil/ressources/icons/haut.png" alt="bouton haut"></a>
            <a href="#ancre_1"><img width="60" src="accueil/ressources/icons/bas.png" alt="bouton bas"></a>
        </div>
    </section>

    <section class="s1" id="ancre_1">
        <div class="btn-section">
            <a href="accueil/vue/Planetes.php" class="init"><button class="btn-first">Découvrir</button></a>
        </div>
        <div class="section-nav">
            <a href="#ancre_0"><img width="60" src="accueil/ressources/icons/haut.png" alt="bouton haut"></a>
            <a href="#ancre_2"><img width="60" src="accueil/ressources/icons/bas.png" alt="bouton bas"></a>
        </div>
    </section>

    <section class="s2" id="ancre_2">
        <div class="btn-section">
            <a href="accueil/vue/Satellites.php"><button class="btn-first">Découvrir</button></a>
        </div>
        <div class="section-nav">
            <a href="#ancre_1"><img width="60" src="accueil/ressources/icons/haut.png" alt="bouton haut"></a>
            <a href="#ancre_3"><img width="60" src="accueil/ressources/icons/bas.png" alt="bouton bas"></a>
        </div>
    </section>

    <section class="s3" id="ancre_3">
        <div class="btn-section">
            <a href="accueil/vue/Asteroides.php"><button class="btn-first">Découvrir</button></a>
        </div>
        <div class="section-nav">
            <a href="#ancre_2"><img width="60" src="accueil/ressources/icons/haut.png" alt="bouton haut"></a>
            <a href="#ancre_4"><img width="60" src="accueil/ressources/icons/bas.png" alt="bouton bas"></a>
        </div>
    </section>

    <section class="s4" id="ancre_4">
        <div class="btn-section">
            <a href="accueil/vue/Contact.php"><button class="btn-first">Découvrir</button></a>
        </div>
        <div class="section-nav">
            <a href="#ancre_3"><img width="60" src="accueil/ressources/icons/haut.png" alt="bouton haut"></a>
            <a href="#ancre_5"><img width="60" src="accueil/ressources/icons/bas.png" alt="bouton bas"></a>
        </div>
    </section>

    <?php
    //on met en place les variables pour le footer
    $js = "accueil/js";
    $path = "accueil/vue";
    $pathNews = "newsletter.php";
    //on inclut le header
    include "accueil/vue/footer.php";
    ?>

</body>

</html>