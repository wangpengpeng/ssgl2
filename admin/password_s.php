<?php
include ("session.php");
include("db_conn.php");
$xpwd=$_REQUEST["xpwd"];
$jpwd=$_REQUEST["jpwd"];


        
		$query="select * from admin where username='".$_SESSION[username]."'";
		$result=mysql_query($query);
		$my_row = mysql_fetch_array($result);
if(md5($jpwd)==$my_row [2])
{
       $query="update admin set pwd = md5($xpwd) where username='".$_SESSION[username]."' ";
        $result1=mysql_query($query);
		if($result1)
		
		echo"<script language='javascript'> alert('��ϲ��!�޸ĳɹ�,������:".$xpwd."���μǣ�');history.back();</script>";
}       
else 
      echo"<script language='javascript'> alert('���������!');history.back();</script>";

  
?>