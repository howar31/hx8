<html>

<head>

<? require_once("./include/config.php"); ?>
<link rel="stylesheet" type="text/css" href="./member.css"/>

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
		<div id="member_info">
			<div id="member_avatar"><img src="noimg" /></div>
			<div id="member_detail">
				<div id="member_name">會員名稱</div>
				<div id="member_web"><a href="#" target="_blank">http://個人.網頁/</a></div>
				<div id="member_intro">自我介紹</div>
			</div>
			<div id="member_card">
			</div>
		</div>
		<div id="member_collection">
		</div>
	</div>

	<? require_once("./include/footer.php"); ?>
</div>

</body>

</html>
