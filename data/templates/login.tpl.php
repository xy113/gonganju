<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>校友登录</title>

<link href="/static/images/style.css" rel="stylesheet" type="text/css">

<style type="text/css">

.infoclass {color:#FFFFFF; font-size:12px; background-color:#0099CC; padding-left:10px; font-weight:bold;}

.tableright{padding:3px 3px 3px 5px;}

</style>

<script src="/static/js/jquery.js" type="text/javascript"></script>

<script src="/static/calendar/WdatePicker.js" type="text/javascript"></script>

</head>



<body><?php include template('header'); ?><div class="yourpos">当前位置：<a href="/">首页</a> > 校友登录</div>

<div class="warpper">

<div align="center" style="height:30px;margin-top:50px;"><h3>校友登录</h3></div>

<form id="login2" method="post" action="member.php?action=chklogin">

      <table width="235" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr>

          <td width="63" height="30">用户名：</td>

          <td width="172" height="30"><input name="username" type="text" id="username" class="textbox" style="width:150px;" /></td>

        </tr>

        <tr>

          <td height="30">密&nbsp; 码：</td>

          <td height="30"><input name="password" type="password" id="password" class="textbox" style="width:150px;" /></td>

        </tr>

        <tr>

          <td height="30" colspan="2" align="center">

  <input type="submit" name="Submit" value="登 录" class="button" />　<a href="member.php?action=register">新校友注册</a></td>

          </tr>

      </table>

      </form>

</div>

<div class="blank"></div>

<div class="blank"></div>

<div class="blank"></div>

<script type="text/javascript">

$("#login2").submit(function(){

if(!$(this).find('input[name=username]').val()){

alert("用户名不能为空。");

return false;

}

if(!$(this).find('input[name=password]').val()){

alert("密码不能为空。");

return false;

}

return true;

});

</script><?php include template('footer'); ?>