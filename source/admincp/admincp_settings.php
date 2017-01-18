<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-05-20

 * $ID: admincp_settings.php

**/

if (!defined('IN_XSCMS'))die('Access Denied!');

cpheader();

!$operation && $operation = 'basic';

shownav(array('setting_system','setting_'.$operation));

if ($formsubmit == 'yes'){

	if (!($formhash == FORMHASH)){

		cpmessage('undefiend_action','error');

	}else {

		foreach ($settingnew as $key=>$value){

			if (is_array($value)) $value = serialize($value);

			$db->insert('sdw_settings',array('skey'=>$key,'svalue'=>$value),FALSE,TRUE);

		}

		updatecache('settings');

		$admin->cplog($lang[$title]);

		cpmessage('setting_modi_succeed');

	}

}else {

	include template('admin_settings');

}

?>