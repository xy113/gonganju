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

 * $ID:admincp_about.php

**/

if (!defined('IN_XSCMS')||!defined('IN_ADMINCP'))die('Access Denied!');

cpheader();

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}

	if ($operation == 'add'){

		shownav(array('about_manage','add'));

		$articlenew['author'] = $admincp['username'];

		$articlenew['authorid'] = $admincp['uid'];

		$articlenew['dateline'] = $timestamp;

		$db->insert('sdw_about',$articlenew);

		cpmessage('save_success','succeed',$BASESCRIPT.'?action=about');

	}elseif ($operation == 'edit'){

		shownav(array('about_manage','edit'));

		$articlenew['author'] = $admincp['username'];

		$articlenew['authorid'] = $admincp['uid'];

		$articlenew['dateline'] = $timestamp;

		$db->update('sdw_about',$articlenew,"id='$id'");

		cpmessage('modi_success');

	}else {

		shownav(array('about_manage','manage'));

		if (is_array($delete)){

			$db->query("DELETE FROM sdw_about WHERE id IN (".implodeids($delete).")");

			cpmessage('drop_success');

		}else {

			cpmessage('no_select','error');

		}

	}

}else {

	if ($operation == 'add'){

		shownav(array('about_manage','add'));

	}elseif ($operation == 'edit'){

		shownav(array('about_manage','edit'));

		$article = $db->GetOne("SELECT * FROM sdw_about WHERE id='$id'");

	}else {

		shownav(array('about_manage','manage'));

		$pagesize = 20;

		$articles = array();

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_about");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT id,title,author,dateline FROM sdw_about ORDER BY id ASC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['dateline'] = date('Y-m-d H:i:s',$data['dateline']);

			$articles[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords);

	}

}

include template('admin_about');

?>