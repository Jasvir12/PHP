<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$rollErr = $nameErr = $genErr = $emailErr = "";
$roll= $name = $email = $address = $gender = "";
   
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["Roll"]))
    {
        $rollErr = "Roll is mandatory";
    }else
    {
        $roll = test_data($_POST["Roll"]);
        if(!preg_match("/^[0-9]*$/",$roll))
        {
            $rollErr = "Only digits are allowed";
        }
    }
    if(empty($_POST["Name"]))
    {
        $nameErr = "Name is mandatory";
    }else
    {
        $name = test_data($_POST["Name"]);
        if(!preg_match("/^[a-zA-Z]*$/",$name))
        {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST["email"]))
    {
        $emailErr = "Email is mandatory";
    }else
    {
        $email = test_data($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
            $email="";
        }
        }
    
    if(empty($_POST["Address"]))
    {
        $address = "";
    }else
    {
        $address = test_data($_POST["Address"]);
        
    }
    if(empty($_POST["gender"]))
    {
        $genErr = "Gender is mandatory";
    }else
    {
        $gender = test_data($_POST["gender"]);
        
    }
}
function test_data($dt)
{
    $dt = trim($dt);
    $dt = stripcslashes($dt);
    $dt = htmlspecialchars($dt);
    return $dt;
}

?>
    <h2>Validation form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

      Roll :<input type="text" name="Roll">
      <span class="error">* <?php echo $rollErr;?></span>
      <br><br>

      Name :<input type="text" name="Name">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>

      E-mail :<input type="text" name="email">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>

      Address :<textarea name="Address" rows="5" cols="40"></textarea>
      
      <br><br>

      Gender :<input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="other">Other
      <span class="error">* <?php echo $genErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="submit">
    </from> 

<?php
echo "<h2>Your Input:</h2>";
echo "<br>";
echo $roll;
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;




?> 
</body>
</html>