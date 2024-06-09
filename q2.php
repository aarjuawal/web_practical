<?php 
setcookie("name","address",time()+1*20*3600,"/","",0);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php 
     if(!isset($_COOKIE['name'])){
     	echo "set cookie value";
     }
     else{
     	echo $_COOKIE['name'];
     }
     if(!isset($_COOKIE['address'])){
     	echo "set cookie value";
     }
     else{
     	echo $_COOKIE['address'];
     }
 	 ?>
 
 
 </body>
 </html>