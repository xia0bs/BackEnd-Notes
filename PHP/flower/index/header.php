<?php
// 导航
// category
include '../libs/db.php';
$sql = "select * from category";
$data = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
$mysql->close();


include '../template/index/header.html';