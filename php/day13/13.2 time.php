<!--Get a Simple Time
Here are some characters that are commonly used for times:

h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
The example below outputs the current time in the specified format:-->
<!DOCTYPE html>
<html>
<body>

<?php
echo "The time is " . date("h:i:sa");
echo "The time is " . date("h:i:sa");

?>

</body>
</html>