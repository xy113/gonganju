<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $config['sitename']?>-��ҳ</title>
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
<div class="tt">�����ƶ�</div>
<ul class="list"><? if(is_array($articles['8'])) { foreach($articles['8'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div> 
<div class="blank"></div>
<div class="contain2">
<div class="tt">�淶���ļ�</div>
<ul class="list"><? if(is_array($articles['9'])) { foreach($articles['9'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div> 
<div class="blank"></div>
<div class="contain2">
<div class="tt">��������</div>
<ul class="list"><? if(is_array($articles['11'])) { foreach($articles['11'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div> 
<div class="blank"></div>
<div style="text-align:center;"><a href="static/images/jincha.png" target="_blank"><img src="/static/images/jincha.png" border="0" width="160"></a></div>
</div>
<div class="right1">
<div class="contain">
<div class="tdiv"><em><a href="arclist.php?cid=3">����>></a></em>������Ϣ</div>
<ul class="list"><? if(is_array($articles['3'])) { foreach($articles['3'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
<div class="blank"></div>
<div class="contain">
<div class="tdiv"><em><a href="arclist.php?cid=4">����>></a></em>���฾����</div>
<ul class="list"><? if(is_array($articles['4'])) { foreach($articles['4'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
<div class="blank"></div>
<div class="contain">
<div class="tdiv"><em><a href="arclist.php?cid=5">����>></a></em>ר���</div>
<ul class="list"><? if(is_array($articles['5'])) { foreach($articles['5'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
<div class="blank"></div>
<div class="contain">
<div class="tdiv"><em><a href="arclist.php?cid=3">����>></a></em>ѧϰ԰��</div>
<ul class="list"><? if(is_array($articles['7'])) { foreach($articles['7'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
</div>
<div class="clear"></div>
</div>
<div class="BDRight">
<div class="tztb">
<ul><? if(is_array($articles['2'])) { foreach($articles['2'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
<div class="more"><a href="arclist.php?cid=2">����>></a></div>
</div>
<div class="gfxwj">
<div class="tt">����֪ʶ</div>
<ul><? if(is_array($articles['10'])) { foreach($articles['10'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>" target="_blank"><?php echo $arc['title']?></a></li><? } } ?></ul>
<div class="more"><a href="arclist.php?cid=10">����>></a></div>
</div>
<div class="blank"></div>
<div class="wzdh">
<div class="fitem">
  <select name="select" size="1" onchange="top.location.href=quanguo.options[quanguo.selectedIndex].value" style="WIDTH: 145px; COLOR: #757570; HEIGHT: 19px" id="quanguo" language="javascript"> <option selected="">--ȫ �� �� ��--</option> 
                    <option value="http://www.ga">������</option> <option value="http://www.bj">������</option> <option value="http://www.tj">�����</option> <option value="http://www.hb">�ӱ�ʡ</option> <option value="http://www.sx">ɽ��ʡ</option> <option value="http://10.100.1.18/nmgat/index.asp">���ɹ�������</option> 
                    <option value="http://www.ln">����ʡ</option> <option value="http://www.jl">����ʡ</option> <option value="http://10.112.1.2/">������ʡ</option> <option value="http://www.sh">�Ϻ���</option> <option value="http://www.js">����ʡ</option> <option value="http://10.118.1.12/gathome">�㽭ʡ</option> <option value="http://10.124.1.201/">����ʡ</option> <option value="http://10.130.1.9/">����ʡ</option> <option value="http://10.136.1.60:2222/">����ʡ</option> <option value="http://10.48.1.9/">ɽ��ʡ</option> <option value="http://10.56.1.60/">����ʡ</option> <option value="http://10.72.1.10/">����ʡ</option> <option value="http://10.142.1.12/hngainfo/default.asp">����ʡ</option> 
                    <option value="http://10.40.1.244/">�㶫ʡ</option> <option value="http://10.148.1.12/gxga/">������</option> <option value="http://10.184.10.2/">����ʡ</option> <option value="http://10.64.1.9/">�Ĵ�ʡ</option> <option value="http://10.154.1.9/">������</option> <option value="http://10.160.1.10/gz/">����ʡ</option> <option value="http://www.yn">����ʡ</option> <option value="http://10.188.1.9/">������</option> <option value="http://10.172.1.9/gatweb2006/">����ʡ</option> <option value="http://www.gs">����ʡ</option> <option value="http://10.192.1.10/">�ຣʡ</option> <option value="http://10.196.1.9/">������</option> <option value="http://10.20.1.10/">�½�������</option> <option value="http://10.84.1.9/">�½��������</option> <option value="http://10.47.97.9:8080/hkpolice/home-c.htm">��۾���</option></select> 

</div>
<div class="fitem">
  <select name="select0" size="1" onchange="top.location.href=ssbumen0.options[ssbumen0.selectedIndex].value" style="WIDTH: 145px; COLOR: #757570; HEIGHT: 19px" id="ssbumen0" language="javascript"> <option selected="">--�����ص� ��--</option> 
                    <option value="http://10.106.5.155/bgs">�칫��</option> <option value="http://dep.jl/gat/jgdw/index.asp">���ص�ί</option> <option value="http://10.106.1.9/GAT/jjw/index.htm">��ί</option> 
                    <option value="http://10.106.6.241/">���ڰ�ȫ������</option> <option value="http://10.106.1.9/GAT/UNIT2/index.asp">���÷�������ܶ�</option> 
                    <option value="http://10.106.1.9/GAT/UNIT3/">�ΰ������ܶ�</option> 
                    <option value="http://10.106.1.9/GAT/JDC/">�����ܶ�</option> 
                    <option value="http://10.106.4.33">�ɳ�������ָ����</option> <option value="http://10.106.1.9/xxtx/">��Ϣͨ�Ŵ�</option> <option value="http://10.106.1.9/GAT/UNIT7/">�ж������ܶ�</option> <option value="http://10.106.1.9/GAT/UNIT8/">����������</option> <option value="http://10.106.1.9/GAT/UNIT9/">�����Ļ������ܶ�</option> <option value="http://10.106.1.9/GAT/UNIT10/">���뾳������</option> <option value="http://10.106.1.9/gat/FZC/">���ƴ�</option> <option value="http://10.106.6.1/index.htm">�ƻ�����</option> <option value="http://10.106.1.9/GAT/UNIT13/">������Ϣ���簲ȫ��촦</option> 
                    <option value="http://10.106.1.9/GAT/UNIT14/">�ظ����ߴ�</option> 
                    <option value="http://dep.jl/GAT/unit15/">���񶽲촦</option> 
                    <option value="http://10.106.1.9/GAT/KJC/index.htm">�Ƽ���</option> 
                    <option value="http://10.106.2.21/">��ͨ������</option> <option value="http://10.106.1.9/GAT/kss/kss">������</option> <option value="http://10.106.1.203:8080/xj/index.asp">���¾����ܶ�</option> 
                    <option value="http://10.106.1.9/GAT/QYS/">�����그���о���</option> 
                    <option value="http://10.106.1.9/GAT/DAS/">������</option> 
                    <option value="http://10.106.1.9/GAT/GAZK/">���ֹ����ߵ�ר��ѧУ</option> 
                    <option value="http://10.108.64.11/">ʡ�߷��ܶ�</option> <option value="http://10.106.3.181">ʡ�����ܶ�</option> <option value="http://10.106.3.30">ʡɭ�ֹ�����</option></select> 

</div>
<div class="fitem">
  <select name="select1" size="1" onchange="top.location.href=qgjgdw.options[qgjgdw.selectedIndex].value" style="WIDTH: 145px; COLOR: #757570; HEIGHT: 19px" id="qgjgdw" language="javascript"> <option selected="">--ȫ�����ص�ί����--</option> 
                    <option value="http://www.dw.ga/index.asp">������</option> 
                    <option value="http://www.zz.bj/">������</option> <option value="http://www.zzb.tj/">�����</option> <option value="http://10.24.1.9/">�ӱ�ʡ</option> <option value="http://10.94.5.109/">ɽ��ʡ</option> <option value="http://10.100.1.20/jgdw/">���ɹ�������</option> <option value="http://10.78.1.9/������/jgdwwy6/index.html">����ʡ</option> 
                    <option value="http://10.106.1.9/gat/jgdw/">����ʡ</option> 
                    <option value="http://10.112.17.2/index.aspx">������ʡ</option> 
                    <option value="http://10.14.8.7/shga.htm">�Ϻ���</option> <option value="http://10.32.1.99/jsgajgdw/">����ʡ</option> <option value="http://www2.gat.zj/jgdw/index.asp">�㽭ʡ</option> <option value="http://10.124.1.183/jgdw/jgdw/jgdwnew.asp">����ʡ</option> 
                    <option value="http://10.130.1.9/szjgdw/">����ʡ</option> <option value="http://10.136.1.20:3005/">����ʡ</option> <option value="http://www.dw.gat.sd/">ɽ��ʡ</option> <option value="http://10.56.1.60:6015/">����ʡ</option> <option value="http://10.72.1.3/jgdw/">����ʡ</option> <option value="http://www.gd/53/">�㶫ʡ</option> <option value="http://10.184.10.2/">����ʡ</option> <option value="http://10.64.1.9/">�Ĵ�ʡ</option> <option value="http://10.154.1.9/">������</option> <option value="http://www.xtc.yn/jgdw/">����ʡ</option> <option value="http://10.172.1.9/shaanxi/">����ʡ</option> <option value="http://10.178.1.9/">����ʡ</option> <option value="http://www.jgdw.qh/">�ຣʡ</option> <option value="http://10.196.1.9/">������</option></select></font><font size="2"> 

</div>
</div>
</div>
<div class="clear"></div>
</div>
<div class="banner"><img src="static/images/banner2.jpg" border="0" /></div> <?php include template('footer'); ?>