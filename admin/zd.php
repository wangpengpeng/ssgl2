<?php 
include ("session.php");
include("db_conn.php");
mysql_query("set names 'gbk'");
if (isset($_POST['Submit'])){
$xh=$_REQUEST["xh"];
$yy=$_REQUEST["yy"];
$c=$_REQUEST["c"];

$query="insert into zd ('','$xh','$yy','$c')";
$result=mysql_query($query);
if(mysql_query($result))
	{
		echo("<script language='javascript'>alert('ʧ�ܣ�����ϵ����Ա ��');window.location.href='zd.php';</script>");
		exit();
	}
	else
	{
	echo("<script language='javascript'>alert('��ӳɹ���');window.location.href='zd_edit.php';</script>");
		
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
.STYLE3 {font-size: 14px}
.STYLE4 {font-size: 14; }
-->
</style></head>


<body>
<form action="" method="post" enctype="multipart/form-data" name="myform" >
  
  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="">
            
		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="144" align="left"></td>	
		    </tr>
          </table>
		   <table width="428" border="0">
             <tr>
               <td width="41">���:</td>
               <td width="55"><span class="button"></span></td>
               <td width="318"><a href="#" onclick="sousuo()"id="navmenu">

 ����ʱ�䣺
     <script language="javascript" type="text/javascript" src="time.js"></script>
</a></td>
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
                    	<td colspan="3" align="center" class="select_tr STYLE2" style="font-size:16px"><h1 class="STYLE3">���ҹ����ƶ�</h1></td>
                  </tr>
                  
                  <tr bgcolor="#FFFFFF">
				    <td colspan="3"><div align="center"></div>
				      <div align="center"></div>
				      <label></label>
                      <p class="STYLE4">1��ͬѧ֮���Ž��Ѱ���ǫ�û�����ʹ���ҳ�Ϊ��ů�ļ��塣 <br />
                        2��ÿ��סУ����������������ֵ����ְ������ס�޼��ɡ� <br />
                        3����Լ��ˮ�õ磬���ֹغ�ˮ��ͷ����׼˽�԰�װ����(�窪¯�����������������)����׼�����򣬲�׼��������<br />
                        ����
                        �͡� <br />
                        4�����������ֹ��ǽ���һ�����׼�ڳ����϶����Ӻ�װ����𻵹���Ҫ�⳥�� <br />
                        5��ҹ���޽���������Ϩ��ǰ�������ң�����׼��ʱ���ڲ�׼���塢���˿ˡ�����Ϸ���ȡ� <br />
                        6��ͬѧ֮�以����ĺ����£����޺������ں͹��������������֣�����Ӱ��ͬѧ��Ϣ�� <br />
                        7��ע�ⰲȫ���������𣬲��������һ����ȴ��򡢵�ǽ�ڣ��Ͻ�����դ����̨����׼�Ҵ����ң��ر�����Ůͬѧ��<br />
                        ����
                        �ҡ���׼���Դ�ͨУ�����������ڡ����г���ָ���ص�ͣ�������� <br />
                        8����������������������ʹ��ͳһ����ֽ�������涨����ֽ¨��������ˮ���ڲ�׼��ʣ��ʣ�˻����������ֹ��<br />
                        ����
                        ��������ֽм��Ƥ����������Ͻ������ȼ���ױ���Σ��Ʒ���Ͻ�������� <br />
                      9����������ָ����ʦ�͹�����Ա�Ĺ��� </p></td>
                    </tr>
				  
				  
				  <tr bgcolor="#FFFFFF">
				    <td width="9%" height="20"><div align="center">����ʱ��</div></td>
                    <td colspan="2" ><label>2011</label></td>
				  </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20" colspan="3"><div align="center"></div></td>
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

