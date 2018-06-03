<?php

class unit{
    function __construct()
    {
       $this->str='';
    }
    /*
     * 顶层栏目 子栏目  一级栏目
     * 一级栏目         二级
     * 二级            三级
     * */
    function getCate($mysql,$parentid,$tablename,$flag){
        $flag++;
        $sql = "select * from $tablename where pid=$parentid";
        $data = $mysql->query($sql);

        while($row = $data->fetch_assoc()){
          $str = str_repeat('-',$flag);

            $this->str .="<option value=\"{$row['id']}\">{$str}{$row['cname']} </option>";
            $this->getCate($mysql,$row['id'],$tablename,$flag);
        }

        return $this->str;
    }
}
