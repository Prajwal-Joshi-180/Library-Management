<?php
  require_once __DIR__ . '/sessioncheck.php';
	ini_set('display_errors', true);
	require_once __DIR__ .'/include.php';
	$display = new Display();
	$data = $display->displayBook();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body align="center">
    <h2 class="heading">Prajwal BOOK ADDA </h2>
    <div class="dropdown">
      <img src="download.png" alt="1" class="profile_img">
      <div class="dropdown-content">
        <a href="passwordchange.php">Change Password</a>
        <a href="sessionlogout.php">Log Out</a>
      </div>
    </div>
    <form action="pinForm.php" method="POST">
      <input type="submit" value="ADD BOOK">
    </form><br>
    <?php
    if(empty($data)){
      echo "AT Present Library Don't have Any Book";
    } else {
    ?>
    <table border="2" align="center">
      <tr>
        <th> Id </th>
        <th> Name </th>
        <th> Author </th>
        <th> Published Date </th>
        <th> image </th>
      </tr>
      <?php
      foreach($data as $row){
      ?>
      <tr>
        <td><?php echo $row["id"];?> </td>
        <td><?php echo $row["name"];?> </td>
        <td><?php echo $row["author"];?> </td>
        <td><?php echo $row["publication"];?> </td>
        <td><img src="<?php echo $row['images']; ?>"  height="30px"; width="30px"/></td>
        <td><form action="deleteredirect.php" method="POST">
          <button value ="<?php echo $row["id"];?>" name="id"><img src="images.png" height=20px wudth=20px></button>
        </tr>
        <?php 
        }
        } ?>
      </table>
  </body>
</html>