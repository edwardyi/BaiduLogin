<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>註冊百度帳號</title>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/2017/baiduLogin/Public/Home/js/common.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#btnSubmit").click(function(){
				let objAccount = $("#account");
				let objTelephone = $("#telephone");
				let objVerifyCode = $("#verifyCode");
				let objPassword = $("#password");
				
				let strMsg = "";

				let objMsg = $("#msg");
				
				strMsg = (checkFieldEmpty(objAccount)==="" ? strMsg : strMsg + checkFieldEmpty(objAccount) + "<br/>");
				strMsg = (checkFieldEmpty(objTelephone)==="" ? strMsg : strMsg + checkFieldEmpty(objTelephone) + "<br/>");
				strMsg = (checkFieldEmpty(objVerifyCode)==="" ? strMsg : strMsg +  checkFieldEmpty(objVerifyCode) + "<br/>");
				strMsg = (checkFieldEmpty(objPassword)==="" ? strMsg : strMsg +  checkFieldEmpty(objPassword) + "<br/>");

				if(strMsg != ""){
					objMsg.show().html(strMsg);
					return;
				}else{
					objMsg.hide();
				}
				// check field end
				 
				
				//form submit 
				$("#formRegister").submit();


			});
			
		});
	</script>
</head>
<body>
<form id="formRegister" method="post" accept-charset="utf-8">
	用戶名:<input type="text" id="account" name="account" placeHolder="請設置用戶名" hintMsg="請設置用戶名" > <br/>
	手機號:<input type="text" id="telephone" name="telephone" placeHolder="可用於登入或找回密碼" hintMsg="請設置手機號"><br/>
	驗證碼:<input type="text" id="verifyCode"  name="verifyCode" placeHolder="請輸入驗證碼" value="123456" hintMsg="請設置驗證碼"><br/>
	密碼:<input type="password" id="password" name="pwd" placeHolder="請設置登入密碼" hintMsg="請設置密碼"><br/>
	<span id="msg" style="display:none;color:red;"><?php echo ($strMsg); ?></span>
	<input type="button" id="btnSubmit" name="btnSubmit" value="註冊" />
</form>
</body>
</html>