<?php
/**
 * Created by JetBrains PhpStorm.
 * User: taoqili
 * Date: 12-2-8
 * Time: 下午1:20
 * To change this template use File | Settings | File Templates.
 */
//error_reporting(E_ERROR|E_WARNING);
require_once 'common.php';
//上传配置
$config = array(
    "uploadPath"=>ROOT_PATH."/data/attachment" , //保存路径
    "fileType"=>array(".rar", ".doc",".docx",".xls",".xlsx",".ppt",".pptx", ".zip" , ".pdf" , ".txt" , ".swf", ".wmv",'.pdf','.txt','.7z'), //文件允许格式
    "fileSize"=>100 //文件大小限制，单位MB
);

//文件上传状态,当成功时返回SUCCESS，其余值将直接返回对应字符窜
$state = "SUCCESS";
$fileName = "";
//保存路径
$path = $config[ 'uploadPath' ].'/'.date('Y').'/'.date('m');
@mkdir($path,0777,true);

$clientFile = &$_FILES["upfile"];
if(!isset($clientFile)){
    //请修改php.ini中的upload_max_filesize和post_max_size
    echo json_encode(array(
    		'state'=>1,
    		'url'=>'null',
    		'fileType'=>'null'
    ));
    exit;
}
//格式验证
// $current_type = strtolower(strrchr($clientFile["name"],'.'));
// if (!in_array($current_type,$config['fileType'])) {
//     $state = 2;
// }
//大小验证
$file_size = 1024 * 1024 * $config['fileSize'];
if ( $clientFile["size"] > $file_size ) {
    $state = 3;
}
//保存文件
if ($state == "SUCCESS") {
    $tmp_file = $clientFile["name"];
    $fileName = $path.'/'.rand(1000,9999).time().strrchr($tmp_file,'.');
    if(move_uploaded_file( $clientFile["tmp_name"],$fileName )){
    	$fileName = str_replace(ROOT_PATH, '', $fileName);
    }else {
    	$state = 4;
    }
}
//向浏览器返回数据json数据
$json = array(
	    'state'=>$state,
	    'url'=>$fileName,
		'fileType'=>$current_type,
		'original'=>$clientFile['name']
);
echo json_encode($json);
?>


