<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ueditor
 * Date: 12-1-16
 * Time: ����11:44
 * To change this template use File | Settings | File Templates.
 */
error_reporting(E_ERROR|E_WARNING);
$path = 'upload'; //���ʹ������ͼ��ַ������������ʱ���ܻ�������ص���ʱ
$action = htmlspecialchars($_POST["action"]);
if($action=="get"){
    $files = getfiles($path);
    if(!$files)return;
    $str = "";
    foreach ($files as $file) {
    	$str .= $file."ue_separate_ue";
    }
    echo $str;
}


function getfiles($path, &$files = array()){
	if (!is_dir($path)) return;

	$handle = opendir($path);
	while (false !== ($file = readdir($handle))) {
		if ($file != '.' && $file != '..') {
			$path2 = $path . '/' . $file;
			if (is_dir($path2)) {
				getfiles($path2, $files);
			} else {
				if (preg_match("/\.(gif|jpeg|jpg|png|bmp)$/i", $file)) {
					$files[] = $path2;
				}
			}

		}
	}
	return $files;
}

?>

