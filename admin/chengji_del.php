<?php
include ("session.php");
include("db_conn.php");
$xh=$_GET["xh"];

$sql="delete from chengji where xh=$xh";
mysql_query($sql);

if(mysql_query($sql))
{
	echo("<script language='javascript'>alert('��ϲ����ɾ���ɹ���');window.location.href='chengji_xinxi.php';</script>");
	exit();
}
else
{
	echo("<script language='javascript'>alert('ʧ�ܣ�����ϵ����Ա��');window.location.href='chengji_xinxi.php';</script>");
	exit();	
}		
?>