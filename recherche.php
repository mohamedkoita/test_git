
    <?php
    $nomx = $_POST['nomo'] ;
    //echo $nomx;
     //connexion à la base de données
    $conn = new PDO ('mysql:host=localhost;dbname=agenda', 'root', '');
    //var_dump($conn);

     //préparation de la requête
    $req = $conn->prepare('SELECT * FROM contact WHERE nom LIKE "%'.$nomx.'%"');
    //var_dump($req);


      $xcute = $req->execute();

     //affichage de la requête
    $aff = $req->fetchAll();
    //var_dump($aff);
    $result=count($aff);
    echo $result;
     ?>

 <!DOCTYPE html>
     <html>
       <head>
         <meta charset="utf-8">
         <title>Docx0</title>
       </head>
       <body>
     <h1>Résultats de la recherche</h1>
     <?php if ($result=0) {
        echo "Pas de résultats pour votre recherche";
      }
      else
      { ?>
    <ul>
    <?php foreach ($aff as $contact): ?>
      <li>
        <?= $contact['nom'] ?> <?= $contact['prenom'] ?>-<?= $contact['tel'] ?>-<?= $contact['mail'] ?>
      </li>
    <?php endforeach; ?>
  </ul>
<?php } ?>
     <a href="index.php"> <button type="button" name="button">Insérer un contact</button> </a> <br>
     <a href="lister.php"> <button type="button" name="button">Voir la liste des contacts</button> </a> <br>
     <a href="formrecherche.php"> <button type="button" name="button">Rechercher un contatct dans la liste</button> </a>

  </body>
</html>
