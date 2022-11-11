<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data" action="upload.php">

  <input type="file" name="file" />
  <input type="submit" value="Upload" />
  </form>
  
  <?php
  $files = scandir("uploads");
  for ($a = 2; $a < count($files); $a++){
  ?>
  <p>
  <a downloads="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
  <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
    <img src="download.jpg" width="50" height="50" />
</a>
  </p>
  <?php
  
  }
  ?>
</body>
</html>


