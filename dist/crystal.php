<?php 



$images = $data->items;

  foreach ($images as $image ) {
$thumbnail =  $image->images->standard_resolution->url;
  //var_dump($thumbnail);
 



   if($image->caption->text == '#clearday'){
    $thumbnail_clearday =  $image->images->standard_resolution->url;
  }else if( $image->caption->text =='#rain'){
    $thumbnail_rain =  $image->images->standard_resolution->url;
  }else if ( $image->caption->text =='#clearnight'){
    $thumbnail_clearnight =  $image->images->standard_resolution->url;
  }else if ( $image->caption->text =='#cloudy'){
    $thumbnail_cloudy =  $image->images->standard_resolution->url;
  }else if ( $image->caption->text =='#partlycloudyday'){
    $thumbnail_partlycloudyday =  $image->images->standard_resolution->url;
  }else if( $image->caption->text =='#snow'){
    $thumbnail_snow =  $image->images->standard_resolution->url;
  }else if( $image->caption->text =='#partlycloudynight'){
    $thumbnail_partlycloudynight =  $image->images->standard_resolution->url;
  }else if ( $image->caption->text =='#wind'){
    $thumbnail_wind =  $image->images->standard_resolution->url;
  } else {
    $thumbnail = NULL; // Image url for default
    
    
  }
}

if($forecast->currently->icon == 'clear-day') {
     $experiment = $experiments[0];

  } else ($forecast->currently->icon == 'clear-night'){
      $experiment = $experiments[1];
  } else if ($forecast->currently->icon == 'rain'){
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
  
  } else {
     $thumbnail = $thumbnail_clearnight;
}

    
    


  
  
?>

<img src=" <?php echo $thumbnail ;?> " alt="">