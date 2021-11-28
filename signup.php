<html>
    <head>   
    <link rel="stylesheet" href="style.css"> 
    </head>
<body>
<h2 class="heading">Welcome To Prajwal Book ADDA</h2>
    <form action="signupredirect.php" method="POST">
        <table cellspacing=3px cellpadding=3px>
            <tr>
                <td><label>First Name:</label></td>
                <td><input type="text" name="firstname" size="45"></td>
            </tr>
            <tr>
                <td><label>Last Name: </label></td>
                <td><input type="text" name="lastname" size="45"></td>
            </tr>
            <tr>
                <td><label>Email:</label></td>
                <td><input type="text" name="email" size="45"></td>
            </tr>
            <!-- <tr>
                <td><label>Profile Picture:</label></td>
                <td><input type="file" name="profilepicture" size="45"></td>
            </tr> -->
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" size="45"></td>
            </tr>
            <tr>
                <td><input type="submit"  Value="Register" size="45"/></td>
            </tr>
        </table>
    </form>
    <a href="signin.php" class="already-have-account">Already Have Account ?</a>
    <?php if(isset($_GET['flag1'])){ ?> <div class="flag1"> Email Already Registered</div><?php } ?>
</body>
</html>