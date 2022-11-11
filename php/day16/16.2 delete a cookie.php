<!--Delete a Cookie
To delete a cookie, use the setcookie() function with an expiration date in the past:

Example-->
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>