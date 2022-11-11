<!--If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.

So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.-->

<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("America/New_York");

echo "The New York Time Is " . date("h:i:sa");

?>
<br>
<?php
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
echo "The India Time Is ". date('d-m-Y H:i:s');
?>
</body>
</html>