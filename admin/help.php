<?php
include 'session.php';
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
<?php 
	include("db_conn.php");
    $query="select * from admin where username='$_SESSION[username]'";
	$result=mysql_query($query); 
    $row = mysql_fetch_array($result);

?> 
    
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
        </tr></table></td></tr>
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6"><img src="../images/spacer.gif" width="1" height="1" /></td>
        </tr>
        <tr>
          <td height="33"><div align="center" class="left-font02">
            <div align="center">
              <p>ʹ��˵��</p>
              <p align="left">�������ϵͳ���ִ���ѧ�����в���ȱ�ٵĲ���,�������ݶ���ѧУ�ľ����ߺ͹�������˵������Ҫ,</p>
              <p align="left">�������ϵͳ�ܹ�Ϊ�û��ṩȫ�����Ϣ�Ϳ�ݵĲ�ѯƽ̨����ͳ���˹���ʽ����ѧ����ʽ������Ч��</p>
              <p align="left">��ݵ��ṩ�����ѯ����.�����˹�����ʽ���������ȱ��,��:Ч�ʵ͡�</p>
              <p align="left">�����Բ�,����ʱ��һ��,�������������ļ�������,����ڲ��ҡ����º�ά���������˲��ٵ����ѡ�</p>
              <p align="left">���ſ�ѧ�����Ĳ������,������ϱ����ǿ����� <br />
                ǿ��Ĺ�����Ϊ���������ʶ,���ѽ����������ĸ������򲢷�����Խ��Խ��Ҫ�����á� <br />
                ��Ϊ�����Ӧ�õ�һ����,ʹ�ü������ѧ��ѧ����Ϣ���й���,�������ֹ��������޷�������ŵ�.����:����Ѹ�١�</p>
              <p align="left">���ҷ��㡢�ɿ��Ըߡ��洢���󡢱����Ժá����������ɱ��͵ȡ���Щ�ŵ��ܹ���������ѧ��ѧ�������Ч��,</p>
              <p align="left">Ҳ�Ǹ�У��ѧ�������滯�����һ�����ͽ�ѧģʽ�� </p>
              <p align="left">����ͨ�������Ŭ���ܶ���������������һ������ ����ϵͳ��ϵͳ����ʱ��̺ܶ�ط�û�еĵ����ƣ� ����������������</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div>
          </div></td>
        </tr>
      </table></td>
  </tr>
</table>
</form>
</body>
</html>
