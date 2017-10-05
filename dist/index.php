<?php  include 'partials/head.php'; ?>

<!-- Start of Jumbo Tron(Call to Action) -->
		<div class="jumbotron py-5 ">

			<h1 class="display-1 mb-4 text-center">Weather Fun</h1>


			<form class="form-inline mx-auto" method="post" action="results.php">
			  <label class="sr-only" for="location">location</label>
			  <input name="location" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="location" 
			  placeholder="location">

				<button type="submit"  class="btn btn-dark">Go!</button>
			</form>
		</div>
<!-- End of Call to Action -->

<!-- Start of Content -->
	<div>
		<div>
			<img src="images/didyouknow-01.png" alt="Did you know?" class="w-25 ml-4">
		</div>
		<div class=" container bg-primary rounded ">
			<h1> This is the container that will hold the map.</h1>
		</div>
	</div>
<!-- End of Content -->
		


<?php  include 'partials/footer.php'; ?>