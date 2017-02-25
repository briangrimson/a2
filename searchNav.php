<div class=searchNav>
<!-- form for search method -->
<form method=get action="index.php">
<!-- filter by work -->

  <label>Black and White </label> <input type=checkbox name='bw' checked> <br>
  <label >Color</label> <input type=checkbox  name='color'  checked><br>
  <label > Photo Transfer </label> <input type=checkbox name='photo'  checked> <br>
<!-- filter by year -->
<label>Year</label>
  <select  name=year>
    <option value=''>All </option>
    <option value=2017>2017 </option>
    <option value=2016>2016 </option>
  </select><br>
  <input type=submit class='btn btn-primary btn-lg' value='Filter'>
  </form>

  <form method=get action='index.php'>
<!--filter by keyword  -->
  <h3>keyword</h3>
  <input type=text name=keyword><br>
  <label><i>e.g. drawing, forest</i><br>
  <input type=submit class='btn btn-primary btn-lg' value='Filter'><br>
</form>
</div>
