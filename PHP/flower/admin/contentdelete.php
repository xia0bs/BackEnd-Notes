<?php
include  '../libs/db.php';
$id = $_GET['id'];
$sql ="delete from content where cid=$id";
$mysql->query($sql);

if($mysql->affected_rows == 1){
    $message = "栏目删除成功";
    $url = "contentquery.php";
    include 'message.html';
}else if($mysql->affected_rows < 0){
    $message = "栏目删除失败";
    $url = "contentquery.php";
    include 'message.html';
}
$mysql->close();

