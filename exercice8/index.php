<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title></title>
</head>
<body>
  <?php
  //Si je garde l'option GET , l'empty fait en sorte de ne rien afficher.
  if(empty($_GE)){
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
          echo $_GET['gender'] . ' ';
        }
        if(isset($_GET['lastname'])){
          //Récupération du nom
          echo $_GET['lastname'] . ' ';
        }
        if(isset($_GET['firstname'])){
          //Récupération du prénom
          echo $_GET['firstname'];
        }
        if(isset($_GET['file'])){
          //Tentative de récupération du fichier sélectionné.
         $fileExtension = strtolower(pathinfo($_GET['file'],PATHINFO_EXTENSION));
         //Vérification de l'extension du fichier.
          if ($fileExtension == 'pdf'){
          echo strtolower(pathinfo($_GET['file'],PATHINFO_FILENAME)) . ' & ' . strtolower(pathinfo($_GET['file'],PATHINFO_EXTENSION));
          //Récupération des information du fichier sélectionné.
        }
        else{
          echo '<br/>'.'Le fichier n\'est pas en format PDF';
          //Si le fichier n'est pas en format PDF , il l'indique.
        }
      }
    }
        ?>
      </p>
    </div>
  <a href="index.php"><button type="submit" class="btn btn-success" name="button">Return</button></a>
</body>
</html>
