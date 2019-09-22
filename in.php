<?php
session_start();
include 'back.php';
include 'nav.php';
include 'sidebar.php';
include  'rsidebar.php';

if(isset($_POST['submit']))
{
$username=$_POST['email'];
$password=$_POST['password'];
$h=mysql_query("SELECT * FROM signup WHERE email='$username' ");
$n=mysql_num_rows($h);
if($n==1)
{
  $j=mysql_fetch_assoc($h);
    if($password==$j['password'])
    {

      header("refresh:1;url=sign.php");

    }
    else {
    echo "failure";
   }
    }
else{
  echo "email doesn't exist";
}
}

 ?>


<style>

  .box{
    margin:120px;
    margin-left:500px;
    background: #f7eae9;
    box-shadow: 0 3px 5px rgba(0,0,0,0.6);
    height: 500px;
    width: 400px;
    box-sizing: border-box;
     border-radius: 12px;
     transition: width 2s,height 2s}
    input[type="email"],input[type="password"]
    {background:#f7eae9;
      outline: none;
      border:none;
      width: 250px;
      height: 30px;
      border-bottom: 1px solid;
      padding: 4px;
      margin-left:30px;
      font-size: 15px;
      font-family: sans-serif;transition: width 3s,height 1.2s ;transition-timing-function: ease;
    }input[type="email"]:hover{width: 350px;height:37px;border-bottom: 1.5px solid #cc8fc6;}
    input[type="email"]:focus{background:#f0e3e1}
    input[type="password"]:focus{background:#ebfaf2;}
    input[type="submit"]{
      height: 30px;
      width: 150px;
      margin-left: 100px;
      color: white;
      cursor: pointer;
      background-color:red;

      border-radius: 4px;
      border: none;
    }
    input[type="submit"]:hover
    {
      background:hotpink;
      border-radius:2px 10px 2px;
      transition-delay: 0.1s;


    }.r{
      font-weight: 5000;
      color:grey;
      font-size: 30px;
      text-align:top right;

    }
              input[type="radio"]
              {font-size: 10px;
                 margin-left: 70px;
                 margin-top: 30px;
               background: red;}
                 select{ margin:18px;
                 margin-left: 70px;
                 width: 150px;
                 height: 30px;
                  background: #e1f5f3;}
                .o{color:green;
                  font-size: 19px;
                  font-family:comic sans ms;}
                  .box:hover{width:403px;height: 503px; }




</style>
</head>
<body style="background-image:url('http://www.raepica.com/wp-content/uploads/2017/01/books-background.jpg');">

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  	<div class="box"><center><p class="r">BOOKS&BOOKS</p></center>
  	<div class="o">	<input type="email" name="email" placeholder="Email"><br>
          <input type="password" name="password" placeholder="password"><br>
  		<input type="submit" name="submit" value="login"></input><br>


    </div></div>


  	</form>
