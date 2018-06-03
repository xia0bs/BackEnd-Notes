<?php
header('Content-type:text/html;charset=utf8');
// http://localhost/flower/admin/login.php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // 登陆页面
    include '../template/admin/login.html';
}else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // 验证
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $mysql =  new mysqli('localhost','root','root','flower',3306);
    if($mysql->connect_errno){
        echo '数据库连接失败,失败信息' . $mysql->connect_errno;
        exit();
    }
    $mysql->query('set names utf8');

    $sql = "select * from manage";

    $data = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

    for($i=0;$i<count($data);$i++){
        if($data[$i]['username'] == $user && $data[$i]['password']==$pass){
           $message = '登陆成功';
           $url = 'main.php';
           include 'message.html';
           exit();
        }
    }

    $message = '登陆失败';
    $url = 'login.php';
    include 'message.html';
}

