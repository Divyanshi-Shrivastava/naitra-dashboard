<?php
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
	echo @$name;
}
?>
<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="php_demo.php">
	Enter name :<input type="text" name="name" />
	<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
