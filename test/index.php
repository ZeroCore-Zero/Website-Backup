<?php
  require "connect.php";
// 从cookie取令牌（真实）进行校验
  $auth= $_COOKIE["auth"];
//   $auth = md5($username.$password.$salt).",".$res['id'];
  $res = explode(",",$auth);
//   真实的令牌为传递过来的数组中拆出来的前面第一个
  $auth_real = $res[0];
//   var_dump($res) ;
// 取res中的最后一个成员即id
  $id =end($res);
//   根据id去查信息，防止被篡改
  $sql = "SELECT `username`,`password`,`id` FROM `xpcms_admin` WHERE `id`=?";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(1,$id);
  $stmt->execute();
  $res = $stmt->fetch(PDO::FETCH_ASSOC);
//   验证令牌,对比两个令牌是否一致
  if($stmt->rowCount()==1){
      $username = $res['username'];
      $password = $res['password'];
      $salt ='emagic';
    //   待验证的令牌，按同样方式加密
      $auth = md5($username.$password.$salt);
    if($auth_real != $auth){
        // 不一样就跳出，不继续执行
        exit("
        <script>
            alert('信息错误,请先登录');
            location.href='login.php'
        </script>");
    }
  }else{
        //   账号密码对不上也跳出
    exit("
    <script>
        alert('信息错误,请先登录');
        location.href='login.php'
    </script>");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>登陆成功:</h1>
    <?php echo $_COOKIE['username']?>
    <a href="login.php?action=logout">退出登录</a>
</body>
</html>