<?php
include ("session.php");
include("db_conn.php");
$xh=$_GET["xh"];

$sql="delete from user where xh=$xh";
mysql_query($sql);
mysql_query("DELETE FROM chengji WHERE xh = '$_GET[xh]' LIMIT 1;");
if(isset($_GET[xh]))
{
		echo("<script language='javascript'>alert('ѧ��:".$xh." ѧ��ע���ɹ�!��');window.location.href='student_xinxi.php';</script>");
		exit();
	}
	else
	{
		echo("<script language='javascript'>alert('ʧ��,����ϵ����Ա ��');window.location.href='student_xinxi.php';</script>");
		exit();	
	}	

?>