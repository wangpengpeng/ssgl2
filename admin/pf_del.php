<?php
include ("session.php");
include("db_conn.php");
$id=$_GET["id"];

$sql="delete from pfb where id=$id";
mysql_query($sql);
//mysql_query("DELETE FROM pf WHERE id = '$_GET[xh]' LIMIT 1;");
if(isset($_GET['id']))
{
		echo("<script language='javascript'>alert('ɾ���ɹ�!��');window.location.href='pf_xinxi.php';</script>");
		exit();
	}
	else
	{
		echo("<script language='javascript'>alert('ɾ��ʧ��,����ϵ����Ա ��');window.location.href='user_xinxi.php';</script>");
		exit();	
	}
?>