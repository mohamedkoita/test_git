<?php
  //connexion à la base de données
$objetPDO = new PDO ('mysql:host=localhost; dbname=agenda', 'root', '');
//var_dump($objetPDO);

//Prépration de la requête
$pdoStat = $objetPDO -> prepare('SELECT * FROM contact WHERE id=:num');
//var_dump($pdoStat);

//Liaison du paramètre nommé
$pdoStat -> bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

//Execution de la requête
$executeIsOk = $pdoStat->execute();

//On recupère le contact
$contact = $pdoStat->fetch();
//var_dump($contact);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Modification d'un contact</title>
   </head>
   <body>
     <h2>Modifier un contact</h2>
     <form class="" action="modifier.php" method="post">
       <input type="hidden" name="numContact" value="<?= $contact['id'];?>">
       <p>
         <label for="">Nom</label>
         <input type="text" name="nom" value="<?= $contact['nom'];?>">
       </p>
       <p>
         <label for="">Prenom</label>
         <input type="text" name="prenom" value="<?= $contact['prenom'];?>">
       </p>
       <p>
         <label for="">Téléphone</label>
         <input type="tel" name="telephone" value="<?= $contact['tel'];?>">
       </p>
       <p>
         <label for="">Email</label>
         <input type="email" name="mail" value="<?= $contact['mail'];?>">
       </p>
       <p> <input type="submit" value="Enregistrer modifications"></p>
     </form>

   </body>
 </html>
