<?php
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
	echo @$name;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
