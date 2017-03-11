<?php




function displayArtLibrary(){
  $json = file_get_contents('artwork.json');
  $library = json_decode($json, true);
  $bw_filter = isset($_GET['bw']) ? $_GET['bw'] : '';
  $color_filter = isset($_GET['color']) ? $_GET['color'] : '';
  $photo_filter = isset($_GET['photo']) ? $_GET['photo'] : '';
  $year_filter = isset($_GET['year']) ? $_GET['year'] : '';



  foreach($library as $artwork){

    $artThumb = '<div onclick=newWindow("'.$artwork['url'].'") class="artwork '.$artwork['class'].'" id='.$artwork['id'].' > <img alt='.$artwork['id'].' class=thumb src='.$artwork['url'].'> 
               <div class=caption> '.$artwork['dimensions'].'<br>'.$artwork['material'].'<br>'.$artwork['year'].'</div> </div>';

    if ($bw_filter == '' && $color_filter == '' && $photo_filter ==''){
      echo $artThumb;
    }
    elseif($bw_filter == 'on' && $artwork['class'] == 'bw' && ($year_filter==$artwork['year'] || $year_filter== '' )) {
      echo $artThumb;
    }
    elseif($color_filter == 'on' && $artwork['class'] == 'color' && ($year_filter==$artwork['year'] || $year_filter== '' )){
      echo $artThumb;
    }
    elseif($photo_filter == 'on' && $artwork['class'] == 'photo' && ($year_filter==$artwork['year'] || $year_filter== '' )){
      echo $artThumb;
    }

  }





}
