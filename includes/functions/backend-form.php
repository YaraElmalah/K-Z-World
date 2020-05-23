<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'):
			include 'form-variables.php';
		//Creating an Array for Errors
			$errors = array(); 
		//Here We write the conditions of the Sending the form
			if(strlen($firstName) < 2 ):

				$errors[] = "The First Name Can not be less than 2 Character";

			endif;

			if(strlen($lastName) < 2 ):

				$errors[] = "The Last Name Can not be less than 2 Character";

			endif;

			//For Password
			if(strlen($password) < 5 ):

				$errors[] = "The Password Can not be less than 5 Character";

			endif;

			//Getting The Errors in the Errors Section

			if(!empty($errors)):
				echo "<div class='alert alert-danger role='start'>";
				foreach ($errors as $e ):
					echo $e . "<br>";
				endforeach;
				echo "</div>";
				endif;

			//Success with No Errors

				if(empty($errors)):

				echo $success = "<div class='alert alert-success'> A Verification Email will Send to You, Thank You :D </div>";

			     endif;


		endif;