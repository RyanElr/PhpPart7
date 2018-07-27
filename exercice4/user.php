<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice4 Part7</title>
  </head>
  <body>
    <?php
    if(!empty($_POST['firstname']) && !empty($_POST['lastname'])){
      echo $_POST['firstname'] . ' ' . $_POST['lastname'];
    }
   ?>
  </body>
</html>
