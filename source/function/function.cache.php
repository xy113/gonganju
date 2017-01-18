<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-06-01

 * $Id: function.cache.php

*/ 

if (!defined('IN_XSCMS')){die('Access Denied!');}

function updatecache($cachename = ''){

	global $db,$CACHE;

	if (!$cachename || $cachename == 'settings'){

		$cachedata = "";

		$query = $db->query("SELECT skey,svalue FROM sdw_settings");

		while(list($key,$value) = $db->fetch_row($query)){

			if ($key == 'randcodestatus') $value = unserialize($value);

			if (is_array($value)){

				$cachedata.= "\$config['$key'] = ".arrayeval($value).";\n";

			}else {

				$cachedata.= "\$config['$key'] = '$value';\n";

			}

		}

		writetocache('settings',$cachedata);

	}

	if (!$cachename || $cachename == 'usergroups'){

		$query = $db->query("SELECT * FROM sdw_usergroups ORDER BY groupid ASC");

		while ($data = $db->fetch_array($query)){

			$groups[] = "'$data[groupid]'=>".arrayeval($data);

		}

		$cachedata = "\$CACHE['usergroups'] = array(\n".implode(",\n",$groups)."\n);";

		writetocache('usergroups',$cachedata);

	}

	if (!$cachename || $cachename == 'admingroups'){

		$query = $db->query("SELECT a.*,b.grouptitle,b.type FROM sdw_admingroups a LEFT JOIN sdw_usergroups b ON b.groupid=a.admingid ORDER BY admingid ASC");

		while ($data = $db->fetch_array($query)){

			$admingroups[] = "'$data[admingid]'=>".arrayeval($data);

		}

		$cachedata = "\$CACHE['admingroups'] = array(\n".implode(",\n",$admingroups)."\n);";

		writetocache('admingroups',$cachedata);

	}

	if (!$cachename || $cachename == 'articlecat'){

		$categories = array();

		$query = $db->query("SELECT * FROM sdw_article_cat ORDER BY displayorder,cid");

		while ($data = $db->fetch_array($query)){

			$categories[] = "'$data[cid]'=>".arrayeval($data);

		}

		writetocache('articlecat',"\$CACHE['articlecat'] = array(\n".implode(",\n",$categories)."\n);");

	}

	if (!$cachename || $cachename == 'source'){

		$sources = array();

		$query = $db->query("SELECT * FROM sdw_source ORDER BY displayorder,siteid");

		while ($data = $db->fetch_array($query)){

			$sources[] = "'$data[siteid]'=>".arrayeval($data);

		}

		writetocache('source',"\$CACHE['source'] = array(\n".implode(",\n",$sources)."\n);");

	}

	if (!$cachename || $cachename == 'friendlink'){

		$sites = array();

		$query = $db->query("SELECT * FROM sdw_friendlinks ORDER BY displayorder,siteid");

		while ($data = $db->fetch_array($query)){

			$sites[] = "'$data[siteid]'=>".arrayeval($data);

		}

		writetocache('friendlink',"\$CACHE['friendlink'] = array(\n".implode(",\n",$sites)."\n);");

	}

	if (!$cachename || $cachename == 'nav'){

		$navs = array();

		$query = $db->query("SELECT * FROM sdw_nav ORDER BY displayorder,id");

		while ($data = $db->fetch_array($query)){

			$navs[] = "'$data[id]'=>".arrayeval($data);

		}

		writetocache('nav',"\$CACHE['nav'] = array(\n".implode(",\n",$navs)."\n);");

	}

}

function writetocache($script,$cachedata = '') {

	$dir = ROOT_PATH.'/data/cache/';

	if(!is_dir($dir)) {

		@mkdir($dir, 0777);

	}

	if($fp = @fopen("$dir$script.php", 'wb')) {

		fwrite($fp, "<?php\n//Xcms! cache file, DO NOT modify me!".

			"\n//Created: ".date("M j, Y, G:i").

			"\n//Identify: ".md5($script.'.php'.$cachedata.$GLOBALS['config']['authkey'])."\n\n$cachedata\n?>");

		fclose($fp);

	} else {

		exit('Can not write to cache files, please check directory ./data/ and ./data/cache/ .');

	}

}

function writetojscache($script,$cachedata = '') {

	$dir = ROOT_PATH.'/data/cache/';

	if(!is_dir($dir)) {

		@mkdir($dir, 0777);

	}

	if($fp = @fopen("$dir$script.js", 'wb')) {

		fwrite($fp, "//Xcms! cache file, DO NOT modify me!".

			"\n//Created: ".date("M j, Y, G:i").

			"\n//Identify: ".md5($script.'.php'.$cachedata.$GLOBALS['config']['authkey'])."\n\n$cachedata");

		fclose($fp);

	} else {

		exit('Can not write to cache files, please check directory ./data/ and ./data/cache/ .');

	}

}

function arrayeval($array, $level = 0) {

	if(!is_array($array)) {

		return "'".$array."'";

	}

	if(is_array($array) && function_exists('var_export')) {

		return var_export($array, true);

	}



	$space = '';

	for($i = 0; $i <= $level; $i++) {

		$space .= "\t";

	}

	$evaluate = "Array\n$space(\n";

	$comma = $space;

	if(is_array($array)) {

		foreach($array as $key => $val) {

			$key = is_string($key) ? '\''.addcslashes($key, '\'\\').'\'' : $key;

			$val = !is_array($val) && (!preg_match("/^\-?[1-9]\d*$/", $val) || strlen($val) > 12) ? '\''.addcslashes($val, '\'\\').'\'' : $val;

			if(is_array($val)) {

				$evaluate .= "$comma$key => ".arrayeval($val, $level + 1);

			} else {

				$evaluate .= "$comma$key => $val";

			}

			$comma = ",\n$space";

		}

	}

	$evaluate .= "\n$space)";

	return $evaluate;

}

?>