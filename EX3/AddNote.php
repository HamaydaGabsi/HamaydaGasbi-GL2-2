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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Add Note</title>
</head>

<body>
  <div class="container" style="font-size: 1.5em;">
    <div class="col-auto">
      <form action="AddNote.php" id="addNote" method="post">
        <label for="name">Name</label> <br>
        <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder=""><br>
        <label for="content">Content</label><br>
        <textarea class="form-control" name="content" id="content" rows="3"></textarea><br>
        <button id="submitBtn" type="submit" class="btn btn-primary mb-3">Add Note</button>
        <button id="goToNotes" class="btn btn-primary mb-3"><a href='ViewNotes.php' alt='Broken Link'>View Notes</a></button>
      </form>
    </div>

  </div>
</body>
<?php
if (isset($_POST['name']) && isset($_POST['content']) && ($_POST['content']!="")){
  $name= $_POST['name'];
  $content = $_POST['content'];
  if($name=="") $name="Unnamed";
  $_SESSION['note'][$name] = $content;
}
  
?>

</html>