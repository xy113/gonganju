<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>�޸�����</title>

<link href="/static/images/style.css" rel="stylesheet" type="text/css">

<style type="text/css">

.infoclass {color:#FFFFFF; font-size:12px; background-color:#0099CC; padding-left:10px; font-weight:bold;}

.tableright{padding:3px 3px 3px 5px;}

</style>

<script src="/static/js/jquery.js" type="text/javascript"></script>

<script src="/static/calendar/WdatePicker.js" type="text/javascript"></script>

</head>



<body><?php include template('header'); ?><div class="yourpos">��ǰλ�ã�<a href="/">��ҳ</a> > �޸�����</div>

<div class="warpper">

<table width="800" border=0 align="center"><tr><td bgcolor="#FFFFFF" align="center">

  <table width="700" border="0" align="center" cellspacing="1">

    <tr>

      <td height="25" align="center"><strong style="color:#000033">�޸�����</strong></td>

    </tr>

  </table>

<form id="modify" method="post" action="member.php">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  	<table width="700" border="0" align="center" cellspacing="1" bgcolor="#0099CC">

    <tr>

      <td height="22" colspan="2" class="infoclass">�û���������</td>

    </tr>

    <tr>

      <td width="135" height="25" align="right" bgcolor="#FFFFFF">*�û�����</td>

      <td width="458" height="25" bgcolor="#FFFFFF" class="tableright"><input name="username" type="text" id="username" size="30" maxlength="50" value="<?php echo $member['username']?>" readonly="" />�����޸ġ�</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*���룺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="password" type="password" size="30" maxlength="50" />

      <br />�����ʹ���κ�Ӣ����ĸ��������������ϣ���������3���ַ���������Ӣ����ĸ��Сд�����磺 JohN123DoLe�������޸������ա�</td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������Ϣ</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*��ʵ������</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[realname]" type="text" id="truename" size="30" maxlength="50" value="<?php echo $member['realname']?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*�Ա�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <input type="radio" name="membernew[sex]" value="1" class="checkbox"<? if($member['sex']) { ?> checked="checked"<? } ?> />��

      <input type="radio" name="membernew[sex]" value="0" class="checkbox"<? if(!$member['sex']) { ?> checked="checked"<? } ?> />Ů

  </td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*�������ڣ�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[bday]" value="<?php echo $member['bday']?>" type="text" size="30" onclick="WdatePicker()" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">���᣺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <input name="field[province]" value="<?php echo $member['province']?>" id="province" type="text" size="30" />

  <select onchange="province.value=this.value">

  		<option value="">ѡ��...</option>

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

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[shetuan]" type="text" id="shetuan" size="30" maxlength="30" value="<?php echo $member['shetuan']?>" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������ϵ��Ϣ</td>

    </tr>

     <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">ְҵ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <input name="field[zhiye]" value="<?php echo $member['zhiye']?>" type="text" size="30" />

  </td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">���ڵ�λ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[company]" type="text" size="30" maxlength="30" value="<?php echo $member['company']?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">����ְ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[zhiwei]" type="text" size="30" maxlength="30" value="<?php echo $member['zhiwei']?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*�����ʼ���</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[email]" type="text" id="email" size="30" maxlength="80" value="<?php echo $member['email']?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">ͨѶ��ַ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[address]" type="text" id="address" size="30" maxlength="100" value="<?php echo $member['address']?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�������룺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[postcode]" type="text" size="30" maxlength="20" value="<?php echo $member['postcode']?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�̶��绰��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[tel]" type="text" id="officetel" size="30" maxlength="30" value="<?php echo $member['tel']?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�ƶ��绰��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[mobile]" type="text" id="mobile" size="30" maxlength="30" value="<?php echo $member['mobile']?>" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">���˽�����Ϣ</td>

    </tr>

    <tr>

      <td height="25" colspan="2" bgcolor="#fff">

  	<span id="edu"><? if(is_array($educations)) { foreach($educations as $edu) { ?>  	 <div style="padding:5px;">

 <select name="type[]"><? if(is_array($types)) { foreach($types as $key => $tt) { ?><option value="<?php echo $key?>"<? if($edu['type']==$key) { ?> selected="selected"<? } ?>><?php echo $tt?></option><? } } ?> </select>

 ��<input name="begintime[]" type="text" size="6" value="<?php echo $edu['begintime']?>" /> �굽 <input name="endtime[]" type="text" size="6" value="<?php echo $edu['endtime']?>" /> ��

 ����Ժϵ��<input name="yuanxi[]" type="text" size="15" maxlength="30" value="<?php echo $edu['yuanxi']?>" />

 ѧ��֤�ţ�<input name="studentid[]" type="text" size="15" maxlength="30" value="<?php echo $edu['studentid']?>" />

 </div>
 <? } } ?> </span>

 <div style="padding:5px;"><a href="###" id="addedu">[+������Ŀ]</a></div>

  </td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������Ϣ</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">��У�ڼ���������</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[getmoney]" type="text" size="50" value="<?php echo $member['getmoney']?>" /></td>

    </tr>

    <tr>

      <td height="30" align="right" bgcolor="#FFFFFF">��ע��</td>

      <td height="30" bgcolor="#FFFFFF" class="tableright"><textarea name="field[remark]" cols="50" rows="6"><?php echo $member['remark']?></textarea></td>

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

var password = $(this).find("input[name=password]").val();

var realname = $(this).find("input[name='membernew[realname]']").val();

var bday = $(this).find("input[name='membernew[bday]']").val();

var email = $(this).find("input[name='membernew[email]']").val();

if(password && password.length<6){

alert("��������6λ��");

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

return true;

});

$("#addedu").click(function(){

$("#edu").append('<div style="padding:5px;"><select name="type[]"><? if(is_array($types)) { foreach($types as $key => $tt) { ?><option value="<?php echo $key?>"><?php echo $tt?></option><? } } ?></select>'+

 ' ��<input name="begintime[]" type="text" size="6" /> �굽 <input name="endtime[]" type="text" size="6" /> ��'+

 ' ����Ժϵ��<input name="yuanxi[]" type="text" size="15" maxlength="30" />'+

 ' ѧ��֤�ţ�<input name="studentid[]" type="text" size="15" /></div>');

});

</script><?php include template('footer'); ?>