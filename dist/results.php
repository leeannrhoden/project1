<?php  	include 'partials/head.php';
		include 'app/forecast.php';

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
		  	<div class="title bg-white my-3 mx-5 py-4 px-2 rounded">
			
			

			<?php
				$experiments = json_decode(file_get_contents('expirements.json'), true);
				 // echo $experiments;
					echo '<pre>';
				 print_r($experiments);
					echo '</pre>';


//                foreach ($experiments as $experiment ) {
// 				$value =  $experiment['title']; }

// 					if($icon_current == 'clear-day') {
// 				     $value = $experiments['title'][0];

// 				  } else ($icon_current == 'clear-night'){
// 				      $value = $experiments ['title'][1];
// 				  } 




				
			 ?>


			 	  
	

<!-- 		

		  		<h1>SUCK AN EGG INTO A BOTTLE</h1> -->
		  	</div>

		  	<!-- MATERIALS-->
		  	<!-- <div class="materials bg-white my-4 mx-5 py-4 px-2 rounded" width="200px" >
		  		
		  	</div> -->

		  	<!-- DRAWING -->
		  <!-- 	<div class=" drawing bg-white my-4 mx-5 py-4 px-2 rounded" > -->
		  		
		  	<!-- </div> -->
			
			<!-- STEPS -->
			<!-- <div class="steps bg-white my-4 mx-5 py-4 px-2 rounded">
				 -->
			<!-- </div> -->

			<!-- EXPLANATION -->
			<!-- <div class="explanation bg-white my-4 mx-5 py-4 px-2 rounded" width="200px"> -->
				
			</div>







		








		</div>
	<!-- End of Expiremnet -->


</div>


	
<?php  include 'partials/footer.php'; ?>

