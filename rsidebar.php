<?php
include 'back.php';
 ?>
 <!DOCTYPE html>
 <html lang="" dir="ltr">
   <head>
     <link rel="stylesheet" href="">
     <meta charset="utf-8">
     <title>Rsidebar</title>
   </head>
   <body>
       <div class="cat">
   <table><tr>
           <th class="c">CATEGORIES:</th></tr>
         <tr><td rowspan="1"><a class="opt" href=""><span>Study<br>Refernces</span></td></tr>
         <tr>  <td rowspan="1"><a class="opt" href=""><span>Enginnering</span></a></td></tr>
         <tr>  <td rowspan="1"><a class="opt" href=""><span>Literature</span></a></td></tr>
         <tr>  <td rowspan="1"><a class="opt" href=""><span>Non fiction</span></a></td></tr>
         <tr>  <td rowspan="1"><a class="opt" href=""><span>Poetry</span></a></td></tr>
         <tr>  <td rowspan="1"><a class="opt" href=""><span>Biography</span></a></td></tr>
         <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
          <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
           <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
            <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
             <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
              <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
             <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
              <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
               <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                 <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                  <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                   <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                    <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                     <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                      <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                       <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
                        <tr>  <td rowspan="1"><a class="opt" href=""><span>Lifestyle</span></a></td></tr>
 </table>
       </div>
   </body>
   <style>
   body {
     font-family: "Lato", sans-serif;
   }
   .cat{
     height: 100%;
     width: 150px;
     position: fixed;
     z-index: 1;
     top: 64px;
     right: 10px;
     background-color:#0B141F;
     overflow-x: hidden;
     padding: 8px 0;
   }
   .cat a {
     padding: 6px 8px 6px 16px;
     text-decoration: none;
     font-size: 18px;
     color:whitesmoke;
     display: block;
   }

   .cat a:hover {
     color:#043673;
     transition: all 0.2s ease-in;
   }
   @media screen and (max-height: 450px) {
     .cat {padding-top: 15px;}
     .cat a {font-size: 18px;}
   }
   .opt
   {
   color: #172E2C;
   overflow: hidden;
   padding: 10px;
   display: inline-block;
   justify-content: flex-start;
   font-size: 10px;
   }
   table,  td {
     border: 1px solid whitesmoke;
     border-collapse: separate;
     padding: 1px;
     text-align: left;
   }
   table,th,td{
     float:left 1px;
     text-decoration: none;
   }
   /* Clear floats after the columns */
   table,th,td:after {
     content: "";
     display: table;
     clear: both;
   }
.c{
  color: whitesmoke;
}
   </style>
 </html>
