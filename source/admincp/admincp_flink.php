<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-05-19

 * $ID: admincp_flink.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

cpheader();

if ($operation == 'edit'){

	if ($formsubmit){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}else {

			$db->update('sdw_friendlinks',$sitenew,"siteid='$siteid'");

			updatecache('friendlink');

			cpmessage('modi_success');

		}

	}else {

		shownav(array('friendlink','edit'));

		$site = $db->GetOne("SELECT * FROM sdw_friendlinks WHERE siteid='$siteid'");

	}

}else {

	shownav(array('friendlink','manage'));

	if ($formsubmit){

		if (is_array($delete)){

			$db->query("DELETE FROM sdw_friendlinks WHERE siteid IN (".implodeids($delete).")");

		}

		if ($sitenew){

			foreach ($sitenew as $siteid=>$site){

				$db->update('sdw_friendlinks',$site,"siteid='$siteid'");

			}

		}

		if ($newsitename){

			foreach ($newsitename as $key=>$sitename){

				if ($sitename){

					$db->insert('sdw_friendlinks',array(

					'sitename'=>$sitename,'siteurl'=>$newsiteurl[$key],

					'displayorder'=>$neworder[$key],'display'=>$newdisplay[$key]

					));

				}

			}

		}

		updatecache('friendlink');

		cpmessage('save_success');

	}else {

		$pagesize = 20;

		$sites = array();

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_friendlinks");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1)*$pagesize;

		$query = $db->query("SELECT siteid,sitename,siteurl,displayorder,display FROM sdw_friendlinks ORDER BY displayorder,siteid LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$sites[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords);

	}

}

include template('admin_flink');

?>