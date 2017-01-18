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
var text_height=0;
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
<div class="news"><? if(is_array($articles['focus'])) { foreach($articles['focus'] as $arc) { ?><h3><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></h3>
<p><?php echo $arc['summary']?></p><? } } ?><ul><? if(is_array($articles['1'])) { foreach($articles['1'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>	
</div>
<div class="blank"></div>
<div class="left1">
<div class="contain2">
<div class="tt">规章制度</div>
<ul class="list"><? if(is_array($articles['8'])) { foreach($articles['8'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div> 
<div class="blank"></div>
<div class="contain2">
<div class="tt">规范性文件</div>
<ul class="list"><? if(is_array($articles['9'])) { foreach($articles['9'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div> 
<div class="blank"></div>
<div class="contain2">
<div class="tt">机构设置</div>
<ul class="list"><? if(is_array($articles['11'])) { foreach($articles['11'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div> 
<div class="blank"></div>
<div style="text-align:center;"><a href="static/images/jincha.png" target="_blank"><img src="/static/images/jincha.png" border="0" width="160"></a></div>
</div>
<div class="right1">
<div class="contain">
<div class="tdiv"><em><a href="arclist.php?cid=3">更多>></a></em>党建信息</div>
<ul class="list"><? if(is_array($articles['3'])) { foreach($articles['3'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
<div class="blank"></div>
<div class="contain">
<div class="tdiv"><em><a href="arclist.php?cid=4">更多>></a></em>工青妇工作</div>
<ul class="list"><? if(is_array($articles['4'])) { foreach($articles['4'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
<div class="blank"></div>
<div class="contain">
<div class="tdiv"><em><a href="arclist.php?cid=5">更多>></a></em>专项工作</div>
<ul class="list"><? if(is_array($articles['5'])) { foreach($articles['5'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
<div class="blank"></div>
<div class="contain">
<div class="tdiv"><em><a href="arclist.php?cid=3">更多>></a></em>学习园地</div>
<ul class="list"><? if(is_array($articles['7'])) { foreach($articles['7'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
</div>
<div class="clear"></div>
</div>
<div class="BDRight">
<div class="tztb">
<ul><? if(is_array($articles['2'])) { foreach($articles['2'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
<div class="more"><a href="arclist.php?cid=2">更多>></a></div>
</div>
<div class="gfxwj">
<div class="tt">党务知识</div>
<ul><? if(is_array($articles['10'])) { foreach($articles['10'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
<div class="more"><a href="arclist.php?cid=10">更多>></a></div>
</div>
<div class="blank"></div>
<div class="wzdh">
<div class="fitem">
  <select name="select" size="1" onchange="top.location.href=quanguo.options[quanguo.selectedIndex].value" style="WIDTH: 145px; COLOR: #757570; HEIGHT: 19px" id="quanguo" language="javascript"> <option selected="">--全 国 导 航--</option> 
                    <option value="http://www.ga">公安部</option> <option value="http://www.bj">北京市</option> <option value="http://www.tj">天津市</option> <option value="http://www.hb">河北省</option> <option value="http://www.sx">山西省</option> <option value="http://10.100.1.18/nmgat/index.asp">内蒙古自治区</option> 
                    <option value="http://www.ln">辽宁省</option> <option value="http://www.jl">吉林省</option> <option value="http://10.112.1.2/">黑龙江省</option> <option value="http://www.sh">上海市</option> <option value="http://www.js">江苏省</option> <option value="http://10.118.1.12/gathome">浙江省</option> <option value="http://10.124.1.201/">安徽省</option> <option value="http://10.130.1.9/">福建省</option> <option value="http://10.136.1.60:2222/">江西省</option> <option value="http://10.48.1.9/">山东省</option> <option value="http://10.56.1.60/">河南省</option> <option value="http://10.72.1.10/">湖北省</option> <option value="http://10.142.1.12/hngainfo/default.asp">湖南省</option> 
                    <option value="http://10.40.1.244/">广东省</option> <option value="http://10.148.1.12/gxga/">广西区</option> <option value="http://10.184.10.2/">海南省</option> <option value="http://10.64.1.9/">四川省</option> <option value="http://10.154.1.9/">重庆市</option> <option value="http://10.160.1.10/gz/">贵州省</option> <option value="http://www.yn">云南省</option> <option value="http://10.188.1.9/">西藏区</option> <option value="http://10.172.1.9/gatweb2006/">陕西省</option> <option value="http://www.gs">甘肃省</option> <option value="http://10.192.1.10/">青海省</option> <option value="http://10.196.1.9/">宁夏区</option> <option value="http://10.20.1.10/">新疆自治区</option> <option value="http://10.84.1.9/">新疆建设兵团</option> <option value="http://10.47.97.9:8080/hkpolice/home-c.htm">香港警察</option></select> 

</div>
<div class="fitem">
  <select name="select0" size="1" onchange="top.location.href=ssbumen0.options[ssbumen0.selectedIndex].value" style="WIDTH: 145px; COLOR: #757570; HEIGHT: 19px" id="ssbumen0" language="javascript"> <option selected="">--厅机关导 航--</option> 
                    <option value="http://10.106.5.155/bgs">办公室</option> <option value="http://dep.jl/gat/jgdw/index.asp">机关党委</option> <option value="http://10.106.1.9/GAT/jjw/index.htm">纪委</option> 
                    <option value="http://10.106.6.241/">国内安全保卫局</option> <option value="http://10.106.1.9/GAT/UNIT2/index.asp">经济犯罪侦查总队</option> 
                    <option value="http://10.106.1.9/GAT/UNIT3/">治安警察总队</option> 
                    <option value="http://10.106.1.9/GAT/JDC/">禁毒总队</option> 
                    <option value="http://10.106.4.33">派出所工作指导处</option> <option value="http://10.106.1.9/xxtx/">信息通信处</option> <option value="http://10.106.1.9/GAT/UNIT7/">行动技术总队</option> <option value="http://10.106.1.9/GAT/UNIT8/">监所管理处</option> <option value="http://10.106.1.9/GAT/UNIT9/">经济文化保卫总队</option> <option value="http://10.106.1.9/GAT/UNIT10/">出入境管理处</option> <option value="http://10.106.1.9/gat/FZC/">法制处</option> <option value="http://10.106.6.1/index.htm">计划财务处</option> <option value="http://10.106.1.9/GAT/UNIT13/">公共信息网络安全监察处</option> 
                    <option value="http://10.106.1.9/GAT/UNIT14/">控告申诉处</option> 
                    <option value="http://dep.jl/GAT/unit15/">警务督察处</option> 
                    <option value="http://10.106.1.9/GAT/KJC/index.htm">科技处</option> 
                    <option value="http://10.106.2.21/">交通管理局</option> <option value="http://10.106.1.9/GAT/kss/kss">看守所</option> <option value="http://10.106.1.203:8080/xj/index.asp">刑事警察总队</option> 
                    <option value="http://10.106.1.9/GAT/QYS/">青少年犯罪研究所</option> 
                    <option value="http://10.106.1.9/GAT/DAS/">档案室</option> 
                    <option value="http://10.106.1.9/GAT/GAZK/">吉林公安高等专科学校</option> 
                    <option value="http://10.108.64.11/">省边防总队</option> <option value="http://10.106.3.181">省消防总队</option> <option value="http://10.106.3.30">省森林公安局</option></select> 

</div>
<div class="fitem">
  <select name="select1" size="1" onchange="top.location.href=qgjgdw.options[qgjgdw.selectedIndex].value" style="WIDTH: 145px; COLOR: #757570; HEIGHT: 19px" id="qgjgdw" language="javascript"> <option selected="">--全国机关党委导航--</option> 
                    <option value="http://www.dw.ga/index.asp">公安部</option> 
                    <option value="http://www.zz.bj/">北京市</option> <option value="http://www.zzb.tj/">天津市</option> <option value="http://10.24.1.9/">河北省</option> <option value="http://10.94.5.109/">山西省</option> <option value="http://10.100.1.20/jgdw/">内蒙古自治区</option> <option value="http://10.78.1.9/各处室/jgdwwy6/index.html">辽宁省</option> 
                    <option value="http://10.106.1.9/gat/jgdw/">吉林省</option> 
                    <option value="http://10.112.17.2/index.aspx">黑龙江省</option> 
                    <option value="http://10.14.8.7/shga.htm">上海市</option> <option value="http://10.32.1.99/jsgajgdw/">江苏省</option> <option value="http://www2.gat.zj/jgdw/index.asp">浙江省</option> <option value="http://10.124.1.183/jgdw/jgdw/jgdwnew.asp">安徽省</option> 
                    <option value="http://10.130.1.9/szjgdw/">福建省</option> <option value="http://10.136.1.20:3005/">江西省</option> <option value="http://www.dw.gat.sd/">山东省</option> <option value="http://10.56.1.60:6015/">河南省</option> <option value="http://10.72.1.3/jgdw/">湖北省</option> <option value="http://www.gd/53/">广东省</option> <option value="http://10.184.10.2/">海南省</option> <option value="http://10.64.1.9/">四川省</option> <option value="http://10.154.1.9/">重庆市</option> <option value="http://www.xtc.yn/jgdw/">云南省</option> <option value="http://10.172.1.9/shaanxi/">陕西省</option> <option value="http://10.178.1.9/">甘肃省</option> <option value="http://www.jgdw.qh/">青海省</option> <option value="http://10.196.1.9/">宁夏区</option></select></font><font size="2"> 

</div>
</div>
</div>
<div class="clear"></div>
</div>
<div class="banner"><img src="static/images/banner2.jpg" border="0" /></div> <?php include template('footer'); ?>