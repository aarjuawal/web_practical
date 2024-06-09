<!DOCTYPE html>
<html>
<head>
  <title>Form Handling4</title>
  <style type="text/css">
    .error{
      color: red;
      display: block;
    }
  </style>
</head>
<body>
  <?php
  $errName=$errAddress=$errPhone=$errphonelength=$errEmail=$errUrl=' ';
  $name=$address=$phone=$email=$Url='';
      if(isset($_POST['submit'])){
        $name=$_POST['name']; 
        $phone=$_POST['phone']; 
        $address=$_POST['address'];  
        $email=$_POST['email'];
        $Url=$_POST['Url'];
        if(empty($name)){
          $errName = "name should not be empty";
        }
        else{
          echo "$name";
        }
        if(empty($phone)){
          $errPhone= "phone should not be empty";
        }
        else{
          if(is_numeric($phone) && strlen($phone)==10){
            echo "$phone";
          }
          else{
             $errphonelength = "enter valid 10 digit phone number";
          }
        }
        if(empty($address)){
          $errAddress = "address should not be empty";
        }
        else{
          echo "$address";
        }
        if(empty($email)){
          $errEmail="Email is empty"."<br>";
        } 
        else{
          if(filter_var($email,FILTER_VALIDATE_EMAIL))
          {
            echo $email;
          }
          else{
            $errEmail="email is not in proper format"."<br>";
          }
        } 
        if(empty($Url)){
          $errUrl="Url is blank"."<br>";
        } 
        else{
          if(filter_var($Url,FILTER_VALIDATE_URL)){
            echo $Url;
          }
          else{
            $errUrl="Url is not in proper format";
          }
        }
        }
  ?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Name:<input type="text" name="name" >
        <span class="error"><?php echo $errName; ?></span>
    <br><br><br>
    Phone:<input type="text" name="phone" >
        <span class="error"><?php echo $errPhone; ?></span>
    <br><br><br>
        Address:<input type="text" name="address">
        <span class="error"><?php echo $errAddress; ?></span>
        <br><br><br>
        Email:<input type="text" name="email">
        <span class="error"><?php echo $errEmail; ?></span>
        <br><br><br>  
        Url:<input type="text" name="Url">
        <span class="error"><?php echo $errUrl; ?></span>
        <br><br><br>   
    <input type="submit" name="submit" value="send">
  </form>
  
</body>
</html>