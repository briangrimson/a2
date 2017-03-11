<?php require('logic.php') ?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Brian Grimson</title>
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
  <meta name="description" content="The artwork of Brian Grimson">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel=stylesheet href=css/main.css>

<script>
function newWindow(url){
  window.open(url, "Brian Grimson", height=800, width=1000);
}

function openContact(){
  window.open('contact.php', 'Contact', height=200, width=300)
}
</script>


</head>

<body>



<div class=searchNav>
<h1>Brian<br> Grimson</h1>

<form method=get action="index.php">
<!-- filter by work -->

<h3> Series </h3>
   <input type=checkbox name='bw' checked> <label for='bw'>Black &amp; White </label><br>
   <input type=checkbox  name='color'  checked> <label for='color' >Color</label><br>
   <input type=checkbox name='photo'  checked> <label for='photo' > Photo Transfer </label> <br>

<!-- filter by year -->
<div class=select>
<label for='year'>Year</label>

  <select  name=year>
    <option value=''>All </option>
    <option value=2017>2017 </option>
    <option value=2016>2016 </option>
  </select><br>

</div>
  <input type=submit class='btn btn-secondary btn-lg' value='Filter'>
</form>
<div class='info'>
<h3 onclick=openContact()>Contact</h3>

</div>

</div>







<div class=gallery>

<?php
displayArtLibrary();

?>


</div>





</body>
</html>
