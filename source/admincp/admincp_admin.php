<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-05-22

 * $ID: admincp_admin.php

**/

if (!defined('IN_XSCMS')) die('Access Denied!');

if (!$admin->isfounder) die('Access Denied!');

cpheader();

if ($operation == 'add'){

	shownav(array('admin_manage','add'));

	if ($formsubmit == 'yes'){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}else {

			$data = $db->GetOne("SELECT adminid FROM sdw_admins WHERE username='$newusername'");

			if ($data){

				cpmessage('member_repeat','error');

			}else {

				$adminnew = array_merge(array('username'=>$newusername),$adminnew);

				$adminid = $db->insert('sdw_admins',$adminnew,TRUE);

				$membernew['password'] = sha1(md5($newpassword));

				$membernew['adminid'] = $adminid;

				$membernew['email'] = $newemail;

				$membernew['realname'] = $newrealname;

				$membernew['groupid'] = $newgroupid;

				$membernew['tel'] = $newtel;

				$membernew['userim'] = $newuserim;

				$data = $db->GetOne("SELECT uid FROM sdw_members WHERE username='$newusername'");

				if ($data){

					$db->update('sdw_members',$membernew,"uid='$data[uid]'");

					$admin->cplog($lang['cplog_edit_user'].$newusername);

				}else {

					$membernew['username'] = $newusername;

					$membernew['regdate'] = $timestamp;

					$membernew['regip'] = $ipaddr;

					$db->insert('sdw_members',$membernew);

					$admin->cplog($lang['cplog_add_user'].$newusername);

				}

				cpmessage('save_success');

			}

		}

	}else {

		$admingroups = array();

		$query = $db->query("SELECT groupid,grouptitle,type FROM sdw_usergroups ORDER BY groupid");

		while ($data = $db->fetch_array($query)){

			$admingroups[$data['type']][] = $data;

		}

	}

}elseif ($operation == 'edit'){

	shownav(array('admin_manage','edit'));

	if ($formsubmit == 'yes'){

		if (!($formhash == FORMHASH)){

			cpmessage('undefiend_action','error');

		}else {

			$db->update('sdw_admins',$adminnew,"adminid='$adminid'");

			if (strlen($newpassword)>5){

				$membernew['password'] = sha1(md5($newpassword));

			}

			$membernew['groupid'] = $newgroupid;

			$membernew['adminid'] = $adminid;

			$membernew['email'] = $newemail;

			$membernew['tel'] = $newtel;

			$membernew['userim'] = $newuserim;

			$membernew['realname'] = $newrealname;

			$data = $db->GetOne("SELECT uid FROM sdw_members WHERE username='$newusername'");

			if ($data){

				$db->update('sdw_members',$membernew,"uid='$data[uid]'");

				$admin->cplog($lang['cplog_edit_user'].$newusername);

			}else {

				$membernew['username'] = $newusername;

				$membernew['regdate'] = $timestamp;

				$membernew['regip'] = $ipaddr;

				$db->insert('sdw_members',$membernew);

				$admin->cplog($lang['cplog_add_user'].$newusername);

			}	

			cpmessage('modi_success');

		}

	}else {

		$adminuser = $db->GetOne("SELECT a.*,m.uid,m.realname,m.groupid,m.email,m.tel,m.userim FROM sdw_admins a LEFT JOIN sdw_members m ON m.adminid=a.adminid WHERE a.adminid='$adminid'");

		$admingroups = array();

		$query = $db->query("SELECT groupid,grouptitle,type FROM sdw_usergroups ORDER BY groupid");

		while ($data = $db->fetch_array($query)){

			$admingroups[$data['type']][] = $data;

		}

	}

}else {

	shownav(array('admin_manage','manage'));

	if ($formsubmit == 'yes'){

		if ($formhash == FORMHASH){

			if (is_array($delete)){

				$query = $db->query("SELECT adminid,username FROM sdw_admins WHERE adminid IN (".implodeids($delete).")");

				while ($data = $db->fetch_array($query)){

					$admin->cplog($lang['cplog_drop_user'].$data['username']);

					$db->query("DELETE FROM sdw_admins WHERE adminid='$data[adminid]'");

					$db->query("DELETE FROM sdw_members WHERE adminid='$data[adminid]'");

				}

				cpmessage('drop_success');

			}else {

				cpmessage('no_select','error');

			}

		}else {

			cpmessage('undefined_action','error');

		}

	}else {

		$pagesize = 50;

		$admins = array();

		$sqladd = "WHERE (a.username LIKE '%$keywords%')";

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_admins a LEFT JOIN sdw_members m ON m.adminid=a.adminid $sqladd");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT a.adminid,a.username,m.uid,m.realname,m.email,m.tel,m.groupid,m.lastvisit,m.lastip,g.grouptitle FROM sdw_admins a 

		LEFT JOIN sdw_members m ON m.adminid=a.adminid LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid $sqladd ORDER BY a.adminid ASC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['isfounder'] = $admin->founder($data['adminid']);

			$data['lastvisit'] = $data['lastvisit'] ? date('Y-m-d H:i',$data['lastvisit']) : '';

			$admins[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords,"keywrods=$keywords");

	}

}

include template('admin_admin');

?>