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

		$data['path'] && $slidenew['image'] = $data['path'];

		$slidenew['dateline'] = $timestamp;

		$slidenew['author'] = $admincp['username'];

		$slidenew['authorid'] = $admincp['uid'];

		$db->insert('sdw_slides',$slidenew);

		cpmessage('save_success');

	}elseif ($operation == 'edit'){

		if ($_FILES['file']['name']){

			include ROOT_PATH.'/source/class/class.image.php';

			$img = new Image();

			$data = $img->upload('file');

			$slidenew['image'] = $data['path'];

		}

		$db->update('sdw_slides',$slidenew,"id='$id'");

		cpmessage('modi_success');

	}else {

		if (is_array($delete)){

			$ids = implodeids($delete);

			$db->query("DELETE FROM sdw_slides WHERE id IN ($ids)");

			cpmessage('drop_success');

		}else {

			cpmessage('no_select','error');

		}

	}

}else {

	if ($operation == 'add'){

		shownav(array('slide_manage','add'));

	}elseif ($operation == 'edit'){

		shownav(array('slide_manage','edit'));

		$slide = $db->GetOne("SELECT * FROM sdw_slides WHERE id='$id'");

	}else {

		shownav(array('slide_manage','manage'));

		$pagesize = 50;

		$slides = array();

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_slides");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT id,title,dateline,author,authorid,linkurl FROM sdw_slides ORDER BY id DESC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['dateline'] = date('Y-m-d H:i:s',$data['dateline']);

			$slides[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords);

	}

	include template('admin_slide');

}

?>