<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function makeconnection()
{
	$cn=mysqli_connect("sql306.epizy.com","epiz_29958450","5r3P8sNTES75u4","epiz_29958450_travel1");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}

$cn=mysqli_connect("sql306.epizy.com","epiz_29958450","5r3P8sNTES75u4","epiz_29958450_travel1");
?>
</body>
</html>