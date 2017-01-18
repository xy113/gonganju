<?php

cpheader();

shownav(array('lifebox_manage','manage'));

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}

	if (is_array($delete)){

		$ids = implodeids($delete);

		$db->query("DELETE FROM sdw_lifebox WHERE id IN ($ids) OR classid IN ($ids)");

	}

	if ($urlnew){

		foreach ($urlnew as $id=>$url){

			$db->update('sdw_lifebox',$url,"id='$id'");

		}

	}

	if ($newtitle){

		foreach ($newtitle as $key=>$title){

			if ($title){

				$db->insert('sdw_lifebox',array('classid'=>intval($classid),'title'=>$title,'url'=>$newurl[$key],'displayorder'=>$neworder[$key]));

			}

		}

	}

	updatecache('lifebox');

	cpmessage('save_success');

}else {

	$classes = $urls = array();

	$query = $db->query("SELECT * FROM sdw_lifebox WHERE classid=0 ORDER BY displayorder");

	while ($data = $db->fetch_array($query)){

		$classes[] = $data;

	}

	if ($classid){

		$query = $db->query("SELECT * FROM sdw_lifebox WHERE classid='$classid' ORDER BY displayorder");

		while ($data = $db->fetch_array($query)){

			$urls[] = $data;

		}

	}

	include template('admin_lifebox');

}

?>