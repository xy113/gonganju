<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-05-18

 * $ID: admin.class.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

class Session{

	var $uid = 0;

	var $username = '';

	var $cpaccess = 0;

	var $isfounder = false;

	var $admincp = array();

	var $var = array();

	function __construct(){

		$this->Session();

	}

	function Session(){

		global $_SESSION;

		if (!isset($_SESSION['admincp'])){

			$this->cpaccess = 0;

		}else {

			$this->admincp = $_SESSION['admincp'];

			if (empty($this->admincp['uid']) || $this->admincp['uid']<1 || $this->admincp['adminid']<1 || empty($this->admincp['username']) || empty($this->admincp['password'])){

				$this->cpaccess = 0;

			}else {

				$this->cpaccess = 1;

				$this->uid = $this->admincp['uid'];

				$this->isfounder = $this->founder($this->uid);

				$this->set('dactionarray',unserialize($this->admincp['disabledactions']));

			}

		}

	}

	function founder($uid){

		return in_array($uid,explode(',',$GLOBALS['config']['admincp']['founders']));

	}

	function AdminLogin($username,$password,$randcode){

		global $db,$lang,$_SESSION;

		if ($randcode && ($randcode != $_SESSION['randcode'])){

			cpheader();

			cpmessage('login_randcode_error','error');

		}

		$admindata = $db->GetOne("SELECT uid,username,password,adminid,groupid FROM sdw_members WHERE adminid>0 AND username='$username'");

		if (empty($admindata) || (sha1(md5($password)) != $admindata['password'])){

			cpheader();

			cpmessage('login_error','error');

		}else {

			$db->query("UPDATE sdw_members SET lastvisit='$GLOBALS[timestamp]',lastip='$GLOBALS[ipaddr]',logintimes=logintimes+1 WHERE username='$username'");

			$data = $db->GetOne("SELECT a.disabledactions,g.groupid,g.radminid,g.grouptitle FROM sdw_admingroups a LEFT JOIN sdw_usergroups g ON g.groupid=a.admingid WHERE a.admingid='$admindata[groupid]'");

			$data && $admindata = array_merge($admindata,$data);

			$_SESSION['admincp'] = $admindata;

			$this->Session();

			xsetcookie('uid',$admindata['uid']);

			xsetcookie('username',$admindata['username']);

			xsetcookie('password',$admindata['password']);

			$this->cplog($lang['cplog_login']);

			header('location:./'.ADMINSCRIPT);

		}

	}

	function AdminLogout(){

		unset($_SESSION['admincp']);

		header('location:./'.ADMINSCRIPT);

	}

	function set($key,$value){

		$this->var[$key] = $value;

	}

	function get($key){

		return $this->var[$key];

	}

	function clear(){

		$this->var = array();

	}

	function cplog($body=''){

		$GLOBALS['db']->query("INSERT INTO sdw_adminlog(uid,body,dateline,ipaddr,requesturi)VALUES('$this->uid','$body','$GLOBALS[timestamp]','$GLOBALS[ipaddr]','$_SERVER[HTTP_REFERER]')");

	}

}

?>