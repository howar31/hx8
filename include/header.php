	<img id="frame_top" src="./image/frame_top.png" />
	<img id="frame_bot" src="./image/frame_bot.png" />
	<img id="bg_top" src="./image/bg_top.png" />
	<img id="bg_bot" src="./image/bg_bot.png" />

	<div id="msg"><span id="msg_content">尚未登入</span><button id="msg_logout">登出</button></div>

		<span id="signinstatecheck">
		  <span
		    class="g-signin"
		    data-callback="signinCallback"
		    data-clientid="392417094478-59sf0tutemad9vobajlo6t1mmreibn36.apps.googleusercontent.com"
		    data-cookiepolicy="single_host_origin"
		    data-requestvisibleactions="http://schemas.google.com/AddActivity"
		    data-scope="https://www.googleapis.com/auth/plus.login">
		  </span>
		</span>

   <script type="text/javascript">
      (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/client:plusone.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();

var Guserid;
var Gdisplayname;
var Gimageurl;
var Gurl;

function signinCallback(authResult) {
	gapi.client.load('plus','v1', function(){
		if (authResult['access_token']) {
			//    document.getElementById('signinButton').setAttribute('style', 'display: none');
			var request = gapi.client.plus.people.get ({
				'userId': 'me'
			});
			request.execute(function(resp) {
				Guserid = resp.id;
				Gdisplayname = resp.displayName;
				Gimageurl = resp.image.url;
				Gurl = resp.url;
				$('#msg_content').html('<img src="'+resp.image.url+'" id="msg_avatar"><a href="'+resp.url+'" target="_blank" id="msg_user">'+resp.displayName+'</a>');
				if (checkshxt(Guserid)) {
					$('#contract_form_title').html('報名已經完成！');
					$('#done_content_wrap').show();
				} else {
					$('#contract_form_title').html('報名表格');
					$('#form_content_wrap').show();
				}
				$('#msg_logout').show();
				$('#signinButton').hide();
				$('#contract_content_wrap').hide();
			});
		} else if (authResult['error']) {
			//   "user_signed_out" - User is signed-out
			//   "access_denied" - User denied access to your app
			//   "immediate_failed" - Could not automatically log in the user
			switch(authResult['error']) {
				case 'user_signed_out':
					alert("您已經成功登出！");
					break;
				case 'access_denied':
					alert("Google拒絕我們的存取，請檢查登入認證是否設定錯誤");
					document.location.href="/hx8/";
					break;
				case 'immediate_failed':
					if(!(window.location.pathname.split('/').pop())==""){
						alert("注意！您尚未登入！請回首頁依程序參加活動");
						document.location.href="/hx8/";
					}
					break;
			}
		}
//		console.log('authResult', authResult);
	});
}
$("#msg_logout").click(function(){
	 $.ajax({
        type: 'GET',
        url: 'https://accounts.google.com/o/oauth2/revoke?token=' +
            gapi.auth.getToken().access_token,
        async: false,
        contentType: 'application/json',
        dataType: 'jsonp',
        success: function(result) {
          console.log('revoke response: ' + result);
	  $('#contract_form_title').html('注意事項');
	  $('#form_content_wrap').hide();
	  $('#done_content_wrap').hide();
	  $('#contract_content_wrap').show();
	  $('#msg_logout').hide();
	  $('#signinButton').show();
	  $('#msg_content').html('成功登出');
	  document.location.href="/hx8/";
        },
        error: function(e) {
          console.log(e);
        }
      });
});
</script>

    <script type="text/javascript">
var Formed=new Array;

function getshxt(json) {
  var a = json.feed.entry.length;
  for (var i = 0; i < a; i++) {
    var b = json.feed.entry[i].content.$t;
    var getgidstr=b;
    Formed.push(getgidstr.substring(getgidstr.indexOf("gid: ")+5));
//	console.log(Formed);
  }
}

function checkshxt(thegid) {
	for (var i = 0; i < Formed.length; i++) {
		if (thegid == Formed[i]) return true;
	}
	return false;
}

    </script>
<script type='text/javascript' src='https://spreadsheets.google.com/feeds/list/0AvPZ-eeLNBs9dGIxbEVRc01KODY1S01RdXV0azhFVVE/od6/public/basic?alt=json-in-script&callback=getshxt'></script>
