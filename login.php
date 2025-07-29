<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <?php
    session_start();
    ?>
</head>
<body>
    <div class="logindiv">
        <form method="post">
          <table>
             <tr>
                <td>User_Name</td>
                <td><input type="text" name="un"></td>
             </tr>
             <tr>
                <td>Password</td>
                <td><input type="password" name="pas"></td>
             </tr>
             <tr>
                <td colspan="2"><center><input type="submit" value="Login" name="s1"></center></td>
             </tr>
          </table>
        <a href="newUser.php" class="newuser">NewUser?</a>
        </form>
    </div>   
    <?php
    $con=mysqli_connect('localhost','root','') or die("no connection!!");
      mysqli_select_db($con,'WebProject');

      if(isset($_POST["s1"]))
      {
         $uname=$_POST["un"];
         $pass=$_POST["pas"];
         $_SESSION["un"]=$uname;
         $q1="select * from users where user_name='$uname' and password='$pass';";
         $q2=mysqli_query($con,$q1);
         if($a=mysqli_fetch_array($q2))
            header('location:courses.php');
         else
           echo "invalid username or password";
      }   
    ?>    
</body>
</html>