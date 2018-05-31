<?php
//Connexion à la base de données
$conn = new PDO('mysql:root=localhost; dbname=blog', 'root', '');
var_dump($conn);

//Préparation de la requete d'insertion
$ajout = $conn->prepare('INSERT INTO blog VALUES ')

 ?>
