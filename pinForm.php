<html>
    <head>
    <link rel="stylesheet" href="style.css">
            </head>
<body>
    <div>
    <form action="ValidateRedirect.php" method="POST">
        <label>Pincode:</label>
            <input type="number" name= "pincode" placeholder="Enter the Pin to Access Prajwal Book Adda" style="width:300px;">
    </div>
    <div>
    <input type="submit" Value="ACCESS" />
    </div>
    <?php if(isset($_GET['flag'])){ ?> <div class="flag"> Wrong Pin</div><?php } ?>
    </form>
</body>
</html>

