<?php
session_start();
include 'back.php';
if (isset($_POST['submit']))
  $book=$_POST['book'];
  $author=$_POST['author'];

  $a=mysql_query("INSERT INTO night (book,author) VALUES ('$book','$author')");

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">


       <input type="text" name="book" placeholder="book"><br>
       <input type="text" name="author" placeholder="author"><br>
       <input type="submit" name="submit" value="submit">


     </form>
   </body>
 </html>
