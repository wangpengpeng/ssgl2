

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
<table width="1000" height="150" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><img src="tp/top.jpg" width="1000" height="150" /></td>
  </tr>
</table>
<table width="1000" height="20" bgcolor="#CCCCCC" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td width="90"><div align="center"><span class="STYLE8">��ҳ</span></div></td>
    <td width="90"><div align="center"><span class="STYLE8">���Ҳ�ѯ</span></div></td>
    <td width="90"><div align="center"><span class="STYLE8">�༶��ѯ</span></div></td>
    <td width="90"><div align="center" class="STYLE8">��������</div></td>
    <td width="90"><div align="center" class="STYLE8">������</div></td>
    <td width="90"><div align="center" class="STYLE8">�𻵵Ǽ�</div></td>
    <td width="90"><div align="center" class="STYLE8"><a href="pfxinx.php">������Ϣ</a></div></td>
    <td width="90"><div align="center" class="STYLE8">��������</div></td>
    <td width="90"><div align="center" class="STYLE8"><a href="lyb.php">���԰�</a></div></td>
    <td width="90"><div align="center" class="STYLE8">�����ƶ�</div></td>
    <td width="90"><div align="center" class="STYLE8">ע��ϵͳ</div></td>
  </tr>
</table>
<table width="1000" height="0" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#666666">
  <tr>
    <td width="1000" bgcolor="#FFFFFF"><div align="center"><img src="tp/xian.jpg" width="1000" height="3"></div></td>
  </tr>
</table>

<table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
          	 
              <tr>
                <td height="40" class="font42"><table width="1000" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
                  <tr class="CTitle" >
                    <td height="22" colspan="11" align="center" class="select_tr STYLE2" style="font-size:16px">�����б�</td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td width="18%" height="20">���Һ�</td>
                    <td width="18%" >���</td>
                    <td width="18%">����</td>
                    <td width="18%">���ҵ绰</td>
                    <td width="18%">���ʱ��</td>
                  </tr>
                  <?php
include("db_conn.php");

$sql="select * from chengji";
$query=mysql_query($sql);
mysql_query("set names 'GBK'");
while ($row = mysql_fetch_array($query)) {   
?>
                  <tr bgcolor="#FFFFFF">
                    <td height="20"><?php echo ($row["xh"]); ?></td>
                    <td ><?php echo ($row["yy"]); ?></td>
                    <td><?php echo ($row["c"]); ?></td>
                    <td>&nbsp;</td>
                    <td colspan="2"><?php echo ($row["wl"]); ?></td>
                    <?php
}
?>
                  </tr>
                </table></td>
        </tr>
      </table>
          </td>
        </tr>
</table>
</form>
</body>
<?
	require("tp.php") 
	?>
</html>

