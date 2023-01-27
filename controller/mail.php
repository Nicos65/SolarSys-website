<?php
//On traite le formulaire
if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
    // le formulaire est complet
    // On récupère les données en les protégeant
    // On retire toutes les balises
    $address = strip_tags($_POST["mail"]);


    // Envoyer un mail avec mailjet
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "solarsys.nicolas@gmail.com",
                    'Name' => "SolarSys"
                ],
                'To' => [
                    [
                        'Email' => $address
                    ]
                ],
                'Subject' => "Newsletter",
                'HTMLPart' => "<h2>Bonjour,</h2>
                    <h3>Merci de votre inscription a la newsletter de SolarSys</h3>
                    <p>Le site etant toujours en dévelopement nous vous enverons des news hebdomadaire sur l'espace et plus generalement la sciences</p>"
            ]
        ]
    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.mailjet.com/v3.1/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json'
        )
    );
    curl_setopt($ch, CURLOPT_USERPWD, "5ceb899e1630fabeca35bba202c5f15b:70a934639a2e9f9a0ff00be44478c7f1");
    $server_output = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($server_output);
    if ($response->Messages[0]->Status == 'success') {
        echo "Votre Email a était envoyer avec succes";
    }

    // On peut enregistrer les données dans la bdd
    // On se connecte à la bdd
    require_once "../model/connexion.php";

    // On écrit la requête
    $sql = "INSERT INTO `newsletter`(`email_Newsletter`) VALUES (:mail)";

    // On prépare la requête
    $query = $db->prepare($sql);

    // On injecte les valeurs
    $query->bindValue(":mail", $address, PDO::PARAM_STR);


    // On exécute la requête
    if (!$query->execute()) {
        die("Une erreur est survenue");
    }
} else {
    die("le formulaire est incomplet");
}
