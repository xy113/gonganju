<?php
define('IN_UEDITOR',TRUE);
define('IN_ADMINCP', TRUE);
require_once '../../include/common.inc.php';
require_once ROOT_PATH.'/source/admincp/session.class.php';
require_once ROOT_PATH.'/source/admincp/function.common.php';
$admin = new Session();
$admincp = &$admin->admincp;
if ($admin->cpaccess==0){
	dexit('ตวยผาัณฌสฑ');
}
?>