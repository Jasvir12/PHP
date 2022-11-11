<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<!--$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.-->
<body>
<?php 
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
 }
 addition();
 echo $z;
 echo "<br>";
function sub() {
 
   $GLOBALS['z'] = $GLOBALS['x'] - $GLOBALS['y'];
}

sub();
echo $z;
echo "<br>";
function mul() {
 
   $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}

mul();
echo $z;

?>
</body>
</html>
