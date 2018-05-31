<?php
//Connexion à la base de données
$objetPDO = new PDO('mysql:host=localhost; dbname=agenda', 'root', '');
//var_dump($objetPDO);

//Prépration de la requête
$pdoStat = $objetPDO -> prepare('DELETE  FROM contact WHERE id=:num LIMIT 1');
//var_dump($pdoStat);

//Liaison du paramètre nommé
$pdoStat -> bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

//Execution de la requête
$executeIsOk = $pdoStat->execute();

if ($executeIsOk) {
  $message = 'Le contatct a été supprimé';
}
else {
  $message = 'Echec de la suppression du contact';
}
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Suppression de contact</title>
   </head>
   <body>
     <h2>Suppression </h2>
     <p><?= $message ?></p>
     <a href="lister.php"> <button type="button" name="button">Afficher la liste des contacts</button> </a>
   </body>
 </html>
