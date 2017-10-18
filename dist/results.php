<?php  	include 'partials/head.php';
		include 'app/forecast.php';
		$conditions = $forecast['currently']['icon'];

						switch ($conditions) {
						case "clear-day":
						$photo = "images/bluesky.svg";
						break;

						case "clear-night":
						$photo = "images/volcano.svg";
						break;

						case "partly-cloudy-day":
						$photo = "images/rainbow.svg";
						break;

						case "partly-cloudy-night":
						$photo = "images/cloud_in_bottle.svg";
						break;

						case "cloudy":
						$photo = "images/lightening-mouth.svg";
						break;

						case "fog":
						$photo = "images/make_fog.svg";
						break;

						case "wind":
						$photo = "images/pinwheel.svg";
						break;

						case "sleet":
						$photo = "images/evaporation.svg";
						break;

						case "snow":
						$photo = "images/snowman.svg";
						break;

						case "rain":
						$photo = "images/raindrop.svg";
						break;


						default:
						$photo = "images/cloud_in_bottle.svg";
						}

 ?>



<div class="container mx-auto">
	<div class="container d-flex justify-content-center ">
	<!-- Start of Card -->
		<div class=" d-inline-block col-8 mx-3">

		<img src="images/<?php echo $icon_current; ?>.svg" alt="" width="350px" class="icon mx-auto d-flex" >
			
			<h2 class="title text-center display-3"> 
				<?php echo $place; ?>
			</h2>
		
	<!-- End of Card -->
	<!-- Start of Card -->
		<div class="container d-inline-block rounded  bg-primary   px-5 py-3" >
			<h4 class="  text-white  mx-auto text-center ">
				It is <?php echo $temp_current; ?>&deg; outside, with a relative humidity of <?php echo $humidity_current; ?>%
			</h4>
		</div> 
	</div>
</div>
	<!-- Start of Experiment -->
		<div class=" bg-danger rounded my-4 py-3">
		<h1 class="cool text-white pl-5"> Today's Experiment: </h1>

		 	<!--  experiment title-->
		  	<div class="title bg-white my-3 mx-5 py-4 px-4 rounded">
			 <img src="<?php echo $photo; ?>" alt="">
			


			
				



<!-- 
				// $experiments = json_decode(file_get_contents('expirements.json'), true);
				//  // echo $experiments;
				// 	echo '<pre>';
				//  print_r($experiments);
				// 	echo '</pre>';

					// $temp = $temp_current;

					// 	  if($temp > 0{
					// 	    echo $experiments[0][rand(0, 4)];
					// 	  } else {
					// 	     echo $expirements[1][rand(0, 4)];
					// 	  }




//                foreach ($experiments as $experiment ) {
// 				$value =  $experiment['title']; }

// 					if($icon_current == 'clear-day') {
// 				     $value = $experiments['title'][0];

// 				  } else ($icon_current == 'clear-night'){
// 				      $value = $experiments ['title'][1];
// 				  } 


 -->


		  	</div>


				
			</div>







		








		</div>
	<!-- End of Expiremnet -->


</div>


	
<?php  include 'partials/footer.php'; ?>

