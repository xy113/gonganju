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

	/**获得文件扩展名**/

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

		//生成缩略图函数

		$filepath = str_replace('\\','/',$filepath);

		$filename = end(explode('/',$filepath));

		$source_Bigimg = $filepath;

		$imageInfo = getimagesize($source_Bigimg);

		$width  = $imageInfo[0];

		$height = $imageInfo[1];

		$type   = $imageInfo[2];

		if($width >= $height){

			//如果大图的宽比高大则将大图按宽等比缩小

			if ($width<$sm_width){

				return $filename;

			}

			$des_width = $sm_width;

			$des_height = ($sm_width / $width) * $height;

		}elseif($height > $width){

			//如果大图的高比宽大则将大图按高等比缩小

			if ($height<$sm_height){

				return $filename;

			}

			$des_height = $sm_height;

			$des_width = ($sm_height / $height) * $width;

		}

		switch($type){

			//根据上传好的图形文件类型新建一个用来生成缩略图的源文件。

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



		//生成缩略图文件

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

				//echo('无法生成' . $source_FileType . '的缩略图。');

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



	//图片水印

	function imageWaterMark($groundImage,$waterPos=9,$waterImage='',$waterText='',$fontSize=14,$textColor='#000000',$fontfile='',$xOffset=0,$yOffset=0,$waterpct='100%',$isWaterImage=1){

	     //读取水印文件

	     if(!empty($waterImage) && file_exists($waterImage)) {

	         //$isWaterImage = TRUE;

	         $water_info = getimagesize($waterImage);

	         $water_w = $water_info[0];//取得水印图片的宽

	         $water_h = $water_info[1];//取得水印图片的高

	

	         switch($water_info[2])   {    //取得水印图片的格式  

	             case 1:$water_im = imagecreatefromgif($waterImage);break;

	             case 2:$water_im = imagecreatefromjpeg($waterImage);break;

	             case 3:$water_im = imagecreatefrompng($waterImage);break;

	             default:return 1;

	         }

	     }else {

	     	$isWaterImage = FALSE;

	     }

	

	     //读取背景图片

	     if(!empty($groundImage) && file_exists($groundImage)) {

	         $ground_info = getimagesize($groundImage);

	         $ground_w = $ground_info[0];//取得背景图片的宽

	         $ground_h = $ground_info[1];//取得背景图片的高

	

	         switch($ground_info[2]) {    

	         	//取得背景图片的格式  

	            case 1:$ground_im = imagecreatefromgif($groundImage);break;

	            case 2:$ground_im = imagecreatefromjpeg($groundImage);break;

	            case 3:$ground_im = imagecreatefrompng($groundImage);break;

	            default:return 1;

	         }

	     } else {

	         return 2;

	     }

	

	     //水印位置

	     if($isWaterImage) { //图片水印  

	         $w = $water_w;

	         $h = $water_h;

	         $label = "图片的";

	     } else {  

	         //文字水印

	         if(!file_exists($fontfile))return 4;

	         $temp = imagettfbbox($fontSize,0,$fontfile,$waterText);//取得使用 TrueType 字体的文本的范围

	         $w = $temp[2] - $temp[6];

	         $h = $temp[3] - $temp[7];

	         unset($temp);

	     }

	     if( ($ground_w < $w) || ($ground_h < $h) ) {

	         return 3;

	     }

	     switch($waterPos) {

	         case 0://随机

	             $posX = rand(0,($ground_w - $w));

	             $posY = rand(0,($ground_h - $h));

	             break;

	         case 1://1为顶端居左

	             $posX = 0;

	             $posY = 0;

	             break;

	         case 2://2为顶端居中

	             $posX = ($ground_w - $w) / 2;

	             $posY = 0;

	             break;

	         case 3://3为顶端居右

	             $posX = $ground_w - $w;

	             $posY = 0;

	             break;

	         case 4://4为中部居左

	             $posX = 0;

	             $posY = ($ground_h - $h) / 2;

	             break;

	         case 5://5为中部居中

	             $posX = ($ground_w - $w) / 2;

	             $posY = ($ground_h - $h) / 2;

	             break;

	         case 6://6为中部居右

	             $posX = $ground_w - $w;

	             $posY = ($ground_h - $h) / 2;

	             break;

	         case 7://7为底端居左

	             $posX = 0;

	             $posY = $ground_h - $h;

	             break;

	         case 8://8为底端居中

	             $posX = ($ground_w - $w) / 2;

	             $posY = $ground_h - $h;

	             break;

	         case 9://9为底端居右

	             $posX = $ground_w - $w;

	             $posY = $ground_h - $h;

	             break;

	         default://随机

	             $posX = rand(0,($ground_w - $w));

	             $posY = rand(0,($ground_h - $h));

	             break;     

	     }

	

	     //设定图像的混色模式

	     imagealphablending($ground_im, true);

	

	     if($isWaterImage) { //图片水印

	         //imagecopy($ground_im, $water_im, $posX + $xOffset, $posY + $yOffset, 0, 0, $water_w,$water_h);//拷贝水印到目标文件    

	         imagecopymerge($ground_im, $water_im, $posX + $xOffset, $posY + $yOffset, 0, 0, $water_w,$water_h,$waterpct);     

	     } else {//文字水印

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

	

	     //生成水印后的图片

	     @unlink($groundImage);

	     switch($ground_info[2]) {//取得背景图片的格式

	         case 1:imagegif($ground_im,$groundImage);break;

	         case 2:imagejpeg($ground_im,$groundImage);break;

	         case 3:imagepng($ground_im,$groundImage);break;

	         default: return 6;

	     }

	

	     //释放内存

	     if(isset($water_info)) unset($water_info);

	     if(isset($water_im)) imagedestroy($water_im);

	     unset($ground_info);

	     imagedestroy($ground_im);

	     //

	     return 0;

	}

}

?>