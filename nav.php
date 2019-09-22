<?php
include 'header.php';
 ?>

<body>

  <div style="display:block;">
  <div class="nav">

        <div class="city">
     <a href="g.php" style="text-decoration:none;position:relative;top:-1px;"><i class="material-icons">account_circle</i>Login</a></div>
  <div class="city">   <a href="sign.php" style="text-decoration:none;">Sign up <a>
     </div>

     </div>
   </div>

</body>
<style>
.nav{
  background-color:#020306;

justify-content: flex-end;
 }
 .city{
   color:#0B0202;
   overflow: hidden;
   padding: 10px;
 display: inline-block;
 font-size: 18px;
 text-align:left;
  }

  a:link {
    color:whitesmoke;
    font-family: 'Roboto', sans-serif;
    transition: all 0.2s ease-in;
  }
  /* visited link */
  a:visited
  {color:#0E806E
  }
  /* mouse over link */
  .city:hover {
    color:black;
   text-decoration-line: none;
 font-size: 24px;
 transition: all 0.2s ease-in;}
  /* selected link */

  .city:link {
   text-decoration: none;/*text decoration is used to remove the underline*/
 }
 .city:visited {
   text-decoration: none;
 }
 .city:active {
   text-decoration: underline;
 }
 .city:link {
   background-color:none;
 }
 .city:visited {
   background-color: cyan;
 }
 .city:hover {
   background-color:#023F86;
 }
.city:active {
   background-color: hotpink;
}
.material-icons{
  font-size: 24px;
  position: relative;
  top: 4px;}
.car{
  text-align: right;
}
