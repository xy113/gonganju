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

 * $ID: admincp_faq.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

cpheader();

if ($operation == 'edit'){

	shownav(array('faq','edit'));

	if ($formsubmit){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}else {

			$db->update('sdw_faq',$articlenew,"id='$id'");

			cpmessage('modi_success');

		}

	}else {		

		$article = $db->GetOne("SELECT * FROM sdw_faq WHERE id='$id'");

		//$fckeditor = FCK('articlenew[body]',$article['body']);

	}

}else {

	shownav(array('faq','manage'));

	if ($formsubmit){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}else {

			if (is_array($delete)){

				$db->query("DELETE FROM sdw_faq WHERE id IN (".implodeids($delete).")");

			}

			if ($articlenew){

				foreach ($articlenew as $id=>$article){

					$db->update('sdw_faq',$article,"id='$id'");

				}

			}

			if ($newtitle){

				foreach ($newtitle as $key=>$title){

					if ($title){
						$db->insert('sdw_faq',array('title'=>$title,'displayorder'=>$neworder[$key],'keywords'=>$newkeywords[$key]));

					}

				}

			}

			cpmessage('save_success');

		}

	}else{		

		$pagesize = 20;

		$articles = array();

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_faq");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT id,title,displayorder,keywords FROM sdw_faq ORDER BY displayorder LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$articles[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords);

	}

}

include template('admin_faq');

?>