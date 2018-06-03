<?php
include '../libs/db.php';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
     // 栏目树
    include "../libs/function.php";
    $obj = new unit();
    $str = $obj->getCate($mysql,0,'category',0);
    include '../template/admin/cateadd.html';
}else if($_SERVER['REQUEST_METHOD'] ==='POST'){

}