<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style>
		div{margin-top: 150px;
			margin-left: 500px;
	     }
         .r {color: purple;
         	margin-top:0px;
         	font-size: 30px;}
         	.e{ color:#8a6d71;
         	font-size: 30px;
         	 }
         #email{
         	border: 0;
         	background: rgba(0,0,0,0);
         	border-bottom: 1.5px solid red;
         	margin-left: 30px;
         	width: 300px;
         	font-size: 24px;
         	margin-top: 0px;

         }.q{ border-radius: 30px;width: 60px;height: 60px ;margin: 10px;}
         .p{ color:#8a6d71;
         	font-size: 30px;}
         	.box
         	{margin-top: 120px;
			margin-left: 500px;
			width:400px;
			height:350px;
			box-shadow: 0 3px 5px rgba(0,0,0,0.6) }
			form{margin:5px;
				margin-left: 15px;}
				.e{font-size: 30px;
					font-family: serif;}
					.n{font-family: sans-serif;
						margin-left: 240px;
						margin-top: 0px;
						color:#4a9dd4;
						text-decoration: none;}
						.look{
							border-radius: 8px;
							width: 70px;
							height: 30px;
							background:#c76a14;
						}.lok{
							border-radius: 8px;
							width: 70px;
							height: 30px;
							background:#c76a14;

						}



         	}

	</style>
</head>
<body style="background-image:url('m2.jpg');">

	<div class="box">
	<p class="r"><img class="q" src="m5.jpg">	BOOK N BOOK</p>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
	<p class="e"><input type="email" name="email" placeholder="Email" id="email">	</p>
	<p class="p"><input type="password" name="password" placeholder="Password" id="email"></p>
	<a href="Passwordforget.php"><p class="n"><i>forget password?</i></p></a>
	<input type="submit" name="login" value="login" class="look">
	<input type="submit" name="signup" value="signup"
	   style="margin-left: 50px;" class="lok">

</form>
	</div>

</body>
</html>
<?php
session_start();

include'back.php';


if (isset($_POST['login']))

{  $email=$_POST['email'];

  $password=$_POST['password'];



  $query=mysql_query("SELECT * from signup where email='$email' ");

  $n=mysql_num_rows($query);

  if($n==1)

  {

    $row=mysql_fetch_assoc($query);

    if ($password==$row['password'])

    {$_SESSION['id']=True;
header("refresh:1;url=index.php");
}
 else

    {

      echo "failure!";

    }

  }

  else {

    echo "email doesn't Exist!";

  }



}



 ?>
