<?php
session_start();
include 'back.php';
$query=mysql_query("SELECT * FROM night" );
while($row=mysql_fetch_assoc($query)){
$image = $_POST['img'];
}


 ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<form  action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST" enctype="multipart/form-data">
              <img  src="1.jpg/<?php echo $image;?>" alt="">
            </form>
