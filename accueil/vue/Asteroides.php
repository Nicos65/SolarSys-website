<?php
// On va chercher les Asteroïdes dans la basse de données
// On connecte la bdd a la page
require_once "../../../model/connexion.php";

// On écrit la requête
$sql = "SELECT * FROM objet WHERE id_Categories = 3";
// On exécute la requête
$requete = $db->query($sql);
// On récupère les données
$objet = $requete->fetchAll();

//on met en place les variables pour le header
$titre = "SolarSys | Asteroïdes";
$style = "../css";
$pathIcon = "../ressources/icons";
//on inclut le header
include "header.php";
?>

<body>
    <?php
    //on met en place les variables pour la nav
    $titre_logo = "../../index.php";
    $lien_nav1 = "./news.php";
    $lien_nav2 = "./Planetes.php";
    $lien_nav3 = "./Satellites.php";
    $lien_nav4 = "#";
    $lien_nav5 = "./Contact.php";
    //on inclut le header
    include "nav.php";
    ?>

    <section id="parallax">
        <img src="../ressources/parallax/stars.png" id="star" alt="background star">
        <h1 id="titre">Asteroïdes</h1>
        <img src="../ressources/parallax/font.png" id="font" alt="background fixed">
        <a href="#second" id="explore">Voir</a>
        <p>Un astéroïde est une planète mineure composée de roches, de métaux et de glaces, et dont les dimensions varient de l'ordre du mètre (limite actuelle de détection) à plusieurs centaines de kilomètres. L'appellation « en forme d'étoile » vient de l'aspect irrégulier des astéroïdes au télescope, différent du disque parfait des planètes, lors des premières observations astronomiques.</p>
    </section>

    <section id="second">
        <h1>Vous pouvez afficher les cartes de chacune des asteroïde en les survolant</h1>
        <div class="regroup">

            <?php foreach ($objet as $objet) : ?>
                <div class="Titre_card">
                    <div>
                        <h1><?= $objet["nom_Objet"] ?></h1>
                    </div>
                    <div class="card">
                        <div class="circle"></div>
                        <div class="content">
                            <h3><?= $objet["nom_Objet"] ?></h3>
                            <p><?= $objet["resum"] ?></p>
                            <a href="planetes/planete.php">En savoir plus</a>
                        </div>
                        <img src="<?= $objet["url_img_Objet"] ?>" alt="<?= $objet["nom_Objet"] ?>">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
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