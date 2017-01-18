<?php

cpheader();

!$type && $type = 'article';

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}else {

		if (is_array($delete)){

			$db->query("DELETE FROM sdw_source WHERE siteid IN (".implodeids($delete).")");

		}

		if ($sitenew){

			foreach ($sitenew as $siteid=>$site){

				$db->update('sdw_source',$site,"siteid='$siteid'");

			}

		}

		if ($newsitename){

			foreach ($newsitename as $key=>$sitename){

				if ($sitename){

					$db->insert('sdw_source',array('sitename'=>$sitename,'siteurl'=>$newsiteurl[$key],

					'displayorder'=>$neworder[$key],'type'=>$newtype[$key]));

				}

			}

		}

		updatecache('source');

		cpmessage('save_success');

	}

}else {

	shownav(array('source_manage','source_'.$type,'manage'));

	$sources = array();

	$pagesize = 50;

	$data = $db->query("SELECT COUNT(*) FROM sdw_source WHERE type='$type'");

	$totalrecords = $data['COUNT(*)'];

	$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

	$start_limit = ($page-1) * $pagesize;

	$query = $db->query("SELECT siteid,sitename,siteurl,type,displayorder FROM sdw_source WHERE type='$type' ORDER BY displayorder,siteid LIMIT $start_limit,$pagesize");

	while ($data = $db->fetch_array($query)){

		$sources[] = $data;

	}

	$pagelink = adminpage($page,$pagecount,$totalrecords,"type=$type");

	include template('admin_source');

}

?>