<?php
include 'back.php';

 ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>middle 1</title>
        <link rel="stylesheet" href="">
      </head>
      <body>
      <div class="flip">
        <h1>TRENDING BOOK:</h1> </div>

      <div class="camlin">
        <div class="kart">
        <div class="z1">
          <img  src="t2.jpg" alt="" hspace="20" >
            <button type="submit" class="btn btn-default">add to cart</button>
              <button type="wish" class="btn btn-default">wishlist</button>
        </div>
        <div class="z2">
            <img  src="t2.jpg" alt="" hspace="20">
            <button type="submit" class="btn btn-default">add to cart</button>
              <button type="wish" class="btn btn-default">wishlist</button>
        </div>
        <div class="z3">
            <img  src="t2.jpg" alt="" hspace="20">
            <button type="submit" class="btn btn-default">add to cart</button>
              <button type="wish" class="btn btn-default">wishlist</button>
        </div>
        <div class="z4">
            <img  src="t2.jpg" alt="" hspace="20">
            <button type="submit" class="btn btn-default">add to cart</button>
              <button type="wish" class="btn btn-default">wishlist</button>
        </div>







</div>
        </div>




            </body>
      <style>
.flip{
  position: absolute;
  top: 900px;
  left:300px;
}
.camlin{
  position: absolute;

  top: 980px;
  left:200px;


}
.kart{
  height: 200px;
  width: 50%;
  display:flex;
  justify-content: space-between;
}

button[type="submit"]{
  height: 30px;
  width: 150px;
  margin-left: 30px;
  color: white;
  cursor: pointer;
  background-color:#281A17;
  border-radius: 4px;
  border: none;
}
button[type="submit"]:hover
{
  background:hotpink;
  border-radius:2px 10px 2px;
  transition-delay: 0.1s;}
  button[type="wish"]{
    height: 30px;
    width: 150px;
    margin-left: 30px;
    color: white;
    cursor: pointer;
    background-color:red;
    border-radius: 4px;
    border: none;
  }
  button[type="wish"]:hover
  {
    background:hotpink;
    border-radius:2px 10px 2px;
    transition-delay: 0.1s;}
    .z1{
    display: inline-block;

    }
      </style>
    </html>
