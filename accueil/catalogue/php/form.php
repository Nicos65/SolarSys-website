<?php

include "database.php";
global $baseContact;

if (isset($_POST["sub"])) {

    $select = $_POST["select"];
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $file = $_POST["file"];

    if (!empty($select) && !empty($surname) && !empty($name) && !empty($email)) {
        require 'header-thanks.php';
        echo "Merci ! " . $name . " " . $surname . " vous nous avez contacté pour : " . $select . " on vous recontactera au plus vite a l'adresse suivante : " . $email;
        require 'footer.php';
    }
}
