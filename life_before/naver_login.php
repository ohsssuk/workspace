
<script type="text/javascript">
	var naverLogin = new naver.LoginWithNaverId(
		{
			clientId: "IynxH5b4yzkXMmPHgIbQ",
			callbackUrl: "http://www.lifebefore.co.kr/login_callback_proc.php",
			isPopup: false, /* 팝업을 통한 연동처리 여부 */
			loginButton: {color: "green", type: 3, height: 60} /* 로그인 버튼의 타입을 지정 */
		}
	);
	
   /* 설정정보를 초기화하고 연동을 준비 */
	naverLogin.init();
</script>