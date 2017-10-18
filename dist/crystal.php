<?php

 
$experiments = $data->items;

  foreach ($experiments as $experiments ) {
$thumbnail =  $experiments->experimentss->standard_resolution->url;
  //var_dump($thumbnail);
 



   if($experiments->caption->text == '#clearday'){
    $thumbnail_clearday =  $experiments->experimentss->standard_resolution->url;
  }else if( $experiments->caption->text =='#rain'){
    $thumbnail_rain =  $experiments->experimentss->standard_resolution->url;
  }else if ( $experiments->caption->text =='#clearnight'){
    $thumbnail_clearnight =  $experiments->experimentss->standard_resolution->url;
  }else if ( $experiments->caption->text =='#cloudy'){
    $thumbnail_cloudy =  $experiments->experimentss->standard_resolution->url;
  }else if ( $experiments->caption->text =='#partlycloudyday'){
    $thumbnail_partlycloudyday =  $experiments->experimentss->standard_resolution->url;
  }else if( $experiments->caption->text =='#snow'){
    $thumbnail_snow =  $experiments->experimentss->standard_resolution->url;
  }else if( $experiments->caption->text =='#partlycloudynight'){
    $thumbnail_partlycloudynight =  $experiments->experimentss->standard_resolution->url;
  }else if ( $experiments->caption->text =='#wind'){
    $thumbnail_wind =  $experiments->experimentss->standard_resolution->url;
  } else {
    $thumbnail = NULL; // experiments url for default
    
    
  }
}

if($forecast->currently->icon == 'clear-day') {
     $thumbnail = $thumbnail_clearday;
  } 

else if ($forecast->currently->icon == 'rain'){
     $thumbnail = $thumbnail_rain;
  } else if ($forecast->currently->icon == 'snow'){
     $thumbnail = $thumbnail_snow;
  } else if ($forecast->currently->icon == 'wind'){
     $thumbnail = $thumbnail_wind;
  } else if ($forecast->currently->icon == 'partly-cloudy-night'){
     $thumbnail = $thumbnail_partlycloudynight;
  } else if ($forecast->currently->icon == 'partly-cloudy-day'){
     $thumbnail = $thumbnail_partlycloudyday;
  } else if ($forecast->currently->icon == 'cloudy'){
     $thumbnail = $thumbnail_cloudy;
  } else if ($forecast->currently->icon == 'clear-night'){
      $thumbnail = $thumbnail_clearnight;
  } else {
     $thumbnail = $thumbnail_clearnight;
}

    
    


  
  
?>

<img src=" <?php echo $thumbnail ;?> " alt="">

