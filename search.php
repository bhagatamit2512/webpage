<?php
session_start();
include 'database.php';
$search=$_GET['search'];
if($search!="")
{
  $query=mysql_query("SELECT * FROM ks WHERE roll like'%."$search"%'");
  $row=mysql_fetch_assoc($query);
  echo $row['email']."<br>";
  echo $row['roll']."<br>";
  echo $row['school']."<br>";
  echo $row['physics']."<br>";
  echo $row['chemistry']."<br>";
  echo $row['maths']."<br>";
  echo $row['english']."<br>";
  echo $row['name']."<br>";

  echo $row['total']."<br>";
  echo $row['result']."<br>";
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
       <input type="text" name="search" placeholder="search">
       <input type="submit" name="submit" value="submit">


     </form>

   </body>
 </html>
