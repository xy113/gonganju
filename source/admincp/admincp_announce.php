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

 * $ID: admincp_announce.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

cpheader();

if ($operation == 'add'){

	if ($formsubmit == 'yes'){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}

		if (is_array($articlenew)){

			$articlenew['author'] = $admin->admincp['username'];

			$articlenew['authorid'] = $admin->adminid;

			$articlenew['dateline'] = $timestamp;

			$db->insert('sdw_announcement',$articlenew);

		}

		cpmessage('save_success','succeed',$BASESCRIPT.'?action=announce');

	}else {

		shownav(array('announcement','add'));

	}

}elseif ($operation == 'edit'){

	if ($formsubmit == 'yes'){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}

		if (is_array($articlenew)){

			$db->update('sdw_announcement',$articlenew,'id='.intval($id));

		}

		cpmessage('modi_success','succeed',$BASESCRIPT.'?action=announce');

	}else {

		shownav(array('announcement','edit'));

		$article = $db->GetOne("SELECT * FROM sdw_announcement WHERE id=".intval($id));

	}

	

}else {

	if ($formsubmit == 'yes'){

		if (is_array($delete)){

			$db->query("DELETE FROM sdw_announcement WHERE id IN (".implodeids($delete).")");

			cpmessage('drop_success');

		}else {

			cpmessage('no_select','error');

		}

	}else {

		shownav(array('announcement','manage'));

		$pagesize = 20;

		$articles = array();

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_announcement");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT id,title,poster,dateline FROM sdw_announcement ORDER BY id DESC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['dateline'] = date('Y-m-d H:i',$data['dateline']);

			$articles[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords);

	}

}

include template('admin_announce');

?>