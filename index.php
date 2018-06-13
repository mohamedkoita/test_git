<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
  </head>
  <body>
    <h1>Bienvenue sur le système de gestion de contacts</h1>
    <h2>Ajouter un contact</h2>
    <script type="text/javascript">
      alert('Bienvenu sur mon site !');
    </script>
    <form class="" action="cible.php" method="post">
      <p>
        <label for="">Nom</label>
        <input type="text" name="nom" value="">
      </p>
      <p>
        <label for="">Prenom</label>
        <input type="text" name="prenom" value="">
      </p>
      <p>
        <label for="">Téléphone</label>
        <input type="tel" name="telephone" value="">
      </p>
      <p>
        <label for="">Email</label>
        <input type="email" name="mail" value="">
      </p>
      <p> <input type="submit" value="Enregistrer"></p>
    </form>
    <a href="lister.php"> <button type="button" name="button">Afficher la liste des contatcs</button> </a>
    <a href="formrecherche.php"> <button type="button" name="button">Rechercher un contatct dans la liste</button> </a>

  </body>
</html>
