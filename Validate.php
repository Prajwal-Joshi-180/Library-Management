<?php
ini_set('display_errors', true);
	class Validate
	{
	
	public function validatedata(){
	
	
	$pin = $_POST['pincode'];

	if ($pin=='123')
	{
	header('Location: book.php');
	}
	else{
		$flag=1;
		header("Location: pinForm.php?flag=".$flag);
		exit(0);
}}
	}

?>