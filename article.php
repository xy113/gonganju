<?php
require_once './source/include/common.inc.php';
require_once './source/function/function.article.php';
require_once './source/function/function.video.php';
$db->query("UPDATE sdw_articles SET views=views+1 WHERE id='$id'");
$article = $db->GetOne("SELECT a.*,c.name FROM sdw_articles a LEFT JOIN sdw_article_cat c ON c.cid=a.cid WHERE a.id='$id'");
$article['pubtime'] = date('Y-m-d H:i',$article['dateline']);
$articles['related'] = listarticles($article['cid'],5);
$articles['new'] = listarticles(0);
$articles['img'] = listarticles(0,6,50,0,FALSE,true);
include template('article');
?>