<?php
require_once './source/include/common.inc.php';
$query = $db->query("SELECT id,dateline FROM sdw_articles ORDER BY id");
while ($data = $db->fetch_array($query)){
	$date = date('Y-m-d H:i:s',$data['dateline']);
	$date = str_replace('2011', '2013', $date);
	$date = strtotime($date);
	$db->query("UPDATE sdw_articles SET dateline='$date' WHERE id='$data[id]'");
}
echo '数据更新完成，请删除此文件';