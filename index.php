<html>

<head>
<meta http-equiv="Content-Type" content="charset=utf-8">

<link rel="stylesheet" type="text/css" href="./general.css"/>
<link rel="stylesheet" type="text/css" href="./index.css"/>
<link rel="stylesheet" type="text/css" href="./overlay.css"/>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
-->
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.tools.min.js"></script>

<title>HX8</title>

</head>

<body>
<div id="wrap">
	<div id="pics">
		<img id="frame_top" src="./image/frame_top.png" />
		<img id="frame_bot" src="./image/frame_bot.png" />
		<img id="bg_top" src="./image/bg_top.png" />
		<img id="bg_mid" src="./image/bg_mid.png" />
		<img id="bg_bot" src="./image/bg_bot.png" />
	</div>

	<div id="msg">歡迎回來，會員ID XXX</div>

	<div id="nav">
		<ul id="nav_l">
			<li id="nav_home"><a href="./"><img src="./image/btn_home.png" /></a></li>
		</ul>
		<ul id="nav_r">
			<li id="nav_login"><img src="./image/btn_login.png" rel="#overlay_login"/></li>
			<li id="nav_personal"><img src="./image/btn_personal.png" /></li>
			<li id="nav_all"><img src="./image/btn_all.png" /></li>
			<li id="nav_detail"><img src="./image/btn_detail.png" /></li>
		</ul>
	</div>
	
	<div id="content">
		<img id="logo" src="./image/logo.png" />

		<div id="ytb"><iframe width="570" height="320" src="//www.youtube.com/embed/eOQYNlCvoEs?rel=0&wmode=transparent" frameborder="0" allowfullscreen wmode="Opaque"></iframe></div>
		<div id="text">
			<p>
			您好，
			</p>
			<p>
			目前有個行為研究需要多名受測者，希望您協助我們重要實驗的進行。<br>
			實驗進行期間我們將提供免費的吃住，並且由於實驗時間較長，<br>
			結束後也將給與六位數的研究報酬金。<br>
			</p>
			<p>
			如果您有興趣想了解詳細，請在以下時間，到以下地點，與我聯絡。
			</p>
			<span class="clearboth"></span>
			<img id="ruattend" src="./image/ruattend.png" />
			<div id="attendbtn" rel="#overlay_contract"></div>
			<span class="clearboth"></span>
		</div>
	</div>
	<div id="footer">
		<a href="http://plurk.com/hx8" target="_blank"><img src='./image/H8-1_03.png' id='footer_plurk' /></a>
		<a href="http://ask.fm/hx8iris" target="_blank"><img src='./image/H8-1_05.png' id='footer_ask' /></a>
		<img src='./image/H8-1_07.png' id='footer_hx8' rel="#overlay_hx8" />
	</div>

	<div class="simple_overlay" id="overlay_login">
		<div class="popup_title">登入</div>
		<div class="popup_hr"></div>
		<div class="popup_content">
			<form id="login_form">
				<input type="text" id="login_user" placeholder="輸入帳號">
				<input type="password" id="login_pass" placeholder="輸入密碼">
				<input type="checkbox" id="login_rmbr"><label for="login_rmbr" id="login_rmbr_label">記住資料</label>
				<input type="submit" id="login_submit" value="確認">
			</form>
		</div>
		<a href="#" id="login_rgstr">註冊</a>
	</div>

	<div class="simple_overlay" id="overlay_contract">
		<div class="popup_title">合約</div>
		<div class="popup_hr"></div>
		<div class="popup_content">
			<p>
			Blah Blah Blah ~~~
			<p>
		</div>
		<a href="./character.html"><img src="./image/ok.png" id="contract_agree" /></a>
	</div>

	<div class="simple_overlay" id="overlay_hx8">
		<div class="popup_title">H8團隊介紹</div>
		<div class="popup_hr"></div>
		<div class="popup_content" id="contract_content">
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

	<script>
		$("img[rel]").overlay({
			top: 'center',
			mask: {
				color: '#000',
				loadSpeed: 500,
				opacity: 0.8
			}
		});

		$("#attendbtn").overlay({
			top: 'center',
			mask: {
				color: '#000',
				loadSpeed: 500,
				opacity: 0.8
			}
		});
	
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
</body>

</html>
