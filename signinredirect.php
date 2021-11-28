<?php
	ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	class signinredirect extends Dbconnection
	{
		public function signin()
		{
            $email=$_POST['email'];
            $password=$_POST['password'];
            $sql=$this->conn->prepare("SELECT count(*) from member where email='$email' and password='$password'");
            $sql->execute();
			

			
			
			if($sql->fetchColumn()) {
				session_start();
				$_SESSION['email']=$email;
				$_SESSION['password']=$password;
				header("Location: index1.php");
			}
			else{
				$flag2=1;
				header("Location: signin.php?flag2=".$flag2);
				exit(0);
			}
		}
	}
	 $sigin=new signinredirect();
	 $sigin->signin();
     ?>