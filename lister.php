<?php
//connexion a la base de données avec PDO
$objetPDO = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

//preparation de la requête
$pdoStat = $objetPDO->prepare(' SELECT * FROM contact ');
var_dump($pdoStat);

//execution de la requete préparée
$executeIsOk = $pdoStat->execute();

//récupération des résultats en une seule fois.
$contacts=$pdoStat->fetchAll();
var_dump($contacts);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Document</title>
   </head>
   <body>
     <h1>Liste des contatcs</h1>
     <ul>
       <?php foreach ($contacts as $contact): ?>
         <li>
           <?= $contact['nom'] ?> <?= $contact['prenom'] ?>-<?= $contact['tel'] ?>-<?= $contact['mail'] ?>
         </li>
       <?php endforeach; ?>
     </ul>

     <a href="index.php">Insérer un nouveau contact</a>
   </body>
 </html>
