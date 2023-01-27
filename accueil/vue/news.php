<?php
//on met en place les variables pour le header
$titre = "SolarSys | News";
$style = "../css";
$pathIcon = "../ressources/icons";
//on inclut le header
include "header.php";
?>

<body>
    <?php
    //on met en place les variables pour la nav
    $titre_logo = "../../index.php";
    $lien_nav1 = "#";
    $lien_nav2 = "./Planetes.php";
    $lien_nav3 = "./Satellites.php";
    $lien_nav4 = "./Asteroides.php";
    $lien_nav5 = "./Contact.php";
    //on inclut le header
    include "nav.php";
    ?>

    <div class="home"></div>

    <section>
    </section>

    <?php
    //on met en place les variables pour le footer
    $js = "../js";
    $path = ".";
    $pathNews = "newsletter.php";
    //on inclut le footer
    include "footer.php";
    ?>
</body>

</html>