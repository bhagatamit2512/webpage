<?php
session_start();
include 'back.php';
include 'nav.php';
include 'sidebar.php';
include 'rsidebar.php';
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $address=$_POST['address'];
  $city=$_POST['city'];
   $pin=$_POST['pin'];
   $email=$_POST['email'];
   $pnumber=$_POST['pnumber'];
   $PAN=$_POST['PAN'];
 }

$query=mysql_query("INSERT INTO donate(name,address,city,pin,email,pnumber,PAN) VALUES('$name','$address','$city','$pin','$email','$pnumber','$PAN')");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="design.css">
    <title>Donate form</title>
  </head>
  <style>

  input[type=text], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=email], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=number], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 20%;
    background-color: #124D95;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius:10%;
    cursor: pointer;
    font-size: 20px;
  }

  input[type=submit]:hover {
    background-color: #7B0E27;
  }

  .don{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }


  </style>
  <body>
  <center>

  <strong>Doner details</strong><div class="don">
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      Name*<input class="de" type="text" name="name" placeholder="first name" > <input  class="de" type="text" name="" placeholder="last name"><br>
     Address*  <input class="de" type="text" name="address" placeholder="address"><br>
      City*<input class="de" type="text" name="city" placeholder="city"><br>
      State*<select class="de" name="state" placeholder="state">
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
        <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
                              <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                          <option value="Jharkhand">Jharkhand</option>
                                                          <option value="Karnataka">Karnataka</option>
                                                          <option value="Kerala">Kerala</option>
                                                          <option value="Lakshadweep">Lakshadweep</option>
                                                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                          <option value="Maharashtra">Maharashtra</option>
                                                          <option value="Manipur">Manipur</option>
                                                          <option value="Meghalaya">Meghalaya</option>
                                                          <option value="Mizoram">Mizoram</option>
                                                          <option value="Nagaland">Nagaland</option>
                                                          <option value="New Delhi">New Delhi</option>
                                                          <option value="Orissa">Odisha</option>
                                                          <option value="Puducherry">Puducherry</option>
                                                          <option value="Punjab">Punjab</option>
                                                          <option value="Rajasthan">Rajasthan</option>
                                                          <option value="Sikkim">Sikkim</option>
                                                          <option value="Tamilnadu">Tamilnadu</option>
                                                          <option value="Telangana">Telangana</option>
                                                          <option value="Tripura">Tripura</option>
                                                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                          <option value="Uttarakhand">Uttarakhand</option>
                                                          <option value="West Bengal">West Bengal</option>
      </select>
  <br>    P.I.N code*<input class="de" type="number" name="pin" placeholder="pin code"><br>
      Email*<input class="de" type="email" name="email" placeholder="email"><br>
      Phone number*<input class="de" type="number" name="pnumber" placeholder="phone number"><br>
      PAN No.*<input class="de" type="number" name="PAN" placeholder="PAN card number"><br>
      <input type="submit" name="submit" value="submit"><br>
      <p><h6>* can't be left blank</h6></p>
</div>
</center>
    </form>

  </body>
</html>
