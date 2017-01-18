<?php
/**
 * Created by JetBrains PhpStorm.
 * User: taoqili
 * Date: 12-2-8
 * Time: ����1:20
 * To change this template use File | Settings | File Templates.
 */
//error_reporting(E_ERROR|E_WARNING);
require_once 'common.php';
//�ϴ�����
$config = array(
    "uploadPath"=>ROOT_PATH."/data/attachment" , //����·��
    "fileType"=>array(".rar", ".doc",".docx",".xls",".xlsx",".ppt",".pptx", ".zip" , ".pdf" , ".txt" , ".swf", ".wmv",'.pdf','.txt','.7z'), //�ļ������ʽ
    "fileSize"=>100 //�ļ���С���ƣ���λMB
);

//�ļ��ϴ�״̬,���ɹ�ʱ����SUCCESS������ֵ��ֱ�ӷ��ض�Ӧ�ַ���
$state = "SUCCESS";
$fileName = "";
//����·��
$path = $config[ 'uploadPath' ].'/'.date('Y').'/'.date('m');
@mkdir($path,0777,true);

$clientFile = &$_FILES["upfile"];
if(!isset($clientFile)){
    //���޸�php.ini�е�upload_max_filesize��post_max_size
    echo json_encode(array(
    		'state'=>1,
    		'url'=>'null',
    		'fileType'=>'null'
    ));
    exit;
}
//��ʽ��֤
// $current_type = strtolower(strrchr($clientFile["name"],'.'));
// if (!in_array($current_type,$config['fileType'])) {
//     $state = 2;
// }
//��С��֤
$file_size = 1024 * 1024 * $config['fileSize'];
if ( $clientFile["size"] > $file_size ) {
    $state = 3;
}
//�����ļ�
if ($state == "SUCCESS") {
    $tmp_file = $clientFile["name"];
    $fileName = $path.'/'.rand(1000,9999).time().strrchr($tmp_file,'.');
    if(move_uploaded_file( $clientFile["tmp_name"],$fileName )){
    	$fileName = str_replace(ROOT_PATH, '', $fileName);
    }else {
    	$state = 4;
    }
}
//���������������json����
$json = array(
	    'state'=>$state,
	    'url'=>$fileName,
		'fileType'=>$current_type,
		'original'=>$clientFile['name']
);
echo json_encode($json);
?>


