<?php

/**

 * ============================================================================

 * ��Ȩ���� (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved��

 * ��վ��ַ: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-05-18

 * $ID: admincp_cache.php

**/

if (!defined('IN_XSCMS')||!defined('IN_ADMINCP'))die('Access Denied!');

cpheader();

$cachenum = 0;

$dir = dir(ROOT_PATH.'/data/cache');

while ($file = $dir->read()){

	$cachenum++;

	@unlink(ROOT_PATH.'/data/cache/'.$file);

}

updatecache();

shownav(array('clearcache'));

cpmessage('cache_updated','succeed','###');

?>