<?php
//On traite le formulaire
if (!empty($_POST)) {
    // POST n'est pas vide, on vérifie que toutes les données sont présentes

    if (isset($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["mobile"], $_POST["message"]) && !empty($_POST["select"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
        // le formulaire est complet
        // On récupère les données en les protégeant (failles XSS)
        // On retire toutes les balises
        $selecte = strip_tags($_POST["select"]);
        $nom = strip_tags($_POST["nom"]);
        $prenom = strip_tags($_POST["prenom"]);
        $email = strip_tags($_POST["email"]);
        $mobile = strip_tags($_POST["mobile"]);
        // On neutralise toutes les balises
        $mess = htmlspecialchars($_POST["message"]);

        // On peut enregistrer les données dans la bdd
        // On se connecte à la bdd
        require_once "../../model/connexion.php";

        // On écrit la requête
        $sql = "INSERT INTO `formulaire`(`demande_Formulaire`,`nom_Formulaire`,`prenom_Formulaire`,`email_Formulaire`,`tel_Formulaire`,`mess_Formulaire`) VALUES (:selecte, :nom, :prenom, :email, :mobile, :mess)";

        // On prépare la requête
        $query = $db->prepare($sql);

        // On injecte les valeurs
        $query->bindValue(":selecte", $selecte, PDO::PARAM_STR);
        $query->bindValue(":nom", $nom, PDO::PARAM_STR);
        $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":mobile", $mobile, PDO::PARAM_STR);
        $query->bindValue(":mess", $mess, PDO::PARAM_STR);

        // On exécute la requête
        if (!$query->execute()) {
            die("Une erreur est survenue");
        }
    } else {
        die("le formulaire est incomplet");
    }
}

//on met en place les variables pour le header
$titre = "SolarSys | Contact";
$style = "../css";
$pathIcon = "../ressources/icons";
//on inclut le header
include "header.php";
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
    include "nav.php";
    ?>

    <div class="home"></div>

    <section class="section_contact">
        <form method="post">
            <h1>Une question ou une demande?</h1>
            <select required id="select" name="select">
                <option value="" selected disabled hidden>--Choisir une demande--</option>
                <option value="Demande professionnelle">Demande professionnelle</option>
                <option value="Partenariat">Partenariat</option>
                <option value="Contacte presse">Contacte presse</option>
                <option value="Problème technique">Problème technique</option>
                <option value="Question?">Question?</option>
            </select>
            <input type="text" id="nom" name="nom" placeholder="Nom *" required>
            <input type="text" id="prenom" name="prenom" placeholder="Prenom *" required>
            <input type="email" id="email" name="email" placeholder="Email *" required>
            <input type="tel" id="mobile" name="mobile" placeholder="Mobile">
            <textarea id="message" name="message" required placeholder="Un message? *"></textarea>
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
    $pathNews = "newsletter.php";
    //on inclut le footer
    include "footer.php";
    ?>
</body>

</html>