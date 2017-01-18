<?php

cpheader();

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}

	if ($operation == 'add'){

		include ROOT_PATH.'/source/class/class.image.php';

		$img = new Image();

		$data = $img->upload('file');

		$data['path'] && $imagenew['image'] = $data['path'];

		$imagenew['author'] = $admincp['username'];

		$imagenew['authorid'] = $admincp['uid'];

		$imagenew['authorip'] = $ipaddr;

		$imagenew['dateline'] = $timestamp;

		$imagenew['audited'] = intval($imagenew['audited']);

		$imagenew['recommend'] = intval($imagenew['recommend']);

		$imagenew['allowvote'] = intval($imagenew['allowvote']);

		$imagenew['allowcomment'] = intval($imagenew['allowcomment']);

		$gid = $db->insert('sdw_image',$imagenew,TRUE);

		//cpmessage('save_success','succeed',$BASESCRIPT.'?action=image&operation=add&cid='.$imagenew['cid']);

		cpmessage('save_success','succeed',$BASESCRIPT.'?action=imagefile&operation=upload&gid='.$gid);

	}elseif ($operation == 'edit'){

		include ROOT_PATH.'/source/class/class.image.php';

		$img = new Image();

		$data = $img->upload('file');

		$data['path'] && $imagenew['image'] = $data['path'];

		$imagenew['audited'] = intval($imagenew['audited']);

		$imagenew['recommend'] = intval($imagenew['recommend']);

		$imagenew['allowvote'] = intval($imagenew['allowvote']);

		$imagenew['allowcomment'] = intval($imagenew['allowcomment']);

		$db->update('sdw_image',$imagenew,"id='$id'");

		cpmessage('modi_success','succeed');

	}else {

		if (!is_array($id)){

			cpmessage('no_select','error');

		}else {

			$ids = implodeids($id);

			if ($mod == 'delete'){

				$db->query("DELETE FROM sdw_image WHERE id IN ($ids)");

				cpmessage('drop_success');

			}

			if ($mod == 'recommend'){

				$db->query("UPDATE sdw_image SET recommend=1 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'unrecommend'){

				$db->query("UPDATE sdw_image SET recommend=0 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'audited'){

				$db->query("UPDATE sdw_image SET audited=1 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'unaudited'){

				$db->query("UPDATE sdw_image SET audited=0 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'move'){

				$db->query("UPDATE sdw_image SET cid='$target' WHERE id IN ($ids)");

				cpmessage('modi_success','succeed',$BASESCRIPT.'?action=image&cid='.$target);

			}

		}

	}

}else {

	$categories = array();

	$query = $db->query("SELECT cid,fid,name,type,status FROM sdw_image_cat ORDER BY displayorder,cid");

	while ($data = $db->fetch_array($query)){

		$categories[$data['type']][] = $data;

	}

	if ($operation == 'add'){

		shownav(array('image_manage','add'));

		include template('admin_newimage');

	}elseif ($operation == 'edit'){

		shownav(array('image_manage','edit'));

		$image = $db->GetOne("SELECT * FROM sdw_image WHERE id='$id'");

		$cid = $image['cid'];

		include template('admin_newimage');

	}else {

		shownav(array('image_manage','manage'));

		$pagesize = 50;

		$images = array();

		$sqladd = "WHERE a.title LIKE '%$keywords%'";

		if ($authorid) $sqladd.= " AND a.authorid='$authorid'";

		if ($cid) $sqladd.= " AND (c.cid='$cid' OR c.fid='$cid')";

		$sqladd.= isset($audited) ? " AND a.audited='$audited'" : " AND a.audited='1'";

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_image a LEFT JOIN sdw_video_cat c ON c.cid=a.cid $sqladd");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT a.id,a.cid,a.title,a.views,a.author,a.authorid,a.dateline,a.recommend,a.audited,c.name FROM sdw_image a 

		LEFT JOIN sdw_image_cat c ON c.cid=a.cid $sqladd ORDER BY a.id DESC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['pubtime'] = $data['dateline'] ? date('Y-m-d H:i',$data['dateline']) : '';

			$images[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords,"authorid=$authorid&cid=$cid");

		include template('admin_image');

	}

}

?>