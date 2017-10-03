<?php  include 'partials/head.php'; ?>


		<div class="container py-5">
			<h1 class="display-1 mb-4">Weather Fun</h1>


			<form class="form-inline" method="post" action="results.php">
			  <label class="sr-only" for="location">location</label>
			  <input name="location" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="location" 
			  placeholder="location">

			
			  <button type="submit"  class="btn btn-primary">Submit</button>
			</form>
		</div>


<?php  include 'partials/footer.php'; ?>