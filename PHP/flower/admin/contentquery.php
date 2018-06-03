<?php
// 展示

include '../libs/db.php';

$sql = "select content.*,category.cname from content,category where content.pid=category.id";

$data = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

$str = '';

for($i=0;$i<count($data);$i++){
    $img = createImg($data[$i]['content']);
    $str .="
        <tr>
            <td>{$data[$i]['cid']}</td>
            <td>{$data[$i]['ctitle']}</td>
            <td style='width: 300px;'>{$data[$i]['cdescription']}</td>
            <td>{$data[$i]['author']}</td>
            <td>{$data[$i]['ctime']}</td>
            <td><img src='{$data[$i]['thumb']}' alt=''  class=\"img-rounded\" width='80'> </td>
            <td>{$img}</td>
            <td>{$data[$i]['cname']}</td>
            <td> <a href=\"contentupdate.php?id={$data[$i]['cid']}\" class='btn btn-info'>更新</a>  <a href=\"contentdelete.php?id={$data[$i]['cid']}\" class='btn btn-danger'>删除</a></td>
        </tr>
    ";
}
/* url,url,url */
function createImg($url){
  $arr = explode(',',$url);
  $str = "";
  for($i=0;$i<count($arr);$i++){
      $str .="
       <img src='$arr[$i]' alt='' title='' class=\"img-rounded\" width='80'>
      ";
  }
  return $str;
}

include '../template/admin/contentquery.html';



