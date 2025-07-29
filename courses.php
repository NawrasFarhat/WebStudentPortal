<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    session_start();
    if(!$_SESSION["un"])
    header('location:login.php');
    else
    echo "welcome"." ".$_SESSION["un"];

    ?>
</head>
<body>
    <form method="get">
        <table>
            <tr>
                <td>course_number</td>
                <td><input type="text" name="cno"></td>
            </tr>
            <tr>
                <td>course_name</td>
                <td><input type="text" name="cname"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="s1" value="add course"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="s2" value="view courses"></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" name="lo" value="logout"></td>
            </tr>
        </table>
    </form>
    <?php
      $con=mysqli_connect('localhost','root','') or die("no connection!!");
      mysqli_select_db($con,'WebProject');

      if(isset($_GET["s1"]))
      {
        $cno=$_GET["cno"];
        $cname=$_GET["cname"];
      $q1="insert into course values($cno,'$cname');";
      mysqli_query($con,$q1) or die("invalid...");
      }
      if(isset($_GET["s2"]))
      {
        $q2="select * from course;";
        $q22=mysqli_query($con,$q2);
        echo "<table border=2>";
        echo "<tr><td>course_number</td><td>course_name</td></tr>";
        while($a1=mysqli_fetch_array($q22))
              echo "<tr><td>$a1[0]</td><td>$a1[1]</td></tr>";
        echo "</table>";   
        mysqli_query($con,$q2) or die("invalid..."); 
      }
      if(isset($_GET["lo"]))
      {
        header('location:logout.php');
      }
      ?>
      <a href="1.html">go to Home page</a>
      </body>
      </html>