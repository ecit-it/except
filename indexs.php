<?php session_start(); include("conn/conn.php");
if($_SESSION[admin_user]==true){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����������Ϣϵͳ</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body><center>
<table border="0" cellpadding="0" cellspacing="0">
	<tr><td><img src="images/index_01_02.gif" width="935" height="24" border="0" usemap="#Map"></td>
	</tr>
</table>

<table width="935" height="471" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="224" height="471" align="center" valign="top" bgcolor="#F5F5F5"><table width="224" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="54" colspan="2" align="center"><img src="images/index_05_01.gif" width="222" height="58"></td>
        </tr>
      <tr>
        <td width="31" height="26" align="center">&nbsp;</td>
        <td width="193" align="center">&nbsp;</td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=��Դ��Ϣ��ѯ">��Դ��Ϣ��ѯ</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=��Դ��Ϣ����">��Դ��Ϣ����</a></td>
      </tr>
	  <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=�ͻ���Ϣ����">�ͻ���Ϣ����</a></td>
      </tr>
      <tr onMouseOver="this.bgColor='#9FCB3A'"onMouseOut="this.bgColor='#F5F5F5'" >
        <td height="28" align="center">&nbsp;</td>
        <td align="left"><a href="indexs.php?lmbs=�޸�����">�޸�����</a></td>
      </tr>
      <tr>
        <td height="28" align="center">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="107" colspan="2" align="center"><img src="images/index_05_03.gif" width="222" height="43"></td>
        </tr>
    </table></td>
    <td width="5"></td>
    <td width="706" height="471" align="right" valign="top" bgcolor="#FFFFFF"><table width="714" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="25" bgcolor="#E5E5E5">&nbsp;</td>
        </tr>
      <tr>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top" bgcolor="#FFFFFF"><?php 
	switch($lmbs){
	case "��Դ��Ϣ��ѯ":
	include("car_select.php");
	break;
	case "�ͻ���Ϣ����":
	include("customer.php");
	break;
	case "��Դ��Ϣ����":
	include("car.php");
	break;
	case "�޸�����":
	include("update_pass.php");
	break;
	case "":
	include("car_select.php");
	break;
	}
	?></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="935" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="36"><img src="images/index_07.gif" width="935" height="36"></td>
  </tr>
</table>
</center>

<map name="Map">
<area shape="rect" coords="860,5,923,18" href="tc_dl.php">
</map>
</body>
</html>
<?php 
}else{
echo "<script>alert('������ȷ��¼��'); window.location.href='index.php';</script>";
}

?>