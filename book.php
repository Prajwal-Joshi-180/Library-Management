<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class="heading"> Prajwal BOOK ADDA</h2>
    <form action="insertredirect.php" method="post">
 
        <table align="center" >
            <tr>
            <td> Book Id :</td>
            <td> <input type="text" name="id" size="48" placeholder="Enter Unique ID"> </td>
            </tr>
            <tr>
            <td> Book Name :</td>
            <td> <input type="text" name="name" size="48" placeholder="Enter the BooK Name"> </td>
            </tr>
            <tr>
            <td> Book Author :</td>
            <td> <input type="text" name="author" size="48" placeholder="Enter the name of Author"> </td>
            </tr>
            <tr>
            <td> Published Date </td>
            <td> <input type="date" name="publication" size="48"> </td>
            </tr>
            <tr>
            <td> Add Image: </td>
            <td> <input type="file" name="images" size="48"> </td>
            </tr>
            <tr>
            <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        </table>
    </form>
</body>
</html>