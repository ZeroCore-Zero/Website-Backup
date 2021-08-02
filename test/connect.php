<?php
//定义常亮配置基本连接参数，以后可以复用
//数据库类型（如果是Oracle，postgres，mangoDB对应修改后面的值就行，PDO兼容大多数数据库）
define('DBTYPE', 'mysql');
//主机名，外网的请修改更新ip，本地用localhost或者127.0.0.1
define('HOST', 'localhost');
//端口号
define('PORT', '3306');
//字符集
define('CHARSET', 'utf8');
//数据库名
define('DB_NAME', 'class');
//用户名
define('USERNAME', 'root');
//密码
define('PWD', 'zero-mysql');
//dns
//注意PDO连接的格式DSN：数据库类型：host=主机；dbname=数据库；……其他参数
define('DSN', DBTYPE . ':host=' . HOST . ';dbname=' . DB_NAME . ';charset=' . CHARSET);
try {
    //实例化PDO对象
    $pdo = new PDO(DSN, USERNAME, PWD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
    // var_dump($pdo);
} catch (PDOException $e) {
    // 捕捉PDO错误信息
    echo $e->getMessage();
} catch (Throwable $e) {
    //捕捉拥有Throwable接口的错误或者其他异常
    echo $e->getMessage();
}
//以上代码可以另存为一个xxx.php文件作为配置连接文件，通过include或者require xxx.php引用以实现代码复用