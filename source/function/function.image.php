<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-09-03

 * $Id: function.image.php

*/ 

if (!defined('IN_XSCMS')){

	die('Access Denied!');

}

function listimages($cid=0,$num=10,$titlelen=50,$recommend=false,$limit=0){

	global $db,$CACHE;

	$images = array();

	$sqladd = "WHERE a.audited=1";

	$sqladd.= $cid ? " AND (c.cid='$cid' OR c.fid='$cid')" : '';

	$sqladd.= $recommend ? " AND a.recommend=1" : '';

	$query = $db->query("SELECT a.id,a.cid,a.title,a.image,a.dateline,a.views,c.name FROM sdw_image a LEFT JOIN sdw_image_cat c ON c.cid=a.cid $sqladd ORDER BY id DESC LIMIT $limit,$num");

	while ($data = $db->fetch_array($query)){

		$data['title'] = cutstr($data['title'],$titlelen,'...');

		$data['pubtime'] = date('Y-m-d',$data['dateline']);

		$images[] = $data;

	}

	return $images;

}

?>