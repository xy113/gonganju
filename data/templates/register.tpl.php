<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>У��ע��</title>

<link href="/static/images/style.css" rel="stylesheet" type="text/css">

<style type="text/css">

.infoclass {color:#FFFFFF; font-size:12px; background-color:#0099CC; padding-left:10px; font-weight:bold;}

.tableright{padding:3px 3px 3px 5px;}

</style>

<script src="/static/js/jquery.js" type="text/javascript"></script>

<script src="/static/calendar/WdatePicker.js" type="text/javascript"></script>

</head>



<body><?php include template('header'); ?><div class="yourpos">��ǰλ�ã�<a href="/">��ҳ</a> > У��ע��</div>

<div class="warpper">

<table width="800" border=0 align="center"><tr><td bgcolor="#FFFFFF" align="center">

  <table width="700" border="0" align="center" cellspacing="1">

    <tr>

      <td height="25" align="center"><strong style="color:#000033">У��ע������˵��</strong></td>

    </tr>

  </table>

<form id="register" method="post" action="member.php?action=register">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  	<table width="700" border="0" align="center" cellspacing="1" bgcolor="#0099CC">

    <tr>

      <td height="22" colspan="2" class="infoclass">�û���������</td>

    </tr>

    <tr>

      <td width="135" height="25" align="right" bgcolor="#FFFFFF">*�û�����</td>

      <td width="458" height="25" bgcolor="#FFFFFF" class="tableright">

  <input name="membernew[username]" type="text" id="username" size="30" maxlength="50" value="<?php echo $username?>" />

      <br />

      �Ϸ����û���Ӧ���ɺ��֡�a-z��СдӢ����ĸ��0-9�����ֻ��»�����ɣ��û�������Ӧ��1-16���ַ�֮��[һ��Ӣ����ĸ��������һ���ַ���һ�������������ַ�] 

                  ������ʹ�ÿհ׼�����ѡ�񲻻�����������û�����<br />

      ����:��en_007��</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*���룺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[password]" type="password" id="userpass" size="30" maxlength="50" />

      <br />

      �����ʹ���κ�Ӣ����ĸ��������������ϣ���������3���ַ���������Ӣ����ĸ��Сд�����磺 JohN123DoLe��</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*ȷ�����룺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="password2" type="password" id="userpass2" size="30" maxlength="50" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������Ϣ</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*��ʵ������</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[realname]" type="text" id="truename" size="30" maxlength="50" value="<?php echo $truename?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*�Ա�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <input type="radio" name="membernew[sex]" value="1" checked="checked" class="checkbox" />��

      <input type="radio" name="membernew[sex]" value="0" class="checkbox" />Ů

  </td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*�������ڣ�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[bday]" type="text" size="30" onclick="WdatePicker()" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">���᣺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <select name="field[province]">

  <option value="����">����</option>

  <option value="�Ϻ�">�Ϻ�</option>

  <option value="���">���</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="�㶫">�㶫</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="�ӱ�">�ӱ�</option>

  <option value="����">����</option>

  <option value="������">������</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="����">����</option>

  <option value="���ɹ�">���ɹ�</option>

  <option value="����">����</option>

  <option value="�ຣ">�ຣ</option>

  <option value="ɽ��">ɽ��</option>

  <option value="ɽ��">ɽ��</option>

  <option value="����">����</option>

  <option value="�Ĵ�">�Ĵ�</option>

  <option value="����">����</option>

  <option value="�½�">�½�</option>

  <option value="����">����</option>

  <option value="�㽭">�㽭</option>

  <option value="����">����</option>

  <option value="���">���</option>

  <option value="����">����</option>

  <option value="̨��">̨��</option>

  <option value="����">����</option>

   </select>

  </td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�������ţ�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[shetuan]" type="text" id="shetuan" size="30" maxlength="30" value="<?php echo $shetuan?>" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������ϵ��Ϣ</td>

    </tr>

     <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">ְҵ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <select name="field[zhiye]">

<OPTION value=""  selected>��ѡ��</OPTION> 

<OPTION value="�������ظɲ�">�������ظɲ�</OPTION> 

<OPTION value="ý���ҵ��Ա">ý���ҵ��Ա</OPTION> 

<OPTION value="��У��ʦ���о�����ѧ��">��У��ʦ���о�����ѧ��</OPTION> 

<OPTION value="��У��Уѧ��">��У��Уѧ��</OPTION> 

<OPTION value="IT�������רҵ������Ա">IT�������רҵ������Ա</OPTION> 

<OPTION value="��ҵ��λ">��ҵ��λ</OPTION> 

<OPTION value="����ְ��">����ְ��</OPTION> 

<OPTION value="���ʡ�������ҵְԱ">���ʡ�������ҵְԱ</OPTION> 

<OPTION value="��Ӫ��ҵְԱ��ҵ��">��Ӫ��ҵְԱ��ҵ��</OPTION> 

<OPTION value="������ѧ��Ա">������ѧ��Ա</OPTION> 

<OPTION value="����ְҵ��">����ְҵ��</OPTION> 

<OPTION value="����">����</OPTION>

      </select>      

  </td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">���ڵ�λ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[company]" type="text" id="company" size="30" maxlength="30" value="<?php echo $company?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">����ְ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[zhiwei]" type="text" size="30" maxlength="30" value="<?php echo $job?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*�����ʼ���</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[email]" type="text" id="email" size="30" maxlength="80" value="<?php echo $email?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">ͨѶ��ַ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[address]" type="text" id="address" size="30" maxlength="100" value="<?php echo $address?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�������룺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[postcode]" type="text" size="30" maxlength="20" value="<?php echo $postno?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�̶��绰��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[tel]" type="text" id="officetel" size="30" maxlength="30" value="<?php echo $officetel?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�ƶ��绰��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[mobile]" type="text" id="mobile" size="30" maxlength="30" value="<?php echo $mobile?>" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">���˽�����Ϣ</td>

    </tr>

    <tr>

      <td height="25" bgcolor="#FFFFFF"><input name="benke" type="checkbox" class="checkbox" id="benke" value="1" />���ƣ�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <table width="100%" border="0" cellspacing="1">

        <tr>

          <td height="25">��У��ֹ���ڣ���

            <select name="edu[1][begintime]"><?php echo $years?></select>

            �굽

            <select name="edu[1][endtime]"><?php echo $years?></select>

            �ꡣ</td>

        </tr>

        <tr>

          <td height="25">����Ժϵ��

            <input name="edu[1][yuanxi]" type="text" size="25" maxlength="30" /></td>

        </tr>

        <tr>

          <td height="25">ѧ��֤�ţ�

            <input name="edu[1][studentid]" type="text" size="25" maxlength="30" /></td>

        </tr>

      </table></td>

    </tr>

    <tr>

      <td height="25" bgcolor="#FFFFFF"><input name="suoshi" type="checkbox" class="checkbox" value="1" />

      ˶ʿ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><table width="100%" border="0" cellspacing="1">

        <tr>

          <td height="25">��У��ֹ���ڣ���<select name="edu[2][begintime]"><?php echo $years?></select> �굽 <select name="edu[2][endtime]"><?php echo $years?></select>�ꡣ</td>

        </tr>

        <tr>

          <td height="25">����Ժϵ��<input name="edu[2][yuanxi]" type="text" size="25" maxlength="30" /></td>

        </tr>

        <tr>

          <td height="25">ѧ��֤�ţ�<input name="edu[2][studentid]" type="text" size="25" maxlength="30" /></td>

        </tr>

      </table></td>

    </tr>

    <tr>

      <td height="25" bgcolor="#FFFFFF"><input name="boshi" type="checkbox" class="checkbox" value="1" />

      ��ʿ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><table width="100%" border="0" cellspacing="1">

        <tr>

          <td height="25">��У��ֹ���ڣ���

            <select name="edu[3][begintime]" id="select3"><?php echo $years?></select>�굽<select name="edu[3][endtime]" id="select4"><?php echo $years?></select>�ꡣ</td>

        </tr>

        <tr>

          <td height="25">����Ժϵ��

            <input name="edu[3][yuanxi]" type="text" size="25" maxlength="30" /></td>

        </tr>

        <tr>

          <td height="25">ѧ��֤�ţ�

            <input name="edu[3][studentid]" type="text" size="25" maxlength="30" /></td>

        </tr>

      </table></td>

    </tr>

    <tr>

      <td height="25" bgcolor="#FFFFFF"><input name="shuangxueshi" type="checkbox" class="checkbox" value="1" />˫ѧʿ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><table width="100%" border="0" cellspacing="1">

        <tr>

          <td height="25">��У��ֹ���ڣ���

            <select name="edu[4][begintime]" id="select5"><?php echo $years?></select>

            �굽

            <select name="edu[4][endtime]" id="select6"><?php echo $years?></select>

            �ꡣ</td>

        </tr>

        <tr>

          <td height="25">����Ժϵ��

            <input name="edu[4][yuanxi]" type="text" size="25" maxlength="30" /></td>

        </tr>

        <tr>

          <td height="25">ѧ��֤�ţ�

            <input name="edu[4][studentid]" type="text" size="25" maxlength="30" /></td>

        </tr>

      </table></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">��У�ڼ���������</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[getmoney]" type="text" size="50" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������Ϣ</td>

    </tr>

    <tr>

      <td height="30" align="right" bgcolor="#FFFFFF">��ע��</td>

      <td height="30" bgcolor="#FFFFFF" class="tableright"><textarea name="field[remark]" cols="50" rows="6"></textarea></td>

    </tr>

    <tr>

      <td height="40" colspan="2" align="center" bgcolor="#FFFFFF">

  <input name="s1" type="submit" class="button" value="�� ��" />����

      <input name="s2" type="reset" class="button" value="�� ��" />	  

  </td>

    </tr>

  </table>

</form>

</td>

</tr>

</table>

</div>

<script type="text/javascript">

$("#register").submit(function(){

var username = $(this).find("input[name='membernew[username]']").val();

var password = $(this).find("input[name='membernew[password]']").val();

var password2 = $(this).find("input[name=password2]").val();

var realname = $(this).find("input[name='membernew[realname]']").val();

var bday = $(this).find("input[name='membernew[bday]']").val();

var email = $(this).find("input[name='membernew[email]']").val();

if(username.length<3){

alert("�û�������3���ַ���");

return false;

}

if(password.length<6){

alert("��������6λ��");

return false;

}

if(!(password==password2)){

alert("�����������벻һ�¡�");

return false;

}

if(!realname){

alert("����д��ʵ������");

return false;

}

if(!bday){

alert("��ѡ��������ڡ�");

return false;

}

var reg = /^\w+((-|\.)\w+)*@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;

if(!email || !reg.exec(email)){

alert("�����ʽ����������������롣");

return false;

}

var check = 0;

$.ajax({

url:'/member.php',

async:false,

data:{action:"chkusername","username":username},

success:function(response){

check = parseInt(response);

}

});

if(check>0){

alert("���û����ѱ���ʹ�ã����������롣");

return false;

}

return true;

});

</script><?php include template('footer'); ?>