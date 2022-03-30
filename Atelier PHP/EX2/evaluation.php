<?php
setcookie("myNote", NULL, time() + 120);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Evaluation</title>
</head>

<body>
  <div class="container" style="font-size: 1.5em">
    <h1>Evaluer le contenu du cours PHP</h1>
    <form action="evaluation.php" method="post">
      <div class="form-check">
        <input class="form-check-input" type="radio" id="Bon" name="note" value="Bon">
        <label for="Bon">Bon</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="Moyen" name="note" value="Moyen">
        <label for="Moyen">Moyen</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" id="Mauvais" name="note" value="Mauvais">
        <label for="Mauvais">Mauvais</label>
      </div>
      <input type="submit">
    </form>
    <script>
      setTimeout(() => {
        alert("Le vote est termine!!")
        document.querySelector('form').addEventListener('submit', (e) => {
          e.preventDefault();
          alert("Le vote est termine!!")
        })
      }, 120000);
    </script>

    <?php
    if (isset($_POST['note'])) {
      $_COOKIE['myNote'] = $_POST['note'];
      echo ("<script >
        document.querySelector('form').addEventListener('submit',(e)=>{
          e.preventDefault();
          alert(\"Vous avez deja vote : " . $_COOKIE['myNote'] . "!!\")
        })
        </script>");
    }
    ?>

  </div>
</body>

</html>