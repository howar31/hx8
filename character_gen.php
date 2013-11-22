
<html>

<head>

<meta http-equiv="Content-Type" content="charset=utf-8">

<link rel="stylesheet" type="text/css" href="./general.css"/>
<link rel="stylesheet" type="text/css" href="./overlay.css"/>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
-->
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.tools.min.js"></script>
<link rel="stylesheet" type="text/css" href="./character.css"/>

<title>HX8</title>

</head>

<body>

<div id="wrap">
		<img id="frame_top" src="./image/frame_top.png" />
	<img id="frame_bot" src="./image/frame_bot.png" />
	<img id="bg_top" src="./image/bg_top.png" />
	<img id="bg_bot" src="./image/bg_bot.png" />

	<div id="msg"><!--歡迎回來，會員ID XXX-->　</div>

	
	<div id="nav">
		<ul id="nav_l">
			<li id="nav_home"><a href="./"><img src="./image/btn_home.png" /></a></li>
		</ul>
		<ul id="nav_r">
			<li id="nav_login"><img src="./image/btn_logout.png" /></li>
			<li id="nav_member"><img src="./image/btn_member.png" /></li>
			<li id="nav_all"><img src="./image/btn_all.png" /></li>
			<li id="nav_detail"><img src="./image/btn_detail.png" /></li>
		</ul>
	</div>

	<div id="content">
		<div id="char_frame">
			<div id="char_wrap">
				<ul id="char_tab">
					<li id="char_tab_text" rel="char_text" class="char_tab_title char_tab_active">文字版</li>
					<li id="char_tab_pic" rel="char_pic" class="char_tab_title">圖片版</li>
				</ul>
				<div id="char_hr"></div>
				<div id="char_content">
					<form id="char_form" action="gen_png_2.php" method="post" enctype="multipart/form-data">
						<div class="char_text char_pic"><label for="char_name">*角色名稱</label><input type="text" name="char_name" placeholder="限制8字以內" maxlength="8">
						<label for="char_age">*年齡</label><input type="text" name="char_age"><br></div>
						<div class="char_text char_pic"><label for="char_class">*身分(職業)</label><input type="text" name="char_class" placeholder="限制8字以內" maxlength="8">
						<label for="char_gender">*性別</label><input type="text" name="char_gender"><br></div>
						<div class="char_text char_pic"><label for="char_mantra">角色台詞</label><input type="text" name="char_mantra" class="char_fullwidth" placeholder="限制20字以內" maxlength="20"><br></div>
						<div class="char_text char_pic"><label for="char_intro">*角色介紹</label><textarea type="text" name="char_intro" class="char_fullwidth" placeholder="限制126字以內" maxlength="126"></textarea><br></div>
						<div class="char_text"><label for="char_describe">*角色描述</label><textarea type="text" name="char_describe" class="char_fullwidth" placeholder="限制91字以內" maxlength="91"></textarea><br></div>
						<div class="char_pic"><label for="char_pic">*角色圖片</label>
							<!-- <button name="char_pic_btn" title="限制 426px * 520px 以內">從電腦上傳圖片</button> -->
							<input type="file" name="file" id="file"><br>
							<span id="char_upload_msg">已上傳圖片  大帥哥.PNG</span><br></div>
						<div class="char_text char_pic"><label for="char_prefer">喜歡/討厭</label><input type="text" name="char_prefer" class="char_fullwidth" placeholder="限制13字以內" maxlength="13"><br></div>
						<div class="char_text char_pic"><label for="char_expert">擅長</label><input type="text" name="char_expert" class="char_fullwidth" placeholder="限制15字以內" maxlength="15"></div>
						<div class="char_text char_pic"><label for="char_team">隸屬隊伍</label><input type="text" name="char_team" class="char_fullwidth" placeholder="單人報名玩家此區請留白"></div>
						<input type="submit" id="char_submit" value="generate" />
					</form>
				</div>
			</div>
			<div id="char_preview">
				<img src="./image/char_card_example_text.png" id="char_text_img" class="char_active">
				<img src="./image/char_card_example_pic.png" id="char_pic_img">
			</div>
		</div>
	</div>

		<div id="footer">
		<a href="http://plurk.com/hx8" target="_blank"><img src='./image/H8-1_03.png' id='footer_plurk' /></a>
		<a href="http://ask.fm/hx8iris" target="_blank"><img src='./image/H8-1_05.png' id='footer_ask' /></a>
		<img src='./image/H8-1_07.png' id='footer_hx8' rel="#overlay_hx8" />
	</div>

	<div class="simple_overlay" id="overlay_hx8">
		<div class="overlay_title">H8團隊介紹</div>
		<div class="overlay_hr"></div>
		<div class="overlay_content" id="hx8_content">
			<p>
			　　H8成立於2013年6月底，成員皆是長久接觸網路創作，熟悉網路的創作生態的創作者，有感於Plurk、論壇式的創作交流企劃越來越頻繁興盛，現今的平台卻有不少的缺點，無法滿足創作者的需求。
			</p>
			<p>
			　　H8想建立一個專屬於創作交流企劃的網路平台，讓讀者、創作者的互動交流受到妥善的改善。平台架設的同時也推出各種不同的創作企劃讓創作者參與，從中了解企劃管理的問題和玩家的創作需求，進而增加平台功能。
			<p>
			　　期待創作交流企劃平台能帶動台灣網路生態上整體的原創創作風氣，是H8的最終目標。
			</p>
		</div>
	</div>

	<div class="simple_overlay" id="overlay_trollpi">
		<div class="overlay_title">建設中</div>
		<div class="overlay_hr"></div>
		<div class="overlay_content" id="trollpi_content">
			<p>此區尚未開放</p>
		</div>
	</div>

	<script>
		$("#footer_hx8").overlay({
			top: 'center',
			mask: {
				color: '#000',
				loadSpeed: 500,
				opacity: 0.8
			}
		});
	</script>
</div>

<script>
	$(".char_tab_title").click(function(){
		// Tab color transition
		$(".char_tab_title").removeClass("char_tab_active");
		$(this).addClass("char_tab_active");
		// Content switch
		$(".char_text").hide();
		$(".char_pic").hide();
		$("."+$(this).attr("rel")).show();
		// Picture switch
		$("#char_preview img").removeClass("char_active");
		$("#"+$(this).attr("rel")+"_img").addClass("char_active");
	});
</script>
</body>

</html>
