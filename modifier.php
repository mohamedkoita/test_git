<?php
//connexion a la base de données avec PDO
$objetPDO = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

//préparation de la requete SQL

$pdoStat = $objetPDO->prepare('UPDATE contact SET nom=:nom, prenom=:prenom, tel=:tel, mail=:mail WHERE id=:num LIMIT 1');
//var_dump($pdoStat);
//on lie chaque marqueur à valeur

$pdoStat->bindValue(':num', $_POST['numContact'], PDO::PARAM_STR);
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel', $_POST['telephone'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);

//execution de la requete preparée

$insertIsOk = $pdoStat->execute();

if($insertIsOk){
  $message = ' Le contact a été mis à jour ! ';
}
else {
  $message = 'Echec de la mise à jour';
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mise à jour des contacts</title>
  </head>
  <body>
    <h1>Mise à jour des contacts</h1>
    <p> <?php echo $message; ?> </p>
    <a href="index.php"> <button type="button" name="button">Insérer un nouveau contact</button> </a>
    <a href="lister.php"> <button type="button" name="button">Afficher la liste des contacts</button> </a>
  </body>
</html>
