<?php
session_start();
include 'back.php';
include 'nav.php';
if(isset($_POST['return']))
{extract($_POST);
$query=mysql_query("SELECT * from night where bookid='bookid'");
$row=mysql_fetch_assoc($query);
if($bookid==$row['bookid'])
{ echo "returning of order confirmed";}
else {echo "<h1>"."oops! its seems like you have enter wrong book id"."</h1>";}

}

 ?>
<!DOCTYPE html>
<html>
<head>
<title>return oder</title>
<style>
input{margin: 5px;
border:none;
border-bottom:1px solid;
font-size: 30px;
width:440px;
}
form{ margin: 200px;
margin-left: 500px;}
body	{background-image: url('book.jpg'); }


}
</style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="book name" placeholder="Enter book name"><br>
<input type="text" name="bookid" placeholder="Book id"><br>
<input type="submit" name="return" value="return"><br>

</form>
</body>
</html>
