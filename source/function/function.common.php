<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-04-20

 * $Id: function.common.php

*/ 

if (!defined('IN_XSCMS')){

	die('Access Denied!');

}

function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0) {

	$ckey_length = 4;

	$key = md5($key ? $key : $GLOBALS['config']['authkey']);

	$keya = md5(substr($key, 0, 16));

	$keyb = md5(substr($key, 16, 16));

	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';



	$cryptkey = $keya.md5($keya.$keyc);

	$key_length = strlen($cryptkey);



	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;

	$string_length = strlen($string);



	$result = '';

	$box = range(0, 255);



	$rndkey = array();

	for($i = 0; $i <= 255; $i++) {

		$rndkey[$i] = ord($cryptkey[$i % $key_length]);

	}



	for($j = $i = 0; $i < 256; $i++) {

		$j = ($j + $box[$i] + $rndkey[$i]) % 256;

		$tmp = $box[$i];

		$box[$i] = $box[$j];

		$box[$j] = $tmp;

	}



	for($a = $j = $i = 0; $i < $string_length; $i++) {

		$a = ($a + 1) % 256;

		$j = ($j + $box[$a]) % 256;

		$tmp = $box[$a];

		$box[$a] = $box[$j];

		$box[$j] = $tmp;

		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));

	}



	if($operation == 'DECODE') {

		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {

			return substr($result, 26);

		} else {

			return '';

		}

	} else {

		return $keyc.str_replace('=', '', base64_encode($result));

	}



}

function formhash() {

	return substr(md5(substr(time(), 0, -4).$GLOBALS['config']['authkey']), 16);

}

function daddslashes($string, $force = 0) {

	!defined('MAGIC_QUOTES_GPC') && define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());

	if(!MAGIC_QUOTES_GPC || $force) {

		if(is_array($string)) {

			foreach($string as $key => $val) {

				$string[$key] = daddslashes($val, $force);

			}

		} else {

			$string = addslashes($string);

		}

	}

	return $string;

}

/*

 * 字符串截取

 */

function cutstr($string, $length, $dot ='') {

	global $charset;

	if(strlen($string) <= $length) {

		return $string;

	}

	$string = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;'), array('&', '"', '<', '>'), $string);

	$strcut = '';

	if(strtolower($charset) == 'utf-8') {

		$n = $tn = $noc = 0;

		while($n < strlen($string)) {

			$t = ord($string[$n]);

			if($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {

				$tn = 1; $n++; $noc++;

			} elseif(194 <= $t && $t <= 223) {

				$tn = 2; $n += 2; $noc += 2;

			} elseif(224 <= $t && $t < 239) {

				$tn = 3; $n += 3; $noc += 2;

			} elseif(240 <= $t && $t <= 247) {

				$tn = 4; $n += 4; $noc += 2;

			} elseif(248 <= $t && $t <= 251) {

				$tn = 5; $n += 5; $noc += 2;

			} elseif($t == 252 || $t == 253) {

				$tn = 6; $n += 6; $noc += 2;

			} else {

				$n++;

			}

			if($noc >= $length) {

				break;

			}

		}

		if($noc > $length) {

			$n -= $tn;

		}

		$strcut = substr($string, 0, $n);

	} else {

		for($i = 0; $i < $length; $i++) {

			$strcut .= ord($string[$i]) > 127 ? $string[$i].$string[++$i] : $string[$i];

		}

	}

	$strcut = str_replace(array('&', '"', '<', '>'), array('&amp;', '&quot;', '&lt;', '&gt;'), $strcut);

	return $strcut.$dot;

}

function dhtmlspecialchars($string) {

	if(is_array($string)) {

		foreach($string as $key => $val) {

			$string[$key] = dhtmlspecialchars($val);

		}

	} else {

		$string = preg_replace('/&amp;((#(\d{3,5}|x[a-fA-F0-9]{4}));)/', '&\\1',

		//$string = preg_replace('/&amp;((#(\d{3,5}|x[a-fA-F0-9]{4})|[a-zA-Z][a-z0-9]{2,5});)/', '&\\1',

		str_replace(array('&', '"', '<', '>'), array('&amp;', '&quot;', '&lt;', '&gt;'), $string));

	}

	return $string;

}

function xsetcookie($var, $value, $life = 0, $prefix = 1) {

	global $config, $timestamp, $_SERVER;

	setcookie(($prefix ? $config['cookie']['cookiepre'] : '').$var, $value,

		$life ? $timestamp + $life : 0, $config['cookie']['cookiepath'],

		$config['cookie']['cookiedomain'], $_SERVER['SERVER_PORT'] == 443 ? 1 : 0);

}

function random($length, $numeric = 0) {

	PHP_VERSION < '4.2.0' ? mt_srand((double)microtime() * 1000000) : mt_srand();

	$seed = base_convert(md5(print_r($_SERVER, 1).microtime()), 16, $numeric ? 10 : 35);

	$seed = $numeric ? (str_replace('0', '', $seed).'012340567890') : ($seed.'zZ'.strtoupper($seed));

	$hash = '';

	$max = strlen($seed) - 1;

	for($i = 0; $i < $length; $i++) {

		$hash .= $seed[mt_rand(0, $max)];

	}

	return $hash;

}

function MyGet($key){

	$_GET[$key] = isset($_GET[$key]) ? trim($_GET[$key]) : '';

	return $_GET[$key]; 

}

function MyPost($key){

	$_POST[$key] = isset($_POST[$key]) ? trim($_POST[$key]) : '';

	return $_POST[$key]; 

}

function dexit($message=''){

	echo $message;

	exit();

}

function site(){

	return $_SERVER['HTTP_HOST'];

}

function readfromfile($file){

	if($fb = @fopen($file,"r")){

		return @fread($fb,filesize($file));

	}else {

		return false;

	}

	@fclose($fb);

}

function writetofile($file,$data){

	 if($fp = @fopen($file, "w")){

	    return @fwrite($fp,$data);

	}else {

		return false;

	}

	@fclose($fp);

}

function makedir($folder){

    if(!file_exists($folder)){

    	return @mkdir($folder,0777);

    }else {

    	return true;

    }

}

function GetImgSize($file){

	$arr = getimagesize($file);

	return $arr[0].'x'.$arr[1];

}

function FCK($inputname,$value='',$width='100%',$height='400',$toolbarset='Default') {

   require_once ROOT_PATH.'/source/fckeditor/fckeditor.php';

   $fck = new FCKeditor($inputname);

   $fck->Width  = $width;

   $fck->Height = $height;

   $fck->Value  = $value;

   $fck->ToolbarSet = $toolbarset;

   $fck->BasePath = './source/fckeditor/';

   return $fck->CreateHtml();

}

function isemail($email) {

	return strlen($email) > 6 && preg_match("/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/", $email);

}

function utf2gbk($string){

   //return iconv('UTF-8','GB2312',$string);

   return mb_convert_encoding($string,'GB2312','UTF-8');

}

function gbk2utf($string){

   //return iconv('GB2312','UTF-8',$string);

   return mb_convert_encoding($string,'UTF-8','GB2312');

}

/*

 * 去除HTML标签

 */

function stripHtml($str){

	$search = array ("'<script[^>]*?>.*?</script>'si",  // 去掉 javascript

                 "'<[\/\!]*?[^<>]*?>'si",           // 去掉 HTML 标记

                 "'([\r\n])[\s]+'",                 // 去掉空白字符

                 "'&(quot|#34);'i",                 // 替换 HTML 实体

                 "'&(amp|#38);'i",

                 "'&(lt|#60);'i",

                 "'&(gt|#62);'i",

                 "'&(nbsp|#160);'i",

                 "'&(iexcl|#161);'i",

                 "'&(cent|#162);'i",

                 "'&(pound|#163);'i",

                 "'&(copy|#169);'i",

                 "'&#(\d+);'e");                    // 作为 PHP 代码运行



	$replace = array ("",

	                  "",

	                  "\\1",

	                  "\"",

	                  "&",

	                  "<",

	                  ">",

	                  " ",

	                  chr(161),

	                  chr(162),

	                  chr(163),

	                  chr(169),

	                  "chr(\\1)");	

	$str = preg_replace ($search, $replace, $str);

	$str = str_replace(array('&amp;ldquo;','&ldquo;','&amp;rdquo;','&rdquo;'),array('“','“','”','”'),$str);

	$str = str_replace('　','',$str);

	return $str;

}

function printr($array){

	echo '<pre>';

	print_r($array);

	echo '</pre>';

}

/*

 * google风格分页

 */

function pagination($page,$total,$extra='',$scr=''){ 

	$extra = !empty($extra) ? $extra.'&' : '';

	$scr = isset($scr) ? $scr : $GLOBALS['BASESCRIPT'];

	$prevs = $page-5;

	if($prevs<=0)$prevs = 1;

	$prev  = $page-1;

	if($prev<=0) $prev = 1;

	$nexts = $page+5;

	if($nexts>$total)$nexts=$total; 

	$next  = $page+1;

	if($next>$total)$next=$total; 

	$pagenavi ="<a href=\"{$scr}?{$extra}page=1\">首页</a>"; 

	$pagenavi.="<a href=\"{$scr}?{$extra}page=$prev\" class=\"prev\">上一页</a>"; 

	for($i=$prevs;$i<=$page-1;$i++){ 

	   $pagenavi.="<a href=\"{$scr}?{$extra}page=$i\">$i</a>"; 

	} 

	$pagenavi.="<span class=\"cur\">$page</span>"; 

	for($i=$page+1;$i<=$nexts;$i++){ 

	   $pagenavi.="<a href=\"{$scr}?{$extra}page=$i\">$i</a>"; 

	} 

	$pagenavi.="<a href=\"{$scr}?{$extra}page=$next\" class=\"next\">下一页</a>"; 

	$pagenavi.="<a href=\"{$scr}?{$extra}page=$total\">尾页</a>"; 

	return $pagenavi ; 

}

function sendmail($mailto,$subject,$message,$mailfrom,$mailcc='',$charset="gb2312"){

	// 当发送 HTML 电子邮件时，请始终设置 content-type

	$headers = "MIME-Version: 1.0" . "\r\n";

	$headers.= "Content-type:text/html;charset=$charset" . "\r\n";

	

	// 更多报头

	$headers .= 'From: '.$mailfrom. "\r\n";

	$headers .= 'Cc:'.$mailcc."\r\n";

	@mail($mailto,$subject,$message,$headers);

}



function template($file, $tpldir = '') {

	global $inajax;

	if (!IN_ADMINCP)$tpldir = 'admincp';

	$file .= $inajax && ($file == 'header' || $file == 'footer') ? '_ajax' : '';

	$tpldir = $tpldir ? $tpldir : TPLDIR;

	$tplfile = ROOT_PATH.'/templates/'.$tpldir.'/'.$file.'.htm';

	$filebak = $file;

	$file == 'header' && CURSCRIPT && $file = 'header_'.CURSCRIPT;

	$objfile = ROOT_PATH.'/data/templates/'.$file.'.tpl.php';

	if(!file_exists($tplfile)) {

		$tplfile = ROOT_PATH.'/templates/default/'.$filebak.'.htm';

	}

	if (!file_exists($objfile) || filemtime($tplfile)>filemtime($objfile)){

		require_once ROOT_PATH.'/source/function/function.template.php';

		parse_template($tplfile,$tpldir);

	}

	return $objfile;

}

function implodeids($array) {

	if(!empty($array)) {

		return "'".implode("','", is_array($array) ? $array : array($array))."'";

	} else {

		return '';

	}

}



function checkrandcode($randcode){

	global $_SESSION;

	if ($randcode == $_SESSION['randcode']){

		return TRUE;

	}else {

		return FALSE;

	}

}

function get_navs(){

	$navs = array();

	include ROOT_PATH.'/data/cache/nav.php';

	foreach ($GLOBALS['CACHE']['nav'] as $nav){

		$navs[$nav['position']][$nav['fid']][] = $nav;

	}

	return $navs;

}

function message($message='',$type='',$url='',$extra='',$auto_redirect=FALSE){

    global $lang,$_SERVER,$config,$navs;

    $vars = explode(':',$message);

    if (count($vars) == 2){

    	$message = $lang[$vars[0]].$lang[$vars[1]];

    }else {

    	$message = $lang[$message];

    }

    $extra = $lang[$extra];

    switch ($type){

    	case 'succeed': $classname = 'succeed';break;

		case 'error': $classname = 'error';break;

		case 'warning': $classname = 'warning';break;

		case 'loading': $classname = 'loading';break;

		default: $classname = 'succeed';break;

    }

    !$url && $url = $_SERVER['HTTP_REFERER'];

    $message = '<h3 class="'.$classname.'">'.$message.'</h3>';

    $showmessage = '<div class="divmessage">';

    if ($type == 'form'){

    	$showmessage.= $message;

		$showmessage.= '<form name="formconfirm" method="post" action="'.$url.'">';

		$showmessage.= '<input type="hidden" name="formhash" value="'.FORMHASH.'">';

		$showmessage.= '<p class="autoredirect">'.$extra.'</p>';

		$showmessage.= '<p class="margintop"><input class="button" type="submit" value="'.$lang['ok'].'" name="confirmed">　<input class="button" type="button" onclick="history.go(-1);" value="'.$lang['cancel'].'"></p></form>';

    }elseif($type == 'loadingform') {

		$showmessage = "<form method=\"post\" action=\"$url\" id=\"loadingform\"><input type=\"hidden\" name=\"formhash\" value=\"".FORMHASH."\"><br />$message<img src=\"static/images/ajax_loader.gif\" /><br />".

			'<p class="autoredirect">'.$extra.'<a href="###" onclick="document.getElementById(\'loadingform\').submit();return false;">'.$lang['auto_redirect'].'</a></p></form><br /><script type="text/JavaScript">setTimeout("document.getElementById(\'loadingform\').submit();", 2000);</script>';

	}else {

		$message.= $type=='loding' ? '<img src="static/images/ajax_loader.gif" border="0" /><br>' : '';

		$showmessage.= $message;

		$showmessage.= '<p class="autoredirect">'.($extra ? $extra.'<br /><br />' : '');

		if (is_array($url)){

			foreach ($url as $link){

				$showmessage.= '<a href="'.$link[1].'"'.($link[2] ? ' '.$link[2] : '').'>'.$link[0].'</a> ';

			}

		}else {

			$showmessage.= '<a href="'.$url.'">'.$lang['auto_redirect'].'</a>';

		}

		$showmessage.= '</p>';

		if ($auto_redirect){

	    	if (is_array($url)){

	    		$showmessage.= '<script type="text/javascript">setTimeout("window.location.href=\''.$url[0][1].'\'", 2000);</script>';

	    	}else {

	    		$showmessage.= '<script type="text/javascript">setTimeout("window.location.href=\''.$url.'\'", 2000);</script>';

	    	}

	    }

	}

	$showmessage.= '</div>';

	include template('message');

    exit();

}

?>