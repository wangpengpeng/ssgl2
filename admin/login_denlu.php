<?php

if($_POST["action"]=="do")
{
	$username=$_POST["username"];
	$pwd=$_POST["pwd"];
	session_start();
			include("db_conn.php");	
			$result=mysql_query("select count(*) from admin where username='$username' and pwd='".md5($pwd)."'");
			$row = mysql_fetch_array($result);
			
			if($row[0]==0)
			{
				echo("<script language='javascript'>alert('�û������������');window.location.href='login.php';</script>");	
				exit();			
			}	
			
			else
			{
				$_SESSION["username"]=$username;
				echo "<script language='javascript'>"; 
                echo " location='index.php';"; 
                 echo "</script>"; 	
				exit();					
			}
			
}					
	
?>
