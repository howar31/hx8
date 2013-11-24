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
<?//			<li id="nav_login"><img src="./image/btn_logout.png" /></li>?>
<?//			<li id="nav_member"><img src="./image/btn_member.png" /></li>?>
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
					<li id="char_tab_upload" rel="char_upload" class="char_tab_title">上傳角色卡</li>
				</ul>
				<div id="char_hr"></div>
				<div id="char_content">
					<form id="char_form" action="./gen_png_2.php" method="post" enctype="multipart/form-data">
						<div class="char_text char_pic"><label for="char_name">*角色名稱</label><input type="text" name="char_name" id="char_name" placeholder="限制5字以內" maxlength="5">
						<label for="char_age">*年齡</label><input type="text" name="char_age" id="char_age"><br></div>
						<div class="char_text char_pic"><label for="char_class">*身分(職業)</label><input type="text" name="char_class" id="char_class" placeholder="限制8字以內" maxlength="8">
						<label for="char_gender">*性別</label><input type="text" name="char_gender" id="char_gender"><br></div>
						<div class="char_text char_pic"><label for="char_mantra">角色台詞</label><input type="text" name="char_mantra" id="char_mantra" class="char_fullwidth" placeholder="限制20字以內，不需要輸入引號，系統會自動加" maxlength="20"><br></div>
						<div class="char_text char_pic"><label for="char_intro">*角色介紹</label><textarea type="text" name="char_intro" id="char_intro" class="char_fullwidth" placeholder="限制17字以內" maxlength="17"></textarea><br></div>
						<div class="char_text"><label for="char_describe">*角色描述</label><textarea type="text" name="char_describe" id="char_describe" class="char_fullwidth" placeholder="限制104字以內" maxlength="104"></textarea><br></div>
						<div class="char_pic"><label for="char_pic">*角色圖片</label>
<!--<button id="char_pic_btn" title="限制 426px * 520px 以內">從電腦上傳圖片</button>-->
<input type="file" name="file" id="file"><br>
<span id="char_upload_msg">圖片不會自動縮放，請上傳剛好大小(300px * 525px)的圖片，格式必須為PNG</span><br></div>
						<div class="char_text char_pic"><label for="char_prefer">喜歡/討厭</label><input type="text" name="char_prefer" id="char_prefer" class="char_fullwidth" placeholder="限制14字以內" maxlength="14"><br></div>
						<div class="char_text char_pic"><label for="char_expert">擅長</label><input type="text" name="char_expert" id="char_expert" class="char_fullwidth" placeholder="限制16字以內" maxlength="16"></div>
						<div class="char_text char_pic"><label for="char_team">隸屬隊伍</label><input type="text" name="char_team" id="char_team" class="char_fullwidth" placeholder="請填寫官方分配的隊伍名稱(1個英文字母)"></div>
						<!--<div class="char_upload"><label for="char_url">角色卡網址</label><input type="text" name="char_url" id="char_url" class="char_fullwidth" placeholder="限制20字以內，不需要輸入引號，系統會自動加" maxlength="20"><br></div>-->
						<input type="hidden" name="char_type" id="char_type" value="char_text" />
						<input class="char_text char_pic" type="submit" name="char_submit" id="char_submit" value="" />
					</form>

					<form action="https://docs.google.com/forms/d/1LSWFhkE9Ih0aMOtZrz5t1j8ylCKbaRXE_4q7bAXsf58/formResponse?embedded=true" method="POST" id="ss-form" target="_self" onsubmit="document.getElementById('entry_1345643953').value=Guserid;">
						<div class="char_upload">
							<label for="entry_124427796">角色卡連結</label>
							<input class="char_fullwidth" type="url" name="entry.124427796" value="" id="entry_124427796" aria-label="請將角色卡的連結貼至此。  " aria-required="true" required="" title="" placeholder="請輸入角色卡圖片網址">
						</div>
						<input type="hidden" name="entry.1345643953" value="" id="entry_1345643953"> 
						<input class="char_upload" type="submit" name="submit" value="上傳" id="char_upload_submit">
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
		$(".char_text, .char_pic, .char_upload").hide();
		$("."+$(this).attr("rel")).show();
		$("#char_type").val($(this).attr("rel"));
		// Picture switch
		$("#char_preview img").removeClass("char_active");
		$("#"+$(this).attr("rel")+"_img").addClass("char_active");
	});
</script>
</body>

</html>
