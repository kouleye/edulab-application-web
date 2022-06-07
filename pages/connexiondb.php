<?php
try {
    //
    $pdo = new PDO("mysql:host=localhost;dbname=Commerce_ligne",
        "root", "root");

}catch (Exception $e){
    die('Erreur : ' . $e->getMessage());

    //die('Erreur : impossible de se connecter à la base de donnée');
}
?>