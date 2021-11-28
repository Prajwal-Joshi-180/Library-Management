<?php
	require_once __DIR__ . '/sessioncheck.php';
	ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	class insert1 extends Dbconnection
	{
		public function insert()
		{
			$id=$_POST['id'];
			$name =$_POST['name'];
			$author=$_SESSION['email'];
			$publication=$_POST['publication'];
			$book_image ="images/".$_POST['images'];

			$sql="INSERT INTO book_lib VALUES ('$id','$name','$author','$publication','$book_image')";
			$con= $this->conn;
			if($con->exec($sql)==TRUE) {
				header('Location:index1.php');
			}
			else{
                echo "Fail to Insert";
			}
		}
	}
    ?>
	
	