<?php

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}

	if ($operation == 'upload'){

		error_reporting(0);

		include ROOT_PATH.'/source/class/class.image.php';

		$img = new Image();

		$data = $img->upload('imgfile');

		if ($data){

			$thumb = $img->ImageResize($data['path'],$config['thumbwidth'],$config['thumbheight']);

			$data['thumb'] = str_replace($data['name'],$thumb,$data['path']);

			$data['size2'] = GetImgSize(ROOT_PATH.'/'.$data['path']);

			$db->query("INSERT INTO sdw_image_files(gid,author,authorid,filename,attachment,thumbnail,filesize,filesize2,dateline)VALUES

			('$gid','$admincp[username]','$admincp[uid]','$data[name]','$data[path]','$data[thumb]','$data[size]','$data[size2]','$timestamp')");

			echo "{'url':'$data[path]','title':'','original':'".$data['name']."','state':'SUCCESS'}";

			exit();

		}

	}else {

		cpheader();

		if (is_array($delete)){

			$ids = implodeids($delete);

			$query = $db->query("SELECT attachment,thumbnail FROM sdw_image_files WHERE fid IN ($ids)");

			while ($data = $db->fetch_array($query)){

				@unlink(ROOT_PATH.'/'.$data['attachment']);

				@unlink(ROOT_PATH.'/'.$data['thumbnail']);

			}

			$db->query("DELETE FROM sdw_image_files WHERE fid IN ($ids)");

		}

		if ($description){

			foreach ($description as $key=>$value){

				$db->update("sdw_image_files",array('description'=>$value),"fid='$key'");

			}

		}

		cpmessage('save_success');

	}

}else {

	cpheader();

	if ($operation == 'upload'){

		$sessionid = session_id();

	}

	shownav(array('image_manage','image_upload'));

	$image = $db->GetOne("SELECT * FROM sdw_image WHERE id='$gid'");

	$files = array();

	$pagesize = 10;

	$data = $db->GetOne("SELECT COUNT(*) FROM sdw_image_files WHERE gid='$gid'");

	$totalrecords = $data['COUNT(*)'];

	$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

	$page = min(array($page,$pagecount));

	$start_limit = ($page-1) * $pagesize;

	$query = $db->query("SELECT * FROM sdw_image_files WHERE gid='$gid' ORDER BY fid LIMIT $start_limit,$pagesize");

	while ($data = $db->fetch_array($query)){

		$data['filetime'] = date('Y-m-d H:i:s',$data['dateline']);

		$data['filesize'] = round($data['filesize']/1023,2);

		$files[] = $data;

	}

	$pagelink = adminpage($page,$pagecount,$totalrecords,"gid=$gid");

	include template('admin_imagefile');

}

?>