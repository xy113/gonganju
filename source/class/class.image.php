<?php

class Image{

	public $error = array();

	function __construct(){

		$this->Image();

	}

	function Image(){

		

	}

	function upload($input){

		$file = &$_FILES[$input];

		$filepath = $GLOBALS['config']['attachdir'].'/'.date('Y').'/'.date('m');

		$this->mk_dir($filepath);

		if (is_array($file['name'])){

			$files = array();

			foreach ($file['name'] as $key=>$value){

				$filesize = $file['size'][$key];

				$filename = $file['name'][$key];

				$filetype = $file['type'][$key];

				$fileext = $this->getfileextension($filename);

				if ($filesize>2097152){

					$this->error[] = 'File:'.$filename.' Too Larger';

					continue;

				}

				if (!in_array(strtolower($fileext),array('jpg','png','gif','jpeg'))){

					$this->error[] = 'File:'.$filename.' Type Error';

				}

				

				if (!is_uploaded_file($file['tmp_name'][$key])){

					$this->error[] = $filename.' is not uploaded via HTTP POST';

					return FALSE;

				}

				$filename = $this->setfilename($fileext);

				if (!@move_uploaded_file($file['tmp_name'][$key],ROOT_PATH.'/'.$filepath.'/'.$filename)){

					continue;

				}else {

					$files[] = array('name'=>$filename,'size'=>$filesize,'type'=>$filetype,'path'=>$filepath.'/'.$filename);

				}

			}

			if ($files){

				return $files;

			}else {

				return FALSE;

			}

		}else {

			$filesize = $file['size'];

			$filename = $file['name'];

			$filetype = $file['type'];

			$fileext = $this->getfileextension($filename);

			if ($filesize>2097152){

				$this->error[] = 'File:'.$filename.' Too Larger';

				return FALSE;

			}

			if (!in_array(strtolower($fileext),array('jpg','png','gif','jpeg'))){

				$this->error[] = 'File:'.$filename.' Type Error';

				return FALSE;

			}

			

			if (!is_uploaded_file($file['tmp_name'])){

				$this->error[] = $filename.' is not uploaded via HTTP POST';

				return FALSE;

			}

			$filename = $this->setfilename($fileext);

			if (!@move_uploaded_file($file['tmp_name'],ROOT_PATH.'/'.$filepath.'/'.$filename)){

				return FALSE;

			}else {

				return array('name'=>$filename,'size'=>$filesize,'type'=>$filetype,'path'=>$filepath.'/'.$filename);

			}

		}

	}

	function setfilename($ext){

	    return md5(date('Ymdhis').rand(100,1000)).'.'.$ext;

	}

	/**����ļ���չ��**/

	function getfileextension($file){

		return strtolower( str_replace( ".", "", substr( $file, strrpos( $file, '.' ) ) ) );

	}

	

	function mk_dir($path){

		$dirs = array();

		$dirlist = '';

		$rootpath = ROOT_PATH;

		$path = str_replace('\\','/',$path);

		$dirs = explode('/',$path);

		foreach ($dirs as $val){

			if (!empty($val)){

				$dirlist.= '/'.$val;

				$dirpath = $rootpath.$dirlist;

				if (!file_exists($dirpath)){

					@makedir($dirpath);

					@chmod($dirpath,0777);

				}

			}

		}

	}

	function ImageResize($filepath,$sm_width,$sm_height,$delsource=false){

		//��������ͼ����

		$filepath = str_replace('\\','/',$filepath);

		$filename = end(explode('/',$filepath));

		$source_Bigimg = $filepath;

		$imageInfo = getimagesize($source_Bigimg);

		$width  = $imageInfo[0];

		$height = $imageInfo[1];

		$type   = $imageInfo[2];

		if($width >= $height){

			//�����ͼ�Ŀ�ȸߴ��򽫴�ͼ����ȱ���С

			if ($width<$sm_width){

				return $filename;

			}

			$des_width = $sm_width;

			$des_height = ($sm_width / $width) * $height;

		}elseif($height > $width){

			//�����ͼ�ĸ߱ȿ���򽫴�ͼ���ߵȱ���С

			if ($height<$sm_height){

				return $filename;

			}

			$des_height = $sm_height;

			$des_width = ($sm_height / $height) * $width;

		}

		switch($type){

			//�����ϴ��õ�ͼ���ļ������½�һ��������������ͼ��Դ�ļ���

			case 1:

				$srcf = imagecreatefromgif($source_Bigimg);

				break;

			case 2:

				$srcf = imagecreatefromjpeg($source_Bigimg);

				break;

			case 3:

				$srcf = imagecreatefrompng($source_Bigimg);

				break;

			default:

				break;

		}



		//��������ͼ�ļ�

		if(function_exists("imagecreatetruecolor")){

			$desf = imagecreatetruecolor($des_width,$des_height);

			imagecopyresampled($desf,$srcf,0,0,0,0,$des_width,$des_height,$width,$height);

		}else{

			$desf = imagecreate($des_width,$des_height);

			imagecopyresized($desf,$srcf,0,0,0,0,$des_width,$des_height,$width,$height);

		}

		$thumb = 'thumb'.$filename;

		$sm_name = str_replace($filename,'',$filepath).'/'.$thumb;

		switch($type){

			case 1:

				imagegif($desf,$sm_name);

				break;

			case 2:

				imagejpeg($desf,$sm_name);

				break;

			case 3:

				imagepng($desf,$sm_name);

				break;

			default:

				//echo('�޷�����' . $source_FileType . '������ͼ��');

				//die();

				break;

		}

		imagedestroy($desf);

		imagedestroy($srcf);

		if ($delsource){

			@unlink($filepath);

		}

		return $thumb;

	}



	//ͼƬˮӡ

	function imageWaterMark($groundImage,$waterPos=9,$waterImage='',$waterText='',$fontSize=14,$textColor='#000000',$fontfile='',$xOffset=0,$yOffset=0,$waterpct='100%',$isWaterImage=1){

	     //��ȡˮӡ�ļ�

	     if(!empty($waterImage) && file_exists($waterImage)) {

	         //$isWaterImage = TRUE;

	         $water_info = getimagesize($waterImage);

	         $water_w = $water_info[0];//ȡ��ˮӡͼƬ�Ŀ�

	         $water_h = $water_info[1];//ȡ��ˮӡͼƬ�ĸ�

	

	         switch($water_info[2])   {    //ȡ��ˮӡͼƬ�ĸ�ʽ  

	             case 1:$water_im = imagecreatefromgif($waterImage);break;

	             case 2:$water_im = imagecreatefromjpeg($waterImage);break;

	             case 3:$water_im = imagecreatefrompng($waterImage);break;

	             default:return 1;

	         }

	     }else {

	     	$isWaterImage = FALSE;

	     }

	

	     //��ȡ����ͼƬ

	     if(!empty($groundImage) && file_exists($groundImage)) {

	         $ground_info = getimagesize($groundImage);

	         $ground_w = $ground_info[0];//ȡ�ñ���ͼƬ�Ŀ�

	         $ground_h = $ground_info[1];//ȡ�ñ���ͼƬ�ĸ�

	

	         switch($ground_info[2]) {    

	         	//ȡ�ñ���ͼƬ�ĸ�ʽ  

	            case 1:$ground_im = imagecreatefromgif($groundImage);break;

	            case 2:$ground_im = imagecreatefromjpeg($groundImage);break;

	            case 3:$ground_im = imagecreatefrompng($groundImage);break;

	            default:return 1;

	         }

	     } else {

	         return 2;

	     }

	

	     //ˮӡλ��

	     if($isWaterImage) { //ͼƬˮӡ  

	         $w = $water_w;

	         $h = $water_h;

	         $label = "ͼƬ��";

	     } else {  

	         //����ˮӡ

	         if(!file_exists($fontfile))return 4;

	         $temp = imagettfbbox($fontSize,0,$fontfile,$waterText);//ȡ��ʹ�� TrueType ������ı��ķ�Χ

	         $w = $temp[2] - $temp[6];

	         $h = $temp[3] - $temp[7];

	         unset($temp);

	     }

	     if( ($ground_w < $w) || ($ground_h < $h) ) {

	         return 3;

	     }

	     switch($waterPos) {

	         case 0://���

	             $posX = rand(0,($ground_w - $w));

	             $posY = rand(0,($ground_h - $h));

	             break;

	         case 1://1Ϊ���˾���

	             $posX = 0;

	             $posY = 0;

	             break;

	         case 2://2Ϊ���˾���

	             $posX = ($ground_w - $w) / 2;

	             $posY = 0;

	             break;

	         case 3://3Ϊ���˾���

	             $posX = $ground_w - $w;

	             $posY = 0;

	             break;

	         case 4://4Ϊ�в�����

	             $posX = 0;

	             $posY = ($ground_h - $h) / 2;

	             break;

	         case 5://5Ϊ�в�����

	             $posX = ($ground_w - $w) / 2;

	             $posY = ($ground_h - $h) / 2;

	             break;

	         case 6://6Ϊ�в�����

	             $posX = $ground_w - $w;

	             $posY = ($ground_h - $h) / 2;

	             break;

	         case 7://7Ϊ�׶˾���

	             $posX = 0;

	             $posY = $ground_h - $h;

	             break;

	         case 8://8Ϊ�׶˾���

	             $posX = ($ground_w - $w) / 2;

	             $posY = $ground_h - $h;

	             break;

	         case 9://9Ϊ�׶˾���

	             $posX = $ground_w - $w;

	             $posY = $ground_h - $h;

	             break;

	         default://���

	             $posX = rand(0,($ground_w - $w));

	             $posY = rand(0,($ground_h - $h));

	             break;     

	     }

	

	     //�趨ͼ��Ļ�ɫģʽ

	     imagealphablending($ground_im, true);

	

	     if($isWaterImage) { //ͼƬˮӡ

	         //imagecopy($ground_im, $water_im, $posX + $xOffset, $posY + $yOffset, 0, 0, $water_w,$water_h);//����ˮӡ��Ŀ���ļ�    

	         imagecopymerge($ground_im, $water_im, $posX + $xOffset, $posY + $yOffset, 0, 0, $water_w,$water_h,$waterpct);     

	     } else {//����ˮӡ

	         if( !empty($textColor) && (strlen($textColor)==7) ) {

	             $R = hexdec(substr($textColor,1,2));

	             $G = hexdec(substr($textColor,3,2));

	             $B = hexdec(substr($textColor,5));

	         } else {

	             return 5;

	         }

	         //imagettftext ( $ground_im, $fontSize, 0, ($posX + $xOffset)+1, ($posY + $h + $yOffset)+1, imagecolorallocate($ground_im, 0, 0, 0), $fontfile, $waterText);

			 imagettftext ( $ground_im, $fontSize, 0, $posX + $xOffset, $posY + $h + $yOffset, imagecolorallocate($ground_im, $R, $G, $B), $fontfile, $waterText);

	     }

	

	     //����ˮӡ���ͼƬ

	     @unlink($groundImage);

	     switch($ground_info[2]) {//ȡ�ñ���ͼƬ�ĸ�ʽ

	         case 1:imagegif($ground_im,$groundImage);break;

	         case 2:imagejpeg($ground_im,$groundImage);break;

	         case 3:imagepng($ground_im,$groundImage);break;

	         default: return 6;

	     }

	

	     //�ͷ��ڴ�

	     if(isset($water_info)) unset($water_info);

	     if(isset($water_im)) imagedestroy($water_im);

	     unset($ground_info);

	     imagedestroy($ground_im);

	     //

	     return 0;

	}

}

?>