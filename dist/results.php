<?php  	include 'partials/head.php';
		include 'app/forecast.php';

 ?>

<div class="container mx-auto">
	<!-- Start of Card -->
	<div class="card border-0">
		<img src="images/<?php  echo  $icon_current ?>.svg" alt="" width="200px" class="mx-auto">
		
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
		<div class="bg-danger rounded my-5 py-3">
		 <!--  <p> this is the expirement section</p> -->
		  	<div class="title bg-white my-5 mx-5 rounded">
		  		Suck an Egg into a bottle
		  		


		  	</div>
			








		








		</div>
	<!-- End of Expiremnet -->


</div>


	
<?php  include 'partials/footer.php'; ?>

