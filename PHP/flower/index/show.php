<?php
include 'header.php';
// 内容
include '../libs/db.php';
$cid = $_GET['cid'];

$sql = "select * from content where cid=$cid";
$data = $mysql->query($sql)->fetch_assoc();


// 模板


include "../template/index/show.html";

include 'footer.php';
