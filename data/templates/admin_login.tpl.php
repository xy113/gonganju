<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title><?php echo $lang['cphome']?></title>

<style type="text/css">

body {padding:0; margin:0; background:#fff; font:12px Arial;}

a:link,a:active,a:visited{color:#333333; text-decoration:none;}

a:hover{color:#FF0000; text-decoration:underline;}

form,ul,ul li,p {padding:0px; margin:0px; list-style:none;}

.button {background:url(static/images/btnbg.png) repeat-x #ddd; border:1px #6a6a6a solid; height:30px; display:inline-block; width:184px; font-size:13px;}

.button:hover {border:1px #000 solid;}

.button:active {background:url(static/images/btn-active.png) repeat-x #ddd;}

/*登陆框*/

.loginbox {width:640px;height:160px;margin:0 auto;margin-top:150px;clear:both;}

.loginbox .left {width:310px;text-align:left;float:left;padding-right:20px;background: url(static/images/login-bg.gif) right center no-repeat; margin-top:10px;}

.loginbox .left p {font-size:12px;color:#666666;}

.loginbox .right {width:260px;float:left;margin-left:10px;}

.loginbox .right li {text-align:left;vertical-align:middle;list-style:none;height:30px;line-height:30px;}

.loginbox .right li.li2{margin-top:5px;}

.loginbox .right li .linput {padding:2px 3px;width:130px;height:18px;border:1px #6C92AD solid;}

.loginbox .right li .linput:hover {padding:2px 3px;width:130px;height:18px;border:1px #FF9933 solid;}

.loginbox .right li .lable{width:36px;height:30px;line-height:30px;margin-right:10px;vertical-align:middle;clear:left;float:left;}

</style>

<script type="text/javascript">

function checkForm(theForm){

    if(theForm.username.value && theForm.password.value && theForm.randcode.value){

    return true;

}else{

    return false;

}

}

</script>

</head>

<body>

<div class="loginbox">

<form action="<?php echo $BASESCRIPT?>?action=login&operation=chklogin" method="post" name="login" target="_top" id="login" onsubmit="return checkForm(this);">

    <div class="left">

     <div><img src="/static/images/ctr.gif" border="0" width="216" height="42" /></div>

 <p><?php echo $lang['login_tips']?></p>

</div>

<ul class="right">

    <li><span class="lable"><?php echo $lang['login_username']?></span><input name="username" type="text" class="linput"/></li>

<li><span class="lable"><?php echo $lang['login_password']?></span><input name="password" type="password" class="linput"/></li>

<li><span class="lable"><?php echo $lang['login_randcode']?></span><input name="randcode" type="text" class="linput" style="width:65px; float:left;" maxlength="4" />

 <img src="./source/include/validate.php" onclick="this.src='./source/include/validate.php?'+Math.random()" style="float:left; margin-left:4px;"/>

</li>

<li class="li2"><input name="b1" type="submit" value="<?php echo $lang['login_btnlogin']?>" class="button" tabindex="1" /></li>

</ul>

</form>

</div>

<p style="margin-top:100px; text-align:center; font:400 12px Arial; color:#666;"><?php echo $lang['copyright']?></p>

</body>

</html>