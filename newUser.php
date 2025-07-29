<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        User_Name:<input type="text" name="un"></td>
        Password:<input type="password" name="pas"></td>
        <input type="submit" value="add user" name="s1">
    </form>
    <?php
    $con=mysqli_connect('localhost','root','') or die("no connection!!");
      mysqli_select_db($con,'WebProject');

      if(isset($_POST["s1"]))
      {
         $uname=$_POST["un"];
         $pass=$_POST["pas"];
         $q1="insert into users values('$uname','$pass');";
         mysqli_query($con,$q1);
      }   
      ?>
      <a href="login.php">go to login page</a>
</body>
</html>