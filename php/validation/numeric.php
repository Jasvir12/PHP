<?php
extract($_POST);
  if (isset($save))
  {
  $pattern="/^[0-9]*$/";
  
   if(preg_match($pattern,$n))
   {
   echo "<center>Your is number right</center>";
   }
   else
   {
   echo "<center>alphabet is not allowed</center>";   
   }
  }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
 email:<input type="text" name="n" placeholder="enter your input"/><br><br>
 <input type="submit" value="submit" name="save">
 </form> 
</body>
</html>
