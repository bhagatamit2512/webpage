<?php
session_start();
include 'back.php';

if(isset($_POST['submit']))
  $name=$_POST['name'];

$query=mysql_query("DELETE FROM donate WHERE name='$name'");

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>deleteing</title>
   </head>
   <body>
     <form class="pdelete" action= "<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
       <input type="text" name="name" placeholder="DELETE">
       <input type="submit" name="submit" value="submit">


     </form>

   </body>
 </html>
