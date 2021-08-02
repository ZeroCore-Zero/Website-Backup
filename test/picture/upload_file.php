<?php
define("TITLE" , "文件上传");
require "../../html/head.php";

if ($_FILES["file"]["error"] > 0)
{
	print '<p style="color:red;text-align:center;">上传失败</p>';
	
	switch ($_FILES["file"]["error"])
	{
		case 1:
			print '文件大小超过了php.ini中的upload_max_filesize设置';
			break;
		case 2:
			print '文件超过了HTML表单中的MAX_FILE_SIZE设置';
			break;
		case 3:
			print '文件只有部分被上传';
			break;
		case 4:
			print '未上传文件';
			break;
		case 6:
			print '临时目录不存在';
			break;
		default:
			print '写入磁盘出错';
			break;
	}
	
}
else
{
	if (file_exists("upload/" . $_FILES["file"]["name"]))
	{
		echo "<p style='color:#ff0000;text-align:center;'>文件已存在</p>";
	}
	else
	{
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
		echo "<p style='color:#ff0000;text-align:center;'>上传成功</p>";
	}
}
  
require "../../html/foot.php";
?>