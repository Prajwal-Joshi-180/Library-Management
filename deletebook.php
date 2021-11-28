<?php
	ini_set('display_errors', true);
	require_once __DIR__ . '/include.php';
	class deletebook extends Dbconnection
	{
		public function delete()
		{
			$id=$_POST['id'];
            $sql = "DELETE FROM book_lib WHERE id=$id";
			$con= $this->conn;

			if($con->exec($sql)==TRUE) {
				header('Location:index1.php');
			}
			else{
                echo "Fail to delete";
			}
		}
	}
    ?>