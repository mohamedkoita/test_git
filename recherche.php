<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Docx0</title>
  </head>
  <body>
    <?php
    $nomx = $_POST['nomo'] ;
    echo $nomx; ?> <br>
    <?php  //connexion à la base de données
    $conn = new PDO ('mysql:host=localhost;dbname=agenda', 'root', '');
    //var_dump($conn);?> <br>

    <?php //préparation de la requête
    $req = $conn->prepare('SELECT * FROM contact');
    var_dump($req);?> <br>

    <?php
      $xcute = $req->execute();
     ?>

    <? //affichage de la requête
    $aff = $req->fetchAll();
    var_dump($aff);

     ?>

  </body>
</html>
