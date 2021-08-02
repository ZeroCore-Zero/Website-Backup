<?php
define("TITLE" , "登录到2009");
require "../html/head.php";
?>

<div class="box">
	<h2>登录</h2>
	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if($_POST["password"] == "2009")
		{
			header("location:2009.php"); 
		}
		else
		{
			print "<h1 class=\"error\">密码错误</h1>"; 
		}
	}
	?>
	<form class="form-box" action="#" method="post">
		<div class="inputBox">
			<input type="password" name="password" required="required" autofocus="autofocus" placeholder="密码">
		</div>
	<input type="submit" name="submit" value="提交" />
	</form>
</div>

<?php require "../html/foot.php"; ?>