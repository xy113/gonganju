<?php

////////////////////////////�ļ�˵��/////////////////////////////////

//����������������֤��ģ��

//////////////////////////////////////////////////////////////////////

define('ROOT_PATH', str_replace("/source/include/image.php", '', str_replace('\\', '/', __FILE__)));

header("Content-type: image/png");

header('Expires: Fri, 14 Mar 1980 20:53:00 GMT');

header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');

header('Cache-Control: no-cache, must-revalidate');

header('Pragma: no-cache');

/*

* ��ʼ��

*/

$w = isset($_GET['w']) ? intval($_GET['w']) : 110; //ͼƬ���

$h = isset($_GET['h']) ? intval($_GET['h']) : 24; //ͼƬ�߶�

$str = isset($_GET['txt']) ? trim($_GET['txt']) : '';

$str = iconv('GB2312','UTF-8',$str);

$fontsize = 12; //�����С

$im = ImageCreate($w, $h); //����ͼƬ

$white = imagecolorallocate ($im, 255, 255, 255);

$black = imagecolorallocate ($im, 0, 0, 0);

$red   = imagecolorallocate ($im, 0, 0, 0);

$red01 = imagecolorallocate ($im, 0, 1, 2);

imagettftext($im,$fontsize,0,0,18,$red01,ROOT_PATH."/static/font/FZDHTJW.TTF",$str);

/*��ͼ����*/

Imagepng($im);

ImageDestroy($im);

/*��ͼ����*/

?>