<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php ?>
<body?>
  <h1>Voici un recap de votre Commande</h1>
  <p>
    
    <b>Nom</b>: <?php
    echo $_GET["Nom"];?> <br>
    <b>Prenom</b>: <?php echo $_GET["pn"]?> <br>
    <b>Adresse</b>: <?php echo $_GET["Adresse"]?> <br>
    <b>Nombre de Sandwichs</b>: <?php echo $_GET["nbSand"]?> <br>
    <b>Type du Sandwich</b>: <?php echo $_GET["type"]?> <br>
    <b>Ingredients</b>: 
    <?php
        
        if(isset($ingredients)){
          $ingredients = $_GET['ing'];
          foreach ($ingredients as $ingredient){ 
         echo $ingredient." ";
         }
        }else{
          echo "vous n'avez rien choisi";
        }
   ?><br>
   <b>Prix total</b>: <?php
    $nbSand= $_GET["nbSand"];
    if($nbSand<11){
      echo $nbSand*4 ."DT";
    }else{
      echo $nbSand*4*0.9 ."DT (vous profitez d'une reduction de 10
      %)";
    }
   ?> <br>
   
    <!-- une fonction en PHP qui vous retourne une valeur aléatoire unique: rand(min,max) -->


</p>
    </body>
</html>