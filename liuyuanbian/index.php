<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css.css" rel="stylesheet" type="text/css" />
<title>���԰���ҳ</title>
</head>

<body>
<table width="700" height="25" border="0" cellpadding="0" cellspacing="0" class="border1">
  <tr>
    <th scope="col" align="center" valign="middle" class="lj"><a href="index.php">�鿴����</a>|<a href="add.php">��������</a>|<a href="admin.php">��������</a></th>
  </tr>
</table>
<table width="700" height="400" border="0" cellpadding="0" cellspacing="0" class="border2">
  <tr>
    <th scope="col" align="left" valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <th scope="col" width="100" height="35">&nbsp;</th>
        <th scope="col" width="600">����</th>
      </tr>
	  <?php
		include("conn.php");
		$sql="select * from users";
		$result=@mysql_query($sql);
		while($row=@mysql_fetch_array($result)){
		?>
      <tr>
        <td height="20" align="right" class="bk">�û�����</td>
        <td class="bk1">&nbsp;<?php echo $row["name"];?></td>
      </tr>
      <tr>
        <td height="20" align="right" class="bk">���Ա��⣺</td>
        <td class="bk1">&nbsp;<?php echo $row["bt"];?></td>
      </tr>
      <tr>
        <td height="20" align="right" class="bk">Email��</td>
        <td class="bk1">&nbsp;<?php echo $row["email"];?></td>
      </tr>
      <tr>
        <td align="right" valign="middle" class="bk2">�������ݣ�</td>
        <td class="bk3">&nbsp;<?php echo $row["nr"];?></td>
      </tr>
	  <tr>
	  <td height="15"></td>
	  <td height="15"></td>
	  <?php
	  }
	  ?>
    </table></th>
  </tr>
</table>
<table width="700" height="100" border="0" cellpadding="0" cellspacing="0" class="border">
  <tr>
    <th scope="col" align="center" valign="middle">&copy;��Ȩ���У���������ʦ��ѧԺ08���������ѧϵ�ִ�������3���� </th>
  </tr>
</table>
</body>
</html>
