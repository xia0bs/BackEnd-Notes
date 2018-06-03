<?php
// 展示

include '../libs/db.php';

$sql = "select * from category";

$data = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

$str = '';

for($i=0;$i<count($data);$i++){
    $str .="
        <tr>
            <td>{$data[$i]['id']}</td>
            <td>{$data[$i]['cname']}</td>
            <td>{$data[$i]['engname']}</td>
            <td>{$data[$i]['pid']}</td>
            <td> <a href=\"categoryupdate.php?id={$data[$i]['id']}\" class='btn btn-info'>更新</a>  <a href=\"categorydelete.php?id={$data[$i]['id']}\" class='btn btn-danger'>删除</a></td>
        </tr>
    ";
}

include '../template/admin/catequery.html';



