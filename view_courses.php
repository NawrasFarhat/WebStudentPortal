<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
    <?php
      $con=mysqli_connect('localhost','root','') or die("no connection!!");
      mysqli_select_db($con,'WebProject');

     
      
        $q2="select * from course;";
        $q22=mysqli_query($con,$q2);
        echo "<table border=2>";
        echo "<tr><td>course_number</td><td>course_name</td></tr>";
        while($a1=mysqli_fetch_array($q22))
              echo "<tr><td>$a1[0]</td><td>$a1[1]</td></tr>";
        echo "</table>";   
        mysqli_query($con,$q2) or die("invalid..."); 
      
      ?>
      <a href="1.html">go to Home page</a>
      </body>
      </html>