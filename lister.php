<?php
//connexion a la base de données avec PDO
$objetPDO = new PDO('mysql:host=localhost;dbname=agenda', 'root', '');

//preparation de la requête
$pdoStat = $objetPDO->prepare(' SELECT * FROM contact ORDER BY nom ASC ');
//var_dump($pdoStat);

//execution de la requete préparée
$executeIsOk = $pdoStat->execute();

//récupération des résultats en une seule fois.
$contacts=$pdoStat->fetchAll();
//var_dump($contacts);

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
           <?= $contact['nom'] ?> <?= $contact['prenom'] ?>-<?= $contact['tel'] ?>-<?= $contact['mail'] ?> <a href="supprimer.php?numContact=<?= $contact['id'] ?>">Supprimer</a> <a href="form_modif.php?numContact=<?= $contact['id'] ?>">Modifier</a>
         </li>
       <?php endforeach; ?>
     </ul>

     <a href="index.php"> <button type="button" name="button">Insérer un nouveau contact</button> </a>
     <a href="formrecherche.php"> <button type="button" name="button">Rechercher un contatct dans la liste</button> </a>

   </body>
 </html>
