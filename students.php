<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <table>
            <tr>
                <td>student_number</td>
                <td><input type="text" name="sno"></td>
            </tr>
            <tr>
                <td>student_name</td>
                <td><input type="text" name="sname"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="s1" value="add student"></td>
            </tr>
        </table>
    </form>
    <?php
      $con=mysqli_connect('localhost','root','') or die("no connection!!");
      mysqli_select_db($con,'WebProject');

      if(isset($_GET["s1"]))
      {
        $sno=$_GET["sno"];
        $sname=$_GET["sname"];
      $q1="insert into student values($sno,'$sname');";
      mysqli_query($con,$q1) or die("invalid...");
      }
      ?>
      </body>
      </html>