<?php
include("db_conn.php");
$id=$_GET["id"];

$sql="delete from gg where id=$id";
mysql_query($sql);

if(mysql_query($sql))
{
	echo("<script language='javascript'>alert('��ϲ����ɾ���ɹ���');window.location.href='gonggao.php';</script>");
	exit();
}
else
{
	echo("<script language='javascript'>alert('ʧ�ܣ�����ϵ����Ա��');window.location.href='gonggao.php';</script>");
	exit();	
}		
?>