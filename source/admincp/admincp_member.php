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

 * $ID: admincp_member.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

cpheader();

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}

	if ($operation == 'add'){

		checkuser($membernew['username']);

		$membernew['password'] = sha1(md5($membernew['password']));

		$membernew['regdate'] = $timestamp;

		$membernew['regip'] = $ipaddr;

		$uid = $db->insert('sdw_members',$membernew,TRUE);

		$admin->cplog($lang[$title].$membernew['username']);

		cpmessage('save_success');

	}elseif ($operation == 'edit'){

		$uid = intval($_POST['uid']);

		if (strlen($membernew['password'])>5){

			$membernew['password'] = sha1(md5($membernew['password']));

		}else {

			unset($membernew['password']);

		}

		$db->update('sdw_members',$membernew,"uid='$uid'");

		$admin->cplog($lang[$title].$username);

		cpmessage('modi_success');

	}else {

		if (is_array($delete)){

			$query = $db->query("SELECT uid,username FROM sdw_members WHERE uid IN (".implodeids($delete).")");

			while ($data = $db->fetch_array($query)){

				if (!$admin->founder($data['uid'])){

					$admin->cplog($lang['cplog_drop_user'].$data['username']);

					$db->query("DELETE FROM sdw_members WHERE uid='$data[uid]'");

				}

			}

			cpmessage('drop_success');

		}else {

				cpmessage('no_select','error');

		}

	}

}else {

	if ($operation == 'add'){

		shownav(array('member_manage','add'));

		$usergroups = array();

		$query = $db->query("SELECT groupid,grouptitle,type FROM sdw_usergroups ORDER BY groupid");

		while ($data = $db->fetch_array($query)){

			$usergroups[$data['type']][] = $data;

		}

	}elseif ($operation == 'edit'){

		shownav(array('member_manage','edit'));

		$member = $db->GetOne("SELECT * FROM sdw_members WHERE uid='$uid'");

		$usergroups = array();

		$query = $db->query("SELECT groupid,grouptitle,type FROM sdw_usergroups ORDER BY groupid");

		while ($data = $db->fetch_array($query)){

			$usergroups[$data['type']][] = $data;

		}

	}else {

		shownav(array('member_manage','manage'));

		$pagesize = 50;

		$members = array();

		$sqladd = "WHERE m.username LIKE '%$keywords%'";

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_members m LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid $sqladd");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT m.uid,m.adminid,m.username,m.groupid,m.regdate,m.lastvisit,m.lastip,m.credits,g.grouptitle FROM sdw_members m 

		LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid $sqladd ORDER BY m.uid ASC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['regdate'] = date('Y-m-d H:i',$data['regdate']);

			$data['lastvisit'] = $data['lastvisit'] ? date('Y-m-d H:i',$data['lastvisit']) : '';

			$members[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords,"keywords=$keywords");

	}

}

include template('admin_member');

?>