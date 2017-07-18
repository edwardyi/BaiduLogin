<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>登入百度帳號</title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/2017/baiduLogin/Public/Home/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="/2017/baiduLogin/Public/Home/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="/2017/baiduLogin/Public/Home/js/bootstrap.min.js" ></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/2017/baiduLogin/Public/Home/js/common.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
			$("#btnLogin").click(function(){
				//form submit
				
				let objMsg = $("#msg");
				$.ajax({
					url: "<?php echo U('Home/Ajax/login')?>",
					type:"post",
					data:$("#loginForm").serialize(),
					success:function(result){
						objMsg.show().html(result);
					}
				});
				// $("#formRegister").submit();


			});
			
		});
	</script>
	<link rel="stylesheet" type="text/css" href="/2017/baiduLogin/Public/Home/css/index.css">
	
</head>
<body>
	<div class="container">
		<div class="row main">
			<div class="main-login main-center">
					<form id="loginForm" method="post" action="home/index/profile">
						<span id="msg" style="display:none;color:red;"><?php echo ($strMsg); ?></span> 
						<div class="form-group">
							<!-- <label for="account" class="cols-sm-2 control-label">用戶名</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
								<input type="text" id="account" name="account" value="" placeHolder="手機/郵箱/用戶名" hintMsg="請設置手機/郵箱/用戶名"> 
							</div>
						</div>
					</div>

					<div class="form-group">
						<!-- <label for="password" class="cols-sm-2 control-label">密碼</label> -->
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" id="password" name="password" value="" placeHolder="密碼" hintMsg="請設置密碼"> <br/>
							</div>
						</div>
					</div>

					<div class="form-group ">
						<input type="button" id="btnLogin" name="btnLogin" value="登入"> <br/>
						<a href="register" >立即註冊</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>		
</body>
</html>