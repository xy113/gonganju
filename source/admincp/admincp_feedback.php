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

 * $ID: admincp_feedback.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

cpheader();

if ($operation == 'view'){

	shownav(array('feedback','view'));

	$feedback = $db->GetOne("SELECT * FROM sdw_feedback WHERE id='$id'");

}else {

	shownav(array('feedback','manage'));

	if ($formsubmit == 'yes'){

		if (!($formhash == FORMHASH)){

			cpmessage('defined_action','error');

		}else {

			if (is_array($delete)){

				$db->query("DELETE FROM sdw_feedback WHERE id IN (".implodeids($delete).")");	

				cpmessage('drop_success');			

			}else {

				cpmessage('no_select','error');

			}

		}

	}else {		

		$pagesize = 20;

		$messages = array();

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_feedback");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT id,subject,username,email,tel,dateline FROM sdw_feedback ORDER BY id DESC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['dateline'] = date('Y-m-d H:i:s',$data['dateline']);

			$messages[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords);

	}

}

include template('admin_feedback');

?>