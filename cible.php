<?php
//connexion a la base de données avec PDO
$objetPDO = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

//préparation de la requete SQL

$pdoStat = $objetPDO->prepare('INSERT INTO contact VALUES (NULL, :nom, :prenom, :telephone, :mail)');
var_dump($pdoStat);

//on lie chaque marqueur à valeur

$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':telephone', $_POST['telephone'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);

//execution de la requete preparée

$insertIsOk = $pdoStat->execute();

if($insertIsOk){
  $message = ' Le contact a été ajouté à la base de données ';
}
else {
  $message = 'Echec de la connexion';
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Yeah</title>
  </head>
  <body>
    <h1>Insertion des contatcs</h1>
    <p> <?php echo $message; ?> </p>
    <a href="index.php"> <button type="button" name="button">Insérer un nouveau contact</button> </a>
    <a href="lister.php"> <button type="button" name="button">Afficher la liste des contacts</button> </a>
  </body>
</html>
