<?php
define("TITLE" , "文件上传");
require "../../html/head.php";
?>

<form action="upload_file.php" method="post" enctype="multipart/form-data">
	<label>文件名:</label>
	<input type="file" name="file"> 
	<br>
	<input type="submit" name="submit" value="提交" >
</form>

<?php require "../../html/foot.php"; ?>