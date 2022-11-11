<!--Operatos	Description
+=	Add and assign
-=	Subtract and assign
*=	Multiply and assign
/=	Divide and assign quotient
%=	Divide and assign modulus
.=	Concatenate and assign(its used only for sting)-->
<?php
//The PHP assignment operators are used with numeric values to write a value to a variable.

//The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.
?>


 <?php	
	//The left operand gets set to the value of the expression on the right

$x = 50;  
echo $x;
?>
<br> 
<?php
//addition
$x = 200;  
$x += 100;

echo $x;
?> 
<br>
<?php
//subtraction
$x = 100;
$x -= 30;

echo $x;
?>
<br>  
<?php
//multiplication
$x = 100;  
$y = 6;

echo $x * $y;
?>
<br> 
<?php
//division
$x = 50;
$x /= 5;

echo $x;
?> 

<?php
                                   //STRING OPERATOR
//concatinate
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>  