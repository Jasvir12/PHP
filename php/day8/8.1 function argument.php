<!DOCTYPE html>
<html>
<body>
<!--
PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:-->
<?php
//function or familyname /function name
function familyName($fname) {
    echo "$fname how r u.<br>";
}

familyName("hello");
familyName("Hye");
familyName("fine");

?>

</body>
</html>