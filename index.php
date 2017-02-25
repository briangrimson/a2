<?php include('logic.php') ?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Brian Grimson</title>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
  <meta name="description" content="The artwork of Brian Grimson">
  <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css>
  <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js></script>
  <link rel=stylesheet href=css/main.css>
</head>
<body>
<header>Brian Grimson</header>
<?php include('searchNav.php') ?>

<div class=gallery>
<?php displayLibrary($artLibrary); ?>


</div>
</body>
</html>
