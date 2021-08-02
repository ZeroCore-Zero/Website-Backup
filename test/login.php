<?php
define("TITLE" , "登录");
require "../html/head.php";
?>

<div class="box">
	<h2>登录</h2>
	<form class="form-box" action="judge.php" method="post">
		<div class="inputBox">
			<input type="text" name="username" required="required" placeholder="账号" autofocus="autofocus">
			<label>Username</label>
		</div>
		<div class="inputBox">
			<input type="password" name="password" required="required" placeholder="密码"/>
			<label>Password</label>
		</div>
		<input type="submit" name="submit" value="提交" />
	</form>
</div>

<?php require "../html/foot.php"; ?>