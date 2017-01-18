<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>后台管理中心</title>

<script src="/static/js/jquery.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="/static/images/style2.css">

</head>



<body style="overflow:hidden;">

<div class="header">

<div class="item account" id="account">

<a href="<?php echo $BASESCRIPT?>?action=profile" class="link"><?php echo $lang['hello']?>，<?php echo $admincp['username']?> <img src="/static/images/account.png" border="0" /></a>

<div id="profile">

<a href="<?php echo $BASESCRIPT?>?action=profile"><img src="/static/images/accountbig.png" /></a>

<p>admin<br />

<a href="<?php echo $BASESCRIPT?>?action=profile" target="main"><?php echo $lang['edit_profile']?></a><br />

<a href="<?php echo $BASESCRIPT?>?action=logout"><?php echo $lang['logout']?></a></p>

</div>

</div>

<div class="item" id="home">

<a href="<?php echo $BASESCRIPT?>" class="link">HOME</a>

<ul>

<li><a href="/" target="_blank"><?php echo $lang['sitehome']?></a></li>

<li><a href="#"><?php echo $lang['aboutus']?></a></li>

<li><a href="#"><?php echo $lang['tech_support']?></a></li>

<li><a href="#"><?php echo $lang['dev_documents']?></a></li>

</ul>

</div>

<div id="addnew" class="item">

<a href="#" class="link"><span><?php echo $lang['new']?></span></a>

<ul>

<li><a href="<?php echo $BASESCRIPT?>?action=articles&operation=add" target="main"><?php echo $lang['article']?></a></li>

<li><a href="<?php echo $BASESCRIPT?>?action=video&operation=add" target="main"><?php echo $lang['video']?></a></li>

<!--<li><a href="<?php echo $BASESCRIPT?>?action=goods&operation=add" target="main"><?php echo $lang['goods']?></a></li> -->

<li><a href="<?php echo $BASESCRIPT?>?action=member&operation=add" target="main"><?php echo $lang['user']?></a></li>

</ul>

</div>

</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0" id="maintab">

  <tr>

    <td class="leftmenu" id="leftmenu"><?php echo $menus?></td>

    <td class="main" id="mainframe" valign="top"><iframe name="main" frameborder="0" style="height:100%; width:100%;" src="<?php echo $BASESCRIPT?>?action=index"></iframe></td>

  </tr>

</table>

<script type="text/javascript">

if($("#maintab").height()<($(document).height()-30)){

$("#maintab").height($(document).height()-30);

}

$("#mainframe").height($("#maintab").height());

$("#account").mouseenter(function(){

$(this).addClass('account-on').find("div").show();

}).mouseleave(function(){

$(this).removeClass('account-on').find("div").hide();

});

$("#home").mouseenter(function(){

$(this).addClass('home').find("ul").show();

}).mouseleave(function(){

$(this).removeClass('home').find("ul").hide();

});

$("#addnew").mouseenter(function(){

$(this).addClass("addnew").find("ul").show();

}).mouseleave(function(){

$(this).removeClass("addnew").find("ul").hide();

});

$("#leftmenu div>h3").click(function(){

$("#leftmenu div>h3").removeClass();

$(this).addClass("on");

$("#leftmenu div>ul").hide();

$("#leftmenu div>ul").eq($('#leftmenu div>h3').index(this)).slideDown('slow');

});

$("#leftmenu li>a").click(function(){

$("#leftmenu li>a").removeClass("cur");

$(this).addClass("cur");

})

</script>

</body>

</html>