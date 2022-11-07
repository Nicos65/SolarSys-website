<?php

    define('HOST','localhost');
    define('DB_NAME','siteweb');
    define('USER','root');
    define('PASS','');

    try{
        $baseContact = new PDO("mysql:host=". HOST .";basename=". DB_NAME,USER,PASS);
        $baseContact->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $prob) {
        echo $prob;
    }