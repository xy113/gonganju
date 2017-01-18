<?php
require_once './source/include/common.inc.php';
require_once './source/function/function.article.php';
require_once './source/function/function.video.php';
$sqladd = $cid ? " AND (c.cid='$cid' OR c.fid='$cid')" : "";
$pagesize = 30;
$data = $db->GetOne("SELECT COUNT(*) FROM sdw_articles a LEFT JOIN sdw_article_cat c ON c.cid=a.cid WHERE a.audited=1 $sqladd");
$totalrecords = $data['COUNT(*)'];
$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);
$start_limit = ($page-1) * $pagesize;
$query = $db->query("SELECT a.title,a.id,a.cid,a.views,a.dateline,c.name FROM sdw_articles a LEFT JOIN sdw_article_cat c ON c.cid=a.cid WHERE a.audited=1 $sqladd ORDER BY a.id DESC LIMIT $start_limit,$pagesize");
while ($data = $db->fetch_array($query)){
	$data['pubtime'] = date('Y-m-d H:i');
	$articles['list'][] = $data;
}
$pagelink = pagination($page,$pagecount,"cid=$cid",$BASESCRIPT);
$category = $cid ? $db->GetOne("SELECT cid,name FROM sdw_article_cat WHERE cid='$cid'") : array('cid'=>0,'name'=>'×îÐÂÎÄÕÂ');
$articles['new'] = listarticles(0);
$articles['img'] = listarticles(0,6,50,0,FALSE,true);
include template('arclist');
?>