<?php
//Connexion à la base de données
$conn = new PDO('mysql:host=localhost; dbname=blog', 'root', '');
//var_dump($conn);

//Préparation de la requête INSERT INTO en vue d'insérer le titre et le contenu dans la BD
$insert = $conn->prepare('INSERT INTO billets VALUES(NULL, :titre, :contenu )');
//var_dump($insert);

//On lie les éléments aux données recues
$insert->bindValue( ':titre', $_POST['titre'], PDO::PARAM_STR);
//$insert->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
$insert->bindValue(':contenu', $_POST['contenu'], PDO::PARAM_STR);

//Execution de la requête
$insertIsOk = $insert->execute();
var_dump($insertIsOk);

if ($insertIsOk)
{
  echo "Le titre à été recu !";
}
else {
  echo "Echec !";
}


//connexion a la base de données avec PDO
$objetPDO = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

//préparation de la requete SQL

$pdoStat = $objetPDO->prepare('INSERT INTO contact VALUES (NULL, :titre, :contenu)');
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







/* if ($_POST['titre'])
{
  echo "Le titre à été recu !";
}
else {
  echo "Echec !";
}
if ($_POST['contenu'])
{
  echo "Le contenu à été recu !";
}
else {
  echo "Echec !";
}*/
 ?>
