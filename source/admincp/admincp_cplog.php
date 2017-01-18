<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-05-20

 * $ID: admincp_cplog.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

if($operation == 'clearall'){

	$db->query("DELETE FROM sdw_adminlog");

	$operation = 'list';

}

if ($operation == 'export'){

	$cplogs = array();

	include ROOT_PATH.'/source/class/class.csv.php';

	$csv = new Csv();

	$query = $db->query("SELECT b.username,a.body,a.dateline,a.ipaddr,a.requesturi FROM sdw_adminlog a LEFT JOIN sdw_members b ON b.uid=a.uid ORDER BY a.id DESC");

	while($data = $db->fetch_array($query)){

		$data['dateline'] = date('Y-m-d h:i',$data['dateline']);

	  	$cplogs[] = $data;

	}

	$csv->addData($cplogs);

	$csv->getCsv(random(10));

	exit();

}

if ($delete && $isfounder){

	if (!($formhash == FORMHASH)){

		dexit('undefined_action');

	}else {

		$db->query("DELETE FROM sdw_adminlog WHERE id IN ($delete)");

	}

}

cpheader();

shownav(array('cplog_manage','cplog_list'));

$pagesize = 20;

$cplogs = array();

$sqladd = "WHERE a.body LIKE '%$keywords%'";

$sqladd.= $adminid ? " AND a.adminid='$adminid'" : "";

$data = $db->GetOne("SELECT COUNT(*) FROM sdw_adminlog a LEFT JOIN sdw_members b ON b.uid=a.uid $sqladd");

$totalrecords = $data['COUNT(*)'];

$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

$page = min(array($page,$pagecount));

$start_limit = ($page-1) * $pagesize;

$query = $db->query("SELECT a.id,a.uid,a.body,a.dateline,a.ipaddr,a.requesturi,b.username FROM sdw_adminlog a LEFT JOIN sdw_members b ON b.uid=a.uid $sqladd ORDER BY a.id DESC LIMIT $start_limit,$pagesize");

while($data = $db->fetch_array($query)){

	$data['dateline'] = date('Y-m-d h:i',$data['dateline']);

	$cplogs[] = $data;

}

$pagelink = adminpage($page,$pagecount,$totalrecords,"uid=$uid&keywords=$keywords");

$querystring = "uid=$uid&keywords=$keywords&page=$page";

include template('admin_cplog');

?>