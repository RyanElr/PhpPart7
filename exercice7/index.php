<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>
  <?php
  if(empty($_GET)){
    ?>
    <form action="index.php" method="GET">
      <select name="gender">
        <option>Mr</option>
        <option>Mme</option>
      </select>
      <input type="lastname" name="lastname" placeholder="Nom">
      <input type="firstname" name="firstname" placeholder="Prénom">
      <input type="file" name="file" placeholder="Fichier">
      <button type="submit" name="validate">Valider</button>
    </form>
    <div>
      <p>
        <?php
        if(isset($_GET['gender'])){
          //Récupération du sexe
          echo $_GET['gender'];
        }
        if(isset($_GET['lastname'])){
          //Récupération du nom
          echo $_GET['lastname'];
        }
        if(isset($_GET['firstname'])){
          //Récupération du prénom
          echo $_GET['firstname'];
        }
        if(isset($_GET['file'])){
          echo strtolower(pathinfo($_GET['file'],PATHINFO_FILENAME)) . ' & ' . strtolower(pathinfo($_GET['file'],PATHINFO_EXTENSION));
          //Récupération des information du fichier sélectionné
        }
        ?>
      </p>
    </div>
    <?php
  }
  ?>
  <a href="index.php"><button type="submit" class="btn btn-success" name="button">Return</button></a>
</body>
</html>
