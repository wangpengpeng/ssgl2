<?php
session_start();
if($_SESSION["username"]=="") 
{
echo "<script language='javascript'>"; 
echo " location='login.php';"; 
echo "</script>"; 	
exit();		
}
?>