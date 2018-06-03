<?php
include '../libs/db.php';
header('Content-type:text/html;charset=utf8');
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include '../libs/functions.php';
    $obj = new unit();
    $str = $obj->getCate($mysql,0,'category',0);
    include '../template/admin/contentadd.html';
}else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '../libs/upload.php';
    $file = $_FILES['thumb'];
    $content = $_FILES['content'];
    $upload = new Upload();
    $imgurl = $upload->upload($file);
    $imgurls = $upload->uploads($content);

    $sql = "insert into content (";
    $data = $_POST;

    $data['thumb'] = $imgurl;
    $data['content'] = $imgurls;

    $keyarr = array_keys($data);

    for ($i=0;$i<count($keyarr);$i++){
      $sql .=  $keyarr[$i] . ',';
    }
    $sql =  substr($sql,0,-1) .') values (';

    foreach ($data as $value){
        $sql .= "'{$value}',";
    }
    $sql =  substr($sql,0,-1) .')';

    $mysql->query($sql);
    $number = $mysql->affected_rows;
    $mysql->close();

    if($number == 1){
        $message = '内容插入成功';
        $url = 'contentquery.php';
    } else if($number <0){
        $message = '内容插入失败';
        $url = 'contentadd.php';
    }
    include 'message.html';

}