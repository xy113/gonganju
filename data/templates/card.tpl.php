<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title><?php echo $member['username']?>�����Ͽ�</title>

<link href="/static/images/style.css" rel="stylesheet" type="text/css">

<style type="text/css">

.infoclass {color:#FFFFFF; font-size:12px; background-color:#0099CC; padding-left:10px; font-weight:bold;}

.tableright{padding:3px 3px 3px 5px;}

</style>

</head>



<body style="background:#fff;">

<div class="warpper">

<table width="800" border=0 align="center"><tr><td bgcolor="#FFFFFF" align="center">

  <table width="700" border="0" align="center" cellspacing="1">

    <tr>

      <td height="25" align="center"><strong style="color:#000033"><?php echo $member['username']?>�����Ͽ�</strong></td>

    </tr>

  </table>

  	<table width="700" border="0" align="center" cellspacing="1" bgcolor="#0099CC">

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������Ϣ</td>

    </tr>

    <tr>

      <td width="135" height="25" align="right" bgcolor="#FFFFFF">�û�����</td>

      <td width="458" height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['username']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">��ʵ������</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['realname']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�Ա�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><? if($member['sex']) { ?>��<? } else { ?>Ů<? } ?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�������ڣ�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['bday']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">���᣺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['province']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�������ţ�</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['shetuan']?></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������ϵ��Ϣ</td>

    </tr>

     <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">ְҵ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['zhiye']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">���ڵ�λ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['company']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">����ְ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['zhiwei']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�����ʼ���</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['email']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">ͨѶ��ַ��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['address']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�������룺</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['postcode']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�̶��绰��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['tel']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">�ƶ��绰��</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['tel']?></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">���˽�����Ϣ</td>

    </tr>

    <tr>

      <td height="25" colspan="2" bgcolor="#fff"><? if(is_array($educations)) { foreach($educations as $edu) { ?>  	 <div style="padding:5px;">

 ѧ�Σ�<?php echo $type[$edu['type']]?>��

 ��<?php echo $edu['begintime']?>�굽<?php echo $edu['endtime']?>�꣬����Ժϵ��<?php echo $edu['yuanxi']?>��ѧ��֤�ţ�<?php echo $edu['studentid']?> <?php echo $edu['body']?>

 </div>

 <? } } ?>  </td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">������Ϣ</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">��У�ڼ���������</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['getmoney']?></td>

    </tr>

    <tr>

      <td height="30" align="right" bgcolor="#FFFFFF">��ע��</td>

      <td height="30" bgcolor="#FFFFFF" class="tableright"><?php echo $member['remark']?></td>

    </tr>

  </table>

</form>

</td>

</tr>

</table>

</div>

</body>

</html>

