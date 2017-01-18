<?php

class Member{

	public $uid = 0;

	public $access = 0;

	public $usercp = array();

	function __construct(){

		$this->Member();

	}

	function Member(){

		global $db,$_XCOOKIE;

		if ($_SESSION['member']){

			$this->access = 1;

			$this->usercp = $_SESSION['member'];

		}elseif ($_XCOOKIE['uid'] && $_XCOOKIE['username'] && $_XCOOKIE['password']){

			$data = $db->GetOne("SELECT m.*,g.radminid,g.type,g.grouptitle FROM sdw_members m LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid 

			WHERE m.username='$_XCOOKIE[username]' AND uid='$_XCOOKIE[uid]' AND password='$_XCOOKIE[password]'");

			if ($data){

				$db->query("UPDATE sdw_members SET lastvisit='$GLOBALS[timestamp]',lastip='$GLOBALS[ipaddr]',logintimes=logintimes+1,credits=credits+5 WHERE uid='$data[uid]'");

				$_SESSION['member'] = $this->usercp = $data;

				xsetcookie('uid',$data['uid']);

				xsetcookie('username',$data['username']);

				xsetcookie('password',$data['password']);

				$this->access = 1;

			}

		}else {

			unset($_SESSION['member']);

			xsetcookie('uid','');

			xsetcookie('username','');

			xsetcookie('password','');

			$this->access = 0;

		}

	}

	function Login($username,$password){

		global $db,$config,$lang;

		$data = $db->GetOne("SELECT m.*,g.radminid,g.type,g.grouptitle FROM sdw_members m LEFT JOIN sdw_usergroups g ON g.groupid=m.groupid WHERE m.username='$username'");

		if (!$data){

			message('login_error','error');

		}else {

			if (!(sha1(md5($password))==$data['password'])){

				//message('login_error','error');

				dexit('<script>alert("ÃÜÂë´íÎó¡£");history.go(-1);</script>');

			}else {

				$db->query("UPDATE sdw_members SET lastvisit='$GLOBALS[timestamp]',lastip='$GLOBALS[ipaddr]',logintimes=logintimes+1,credits=credits+5 WHERE uid='$data[uid]'");

				$_SESSION['member'] = $data;

				xsetcookie('uid',$data['uid']);

				xsetcookie('username',$data['username']);

				xsetcookie('password',$data['password']);

				return TRUE;

			}

		}

	}

	function Logout($forward=''){

		!$forward && $forward = $_SERVER['HTTP_REFERER'];

		unset($_SESSION['member']);

		xsetcookie('uid','');

		xsetcookie('username','');

		xsetcookie('password','');

		header('location:'.$forward);

	}

}

?>