<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title><?php echo $config['sitename']?>-首页</title>

<meta name="keywords" content="<?php echo $config['keywords']?>" />

<meta name="description" content="<?php echo $config['description']?>" />

<link rel="stylesheet" type="text/css" href="/static/images/style.css">

<script src="static/js/jquery.js" type="text/javascript"></script>

</head>



<body><?php include template('header'); ?><div class="warpper">

<div class="BDLeft">

<div class="slide">

<script type=text/javascript>

var focus_width=300;

var focus_height=226;

var text_height=24;

var swf_height = focus_height+text_height;

var picarray = new Array();

var linkarray = new Array();

var textarray = new Array();<? if(is_array($slides)) { foreach($slides as $sd) { ?>picarray.push('<?php echo $sd['image']?>');

linkarray.push("<?php echo $sd['linkurl']?>");

textarray.push("<?php echo $sd['title']?>");<? } } ?>var pics=picarray.join('|');

var links=linkarray.join('|');

var texts=textarray.join('|');

document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');

document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="static/focus.swf"> <param name="quality" value="Best"><param name="bgcolor" value="#e3e3e3">');

document.write('<param name="menu" value="false"><param name=wmode value="opaque">');

document.write('<param name="wmode" value="transparent">');

document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');

document.write('<embed src="static/focus.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="Best" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">');

document.write('</object>');

</script>

</div>

<ul class="news"><? if(is_array($articles['1'])) { foreach($articles['1'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>	

<div class="blank"></div>

<ul class="xxyd">

<li><a href="#">学习园地</a></li>

<li><a href="#">规章制度</a></li>

<li><a href="#">规范性文件</a></li>

<li><a href="#">党务知识</a></li>

</ul>

<div class="djxx">

<div class="titlediv"><span>党建信息</span></div>

<ul class="list"><? if(is_array($articles['3'])) { foreach($articles['3'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

<div class="clear"></div>

</div>

<div class="BDRight">

<div class="titlediv"><span>通知通报</span></div>

<ul class="list"><? if(is_array($articles['1'])) { foreach($articles['1'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

<div class="clear"></div>

<div class="banner"><img src="static/images/banner.jpg" border="0" /></div> 

<div class="BDLeft">

<div class="containleft">

<div class="titlediv"><span>工青妇工作</span></div>

<ul class="list"><? if(is_array($articles['4'])) { foreach($articles['4'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

<div class="containright">

<div class="titlediv"><span>专项工作</span></div>

<ul class="list"><? if(is_array($articles['4'])) { foreach($articles['4'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

</div>

<div class="BDRight">

<div class="titlediv"><span>党员电教</span></div>

<ul class="list"><? if(is_array($articles['4'])) { foreach($articles['4'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

<div class="blank"></div>

<div class="imagediv">

<div class="titlediv"><span>警员风采</span></div>

<div id="marquee" direction="left">

<ul>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

<li>

<div class="i"><img src="static/images/qq.jpg" border="0" /></div>

<div class="t">标题</div>

</li>

</ul>

</div>

<div class="clear"></div>

<script src="static/js/jquery.marquee.js" type="text/javascript"></script>

</div>



<div class="BDLeft">

<div class="containleft">

<div class="titlediv"><span>工青妇工作</span></div>

<ul class="list"><? if(is_array($articles['4'])) { foreach($articles['4'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

<div class="containright">

<div class="titlediv"><span>专项工作</span></div>

<ul class="list"><? if(is_array($articles['4'])) { foreach($articles['4'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

</div>

<div class="BDRight">

<div class="titlediv"><span>党员电教</span></div>

<ul class="list"><? if(is_array($articles['4'])) { foreach($articles['4'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

<div class="clear"></div>

</div><?php include template('footer'); ?>