<?php
include 'session.php';
?>
<html>
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
	background-image: url(../images/left.gif);
	background-color: #99CCFF;
}
-->
</style>
<link href="../css/css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.button {	font-family: "����";
	font-size: 14px;
	height: 37px;
}
.STYLE1 {color: #FF0000}
-->
</style></head>
<SCRIPT language=JavaScript>
function tupian(idt){
    var nametu="xiaotu"+idt;
    var tp = document.getElementById(nametu);
    tp.src="../images/ico05.gif";//ͼƬico04Ϊ��ɫ��������
	
	for(var i=1;i<60;i++)
	{
	  
	  var nametu2="xiaotu"+i;
	  if(i!=idt*1)
	  {
	    var tp2=document.getElementById('xiaotu'+i);
		if(tp2!=undefined)
	    {tp2.src="../images/ico06.gif";}//ͼƬico06Ϊ��ɫ��������
	  }
	}
}

function list(idstr){
	var name1="subtree"+idstr;
	var name2="img"+idstr;
	var objectobj=document.all(name1);
	var imgobj=document.all(name2);
	
	
	//alert(imgobj);
	
	if(objectobj.style.display=="none"){
		for(i=1;i<30;i++){
			var name3="img"+i;
			var name="subtree"+i;
			var o=document.all(name);
			if(o!=undefined){
				o.style.display="none";
				var image=document.all(name3);
				//alert(image);
				image.src="../images/ico04.gif";
			}
		}
		objectobj.style.display="";
		imgobj.src="../images/ico03.gif";
	}
	else{
		objectobj.style.display="none";
		imgobj.src="../images/ico04.gif";
	}
}

</SCRIPT>
<?php 
     
	include("db_conn.php");
    $query="select * from admin where username='$_SESSION[username]'";
	$result=mysql_query($query); 
    $row = mysql_fetch_array($result);

?> 
<body>
<table width="198" border="0" cellpadding="0" cellspacing="0" class="left-table01">
  <tr>
    <TD>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="207" height="55" background="../images/nav01.gif">
				<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="6%" rowspan="2">&nbsp;</td>
					<td width="94%" height="22" class="left-font01">����!<span class="left-font02"><?php echo($_SESSION["username"]);?><span class="button"></span></span></td>
					
				  </tr>  
				  <tr>
					<td height="22" class="left-font01">
						[<a href="login.php" target="_top" class="left-font01">���µ�¼</a>][<a href="edit.php" target="_top" class="left-font01 STYLE1">��ȫ�˳�</a>]</td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		


		<!--  ����ϵͳ��ʼ    -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('8');" >���ҹ���</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree8" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="loudaotj.php" target="mainFrame" class="left-font03" onClick="tupian('20');">������Ϣ���</a></td>
				</tr>
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="chengji_xinxi.php" target="mainFrame" class="left-font03" onClick="tupian('20');">������Ϣ����</a></td>
				</tr>
<!--				<tr>-->
<!--				  <td width="9%" height="20" ><img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" /></td>-->
<!--				  <td width="91%"><a href="wmqs.php" target="mainFrame" class="left-font03" onClick="tupian('20');">�������ҹ���</a></td>-->
<!--				</tr>-->
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="pflr.php" target="mainFrame" class="left-font03" onClick="tupian('20');">��������¼��</a></td>
				</tr>
                <tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="pf_xinxi.php" target="mainFrame" class="left-font03" onClick="tupian('20');">����������Ϣ����</a></td>
				</tr>
<!--				<tr>-->
<!--				  <td width="9%" height="20" ><img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" /></td>-->
<!--				  <td width="91%"><a href="shdj_edit.php" target="mainFrame" class="left-font03" onClick="tupian('20');">�����𻵹���</a></td>-->
<!--				</tr>-->
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="zd.php" target="mainFrame" class="left-font03" onClick="tupian('20');">���ҹ����ƶ�</a></td>
				</tr>
							<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="zd_edit.php" target="mainFrame" class="left-font03" onClick="tupian('20');">���ҹ����ƶ��޸�</a></td>
				</tr>
			
				
      </table>
		<!--  ����ϵͳ����    -->

		

		<!--  ��Ϣϵͳ��ʼ    -->
<!--		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">-->
<!--          <tr>-->
<!--            <td height="29">-->
<!--				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">-->
<!--					<tr>-->
<!--						<td width="8%"><img name="img7" id="img7" src="../images/ico04.gif" width="8" height="11" /></td>-->
<!--						<td width="92%">-->
<!--								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('7');" >�༶����</a></td>-->
<!--					</tr>-->
<!--				</table>-->
<!--			</td>-->
<!--          </tr>		  -->
<!--        </TABLE>-->
<!--		<table id="subtree7" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" -->
<!--				cellspacing="0" class="left-table02">-->
<!--				<tr>-->
<!--				  <td width="9%" height="20" ><img id="xiaotu17" src="../images/ico06.gif" width="8" height="12" /></td>-->
<!--				  <td width="91%">-->
<!--						<a href="xib.php" target="mainFrame" class="left-font03" onClick="tupian('17');">���ϵ������</a></td>-->
<!--				</tr>-->
<!--				<tr>-->
<!--				  <td width="9%" height="20" ><img id="xiaotu17" src="../images/ico06.gif" width="8" height="12" /></td>-->
<!--				  <td width="91%">-->
<!--						<a href="xib_edit.php" target="mainFrame" class="left-font03" onClick="tupian('17');">ϵ�������޸�</a></td>-->
<!--				</tr>-->
<!--				<tr>-->
<!--				  <td width="9%" height="20" ><img id="xiaotu17" src="../images/ico06.gif" width="8" height="12" /></td>-->
<!--				  <td width="91%">-->
<!--						<a href="zhuytj.php" target="mainFrame" class="left-font03" onClick="tupian('17');">���רҵ����</a></td>-->
<!--				</tr>-->
<!--				<tr>-->
<!--				  <td width="9%" height="20" ><img id="xiaotu17" src="../images/ico06.gif" width="8" height="12" /></td>-->
<!--				  <td width="91%">-->
<!--						<a href="zy_edit.php" target="mainFrame" class="left-font03" onClick="tupian('17');">רҵ�����޸�</a></td>-->
<!--				</tr>-->
<!--					<tr>-->
<!--				  <td width="9%" height="20" ><img id="xiaotu17" src="../images/ico06.gif" width="8" height="12" /></td>-->
<!--				  <td width="91%">-->
<!--						<a href="zhuytj.php" target="mainFrame" class="left-font03" onClick="tupian('17');">��Ӱ༶</a></td>-->
<!--				</tr>-->
<!--				<tr>-->
<!--				  <td width="9%" height="20" ><img id="xiaotu17" src="../images/ico06.gif" width="8" height="12" /></td>-->
<!--				  <td width="91%">-->
<!--						<a href="bj_edit.php" target="mainFrame" class="left-font03" onClick="tupian('17');">�༶�޸�</a></td>-->
<!--				</tr>-->
<!--				-->
<!--      </table>-->
		<!--  ��Ϣϵͳ����    -->



        <TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img1" id="img1" src="../images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('1');" >�û�����</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree1" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu1" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="user.php" target="mainFrame" class="left-font03" onClick="tupian('1');">��ӹ���Ա</a></td>
				</tr>
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu4" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="user_mima.php" target="mainFrame" class="left-font03" onClick="tupian('4');">�û������޸�</a></td>
				</tr>
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu2" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="user_xinxi.php" target="mainFrame" class="left-font03" onClick="tupian('2');">ѧ��������Ϣ����</a></td>
				</tr>
					<tr>
				  <td width="9%" height="20" ><img id="xiaotu2" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="user_add.php" target="mainFrame" class="left-font03" onClick="tupian('2');">���ѧ����������</a></td>
				</tr>
				
      </table>
		<!--  ��Ŀϵͳ����    -->

	  <!--  �ͻ�ϵͳ��ʼ    -->
	  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="8%" height="12"><img name="img2" id="img2" src="../images/ico04.gif" width="8" height="11" /></td>
                  <td width="92%"><a href="javascript:" target="mainFrame" class="left-font03" onClick="list('2');" >��������</a></td>
                </tr>
            </table></td>
          </tr>
      </table>
	  
	  <table id="subtree2" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
        
		<tr>
          <td width="9%" height="20" ><img id="xiaotu7" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="gg.php" target="mainFrame" class="left-font03" onClick="tupian('7');">��վ����</a></td>
        </tr>
		
		<tr>
          <td width="9%" height="20" ><img id="xiaotu7" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="gg_edit.php" target="mainFrame" class="left-font03" onClick="tupian('7');">�����޸�</a></td>
        </tr>	<tr>
          <td width="9%" height="20" ><img id="xiaotu7" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="liub.php" target="mainFrame" class="left-font03" onClick="tupian('7');">���Թ���</a></td>
        </tr>
      </table>

	  <!--  �ͻ�ϵͳ����    -->

	  

	   <!--  ����ϵͳ��ʼ    -->
	   <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="8%" height="12"><img name="img4" id="img4" src="../images/ico04.gif" width="8" height="11" /></td>
                  <td width="92%"><a href="javascript:" target="mainFrame" class="left-font03" onClick="list('4');" >���ڹ���</a></td>
                </tr>
            </table></td>
          </tr>
      </table>
	  
	  <table id="subtree4" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
		<tr>
          <td width="9%" height="20" ><img id="xiaotu11" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="kaoqi.php" target="mainFrame" class="left-font03" onClick="tupian('11');">����¼��</a></td>
        </tr>
		  <td width="9%" height="20" ><img id="xiaotu11" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="kaoqi.php" target="mainFrame" class="left-font03" onClick="tupian('11');">���ڲ鿴</a></td>
        </tr>
	  	
      </table>

      <!--  ����ϵͳ����    -->

     <!-- ϵͳ������ʼ -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
        <tr>
          <td height="29"><table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="8%"><img name="img6" id="img6" src="../images/ico04.gif" width="8" height="11" /></td>
                <td width="92%"><a href="javascript:" target="mainFrame" class="left-font03" onClick="list('6');">��ѯ����</a></td>
              </tr>
          </table></td>
        </tr>
      </table>
	  <table id="subtree6" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
        <tr>
          <td width="9%" height="20"><img id="xiaotu15" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="xueh.php" target="mainFrame" class="left-font03" onClick="tupian('15');">ѧ�Ų�ѯ</a></td>
        </tr> <tr>
          <td width="9%" height="20"><img id="xiaotu15" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="xinm.php" target="mainFrame" class="left-font03" onClick="tupian('15');">������ѯ</a></td>
        </tr> <tr>
          <td width="9%" height="20"><img id="xiaotu15" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="xibcx.php" target="mainFrame" class="left-font03" onClick="tupian('15');">ϵ�����Ʋ�ѯ</a></td>
        </tr> <tr>
          <td width="9%" height="20"><img id="xiaotu15" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="zycx.php" target="mainFrame" class="left-font03" onClick="tupian('15');">רҵ���Ʋ�ѯ</a></td>
        </tr> <tr>
          <td width="9%" height="20"><img id="xiaotu15" src="../images/ico06.gif" width="8" height="12" /></td>
          <td width="91%"><a href="banjicx.php" target="mainFrame" class="left-font03" onClick="tupian('15');">�༶���Ʋ�ѯ</a></td>
        </tr>
        
      </table>
	 <!-- ϵͳ��������-->
	 

	 <!--������Ϣ����ʼ-->

		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img9" id="img9" src="../images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('9');" >ϵͳ����</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>

		<table id="subtree9" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="22" ><img id="xiaotu22" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="student_xinxi.php" target="mainFrame" class="left-font03" 
						onClick="tupian('22');">ע��ѧ��</a></td>
				</tr>
					<tr>
				  <td width="9%" height="22" ><img id="xiaotu22" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="bakup_mysql.php" target="mainFrame" class="left-font03" 
						onClick="tupian('22');">���ݱ���</a></td>
				</tr>
				
				<tr>
				  <td width="9%" height="22" ><img id="xiaotu22" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="gongneng.php" target="mainFrame" class="left-font03" 
						onClick="tupian('22');">���ܼ��</a></td>
				</tr>	
				<tr>
				  <td width="9%" height="22" ><img id="xiaotu22" src="../images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="help.php" target="mainFrame" class="left-font03" 
						onClick="tupian('22');">ʹ��˵��</a></td>
				</tr>
      </table>
		<!--  ������Ϣ����    -->

    </TD>
  </tr>
  
</table>

</body>
</html>
