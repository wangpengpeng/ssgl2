<?php
include("db_conn.php");
mysql_query("set names 'GBK'");

if (isset($_POST['Submit'])){
$xh=$_REQUEST["xh"];
$username=$_REQUEST["username"];
$pwd=$_REQUEST["pwd"];
$bj=$_REQUEST["bj"];
$jg=$_REQUEST["jg"];
$sfzh=$_REQUEST["sfzh"];

$csly=$_REQUEST["csly"];
$zymc=$_REQUEST["zymc"];
$addss=$_REQUEST["addss"];
$tel=$_REQUEST["tel"];
$sex=$_REQUEST["sex"];
$list=$_REQUEST["list"];

$mz=$_REQUEST["mz"];
$xb=$_REQUEST["xb"];
$lb=$_REQUEST["lb"];
$query="insert into user(xh,username,pwd,bj,jg,sfzh,csly,zymc,addss,tel,sex,list,mz,xb,lb) values ('$xh','$username',MD5('$pwd'),'$bj','$jg','$sfzh','$csly','$zymc','$addss','$tel','$sex','$list','$mz','$xb','$lb')";
$result=mysql_query($query);
if(mysql_query($result))
	{
		echo("<script language='javascript'>alert('ʧ�ܣ�����ϵ����Ա ��');window.location.href='user_xinxi.php';</script>");
		exit();
	}
	else
	{
	echo("<script language='javascript'>alert('��ϲ��,ѧ��:".$xh."ѧ��ע��ɹ���');window.location.href='user_xinxi.php';</script>");
		
		exit();	
	}	
}

?>
<?php
include 'session.php';
include("db_conn.php");
    $query="select * from admin where username='$_SESSION[username]'";
	$result=mysql_query($query); 
    $row = mysql_fetch_array($result);

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
<script type="text/javascript" src="ajax1.js">

</script>
<script type="text/javascript">
 function aa(aa)
{
   if(aa!='')
   showUser(aa);
   else
   alert('�˺Ų���Ϊ��!');
}</script>
<!--
.STYLE2 {color: #330000}
-->
</style></head>


<body>
<form action="" method="post" enctype="multipart/form-data" name="myform" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="../images/nav04.gif">
            
		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="144" align="left"></td>	
		    </tr>
          </table>
		   <table width="428" border="0">
             <tr>
               <td width="41">���:</td>
               <td width="55"><span class="button"><?php echo($row["list"]);?></span></td>
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
                    	<td height="22" colspan="7" align="center" class="select_tr STYLE2" style="font-size:16px">ѧ����Ϣע��</td>
                  </tr>
                  <tr bgcolor="#EEEEEE">
				    <td width="9%" align="center" height="30">ѧ��</td>
                    <td width="17%"> <label>
  <input name="xh" class="text" id="xh" style="width:150px" size="13" onBlur="aa(getElementById('name').value)"/>
  </label>
   <label id="php"></label></td>
                    <td width="13%">���֤��</td>
                    <td width="17%"><input name="sfzh" class="text" id="sfzh" style="width:150px" size="19" /></td>
					<td>�Ա�</td>
					<td><select name="sex" id="sex">
					  <option>��ѡ��</option>
                      <option>��</option>
                      <option>Ů</option>
                                                            </select></td>
					<td><div align="center">��Ƭ</div></td>
					</tr>
                  <tr bgcolor="#FFFFFF">
				    <td width="9%" height="20"><div align="center">����</div></td>
                    <td ><input name="username" class="text" id="username" style="width:150px" size="50" /></td>
					<td>��������</td>
                    <td><input name="csly" class="text" id="csly" style="width:150px" size="50" /></td>
                    <td>���</td>
                    <td><select name="list" id="list">
                      <option selected="selected">ѧ  ��</option>
                      <option>����Ա</option>
                    </select></td>
                    <td rowspan="2">                  </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">����</div></td>
                    <td ><input name="pwd" type="password" class="text" id="pwd" style="width:150px" size="50" />                      </td>
					<td>רҵ����</td>
                    <td><input name="zymc" type="text" class="text" id="zymc" style="width:150px" size="50" /></td>
                    <td width="8%">����</td>
                    <td width="14%"><select name="mz" id="mz">
                      <option>��ѡ��</option>
                      <option>����</option>
                      <option>����</option>
                      <option>������</option>
                      <option>����</option>
                      <option>ˮ��</option>
                    </select></td>
                    </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">�༶</div></td>
                    <td ><input name="bj" type="text" class="text" id="bj" style="width:150px" size="50" /></td>
					<td>��ͥ��ַ</td>
                    <td><input name="addss" type="text" class="text" id="addss" style="width:150px" size="100" /></td>
                    <td>ϵ��</td>
                    <td><select name="xb" id="xb">
                      <option>��ѡ��</option>
                      <option>�ƿ�ϵ</option>
                      <option>Ӣ��ϵ</option>
                      <option>����ϵ</option>
                      <option>����ϵ</option>
                      <option>����ϵ</option>
                                        </select></td>
                    <td>&nbsp;</td>
				  </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20"><div align="center">����</div></td>
                    <td ><input name="jg" type="text" class="text" id="jg" style="width:150px" size="50" /></td>
					<td>��ϵ����</td>
                    <td><input name="tel" type="text" class="text" id="tel" style="width:150px" size="50" /></td>
                    <td>���</td>
                    <td><select name="lb" id="lb">
                      <option>��ѡ��</option>
                      <option>ũ��</option>
                      <option>����</option>
                                        </select></td>
                    <td>&nbsp;</td>
                  </tr>
				  <tr bgcolor="#FFFFFF">
				    <td height="20" colspan="7"><div align="center">
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
