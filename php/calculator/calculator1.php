<p>The answer is: 
<?php
if($_POST['group1'] == add) {
echo "$first + $second";
}
else if($_POST['group1'] == subtract) {
echo "$first - $second";
}
else if($_POST['group1'] == times) {
echo "$first * $second";
}
else if($_POST['group1'] == divide) {
echo "$first / $second";
}
?>
</p> 
<!DOCTYP html>
<html>
	<head>
		<title>Calculator- switch</title>
		
	</head>
	<body>
		<form method="post" attribute="post" action="calculator1.php">
<p>First Value:<br/>
<input type="text" id="first" name="first"></p>
<p>Second Value:<br/>
<input type="text" id="second" name="second"></p>
<input type="radio" name="group1" id="add" value="add" checked="true"><p>+</p><br/>
<input type="radio" name="group1" id="subtract" value="subtract"><p>-</p><br/>
<input type="radio" name="group1" id="times" value="times"><p>x</p><br/>
<input type="radio" name="group1" id="divide" value="divide"><p>/</p><br/>
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>
</form>
	</body>
</html>