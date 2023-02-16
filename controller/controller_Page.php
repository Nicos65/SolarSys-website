<?php
session_start();
// On se connecte à la bdd
require_once(realpath(dirname(__FILE__) . '/../model/connexion.php'));
// On se connecte aux fonctions
require(realpath(dirname(__FILE__) . '/../model/function.php'));


if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = $_GET["page"];
    $titre = "SolarSys | " . $page;
    include("../accueil/vue/header.php");
    $page .= ".php";
    $lien_nav1 = "controller_Page.php?page=news";
    $lien_nav2 = "controller_Page.php?page=Planetes";
    $lien_nav3 = "controller_Page.php?page=Satellites";
    $lien_nav4 = "controller_Page.php?page=Asteroides";
    $lien_nav5 = "controller_Page.php?page=Contact";

    switch ($page) {
        case "accueil.php":
            $lien_nav1 = "#ancre_0";
            $lien_nav2 = "#ancre_1";
            $lien_nav3 = "#ancre_2";
            $lien_nav4 = "#ancre_3";
            $lien_nav5 = "#ancre_4";
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
            break;
        case "Planetes.php":
            $id = 1;
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
            break;
        case "Satellites.php":
            $id = 2;
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
            break;
        case "Asteroides.php":
            $id = 3;
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
            break;
        default:
            include("../accueil/vue/nav.php");
            include("../accueil/vue/$page");
    }
} else {
    $page = "accueil";
    $titre = "SolarSys | " . $page;
    $page .= ".php";
    include("../accueil/vue/nav.php");
    include("../accueil/vue/$page");
}

include("../accueil/vue/footer.php");
