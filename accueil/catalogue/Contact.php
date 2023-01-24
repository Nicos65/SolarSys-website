<?php
//On 


//on met en place les variables pour le header
$titre = "SolarSys | Contact";
$style = "../css";
$pathIcon = "../ressources/icons";
//on inclut le header
include "../includes/header.php";
?>

<body class="body-contact">

    <?php
    //on met en place les variables pour la nav
    $titre_logo = "../../index.php";
    $lien_nav1 = "./news.php";
    $lien_nav2 = "./Planetes.php";
    $lien_nav3 = "./Satellites.php";
    $lien_nav4 = "./Asteroides.php";
    $lien_nav5 = "#";
    //on inclut le header
    include "../includes/nav.php";
    ?>

    <div class="home"></div>

    <section class="section_contact">
        <form method="post">
            <h1>Une question ou une demande?</h1>
            <select required id="selection" name="select">
                <option value="" selected disabled hidden>--Choisir une demande--</option>
                <option value="1">Demande professionnelle</option>
                <option value="2">Partenariat</option>
                <option value="3">Contacte presse</option>
                <option value="4">Problème technique</option>
                <option value="5">Question?</option>
            </select>
            <input type="text" id="nom" placeholder="Nom" required>
            <input type="text" id="prenom" placeholder="Prenom" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="tel" id="mobile" placeholder="Mobile" required>
            <textarea id="message" required placeholder="Un message?"></textarea>
            <input type="submit" value="Envoyer" id="button">
        </form>

        <div class="contact-info">
            <div>
                <img src="../ressources/icons/enveloppe.png" class="carte-icon">
                <p>Solarsys.nicolas@gmail.com</p>
            </div>

            <div>
                <img src="../ressources/icons/telephone.png" class="carte-icon">
                <p>++33695042167</p>
            </div>

            <div>
                <img src="../ressources/icons/lieu.png" class="carte-icon">
                <p>7 Avenue des lilas<br>75000 Paris, FR</p>
            </div>
        </div>


    </section>

    <?php
    //on met en place les variables pour le footer
    $js = "../js";
    $path = ".";
    //on inclut le header
    include "../includes/footer.php";
    ?>
</body>

</html>