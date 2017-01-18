<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $article['title']?>_<?php echo $config['sitename']?></title>
<link href="/static/images/style.css" rel="stylesheet" type="text/css">
</head>

<body><?php include template('header'); ?><div class="yourpos">当前位置：<a href="/">首页</a> > <a href="arclist.php?cid=<?php echo $article['cid']?>"><?php echo $article['name']?></a> > 正文</div>
<div class="warpper">
<div class="bodyLeft" id="lll">
<div class="titlediv"></div>
<h1 class="arcTitle"><?php echo $article['title']?></h1>
<div class="arcinfo">发布时间：<?php echo $article['pubtime']?>　点击：<?php echo $article['views']?>　编辑：<?php echo $article['author']?></div>
<div class="arcbody"><?php echo $article['content']?></div>
<h3 class="tit">相关文章</h3>
<ul class="list"><? if(is_array($articles['related'])) { foreach($articles['related'] as $arc) { ?><li><span><?php echo $arc['pubtime']?></span><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>
<div class="blank"></div>
</div>
<div class="bodyRight" id="rrr">
<div class="rbody">
<div class="titlediv"><span>最新文章</span></div>
<ul class="list"><? if(is_array($articles['new'])) { foreach($articles['new'] as $arc) { ?><li><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></li><? } } ?></ul>
</div>
<div class="blank"></div>
<div class="rbody">
<div class="titlediv"><span>图片新闻</span></div>
<div class="blank"></div><? if(is_array($articles['img'])) { foreach($articles['img'] as $arc) { ?><dl>
<dd><a href="article.php?id=<?php echo $arc['id']?>"><img src="<?php echo $arc['image']?>" border="0" /></a></dd>
<dt><a href="article.php?id=<?php echo $arc['id']?>"><?php echo $arc['title']?></a></dt>
</dl><? } } ?><div class="clear"></div>
</div>
</div>
<div class="blank"></div>
</div>
<script type="text/javascript">
var HHH = Math.max($("#rrr").height(),$("#lll").height());
$("#lll").height(HHH);$("#rrr").height(HHH);
</script><?php include template('footer'); ?>