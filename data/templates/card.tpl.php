<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title><?php echo $member['username']?>的资料卡</title>

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

      <td height="25" align="center"><strong style="color:#000033"><?php echo $member['username']?>的资料卡</strong></td>

    </tr>

  </table>

  	<table width="700" border="0" align="center" cellspacing="1" bgcolor="#0099CC">

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">基本信息</td>

    </tr>

    <tr>

      <td width="135" height="25" align="right" bgcolor="#FFFFFF">用户名：</td>

      <td width="458" height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['username']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">真实姓名：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['realname']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">性别：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><? if($member['sex']) { ?>男<? } else { ?>女<? } ?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">出生日期：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['bday']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">籍贯：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['province']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">党政社团：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['shetuan']?></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">个人联系信息</td>

    </tr>

     <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">职业：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['zhiye']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">所在单位：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['company']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">现任职务：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['zhiwei']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">电子邮件：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['email']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">通讯地址：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['address']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">邮政编码：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['postcode']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">固定电话：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['tel']?></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">移动电话：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['tel']?></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">个人教育信息</td>

    </tr>

    <tr>

      <td height="25" colspan="2" bgcolor="#fff"><? if(is_array($educations)) { foreach($educations as $edu) { ?>  	 <div style="padding:5px;">

 学段：<?php echo $type[$edu['type']]?>，

 从<?php echo $edu['begintime']?>年到<?php echo $edu['endtime']?>年，所在院系：<?php echo $edu['yuanxi']?>，学生证号：<?php echo $edu['studentid']?> <?php echo $edu['body']?>

 </div>

 <? } } ?>  </td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">其他信息</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">在校期间曾获奖励：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><?php echo $member['getmoney']?></td>

    </tr>

    <tr>

      <td height="30" align="right" bgcolor="#FFFFFF">备注：</td>

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

