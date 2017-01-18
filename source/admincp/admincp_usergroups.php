<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-06-13

 * $ID: admincp_usergroups.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

cpheader();

if ($formsubmit == 'yes'){

	shownav(array('usergroup_manage',$operation ? 'edit' : 'manage'));

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}

	if ($operation == 'edit'){

		$db->update('sdw_usergroups',$usergroupnew,"groupid='$groupid'");

		cpmessage('modi_success');

	}else {

		if ($type == 'member'){

			if (is_array($delete)){

				$db->query("DELETE FROM sdw_usergroups WHERE type='member' AND groupid IN (".implodeids($delete).")");

			}

			if ($groupnew){

				foreach ($groupnew as $groupid=>$usergroup){

					$db->update('sdw_usergroups',$usergroup,"groupid='$groupid'");

				}

			}

			if ($newgrouptitle){

				foreach ($newgrouptitle as $key=>$grouptitle){

					if ($grouptitle){

						$db->insert('sdw_usergroups',array('grouptitle'=>$grouptitle,'type'=>$type,

						'creditslower'=>$newcreditslower[$key],'creditshigher'=>$newcreditshigher[$key]));

					}

				}

			}

			updatecache('usergroups');

			cpmessage('modi_success','succeed',$BASESCRIPT.'?action=usergroups&type='.$type);

		}else{

			if ($groupnew){

				foreach ($groupnew as $groupid=>$usergroup){

					$db->update('sdw_usergroups',$usergroup,"groupid='$groupid'");

				}

			}

			updatecache('usergroups');

			cpmessage('modi_success','succeed',$BASESCRIPT.'?action=usergroups&type='.$type);

		}

	}

}else {

	if ($operation == 'edit'){

		shownav(array('usergroup_manage','edit'));

		$usergroup = $db->GetOne("SELECT * FROM sdw_usergroups WHERE groupid='$groupid'");

	}else {

		shownav(array('usergroup_manage','manage'));

		$usergroups = array();

		$query = $db->query("SELECT groupid,grouptitle,type,creditshigher,creditslower FROM sdw_usergroups ORDER BY groupid");

		while ($data = $db->fetch_array($query)){

			$usergroups[$data['type']][] = $data;

		}

	}

}

include template('admin_usergroups');

?>