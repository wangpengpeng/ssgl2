<?php 
include ("session.php");
include("db_conn.php");
mysql_query("set names 'gbk'");
if (isset($_POST['Submit'])){
$xh=$_REQUEST["xh"];
$yy=$_REQUEST["yy"];
$c=$_REQUEST["c"];
$wl=$_REQUEST["wl"];

$query="insert into chengji(xh,yy,c,wl) values ('$xh','$yy','$c','$wl')";
$result=mysql_query($query);
if(mysql_query($result))
	{
		echo("<script language='javascript'>alert('ʧ�ܣ�����ϵ����Ա ��');window.location.href='user_xinxi.php';</script>");
		exit();
	}
	else
	{
	echo("<script language='javascript'>alert('��ӳɹ���');window.location.href='chengji_xinxi.php';</script>");
		
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


<body>
<form action="" method="post" enctype="multipart/form-data" name="myform" >
  
  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background=""><table width="428" border="0">
             <tr>
               <td width="41">���:</td>
               <td width="55"><span class="button"></span></td>
               <td width="318"><a href="#" onclick="sousuo()"id="navmenu">

 ����ʱ�䣺
     <script language="javascript" type="text/javascript" src="time.js"></script>
</a></td>
             </tr>
           </table>
            <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="144" align="left"></td>
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
				<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
				 <tr class="CTitle" >
                    	<td height="22" colspan="3" align="center" class="select_tr STYLE2" style="font-size:16px">�������</td>
                  </tr>
                  <tr bgcolor="#EEEEEE">
				    <td width="9%" align="center" height="30">���Һ�</td>
                    <td colspan="2"><input name="xh" class="text" id="xh" style="width:150px" size="50" /></td>
                    </tr>
                  <tr bgcolor="#FFFFFF">
				    <td width="9%" height="20"><div align="center">���</div></td>
                    <td ><input name="yy" class="text" id="yy" style="width:150px" size="50" /></td>
                    <td rowspan="2">                  </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">����</div></td>
                    <td ><input name="c" type="text" class="text" id="c" style="width:150px" size="50" /></td>
					</tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">���ʱ��</div></td>
                    <td ><input name="wl" type="text" class="text" id="wl" style="width:150px" size="100" /></td>
                    <td>&nbsp;</td>
				  </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">���ҵ绰</div></td>
                    <td ><label>
                      <input name="wl2" type="text" class="text" id="wl2" style="width:150px" size="100" />
                    </label></td>
                    <td>&nbsp;</td>
                  </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20" colspan="3"><div align="center">
				      <input name="Submit" type="submit" value="�ύ" />
				      <input name="Submit2" type="reset" value="����" />
				    </div></td>
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
