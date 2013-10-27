<html>

<head>

<? require_once("./include/config.php"); ?>
<link rel="stylesheet" type="text/css" href="./character.css"/>

<title>HX8</title>

</head>

<body>
<div id="wrap">
	<? require_once("./include/header.php"); ?>
	
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
					<form id="char_form">
						<div class="char_text char_pic"><label for="char_name">*角色名稱</label><input type="text" id="char_name" placeholder="限制8字以內" maxlength="8">
						<label for="char_age">*年齡</label><input type="text" id="char_age"><br></div>
						<div class="char_text char_pic"><label for="char_class">*身分(職業)</label><input type="text" id="char_class" placeholder="限制8字以內" maxlength="8">
						<label for="char_gender">*性別</label><input type="text" id="char_gender"><br></div>
						<div class="char_text char_pic"><label for="char_mantra">角色台詞</label><input type="text" id="char_mantra" class="char_fullwidth" placeholder="限制20字以內" maxlength="20"><br></div>
						<div class="char_text char_pic"><label for="char_intro">*角色介紹</label><textarea type="text" id="char_intro" class="char_fullwidth" placeholder="限制126字以內" maxlength="126"></textarea><br></div>
						<div class="char_text"><label for="char_describe">*角色描述</label><textarea type="text" id="char_describe" class="char_fullwidth" placeholder="限制91字以內" maxlength="91"></textarea><br></div>
						<div class="char_pic"><label for="char_pic">*角色圖片</label><button id="char_pic_btn" title="限制 426px * 520px 以內">從電腦上傳圖片</button><span id="char_upload_msg">已上傳圖片  大帥哥.PNG</span><br></div>
						<div class="char_text char_pic"><label for="char_prefer">喜歡/討厭</label><input type="text" id="char_prefer" class="char_fullwidth" placeholder="限制13字以內" maxlength="13"><br></div>
						<div class="char_text char_pic"><label for="char_expert">擅長</label><input type="text" id="char_expert" class="char_fullwidth" placeholder="限制15字以內" maxlength="15"></div>
						<div class="char_text char_pic"><label for="char_team">隸屬隊伍</label><input type="text" id="char_team" class="char_fullwidth" placeholder="單人報名玩家此區請留白"></div>
						<input type="submit" id="char_submit" value="" />
					</form>
				</div>
			</div>
			<div id="char_preview">
				<img src="./image/char_card_example_text.png" id="char_text_img" class="char_active">
				<img src="./image/char_card_example_pic.png" id="char_pic_img">
			</div>
		</div>
	</div>

	<? require_once("./include/footer.php"); ?>
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
