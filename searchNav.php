<script>

function check_boxes(){
  $('label.chk').on("click", function () {
    alert('hello');
   });

};


</script>


<div class=searchNav>
<!-- form for search method -->
<form method=get action="index.php">
<!-- filter by work -->

   <input type=checkbox  name='bw' checked> <label   for='bw'>Black and White </label><br>
   <input type=checkbox   name='color'  checked> <label  for='color'>Color</label><br>
   <input type=checkbox  name='photo'  checked> <label  for='photo'> Photo Transfer </label> <br>
<!-- filter by year -->
<label for='year'>Year</label>
  <select  name=year>
    <option value=''>All </option>
    <option value=2017>2017 </option>
    <option value=2016>2016 </option>
  </select><br>
  <input type=submit class='submit' value='Filter'>
</form>

</div>
