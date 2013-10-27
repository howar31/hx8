<html>

<head>

<? require_once("./include/config.php"); ?>
<link rel="stylesheet" type="text/css" href="./index.css"/>

<title>HX8</title>

</head>

<body>
<div id="wrap">
	<img id="bg_mid" src="./image/bg_mid.png" />
	<? require_once("./include/header.php"); ?>
	<div id="nav">
		<ul id="nav_l">
			<li id="nav_home"><a href="./"><img src="./image/btn_home.png" /></a></li>
		</ul>
		<ul id="nav_r">
<!--			<li id="nav_login"><img src="./image/btn_login.png" rel="#overlay_login"/></li>-->
			<li id="nav_login"><img src="./image/btn_login.png" rel="#overlay_trollpi"/></li>
			<li id="nav_member"><img src="./image/btn_member.png" rel="#overlay_trollpi"/></li>
			<li id="nav_all"><img src="./image/btn_all.png" rel="#overlay_trollpi"/></li>
			<li id="nav_detail"><a href="http://h8-cos.weebly.com" target="_blank"><img src="./image/btn_detail.png" /></a></li>
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
<!--			<div id="attendbtn" rel="#overlay_contract"></div>-->
			<div id="attendbtn" rel="#overlay_trollpi"></div>
			<span class="clearboth"></span>
		</div>
	</div>

	<? require_once("./include/footer.php"); ?>

	<div class="simple_overlay" id="overlay_login">
		<div class="overlay_title">登入</div>
		<div class="overlay_hr"></div>
		<div class="overlay_content">
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
		<div class="overlay_title">合約</div>
		<div class="overlay_hr"></div>
		<div class="overlay_content">
			<p>
			Blah Blah Blah ~~~
			<p>
		</div>
		<a href="./character.php"><img src="./image/ok.png" id="contract_agree" /></a>
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
	</script>
</div>
</body>

</html>
