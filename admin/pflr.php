<?php 
include ("session.php");
include("db_conn.php");
mysql_query("set names 'GBK'");
if (isset($_POST['Submit'])){
$xh=$_REQUEST["qsh"];
$yy=$_REQUEST["jd"];
$c=$_REQUEST["pf"];
$wl=$_REQUEST["time"];
$gs=$_REQUEST["pfr"];
$jd=$_REQUEST["lrr"];
$ly=$_REQUEST["remark"];



$query="insert into pfb(qsh,jd,pf,time,pfr,lrr,remark) values ('$xh','$yy','$c','$wl','$gs','$jd','$ly')";
$result=mysql_query($query);
if(mysql_query($result))
	{
		echo("<script language='javascript'>alert('ʧ�ܣ�����ϵ����Ա ��');window.location.href='user_xinxi.php';</script>");
		exit();
	}
	else
	{
	echo("<script language='javascript'>alert('����¼��ɹ���');window.location.href='pf_xinxi.php';</script>");
		
		exit();	
	}	
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.tabfont01 {	
	font-family: "����";
	font-size: 9px;
	color: #555555;
	text-decoration: none;
	text-align: center;
}
.font051 {font-family: "����";
	font-size: 12px;
	color: #333333;
	text-decoration: none;
	line-height: 20px;
}
.font201 {font-family: "����";
	font-size: 12px;
	color: #FF0000;
	text-decoration: none;
}
.button {
	font-family: "����";
	font-size: 14px;
	height: 37px;
}
html { overflow-x: auto; overflow-y: auto; border:0;} 
-->
</style>

<link href="../css/css.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE2 {color: #330000}
-->
</style></head>
<?php 
     include("db_conn.php");
    $query="select * from admin where username='$_SESSION[username]'";
	$result=mysql_query($query); 
    $row = mysql_fetch_array($result);

?>

<body>
<form action="" method="post" enctype="multipart/form-data" name="myform" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="../images/nav04.gif">
            
		   <table width="470" border="0" class="top-font01">
                  <tr>
                    <td width="40" height="39" class="button">���:</td>
                    <td width="42" class="button"><?php echo($row["username"]);?></td>
                    <td width="76" class="button">��ǰʱ��:</td>
                    <td width="226" class="button"><a href="#" onclick="sousuo()"id="navmenu">

 <script language="javascript" type="text/javascript" src="time.js"></script>
</a></td>
                  </tr>
                </table></td>	
		    </tr>
          </table></td>
        </tr>
    </table></td></tr>
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 
              <tr>
                <td height="40" class="font42">
				<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 
              <tr>
                <td height="40" class="font42">
				<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				 <tr class="CTitle" >
                    	<td height="22" colspan="7" align="center" class="select_tr STYLE2" style="font-size:16px">����¼��</td>
                  </tr>
                  <tr bgcolor="#EEEEEE">
				    <td width="12%" align="center" height="30">���Һ�</td>
                    <td width="15%"><input name="qsh" class="text" id="qsh" style="width:120px" size="19" /></td>
					<td width="11%">����</td>
                    <td width="18%"><input name="jd" class="text" id="jd" style="width:120px" size="19" /></td>
					<td width="10%">���ֽ��</td>
					<td width="34%" colspan="2"><input name="pf" class="text" id="pf" style="width:120px" size="19" /></td>
					</tr>
                  <tr bgcolor="#FFFFFF">
				    <td width="12%" height="20"><div align="center">����ʱ��</div></td>
                    <td ><input name="time" class="text" id="time" style="width:120px" size="19" /></td>
					<td>������</td>
                    <td><input name="pfr" class="text" id="pfr" style="width:120px" size="19" /></td>
                    <td>¼����</td>
                    <td colspan="2"><input name="lrr" class="text" id="lrr" style="width:120px" size="19" />                    </td>
                    </tr>
                  <tr bgcolor="#FFFFFF">
                    <td height="20"><div align="center">��ע</div></td>
                    <td colspan="6" ><input name="remark" class="text" id="remark" style="width:120px" size="19" /></td>
                    </tr>
                  <tr bgcolor="#FFFFFF">
                    <td height="20" colspan="7">
                      <div align="center">
                        <input type="submit" name="Submit" value="�ύ" />
                        <input type="reset" name="Submit2" value="����" />
                        </div></td>
                    </tr>
            </table>
				</td>
        </tr>
      </table></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6"><img src="../images/spacer.gif" width="1" height="1" /></td>
        </tr>
        <tr>
          <td height="33">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
</body>
</html>