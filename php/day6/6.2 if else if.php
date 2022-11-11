<!DOCTYPE html>
<html>
<body>


<?php

//if...elseif...else statement - executes different codes for more than two conditions
$t = 10;
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t <= "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
 
</body>
</html>