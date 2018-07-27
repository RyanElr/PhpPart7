<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice3 Part7</title>
  </head>
  <body>
    <?php
    if(!empty($_GET['firstname']) && !empty($_GET['lastname'])){
      //Récupération du prénom et nom
      echo $_GET['firstname'] . ' ' . $_GET['lastname'];
    }
   ?>
  </body>
</html>
