<!DOCTYPE html>
<html lang="kr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
	<title>NaverLoginSDK</title>
</head>
<body>
    <form name="join_frm" action="./join.php" method="post">
        <input type="hidden" name="naver_id" value="">
    </form>
    
	<!-- (1) LoginWithNaverId Javscript SDK -->
	<script type="text/javascript" src="./js/naver_login.js" charset="utf-8"></script>


	<!-- (2) LoginWithNaverId Javscript 설정 정보 및 초기화 -->
	<script>
		var naverLogin = new naver.LoginWithNaverId(
			{
				clientId: "IynxH5b4yzkXMmPHgIbQ",
				isPopup: false,
				callbackHandle: true
				/* callback 페이지가 분리되었을 경우에 callback 페이지에서는 callback처리를 해줄수 있도록 설정합니다. */
			}
		);

		/* (3) 네아로 로그인 정보를 초기화하기 위하여 init을 호출 */
		naverLogin.init();

		/* (4) Callback의 처리. 정상적으로 Callback 처리가 완료될 경우 main page로 redirect(또는 Popup close) */

		window.addEventListener('load', function () {
			naverLogin.getLoginStatus(function (status) {
				if (status) {
					$('[name="naver_id"]').val(naverLogin.user.getId());
                    $('form[name="join_frm"]').submit();
				} else {
					console.log("callback 처리에 실패하였습니다.");
				}
			});
		});
	</script>
</body>

</html>