<?php

include '../libs/db.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include '../libs/function.php';

    $id = $_GET['id'];
    $obj = new unit();
    $str = $obj->getCate($mysql,0,'category',0,$id);

    $data = $mysql->query("select * from category where id=$id")->fetch_assoc();

    include '../template/admin/cateupdate.html';


}else if($_SERVER['REQUEST_METHOD'] ==='POST'){
     $pid = $_POST['pid'];
     $cname = $_POST['cname'];
     $engname = $_POST['engname'];
     $id = $_POST['id'];

  $sql = "update category set pid=$pid,cname='$cname',engname='$engname' where id=$id";
  $mysql->query($sql);
 if($mysql->affected_rows == 1){
     $message = "栏目更新成功";
     $url = 'categoryquery.php';
 }else if($mysql->affected_rows <0){
     $message = "栏目更新失败";
     $url = 'categoryquery.php';
 }
 include 'message.html';

}