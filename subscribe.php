<?php
session_start();
include 'back.php';
include 'nav.php';
include 'sidebar.php';
include 'rsidebar.php';
if(isset($_POST['submit']))
$name=$_POST['name'];
$mail=$_POST['mail'];
$i=mysql_query("INSERT INTO subscribe (name,mail) VALUES ('$name','$mail')");
 ?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {
  border: 3px solid whitesmoke;
  font-family: Arial;
}
.container {
  padding: 20px;
  background-color: whitesmoke;
}
input[type=text], input[type=submit] {
  width: 25%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=checkbox] {
  margin-top: 16px;
}
input[type=submit] {
  background-color: #7B0E27;
  color: white;
  border: none;
}
input[type=submit]:hover {
  opacity: 0.8;
}
</style>
<body>
  <center> <div class="container">
    <h2>Subscribe to our Page</h2>
    <p>Get update about the book added in a site on daily basis</p>
  </div>
  <div class="container" style="background-color:white">
      <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" placeholder="Name" name="name"><br>
    <input type="text" placeholder="Email address" name="mail"><br>
  </div>
    <input type="submit" value="Subscribe" name="submit">
  </center>
</form>
</body>
</html>
