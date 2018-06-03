<?php

class unit
{

    function __construct()
    {
        $this->str = '';
    }

    //  string  boolean int float  array object  null  resource
    function getCate($mysql, $parentid, $tablename, $flag, $currentid = null)
    {
        // $currentid 父级栏目
       static $pid = null;
        if ($currentid) {
            $sql = "select pid from $tablename where id=$currentid";
            $pid = $mysql->query($sql)->fetch_assoc()['pid'];
        }
        $sql = "select * from $tablename where pid=$parentid";
        $data = $mysql->query($sql);
        $flag++;
        while ($row = $data->fetch_assoc()) {
            $str = str_repeat('-', $flag);
            // $row['id']
            if ($row['id'] == $pid) {
                $this->str .= "<option value=\"{$row['id']}\" selected>{$str}{$row['cname']}</option>";
            } else {
                $this->str .= "<option value=\"{$row['id']}\">{$str}{$row['cname']}</option>";
            }
            $this->getCate($mysql, $row['id'], $tablename, $flag,$currentid=null);

        }
        return $this->str;
    }

}