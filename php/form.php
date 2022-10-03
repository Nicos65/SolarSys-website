<?php
if (!empty($_POST['user_select']) && !empty($_POST['user_name']) && !empty($_POST['user_email']) && !empty($_POST['user_message'])) {
    $select = htmlspecialchars($_POST['user_select']);
    $name = htmlspecialchars($_POST['user_name']);
    $surname = htmlspecialchars($_POST['user_surname']);
    $email = htmlspecialchars($_POST['user_email']);
    $message = htmlspecialchars($_POST['user_message']);


    echo "<p> Bonjour <b> $name <br> $surname </b> merci pour votre email:<b> $email </b>, nous avons lu votre message: <br><br> $message pour la raison $select </p>";
}
