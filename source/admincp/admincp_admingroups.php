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

 * $ID: admincp_admingroups.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

if (!$admin->isfounder)die('Access Denied!');

cpheader();

if ($operation == 'edit'){

	shownav(array('usergroup_admingroup','edit'));

	$actionarray = array('settings','settings_basic','settings_optimization','settings_attachment','settings_image',

	'settings_register','settings_randcode','settings_contact','nav','cplog','about',

	'member','member_add','member_edit','admingroups','usergroups',

	'articles','articles_add','articles_edit','articlecat','articlecat_edit','articlecat_delete','source',

	'goods','goods_add','goods_edit','goodscat','goodscat_edit','goodscat_delete',

	'goodstypes','goodstypes_typeoption','task','announce','friendlink','faq','feedback'

	);

	if ($formsubmit == 'yes'){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}

		$disabledactions = array_diff($actionarray,$disabledactions);

		$db->insert('sdw_admingroups',array('admingid'=>$admingid,'disabledactions'=>serialize($disabledactions)),FALSE,TRUE);

		cpmessage('modi_success');

	}else {

		$admingroup = $checked = array();

		$admingroup = $db->GetOne("SELECT a.*,g.grouptitle FROM sdw_admingroups a LEFT JOIN sdw_usergroups g ON g.groupid=a.admingid WHERE a.admingid='$admingid'");

		$actions = unserialize($admingroup['disabledactions']);

		foreach ($actionarray as $key=>$val){

			$checked[$val] = !in_array($val,(array)$actions) ? ' checked="checked"' : '';

		}

	}

}else {

	shownav(array('usergroup_admingroup','manage'));

	if ($formsubmit == 'yes'){

		if (!$formhash == FORMHASH){

			cpmessage('undefined_action','error');

		}

		if (is_array($delete)){

			$ids = implodeids($delete);

			$group = $db->GetOne("SELECT groupid FROM sdw_usergroups WHERE type='member' ORDER BY groupid ASC LIMIT 0,1");

			$newgroupid = $group['groupid'];

			$db->query("UPDATE sdw_members SET groupid='$newgroupid' WHERE groupid IN ($ids)");

			$db->query("DELETE FROM sdw_usergroups WHERE groupid IN ($ids)");

			$db->query("DELETE FROM sdw_admingroups WHERE admingid IN ($ids)");

		}

		if (is_array($grouptitle)){

			foreach ($grouptitle as $key=>$val){

				$db->update('sdw_usergroups',array('grouptitle'=>$val),"groupid='$key'");	

			}

		}

		if ($newgrouptitle){

			foreach ($newgrouptitle as $key=>$grouptitle){

				if ($grouptitle){

					$admingid = $db->insert('sdw_usergroups',array('grouptitle'=>$grouptitle,'radminid'=>$newradminid[$key],'type'=>'custom'),TRUE);

					$db->insert('sdw_admingroups',array('admingid'=>$admingid));

				}

			}

		}

		cpmessage('save_success');

	}else {

		$admingroups = array();

		$query = $db->query("SELECT a.admingid,g.groupid,g.radminid,g.grouptitle,g.type FROM sdw_admingroups a LEFT JOIN sdw_usergroups g ON g.groupid=a.admingid WHERE g.radminid>0 ORDER BY a.admingid");

		while ($data = $db->fetch_array($query)){

			$data['typename'] = $lang['usergroup_type'][$data['type']];

			$data['level'] = $lang['usergroup_level'][$data['radminid']];

			$admingroups[] = $data;

		}

	}

}

include template('admin_admingroups');

?>