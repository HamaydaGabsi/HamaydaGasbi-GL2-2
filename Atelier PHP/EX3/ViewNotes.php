<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>View Notes</title>
</head>

<body>
  <div class="container">
    <h1>HERE ARE YOUR NOTES</h1>
    <div class="col align-self-center" style="font-size: 1.7em">
      <?php
      echo "<br>";
      if (isset($_SESSION['note'])) {
        foreach ($_SESSION['note'] as $name => $content) {
          echo ("<b style=\"color:salmon\">" . $name . "</b> : " . $content);
          echo "<br>";
        }
      } else {
        echo ("<h2>No Notes Added in this session yet</h2>");
      }
      ?>
      <button id="AddNote" class="btn btn-primary mb-3" style="margin-top: 20px; background-color:#4f84af; border-color:#4f84af"><a href='AddNote.php' alt='Broken Link'>Add Note</a></button>

    </div>
  </div>
</body>

</html>