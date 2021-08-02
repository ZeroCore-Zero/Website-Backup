<?php
if ($_GET["action"] == "logout") {
  // 如果推出即清除cookie不再保存
  setcookie("username", "", time() - 1);
  setcookie("auth", "", time() - 1);
}
if (isset($_COOKIE['auth']) and isset($_COOKIE['username']) and $_GET['action'] != 'logout') {
  //  {
  exit("<script>
  alert('系统检测到您已经登录,现跳转到主页');
  location.href='index.php'
  </script>");
}
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>基本表单元素</title>
  <style>
    body {
      color: #555;
    }
    h3 {
      text-align: center;
    }
    form {
      width: 450px;
      margin: 30px auto;
      border-top: 1px solid #aaa;
    }
    form fieldset {
      border: 1px solid seagreen;
      background-color: lightcyan;
      box-shadow: 2px 2px 4px #bbb;
      border-radius: 10px;
      margin: 20px;
    }
    form fieldset legend {
      background-color: rgb(178, 231, 201);
      border-radius: 10px;
      color: seagreen;
      padding: 5px 15px;
    }
    form div {
      margin: 5px;
    }
    form p {
      text-align: center;
    }
    form .btn {
      width: 80px;
      height: 30px;
      border: none;
      background-color: seagreen;
      color: #ddd;
    }
    form .btn:hover {
      background-color: coral;
      color: white;
      cursor: pointer;
    }
    input:focus {
      background-color: rgb(226, 226, 175);
    }
  </style>
</head>
<body>
  <h3>用户注册</h3>
  <!-- form+input.... -->
  <form action="check.php" method="POST">
    <!-- 控件组 -->
    <fieldset>
      <legend>基本信息(必填)</legend>
      <div>
        <label for="my-username">账号:</label>
        <input type="text" id="my-username" name="username" placeholder="6-15位字符" autofocus />
      </div>
      <div>
        <label for="pwd-1">密码:</label>
        <input type="password"" name=" password" id="pwd-1" placeholder="不少于6位且字母+数字" />
      </div>
      <div>
        <!-- 复选框 -->
        <!-- 因为复选框返回是一个或多个值，最方便后端用数组来处理， 所以将name名称设置为数组形式便于后端脚本处理 -->
        <input type="checkbox" name="autologin" value="1" id="jizhu" />
        <label for="jizhu">记住密码（7天有效）</label>
      </div>
    </fieldset>
    <!-- 隐藏域, 例如用户的Id, 注册，登录的时间。。。。 -->
    <input type="hidden" name="user_id" value="123" />
    <p>
      <!-- <input type="submit" value="提交" class="btn" /> -->
      <button type="submit" class="btn">提交</button>
    </p>
  </form>
</body>
</html>