<?php
require_once './source/include/common.inc.php';
require_once './source/function/function.article.php';
require_once './source/function/function.video.php';
$slides = array();
$query = $db->query("SELECT * FROM sdw_slides ORDER BY id DESC LIMIT 0,5");
while ($data = $db->fetch_array($query)){
	$slides[] = $data;
}
$articles['focus'] = listarticles(1,1,50,150);
$articles[1] = listarticles(1,5,50,0,FALSE,FALSE.FALSE,1);
$articles[2] = listarticles(2);
$articles[3] = listarticles(3,6);
$articles[4] = listarticles(4,6);
$articles[5] = listarticles(5,6);
$articles[6] = listarticles(6);
$articles[7] = listarticles(7,6);
$articles[8] = listarticles(8,6);
$articles[9] = listarticles(9,6);
$articles[10] = listarticles(10);
$articles[11] = listarticles(11,5);
include ROOT_PATH.'/data/cache/friendlink.php';
include template('index');
?>