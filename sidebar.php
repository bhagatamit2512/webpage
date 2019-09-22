<?php
session_start();
include 'back.php';


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 150px;
  position: fixed;
  z-index: 1;
  top: 64px;
  left: 10px;
  background-color:#0C0C0A;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color:whitesmoke;
  display: block;
}

.sidenav a:hover {
  color:#023F86;
  transition: all 0.2s ease-in;
}



@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.side
{
color: #172E2C;
overflow: hidden;
padding: 10px;
display: inline-block;
font-size: 18px;
}

</style>
</head>
<body>
<div class="sidenav">
  <a class="side" href="index.php" target="_self">Home</a>
    <a class="side" href="" target="_self"> My profile </a>

  <a class="side" href="">Services</a>
  <a class="side" href="don.php" target="_self">Donate</a>
  <a class="side" href="" target="_self">Rental </a>
  <a class="side" href="addp.php" target="_self">Return </a>
  <a class="side" href="subscribe.php" target="_self">Subscribe </a>
    <a class="side" href="" target="_self">Cart</a>
      
  <a class="side" href="">Contact</a>
  <a class="side" href="">About</a>






</div>
   </body>
 </html>
