<?php
require('Form.php');
require('tools.php');

use DWA\Form;

$jsonArt=file_get_contents('artwork.json');
$artLibrary=json_decode($jsonArt, true);

function displayLibrary($library){
$form =new Form($_GET);
$bwFilter = $form->get('bw','off');
$colorFilter = $form->get('color','off');
$photoFilter = $form->get('photo','off');
$yearFilter = $form->get('year', '');
$keywordFilter = $form->get('keyword', '');

  foreach($library as $artwork){
      $id = $artwork['id'];
      $class = $artwork['class'];
      $tags = $artwork['tags'];
      $year = $artwork['year'];
      $dimensions = $artwork['dimensions'];
      $material = $artwork['material'];
      $url = $artwork['url'];
      $artThumb = '<div class="artwork '.$class.' "" id='.$id.' > <a href='.$url.'><img class=thumb src='.$url.'> </a>
            <div class=caption> '.$dimensions.'<br>'.$material.'<br>'.$year.'</div>

            </div>';

if($keywordFilter == ''){
    if(($bwFilter == 'off') && ($colorFilter == 'off') && ($photoFilter == 'off')){
      echo $artThumb;
    }

    elseif(($class == 'bw') && ($bwFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
         echo $artThumb;
      }
    elseif(($class == 'color') && ($colorFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
         echo $artThumb;
      }

    elseif(($class == 'photo') && ($photoFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
         echo $artThumb;
      }
    }
  elseif(in_array($keywordFilter, $tags)){
         echo $artThumb;
    }

};

}
