		
<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
		//get the Variables of the Form
			$firstName =filter_var($_POST['first-name'], FILTER_SANITIZE_STRING);
			$lastName  = filter_var($_POST['last-name'], FILTER_SANITIZE_STRING);
			$password  = filter_var($_POST['password'], FILTER_VALIDATE_REGEXP
			, array(
					"options" => array("regexp" => '/[a-zA-Z\s]+/') //alpha or space at least one character
			));

			$email     =  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
			$bio       =  filter_var($_POST['bio'], FILTER_SANITIZE_STRING);
			endif;
			