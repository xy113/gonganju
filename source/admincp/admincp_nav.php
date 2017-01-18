<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-04-22

 * $ID: admincp_nav.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

cpheader();

shownav(array('nav_manage','manage'));

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}

	if (is_array($delete)){

		$ids = implodeids($delete);

		$db->query("DELETE FROM sdw_nav WHERE id IN ($ids)");

	}

	if ($navnew){

		foreach ($navnew as $id=>$nav){

			$db->update('sdw_nav',$nav,"id='$id'");

		}

	}

	if ($newtitle){

		foreach ($newtitle as $key=>$title){

			if ($title){

				$db->insert('sdw_nav',array('fid'=>$newfid[$key],'title'=>$title,'url'=>$newurl[$key],'position'=>$newposition[$key],

				'open'=>intval($newopen[$key]),'display'=>intval($newdisplay[$key]),'displayorder'=>intval($neworder[$key])));

			}

		}

	}

	updatecache('nav');

	cpmessage('save_success');

}else {

	$navs = array();

	$query = $db->query("SELECT * FROM sdw_nav ORDER BY displayorder,id");

	while ($data = $db->fetch_array($query)){

		$navs[$data['position']][$data['fid']][] = $data;

	}

	include template('admin_nav');

}

?>