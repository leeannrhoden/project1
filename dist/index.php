<?php  include 'partials/head.php'; ?>

<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> -->
<!-- Start of Jumbo Tron(Call to Action) -->
		<div class="jumbotron bg py-5 bottomborder">
				
			<h1 class="display-1 mb-4 text-center ">Weather Fun</h1>

			<!-- Start of Search form -->
			<form class="form-inline d-flex justify-content-center" method="post" action="results.php">
			  	<label class="sr-only" for="location">location</label>
			  	<input name="location" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="location" 
			  placeholder="location">
			<button type="submit"  class="btn btn-dark">Go!</button>
			</form>
			<!-- End of Form -->
		</div>
<!-- End of Call to Action -->
<!-- Start of Content -->
	<div>
		<div>
			<img src="images/didyouknow-01.png" alt="Did you know?" class="w-25 ml-5">
		</div>
		<div class="map container bg-primary rounded my-5"> 
			<h1> This is the container that will hold the map.</h1>
				
					<div id="info-box"></div>
		</div>
			<<!-- ?xml version="1.0" encoding="utf-8"?> -->
		

<!-- End of Content -->
		

 <script  src="js/index.js"></script>

<?php  include 'partials/footer.php'; ?>
