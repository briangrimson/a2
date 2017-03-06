<?php




function displayArtLibrary(){
  $json = file_get_contents('artwork.json');
  $library = json_decode($json, true);
  $bw_filter = isset($_GET['bw']) ? $_GET['bw'] : '';
  $color_filter = isset($_GET['color']) ? $_GET['color'] : '';
  $photo_filter = isset($_GET['photo']) ? $_GET['photo'] : '';
  $year_filter = isset($_GET['year']) ? $_GET['year'] : '';


  foreach($library as $artwork){
    echo 'hello';
    // if($color_filter == '' && $bw_filter == '' && $photo_filter == ''){
    //   echo '<div>'.$artwork['url'].'</div>';
    // }
  }





}
