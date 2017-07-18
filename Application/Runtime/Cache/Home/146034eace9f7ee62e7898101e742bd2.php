<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>詳細資料</title>
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
			$("#btnSave").click(function(){
				$.ajax({
					url: "<?php echo U('Home/Ajax/saveProfile')?>",
					type:"post",
					data:$("#formProfile").serialize(),
					success:function(result){
						alert(result);
					}
				});
			});
		});
	</script>
	<link rel="stylesheet" type="text/css" href="/2017/baiduLogin/Public/Home/css/index.css">
</head>
<body>

	<STYLE TYPE="text/css">
	li.logout{
		position: absolute;
	    right: 18px;
	    top: 10px;	
	}
</STYLE>
<nav class="navbar navbar-default">
	<div class="container">
		  <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#">個人資訊</a></li>
	            <li class="logout">
	            	<div id="header">
						<?php echo ($_SESSION['account']); ?> 您好 <a href="logout">登出</a>
					</div>
	            </li>
	          </ul>
	           
	        </div><!--/.nav-collapse -->
	      </div>
	      
	 </div>
</nav>




	<div class="profile_div main-center" >
		<form id="formProfile" method="post" action="home/index/profile">		
			<div class="form-group">
					<label for="account" class="cols-sm-2 control-label">體型:</label>
					<div class="cols-sm-10">
						<div class="input-group">
						<select id="bodyType" name="bodyType">
						    <?php if(is_array($bodyType)): foreach($bodyType as $key=>$item): ?><option 
						        	<?php if($item['checked'] == 1): ?>selected="selected"<?php endif; ?>
						         	value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?>
						     	</option><?php endforeach; endif; ?>	
						</select>	
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="cols-sm-2 control-label">婚姻狀況:</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<select id="marriage" name="marriage">
						    <?php if(is_array($marriage)): foreach($marriage as $key=>$item): ?><option 
						        	<?php if($item['checked'] == 1): ?>selected="selected"<?php endif; ?>
						         	value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?>
						     	</option><?php endforeach; endif; ?>	
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="account" class="cols-sm-2 control-label">個人習慣:</label>
				<div class="cols-sm-10">
					<select id="isSmoke" name="isSmoke">
					    <?php if(is_array($isSmoke)): foreach($isSmoke as $key=>$item): ?><option 
					        	<?php if($item['checked'] == 1): ?>selected="selected"<?php endif; ?>
					         	value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?>
					     	</option><?php endforeach; endif; ?>	
					</select> 
					<select id="eatingHabit" name="eatingHabit">
					    <?php if(is_array($eatingHabit)): foreach($eatingHabit as $key=>$item): ?><option 
					        	<?php if($item['checked'] == 1): ?>selected="selected"<?php endif; ?>
					         	value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?>
					     	</option><?php endforeach; endif; ?>	
					</select>
					<select id="sleepHabit" name="sleepHabit">
					    <?php if(is_array($sleepHabit)): foreach($sleepHabit as $key=>$item): ?><option 
					        	<?php if($item['checked'] == 1): ?>selected="selected"<?php endif; ?>
					         	value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?>
					     	</option><?php endforeach; endif; ?>	
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="cols-sm-2 control-label">個性:</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<?php if(is_array($personality)): foreach($personality as $key=>$item): if(($item['i'] % 5 == 0) ): ?><br/><?php endif; ?>
							<input type="checkbox"
								   <?php if($item['checked'] == 1): ?>checked="checked"<?php endif; ?> 
								   name="personality[]" value="<?php echo ($item["id"]); ?>" /> <?php echo ($item["name"]); endforeach; endif; ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="account" class="cols-sm-2 control-label">教育程度:</label>
				<div class="cols-sm-10">
					<select id="education" name="education">
					    <?php if(is_array($education)): foreach($education as $key=>$item): ?><option 
					        	<?php if($item['checked'] == 1): ?>selected="selected"<?php endif; ?>
					        	value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?></option><?php endforeach; endif; ?>	
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="password" class="cols-sm-2 control-label">當前職業:</label>
				<div class="cols-sm-10">
					<div class="input-group">
						<select id="ocupation" name="ocupation">
						    <?php if(is_array($ocupation)): foreach($ocupation as $key=>$item): ?><option 
						        	<?php if($item['checked'] == 1): ?>selected="selected"<?php endif; ?>
						        	value="<?php echo ($item["id"]); ?>"><?php echo ($item["name"]); ?></option><?php endforeach; endif; ?>	
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
					<label for="account" class="cols-sm-2 control-label">聯繫方式:</label>
					<div class="cols-sm-10">
						<div class="input-group">
						<input type="text" name="contact" placeHolder="如填寫郵件,建議不要寫註冊郵箱" value='<?php echo ($contact); ?>'>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="button" id="btnSave" value="保存" />
		     </div>
		</form>
			
	</div>
	
	</body>
</html>