<?php
define('SESSID', session_id());
cpheader();

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefined_action','error');

	}

	if ($operation == 'add'){

		shownav(array('article_manage','add'));

		include ROOT_PATH.'/source/class/class.image.php';

		$img = new Image();

		$data = $img->upload('file');

		$data['path'] && $articlenew['image'] = $data['path'];

		!$articlenew['summary'] && $articlenew['summary'] = cutstr(stripHtml($articlenew['content']),500,'...');

		$articlenew['author'] = $admin->admincp['username'];

		$articlenew['authorid'] = $admin->admincp['uid'];

		$articlenew['authorip'] = $ipaddr;

		$articlenew['dateline'] = $timestamp;

		$articlenew['updatetime'] = $timestamp;

		$articlenew['audited'] = intval($articlenew['audited']);

		$articlenew['recommend'] = intval($articlenew['recommend']);

		$articlenew['allowcomment'] = intval($articlenew['allowcomment']);

		$articlenew['allowvote'] = intval($articlenew['allowvote']);

		$db->insert('sdw_articles',$articlenew);

		$db->query("UPDATE sdw_article_cat SET records=records+1 WHERE cid='$articlenew[cid]'");

		cpmessage('save_success','succeed',$BASESCRIPT.'?action=articles&operation=add&cid='.$articlenew['cid']);

	}elseif ($operation == 'edit'){

		shownav(array('article_manage','edit'));

		include ROOT_PATH.'/source/class/class.image.php';

		$img = new Image();

		$data = $img->upload('file');

		$data['path'] && $articlenew['image'] = $data['path'];

		!$articlenew['summary'] && $articlenew['summary'] = cutstr(stripHtml($articlenew['content']),500,'...');

		$articlenew['author'] = $admin->admincp['username'];

		$articlenew['authorid'] = $admin->admincp['uid'];

		$articlenew['authorip'] = $ipaddr;

		$articlenew['updatetime'] = $timestamp;

		$articlenew['audited'] = intval($articlenew['audited']);

		$articlenew['recommend'] = intval($articlenew['recommend']);

		$articlenew['allowcomment'] = intval($articlenew['allowcomment']);

		$articlenew['allowvote'] = intval($articlenew['allowvote']);

		$db->update('sdw_articles',$articlenew,"id='$id'");

		cpmessage('modi_success','succeed');

	}else {

		shownav(array('article_manage','manage'));

		if (is_array($id)){

			$ids = implodeids($id);

			if ($mod == 'delete'){

				$db->query("DELETE FROM sdw_articles WHERE id IN ($ids)");

				cpmessage('drop_success');

			}

			if ($mod == 'recommend'){

				$db->query("UPDATE sdw_articles SET recommend=1 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'unrecommend'){

				$db->query("UPDATE sdw_articles SET recommend=0 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'audited'){

				$db->query("UPDATE sdw_articles SET audited=1 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'unaudited'){

				$db->query("UPDATE sdw_articles SET audited=0 WHERE id IN ($ids)");

				cpmessage('modi_success');

			}

			if ($mod == 'move'){

				$db->query("UPDATE sdw_articles SET cid='$target' WHERE id IN ($ids)");

				cpmessage('modi_success','succeed',$BASESCRIPT.'?action=articles&cid='.$target);

			}

		}else {

			cpmessage('no_select','error');

		}

	}

}else {

	include_once ROOT_PATH.'/data/cache/articlecat.php';

	include_once ROOT_PATH.'/data/cache/source.php';

	$categories = array();

	foreach ($CACHE['articlecat'] as $category){

		$categories[$category['type']][] = $category;

	}

	if ($operation == 'add'){

		shownav(array('article_manage','add'));

		//$fckeditor = FCK('articlenew[content]');

		include template('admin_newarticle');

	}elseif ($operation == 'edit'){

		shownav(array('article_manage','edit'));

		$article = $db->GetOne("SELECT * FROM sdw_articles WHERE id='$id'");

		//$fckeditor = FCK('articlenew[content]',$article['content']);

		$cid = $article['cid'];

		include template('admin_newarticle');

	}else {

		shownav(array('article_manage','manage'));

		$pagesize = 50;

		$articles = array();

		$sqladd = "WHERE a.title LIKE '%$keywords%'";

		if ($authorid) $sqladd.= " AND a.authorid='$authorid'";

		if ($cid) $sqladd.= " AND (c.cid='$cid' OR c.fid='$cid')";

		$sqladd.= isset($audited) ? " AND a.audited='$audited'" : " AND a.audited='1'";

		$data = $db->GetOne("SELECT COUNT(*) FROM sdw_articles a LEFT JOIN sdw_article_cat c ON c.cid=a.cid $sqladd");

		$totalrecords = $data['COUNT(*)'];

		$pagecount = $totalrecords<$pagesize ? 1 : ceil($totalrecords/$pagesize);

		$start_limit = ($page-1) * $pagesize;

		$query = $db->query("SELECT a.id,a.cid,a.title,a.views,a.author,a.authorid,a.dateline,a.recommend,a.audited,c.name FROM sdw_articles a 

		LEFT JOIN sdw_article_cat c ON c.cid=a.cid $sqladd ORDER BY a.id DESC LIMIT $start_limit,$pagesize");

		while ($data = $db->fetch_array($query)){

			$data['pubtime'] = $data['dateline'] ? date('Y-m-d H:i',$data['dateline']) : '';

			$articles[] = $data;

		}

		$pagelink = adminpage($page,$pagecount,$totalrecords,"authorid=$authorid&cid=$cid");

		include template('admin_articles');

	}

}

?>