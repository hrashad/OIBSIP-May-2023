<!DOCTYPE html>
<html lang="en">
<head>
<title>RASHAD H - Level 2 Task 3 - ToDo</title>
    <link rel="icon" href="https://github.com/hrashad/rasifolio/blob/main/favicon.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container my-5">
    <h2>A BASIC TO-DO WEBAPP</h2>
    <h4> Level 2 - Task 3</h4>
    <div class="row">
      <div class="col">
          <?php
          include("database.php");
          include("delete-to-do.php");
          include("to-do-form.php");
          include("to-do-list.php");
        ?>
      </div>
    </div>
  </div>
</body>

<span style="text-align:center;">Developer &copy; <a href="https://www.linkedin.com/in/rashad-h/" style="text-decoration: none; color:crimson;">RASHAD H</a> Intern at Oasis Infobytes</span>

</html>