<?php

if ($action == 'savepass'){

	$data = $db->GetOne("SELECT password,random FROM sdw_members WHERE uid='$_XCOOKIE[uid]'");

	if (!(md5(md5($oldpassword).md5($data['random']))==$data['password'])){

		showalert('ԭ���������������������',$_SERVER['HTTP_REFERER']);

	}else {

		$random = random(4);

		$password = md5(md5($newpassword).md5($random));

		$db->query("UPDATE sdw_members SET password='$password',random='$random' WHERE uid='$_XCOOKIE[uid]'");

		showalert('�����޸ĳɹ�',$_SERVER['HTTP_REFERER']);

	}

}

include template('mdpass');

?>