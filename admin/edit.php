<?php   
session_start();   
// ���ַ����ǽ�ԭ��ע���ĳ���������� 
unset($_SESSION['username']);
unset($_SESSION['pwd']);
echo("<meta http-equiv=refresh content='0; url=index.php'>"); 
echo "<script language=javascript>window.close();</script>";

?>
