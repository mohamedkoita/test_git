<?php
//Connexion à la base de données
$conn = new PDO('mysql:root=localhost; dbname=blog', 'root', '');
//var_dump($conn);

//Préparation de la requete d'insertion
$ajout = $conn->prepare('INSERT INTO billets VALUES (NULL, :titre, :contenu)');
var_dump($ajout);
$titre = $_POST['titre'];
echo $titre;

//On lie chaque marqueur à sa valeur
$ajout->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
$ajout->bindValue(':contenu', $_POST['contenu'], PDO::PARAM_STR);
//$ajout->bindValue(':date_creation', $_POST['date_creation'], PDO::PARAM_STR);

//Ecution de la requête
$insertIsOk = $ajout->execute();

if($insertIsOk){
  $message = ' Le contact a été ajouté à la base de données ';
}
else {
  $message = 'Echec de la connexion';
}


 ?>
