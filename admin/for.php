<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
include("conn.php");
$name=$_POST["name"];
$pwd=$_POST["pwd"];
$sql="select * from user where name='$name' and pwd='$pwd'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if($row)
{
	$_SESSION["name"]=$name;
	echo "<script language='javascript'>window.location.href='admin.php'</script>";
}
else 
	echo "<script language='javascript'>window.location.href='login.php'</script>";
?>
</body>
</html>
