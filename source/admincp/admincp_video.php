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

		$data['path'] && $videonew['image'] = $data['path'];

		$videonew['author'] = $admincp['username'];

		$videonew['authorid'] = $admincp['uid'];

		$videonew['authorip'] = $ipaddr;

		$videonew['dateline'] = $timestamp;

		$videonew['audited'] = intval($videonew['audited']);

		$videonew['recommend'] = intval($videonew['recommend']);

		$videonew['allowvote'] = intval($videonew['allowvote']);

		$videonew['allowcomment'] = intval($videonew['allowcomment']);

		$db->insert('sdw_video',$videonew);

		cpmessage('save_success','succeed',$BASESCRIPT.'?action=video&operation=add&cid='.$videonew['cid']);

	}elseif ($operation == 'edit'){

		include ROOT_PATH.'/source/class/class.image.php';

		$img = new Image();

		$data = $img->upload('file');

		$data['path'] && $videonew['image'] = $data['path'];

		$videonew['audited'] = intval($videonew['audited']);

		$videonew['recommend'] = intval($videonew['recommend']);

		$videonew['allowvote'] = intval($videonew['allowvote']);

		$videonew['allowcomment'] = intval($videonew['allowcomment']);

		$db->update('sdw_video',$videonew,"id='$id'");

		cpmessage('save_success','succeed');

	}else {

		if (!is_array($id)){

			cpmessage('no_select','error');

		}else {

			$ids = implodeids($id);

			if ($mod == 'delete'){

				$db->query("DELETE FROM sdw_video WHERE id IN ($ids)");

				cpmessage('drop_success');

			}

			if ($mod == 'recommend'){

				$db->query("UPDATE sdw_video SET recommend=1 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'unrecommend'){

				$db->query("UPDATE sdw_video SET recommend=0 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'audited'){

				$db->query("UPDATE sdw_video SET audited=1 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'unaudited'){

				$db->query("UPDATE sdw_video SET audited=0 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'move'){

				$db->query("UPDATE sdw_video SET cid='$target' WHERE id IN ($ids)");

				cpmessage('modi_success','succeed',$BASESCRIPT.'?action=video&cid='.$target);

			}

		}

	}

}else {

	$categories = array();

	$query = $db->query("SELECT cid,fid,name,type,status FROM sdw_video_cat ORDER BY displayorder,cid");

	while ($data = $db->fetch_array($query)){

		$categories[$data['type']][] = $data;

	}

	if ($operation == 'add'){

		shownav(array('video_manage','add'));

		include template('admin_newvideo');

	}elseif ($operation == 'edit'){

		shownav(array('video_manage','edit'));

		$video = $db->GetOne("SELECT * FROM sdw_video WHERE id='$id'");

		$cid = $video['cid'];

		include template('admin_newvideo');

	}else {

		shownav(array('video_manage','manage'));

		$pagesize = 50;

		$videos = array();

		$sqladd = "WHERE a.title LIKE '%$keywords%'";

		if ($authorid) $sqladd.= " AND a.authorid='$authorid'";

		if ($cid) $sqladd.= " AND (c.cid='$cid' OR c.fid='$cid')";

		$sqladd.= isset($audited) ? " AND a.audited='$audited'" : " AND a.audited='1'";

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_video a LEFT JOIN sdw_video_cat c ON c.cid=a.cid $sqladd");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT a.id,a.cid,a.title,a.views,a.author,a.authorid,a.dateline,a.recommend,a.audited,c.name FROM sdw_video a 

		LEFT JOIN sdw_video_cat c ON c.cid=a.cid $sqladd ORDER BY a.id DESC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['pubtime'] = $data['dateline'] ? date('Y-m-d H:i',$data['dateline']) : '';

			$videos[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords,"authorid=$authorid&cid=$cid");

		include template('admin_video');

	}

}

?>