<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title><?php echo $video['title']?>_<?php echo $config['sitename']?></title>

<link href="/static/images/style.css" rel="stylesheet" type="text/css">

</head>



<body><?php include template('header'); ?><div class="yourpos">��ǰλ�ã�<a href="/">��ҳ</a> > <a href="videos.php?cid=<?php echo $video['cid']?>"><?php echo $video['name']?></a> > ����</div>

<div class="warpper">

<div class="bodyLeft">

<div class="tab"></div>

<h1 class="arcTitle"><?php echo $video['title']?></h1>

<div class="arcinfo">����ʱ�䣺<?php echo $video['pubtime']?>�������<?php echo $video['views']?>���༭��<?php echo $video['author']?></div>

<div id="videoplayer">

<embed src="<?php echo $video['videourl']?>" quality="high" width="640" height="500" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>	

</div>

<div class="arcbody"><?php echo $video['content']?></div>

<h3 class="tit">�����Ƶ</h3>

<ul class="list"><? if(is_array($videos['related'])) { foreach($videos['related'] as $vod) { ?><li><span><?php echo $vod['pubtime']?></span><a href="play.php?id=<?php echo $vod['id']?>"><?php echo $vod['title']?></a></li><? } } ?></ul>

<div class="blank"></div>

</div>

<div class="bodyRight">

<div class="rbody">

<div class="tab">��������</div>

<ul class="list"><? if(is_array($articles['new'])) { foreach($articles['new'] as $arc) { ?><li>��<a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>

</div>

<div class="blank"></div>

<div class="rbody">

<div class="tab">������Ƶ</div>

<ul class="list"><? if(is_array($videos['new'])) { foreach($videos['new'] as $vod) { ?><li>��<a href="play.php?id=<?php echo $vod['id']?>"><?php echo $vod['title']?></a></li><? } } ?></ul>

</div>

</div>

<div class="clear"></div>

</div><?php include template('footer'); ?>