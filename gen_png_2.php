<?php
	//input
	$char_name=$_POST[char_name];
	$char_age=$_POST[char_age];
	$char_class=$_POST[char_class];
	$char_gender=$_POST[char_gender];
	$char_mantra="「".$_POST[char_mantra]."」";
	$char_intro=$_POST[char_intro];
	$char_describe=$_POST[char_describe];
	$char_prefer="喜歡/討厭：".$_POST[char_prefer];
	$char_expert="擅長：".$_POST[char_expert];
	$char_type=$_POST[char_type];
	if($_POST[char_team]==""){
		$char_team="隸屬隊伍：無";
	}else{
		$char_team="隸屬隊伍：".$_POST[char_team];
	}
	
	//Set the Content Type
	header('Content-type: image/png');

	// Create Image From Existing File
	// if($char_describe==""){
	if($char_type=="char_pic"){
		//file
		$jpg_image = imagecreatefrompng('char_card_pic.png');
	}else if($char_type=="char_text"){
		$jpg_image = imagecreatefrompng('char_card.png');
	}else{
		die("Type error");
	}

	// Set Font Size 
	// 30->22, 25->18, 65->50
	$fs_name=43;
	$fs_gender_age_class=22;
	$fs_prefer_expert_itro=22;
	$fs_description=18;
	$fs_mantra=22;
	$fs_team=22;
	

	// Set Angle
	$ag_des=359;

	// Allocate A Color For The Text
	$white = imagecolorallocate($jpg_image, 255, 255, 255);
	$black = imagecolorallocate($jpg_image, 81, 78, 70);
	$red   = imagecolorallocate($jpg_image, 179, 27, 27);

	// Set Path to Font File
	$font_path = './wthc06.ttf';

	// Set Text to Be Printed On Image
	$text = "This is a sunset!";

	//微調
	$y_offset=22;
	$y_name_offset=48;
	$left_width=280;
	$left_width_name=300;

	// Print Text On Image
	$wrap_name=autowarp($fs_name, 0, $font_path, $char_name, $left_width_name);
	drawboldtext($jpg_image, $fs_name, 				0, 75, 160+$y_name_offset, $black, $font_path, $wrap_name,3);
	//imagettftext($jpg_image, $fs_name, 				0, 80, 160+$y_name_offset, $black, $font_path, $char_name);
	drawboldtext($jpg_image, $fs_gender_age_class, 	0, 99, 312+$y_offset, $black, $font_path, $char_gender,2);
	drawboldtext($jpg_image, $fs_gender_age_class, 	0, 220, 312+$y_offset, $black, $font_path, $char_age,2);
	drawboldtext($jpg_image, $fs_gender_age_class, 	0, 98, 351+$y_offset, $black, $font_path, $char_class,2);

	$wrap_prefer=autowarp($fs_prefer_expert_itro, 0, $font_path, $char_prefer, $left_width);
	drawboldtext($jpg_image, $fs_prefer_expert_itro,0, 98, 433+$y_offset, $black, $font_path, $wrap_prefer,2);
	
	$wrap_expert=autowarp($fs_prefer_expert_itro, 0, $font_path, $char_expert, $left_width);
	drawboldtext($jpg_image, $fs_prefer_expert_itro,0, 98, 511+$y_offset, $black, $font_path, $wrap_expert,2);
	
	$wrap_intro=autowarp($fs_prefer_expert_itro, 0, $font_path, $char_intro, 540);
	drawboldtext($jpg_image, $fs_prefer_expert_itro,0, 92, 632+$y_offset, $black, $font_path, $wrap_intro,2);
	
	$wrap_mantra=autowarp($fs_mantra, 0, $font_path, $char_mantra, $left_width);
	imagettftext($jpg_image, $fs_mantra,			0, 90, 74+$y_offset, $black, $font_path, $wrap_mantra);
	
	imagettftext($jpg_image, $fs_team,				0, 450, 870+$y_offset, $red, $font_path, $char_team);

	// if($char_describe!=""){
	if($char_type=="char_text"){
		$wrap_description=autowarp($fs_description, 0, $font_path, $char_describe, 200);
		drawboldtext($jpg_image, $fs_description, $ag_des, 430, 109+$y_offset, $black, $font_path, $wrap_description,2);
	}else{
		//file
		if($_FILES["file"]["name"]!=""){
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 2000000)
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"] > 0)
			    {
			    echo "Error: " . $_FILES["file"]["error"] . "<br>";
			    }
			  else
			    {
			    	$overlay = imagecreatefrompng($_FILES["file"]["tmp_name"]);
				    $jpg_image=overlay_picture($jpg_image, $overlay);
			    }
			  }
			else
			  {
			  echo "Invalid file";
			  }
		}
	}
	


	// Send Image to Browser
	imagepng($jpg_image);

	// Clear Memory
	imagedestroy($jpg_image);

	function drawboldtext($image, $size, $angle, $x_cord, $y_cord, $color, $fontfile, $text, $times) 
	{ 
		$_x = array(1, 0, 1, 0, -1, -1, 1, 0, -1); 
		$_y = array(0, -1, -1, 0, 0, -1, 1, 1, 1); 
		for($n=0;$n<=$times;$n++)  { 
			ImageTTFText($image, $size, $angle, $x_cord+$_x[$n], $y_cord+$_y[$n], $color, $fontfile, $text); 
		} 
	} 
	function autowarp($fontsize, $angle, $fontface, $string, $width){
		$content = "";
		if($string!=""){
			// 这几个变量分别是 字体大小, 角度, 字体名称, 字符串, 预设宽度 		    
		    $string = str_replace("&nbsp;"," ",$string);// 将字符串中的“&nbsp用空格代替”
		    $string_array=explode("<br>",$string);//将字符串以“<br>”分割成数组
		    foreach($string_array as $key=>$value){// 遍历数组
		        $content1[$key] = "";
		    for ($i=0;$i<mb_strlen($value,'utf-8');$i++) {
		        $letter[$key][] = mb_substr($value, $i, 1, 'utf-8');//利用mb_strlen,mb_substr进行字符串的字符截取(mb_strlen与strlrn之间的区别)
		    }
		    foreach ($letter[$key] as $l) {
		        $teststr = $content1[$key]." ".$l;
		        $testbox = imagettfbbox($fontsize, $angle, $fontface, $teststr);
		        if (($testbox[2] > $width) && ($content1[$key] !== "")) {
		            $content1[$key] .= "\n";
		        }//如果文字的区域大于等于预设宽度，添加“\n”
		        $content1[$key] .= $l;
		    }
		    $content .=$content1[$key]."\n";//每次循环结束，天骄“\n”
		    }
		}
	    return $content;

	}
	function overlay_picture($image, $overlay){
	$imgWidth=300;
	$imgHeight=525;

	$backWidth=747;
	$backHeight=968;

	//$image = imagecreatefrompng($image);
	imagesavealpha($image, true);
	imagealphablending($image, true);

	// $overlay = imagecreatefrompng($char_img);
	imagesavealpha($overlay, true);
	imagealphablending($overlay, true);

	$finalImage = imagecreatetruecolor($backWidth,$backHeight);
	imagefill($finalImage, 0, 0, IMG_COLOR_TRANSPARENT);
	imagesavealpha($finalImage, true);
	imagealphablending($finalImage, true);

	imagecopy($finalImage, $image, 0, 0, 0, 0, $backWidth, $backHeight);
	imagecopy($finalImage, $overlay, 368, 48, 0, 0, $imgWidth, $imgHeight);
	imageDestroy($image);
	imageDestroy($overlay);

	return $finalImage;
	// imagepng($finalImage);
	// imagedestroy($finalImage);
}
?>
