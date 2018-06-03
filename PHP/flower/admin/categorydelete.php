<?php
include  '../libs/db.php';
$id = $_GET['id'];


// 是否存在子栏目

$sql = "select * from category where pid=$id";
$data = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

if(count($data)){
    $message = "存在子栏目,不允许删除";
    $url = "categoryquery.php";
    include 'message.html';
    exit();
}

$sql = "delete from category where id=$id";

$mysql->query($sql);


if($mysql->affected_rows == 1){
    $message = "栏目删除成功";
    $url = "categoryquery.php";
    include 'message.html';
}else if($mysql->affected_rows < 0){
    $message = "栏目删除失败";
    $url = "categoryquery.php";
    include 'message.html';
}
$mysql->close();

