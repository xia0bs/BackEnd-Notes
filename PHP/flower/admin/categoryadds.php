<?php
//展示页面   添加栏目
include '../libs/db.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
//展示页面
    // 获取栏目
    include '../libs/functions.php';
    $obj = new unit();
    $str = $obj->getCate($mysql,0,'category',0);
    include '../template/admin/cateadd.html';
}else if($_SERVER['REQUEST_METHOD'] ==='POST'){
  $cname =  $_POST['cname'];
  $engname = $_POST['engname'];
  $pid = $_POST['pid'];
  $sql = "insert into category (cname,engname,pid) values ('$cname','$engname',$pid)";


  $mysql->query($sql);

  if($mysql->affected_rows == 1){
      $message = "栏目插入成功";
      $url = 'categoryadd.php';
  }else if($mysql->affected_rows < 0){
      $message = '栏目插入失败';
      $url='categoryadd.php';
  }
  include 'message.html';

}