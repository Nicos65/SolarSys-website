<?php
// On va chercher les planètes dans la basse de données
// On connecte la bdd a la page
require_once "../../model/connexion.php";

// On écrit la requête
$sql = "SELECT * FROM objet WHERE id_Categories = 1";
// On exécute la requête
$requete = $db->query($sql);
// On récupère les données
$objet = $requete->fetchAll();

//on met en place les variables pour le header
$titre = "SolarSys | Planètes";
$style = "../css";
$pathIcon = "../ressources/icons";
$nomP = $objet["nom_Objet"];
//on inclut le header
include "header.php";
?>

<body>
    <?php
    //on met en place les variables pour la nav
    $titre_logo = "../../index.php";
    $lien_nav1 = "./news.php";
    $lien_nav2 = "#";
    $lien_nav3 = "./Satellites.php";
    $lien_nav4 = "./Asteroides.php";
    $lien_nav5 = "./Contact.php";
    //on inclut le header
    include "nav.php";
    ?>

    <section id="parallax">
        <img src="../ressources/parallax/stars.png" id="star" alt="background star">
        <h1 id="titre">planètes</h1>
        <img src="../ressources/parallax/font.png" id="font" alt="background fixed">
        <a href="#second" id="explore">Voir</a>
        <p>Une planète est un corps céleste orbitant autour du Soleil ou d'une autre étoile,
            possédant une masse suffisante pour que sa gravité la maintienne en équilibre hydrostatique,
            c'est-à-dire sous une forme presque sphérique, et ayant « nettoyé le voisinage de son orbite »,
            c'est-à-dire éliminé tout objet de taille comparable se déplaçant sur son orbite ou sur une orbite proche.
            Par extension, on qualifie parfois aussi de planètes les objets libres de masse planétaire ou tout objet qui est un grand corps astronomique arrondi n'étant ni une étoile, ni son vestige.</p>
    </section>

    <section id="second">
        <h1>Vous pouvez afficher les cartes de chacune des planètes en les survolant</h1>
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