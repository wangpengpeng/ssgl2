<table id="subtree1" style="DISPLAY: " width="500" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 
              <tr>
                <td height="40" class="font42"><table width="500" border="0" cellpadding="4" cellspacing="1" bgcolor="#999999" class="newfont03">
                  <tr class="CTitle" >
                    <td height="20" colspan="11" align="left" valign="top" background="jip/c.jpg" class="select_tr STYLE2" style="font-size:16px">&nbsp;</td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td width="18%" height="20" bgcolor="#CCFFCC">ѧ��</td>
                    <td width="18%" bgcolor="#CCFFCC" >����</td>
                    <td width="18%" bgcolor="#CCFFCC">��ѧʱ��</td>
                    <td width="18%" bgcolor="#CCFFCC">����ϵ��</td>
                    <td width="18%" bgcolor="#CCFFCC">��ѧרҵ</td>
                  </tr>
                  <?php
include("db_conn.php");

$sql="select * from user";
$query=mysql_query($sql);
mysql_query("set names 'GBK'");
while ($row = mysql_fetch_array($query)) {   
?>
                  <tr bgcolor="#FFFFFF">
                    <td height="20" bgcolor="#CCFFCC"><?php echo ($row["xh"]); ?></td>
                    <td bgcolor="#CCFFCC" ><?php echo ($row["username"]); ?></td>
                    <td bgcolor="#CCFFCC">&nbsp;</td>
                    <td bgcolor="#CCFFCC"><?php echo ($row["xb"]); ?></td>
                    <td colspan="2" bgcolor="#CCFFCC"><?php echo ($row["zymc"]); ?></td>
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
</body>
</html>
