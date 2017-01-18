<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>校友注册</title>

<link href="/static/images/style.css" rel="stylesheet" type="text/css">

<style type="text/css">

.infoclass {color:#FFFFFF; font-size:12px; background-color:#0099CC; padding-left:10px; font-weight:bold;}

.tableright{padding:3px 3px 3px 5px;}

</style>

<script src="/static/js/jquery.js" type="text/javascript"></script>

<script src="/static/calendar/WdatePicker.js" type="text/javascript"></script>

</head>



<body><?php include template('header'); ?><div class="yourpos">当前位置：<a href="/">首页</a> > 校友注册</div>

<div class="warpper">

<table width="800" border=0 align="center"><tr><td bgcolor="#FFFFFF" align="center">

  <table width="700" border="0" align="center" cellspacing="1">

    <tr>

      <td height="25" align="center"><strong style="color:#000033">校友注册流程说明</strong></td>

    </tr>

  </table>

<form id="register" method="post" action="member.php?action=register">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  	<table width="700" border="0" align="center" cellspacing="1" bgcolor="#0099CC">

    <tr>

      <td height="22" colspan="2" class="infoclass">用户名及密码</td>

    </tr>

    <tr>

      <td width="135" height="25" align="right" bgcolor="#FFFFFF">*用户名：</td>

      <td width="458" height="25" bgcolor="#FFFFFF" class="tableright">

  <input name="membernew[username]" type="text" id="username" size="30" maxlength="50" value="<?php echo $username?>" />

      <br />

      合法的用户名应该由汉字、a-z的小写英文字母、0-9的数字或下划线组成，用户名长度应在1-16个字符之间[一个英文字母或数字算一个字符，一个汉字算两个字符] 

                  ，请勿使用空白键，请选择不会引起歧义的用户名。<br />

      例如:阿en_007。</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*密码：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[password]" type="password" id="userpass" size="30" maxlength="50" />

      <br />

      密码可使用任何英文字母及阿拉伯数字组合，不得少于3个字符，并区分英文字母大小写。例如： JohN123DoLe。</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*确认密码：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="password2" type="password" id="userpass2" size="30" maxlength="50" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">基本信息</td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*真实姓名：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[realname]" type="text" id="truename" size="30" maxlength="50" value="<?php echo $truename?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*性别：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <input type="radio" name="membernew[sex]" value="1" checked="checked" class="checkbox" />男

      <input type="radio" name="membernew[sex]" value="0" class="checkbox" />女

  </td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*出生日期：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[bday]" type="text" size="30" onclick="WdatePicker()" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">籍贯：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <select name="field[province]">

  <option value="北京">北京</option>

  <option value="上海">上海</option>

  <option value="天津">天津</option>

  <option value="重庆">重庆</option>

  <option value="安徽">安徽</option>

  <option value="甘肃">甘肃</option>

  <option value="广东">广东</option>

  <option value="广西">广西</option>

  <option value="贵州">贵州</option>

  <option value="海南">海南</option>

  <option value="河北">河北</option>

  <option value="河南">河南</option>

  <option value="黑龙江">黑龙江</option>

  <option value="湖北">湖北</option>

  <option value="湖南">湖南</option>

  <option value="吉林">吉林</option>

  <option value="江苏">江苏</option>

  <option value="江西">江西</option>

  <option value="辽宁">辽宁</option>

  <option value="内蒙古">内蒙古</option>

  <option value="宁夏">宁夏</option>

  <option value="青海">青海</option>

  <option value="山东">山东</option>

  <option value="山西">山西</option>

  <option value="陕西">陕西</option>

  <option value="四川">四川</option>

  <option value="西藏">西藏</option>

  <option value="新疆">新疆</option>

  <option value="云南">云南</option>

  <option value="浙江">浙江</option>

  <option value="福建">福建</option>

  <option value="香港">香港</option>

  <option value="澳门">澳门</option>

  <option value="台湾">台湾</option>

  <option value="海外">海外</option>

   </select>

  </td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">党政社团：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[shetuan]" type="text" id="shetuan" size="30" maxlength="30" value="<?php echo $shetuan?>" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">个人联系信息</td>

    </tr>

     <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">职业：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <select name="field[zhiye]">

<OPTION value=""  selected>请选择</OPTION> 

<OPTION value="政府机关干部">政府机关干部</OPTION> 

<OPTION value="媒体从业人员">媒体从业人员</OPTION> 

<OPTION value="高校教师或研究机构学者">高校教师或研究机构学者</OPTION> 

<OPTION value="高校在校学生">高校在校学生</OPTION> 

<OPTION value="IT及计算机专业技术人员">IT及计算机专业技术人员</OPTION> 

<OPTION value="事业单位">事业单位</OPTION> 

<OPTION value="国企职工">国企职工</OPTION> 

<OPTION value="合资、外资企业职员">合资、外资企业职员</OPTION> 

<OPTION value="民营企业职员或业主">民营企业职员或业主</OPTION> 

<OPTION value="海外留学人员">海外留学人员</OPTION> 

<OPTION value="自由职业者">自由职业者</OPTION> 

<OPTION value="其它">其它</OPTION>

      </select>      

  </td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">所在单位：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[company]" type="text" id="company" size="30" maxlength="30" value="<?php echo $company?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">现任职务：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[zhiwei]" type="text" size="30" maxlength="30" value="<?php echo $job?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">*电子邮件：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[email]" type="text" id="email" size="30" maxlength="80" value="<?php echo $email?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">通讯地址：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[address]" type="text" id="address" size="30" maxlength="100" value="<?php echo $address?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">邮政编码：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[postcode]" type="text" size="30" maxlength="20" value="<?php echo $postno?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">固定电话：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[tel]" type="text" id="officetel" size="30" maxlength="30" value="<?php echo $officetel?>" /></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">移动电话：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="membernew[mobile]" type="text" id="mobile" size="30" maxlength="30" value="<?php echo $mobile?>" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">个人教育信息</td>

    </tr>

    <tr>

      <td height="25" bgcolor="#FFFFFF"><input name="benke" type="checkbox" class="checkbox" id="benke" value="1" />本科：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright">

  <table width="100%" border="0" cellspacing="1">

        <tr>

          <td height="25">在校起止日期：从

            <select name="edu[1][begintime]"><?php echo $years?></select>

            年到

            <select name="edu[1][endtime]"><?php echo $years?></select>

            年。</td>

        </tr>

        <tr>

          <td height="25">所在院系：

            <input name="edu[1][yuanxi]" type="text" size="25" maxlength="30" /></td>

        </tr>

        <tr>

          <td height="25">学生证号：

            <input name="edu[1][studentid]" type="text" size="25" maxlength="30" /></td>

        </tr>

      </table></td>

    </tr>

    <tr>

      <td height="25" bgcolor="#FFFFFF"><input name="suoshi" type="checkbox" class="checkbox" value="1" />

      硕士：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><table width="100%" border="0" cellspacing="1">

        <tr>

          <td height="25">在校起止日期：从<select name="edu[2][begintime]"><?php echo $years?></select> 年到 <select name="edu[2][endtime]"><?php echo $years?></select>年。</td>

        </tr>

        <tr>

          <td height="25">所在院系：<input name="edu[2][yuanxi]" type="text" size="25" maxlength="30" /></td>

        </tr>

        <tr>

          <td height="25">学生证号：<input name="edu[2][studentid]" type="text" size="25" maxlength="30" /></td>

        </tr>

      </table></td>

    </tr>

    <tr>

      <td height="25" bgcolor="#FFFFFF"><input name="boshi" type="checkbox" class="checkbox" value="1" />

      博士：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><table width="100%" border="0" cellspacing="1">

        <tr>

          <td height="25">在校起止日期：从

            <select name="edu[3][begintime]" id="select3"><?php echo $years?></select>年到<select name="edu[3][endtime]" id="select4"><?php echo $years?></select>年。</td>

        </tr>

        <tr>

          <td height="25">所在院系：

            <input name="edu[3][yuanxi]" type="text" size="25" maxlength="30" /></td>

        </tr>

        <tr>

          <td height="25">学生证号：

            <input name="edu[3][studentid]" type="text" size="25" maxlength="30" /></td>

        </tr>

      </table></td>

    </tr>

    <tr>

      <td height="25" bgcolor="#FFFFFF"><input name="shuangxueshi" type="checkbox" class="checkbox" value="1" />双学士：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><table width="100%" border="0" cellspacing="1">

        <tr>

          <td height="25">在校起止日期：从

            <select name="edu[4][begintime]" id="select5"><?php echo $years?></select>

            年到

            <select name="edu[4][endtime]" id="select6"><?php echo $years?></select>

            年。</td>

        </tr>

        <tr>

          <td height="25">所在院系：

            <input name="edu[4][yuanxi]" type="text" size="25" maxlength="30" /></td>

        </tr>

        <tr>

          <td height="25">学生证号：

            <input name="edu[4][studentid]" type="text" size="25" maxlength="30" /></td>

        </tr>

      </table></td>

    </tr>

    <tr>

      <td height="25" align="right" bgcolor="#FFFFFF">在校期间曾获奖励：</td>

      <td height="25" bgcolor="#FFFFFF" class="tableright"><input name="field[getmoney]" type="text" size="50" /></td>

    </tr>

    <tr>

      <td height="22" colspan="2" bgcolor="#FFFFFF" class="infoclass">其他信息</td>

    </tr>

    <tr>

      <td height="30" align="right" bgcolor="#FFFFFF">备注：</td>

      <td height="30" bgcolor="#FFFFFF" class="tableright"><textarea name="field[remark]" cols="50" rows="6"></textarea></td>

    </tr>

    <tr>

      <td height="40" colspan="2" align="center" bgcolor="#FFFFFF">

  <input name="s1" type="submit" class="button" value="提 交" />　　

      <input name="s2" type="reset" class="button" value="重 置" />	  

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

alert("用户名至少3个字符。");

return false;

}

if(password.length<6){

alert("密码至少6位。");

return false;

}

if(!(password==password2)){

alert("两次密码输入不一致。");

return false;

}

if(!realname){

alert("请填写真实姓名。");

return false;

}

if(!bday){

alert("请选择出生日期。");

return false;

}

var reg = /^\w+((-|\.)\w+)*@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;

if(!email || !reg.exec(email)){

alert("邮箱格式输入错误，请重新输入。");

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

alert("此用户名已被人使用，请重新输入。");

return false;

}

return true;

});

</script><?php include template('footer'); ?>