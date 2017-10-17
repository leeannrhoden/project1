<?php  	include 'partials/head.php';
		include 'app/forecast.php';

 ?>

<div class="container mx-auto">
	<!-- Start of Card -->
	<div class="card border-0">
		<img src="images/<?php  echo  $icon_current ?>.svg" alt="" width="300px" class="mx-auto">
		
		<h2 class="mx-auto"> 
			<?php echo $place; ?>
		</h2>

		<h3 class="mx-auto">
			<?php echo $temp_current; ?>&deg;
		</h3>

		<p class= "lead mx-auto">
		Relative Humidity <?php echo $humidity_current; ?>%
		</p>
	</div>
	<!-- End of Card -->

	<!-- Start of Experiment -->
		<div class=" bg-danger rounded my-4 py-3">

		 	<!--  experiment title-->
		  	<div class="title bg-white my-3 mx-5 py-4 px-2 rounded">
		  		Suck an Egg into a bottle
		  	</div>

		  	<!-- MATERIALS-->
		  	<div class="materials bg-white my-4 mx-5 py-4 px-2 rounded" width="200px" >
		  		
		  	</div>

		  	<!-- DRAWING -->
		  	<div class=" drawing bg-white my-4 mx-5 py-4 px-2 rounded" >
		  		
		  	</div>
			
			<!-- STEPS -->
			<div class="steps bg-white my-4 mx-5 py-4 px-2 rounded">
				
			</div>

			<!-- EXPLANATION -->
			<div class="explanation bg-white my-4 mx-5 py-4 px-2 rounded" width="200px">
				
			</div>







		








		</div>
	<!-- End of Expiremnet -->


</div>


	
<?php  include 'partials/footer.php'; ?>

