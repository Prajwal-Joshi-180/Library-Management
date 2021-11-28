<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h2 class="heading">Welcome To Prajwal Book ADDA</h2>
        <form action="signinredirect.php" method="POST">
        <table cellspacing=3px cellpadding=3px>
            <tr>
                <td><label>Email:</label></td>
                <td><input type="text" name="email" size="45"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" size="45"></td>
            </tr>
            <tr>
                <td><input type="submit"  Value="login" size="45"/></td>
            </tr>
            </table>
    </form>
    <?php if(isset($_GET['flag2'])){ ?> <div class="flag2"> Incorrect Login credentials</div><?php } ?><br>
   <a href="signup.php" class="register">Register Here</a>
</body>
</html>