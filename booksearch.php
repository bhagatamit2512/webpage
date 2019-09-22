<?php
session_start();
include 'back.php';

$book=$_POST['book'];

if ($book!="" )
{
$c=mysql_query("SELECT * FROM night WHERE book=$book ");
   if($c){
          mysql_fetch_assoc($c);
          echo $c['book_id']."<br>";
            echo $c['book_content']."<br>";
              echo $c['book_image']."<br>";

              }

}


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
       <input type="text" name="book" placeholder="search by book">
       <input type="submit" name="submit" value="submit">

     </form>

   </body>
 </html>
