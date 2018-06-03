<?php
include 'header.php';

include '../libs/db.php';
$cid = $_GET['id'];

$sql = "select cname,template from category where id=$cid";

$cate = $mysql->query($sql)->fetch_assoc();
$title = $cate['cname'];
$template = $cate['template'];

$sql = "select * from content where pid=$cid";
$data = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

include "../template/index/$template.html";

include 'footer.php';

