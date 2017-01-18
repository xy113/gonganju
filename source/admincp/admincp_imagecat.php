<?php

cpheader();

if ($operation == 'edit'){

	shownav(array('image_category','edit'));

	if ($formsubmit == 'yes'){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}else {

			$categorynew['status'] = intval($categorynew['status']);

			$categorynew['displayorder'] = intval($categorynew['displayorder']);

			$categorynew['type'] = $categorynew['fid'] ? 'sub' : 'category';

			$db->update('sdw_image_cat',$categorynew,"cid='$cid'");

			updatecache('imagecat');

			cpmessage('modi_success');

		}

	}else {

		$categories = array();

		$query = $db->query("SELECT cid,name FROM sdw_image_cat WHERE type='category' ORDER BY displayorder,cid");

		while ($data = $db->fetch_array($query)){

			$categories[] = $data;

		}

		$category = $db->GetOne("SELECT * FROM sdw_image_cat WHERE cid='$cid'");

	}

}elseif ($operation == 'delete'){

	shownav(array('image_category','manage'));

	if (!($formhash == FORMHASH)){

		cpmessage('category_drop_confirm','form',$BASESCRIPT.'?'.$_SERVER['QUERY_STRING'],'category_drop_tips');

	}else {

		$cids = array();

		if (intval($cid)>0){

			$query = $db->query("SELECT cid FROM sdw_image_cat WHERE cid='$cid' OR fid='$cid'");

			while ($data = $db->fetch_array($query)){

				$cids[] = $data['cid'];

			}

		}

		if ($cid = implodeids($cids)){

			$db->query("DELETE FROM sdw_image_cat WHERE cid IN ($cid)");

			$db->query("DELETE FROM sdw_articles WHERE cid IN ($cid)");

		}

		updatecache('imagecat');

		cpmessage('drop_success','succeed',$BASESCRIPT.'?action=articlecat');

	}

}else {

	shownav(array('image_category','manage'));

	if ($formsubmit == 'yes'){

		if (!($formhash == FORMHASH)){

			cpmessage('undefined_action','error');

		}else {

			if ($categorynew){

				foreach ($categorynew as $cid=>$category){

					$category['status'] = intval($category['status']);

					$db->update('sdw_image_cat',$category,"cid='$cid'");

				}

			}

			if ($newname){

				foreach ($newname as $key=>$name){

					if ($name){

						$db->insert('sdw_image_cat',array('name'=>$name,'type'=>$newtype[$key],

						'fid'=>$newfid[$key],'displayorder'=>$neworder[$key]));

					}

				}

			}

			updatecache('imagecat');

			cpmessage('save_success');

		}

	}

	$categories = array();

	$query = $db->query("SELECT * FROM sdw_image_cat ORDER BY displayorder,cid");

	while ($data = $db->fetch_array($query)){

		$categories[$data['type']][] = $data;

	}

}

include template('admin_imagecat');

?>