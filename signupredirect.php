<?php
	ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	class signupredirect extends Dbconnection
	{
		public function signup()
		{
			$firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
			$sql=$this->conn->prepare("SELECT COUNT(*) from member where email='$email'");
			$sql->execute();
			if(!$sql->fetchColumn()){
				$sql="INSERT INTO member VALUES ('$firstname','$lastname','$email','$password')";
				$con= $this->conn;
				if($con->exec($sql)==TRUE) {
					header('Location:signin.php');
				}
				else{
					header('Location:signup.php');
				}
			}
			else{
				$flag1=1;
				header("Location: signup.php?flag1=".$flag1);
				exit(0);
			}
		}
	}
	$sigup=new signupredirect();
	$sigup->signup();
?>