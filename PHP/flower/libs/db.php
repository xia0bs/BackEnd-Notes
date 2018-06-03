<?php
$mysql =  new mysqli('localhost','root','root','flower',3306);
if($mysql->connect_errno){
    echo '数据库连接失败,失败信息' . $mysql->connect_errno;
    exit();
}
$mysql->query('set names utf8');