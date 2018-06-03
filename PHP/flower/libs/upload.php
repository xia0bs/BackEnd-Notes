<?php
// 移动文件    路径存储

/*
    [name] => 1c.jpg
    [type] => image/jpeg
    [tmp_name] => C:\wamp\tmp\php4300.tmp
    [error] => 0
    [size] => 16369
*/
/*
 *  前端
 *    form  post  form-data
 *    input file  name
 *  后台
 *    接受
 *     $_Files['']
 *    1、判断操作文件是否上传文件
 *        is_uploaded_file()
 *    2、上传路径  upload/18-05-29
 *        2.1  判断upload文件存在
 *             No  创建 mkdir
 *        2.2  日期目录
 *             格式化日期  date()
 *    3、移动
 *        move_uploaded_file(uploadfile,path)
 *        upload/18-05-29/filename
 *
 *        name  时间
 *        type  [name]
 *
 * */

class Upload{
    function __construct()
    {
       $this->str = '';
    }
    function upload($file){
        if (is_uploaded_file($file['tmp_name'])) {
            // 判断upload文件
            if (!file_exists('../upload')) {
                mkdir('../upload');
            }
            $time = date('y-m-d', time());
            if (!file_exists('../upload/' . $time)) {
                mkdir('../upload/' . $time);
            }
            // 哪个  移动  哪里 名字
            $name = time();
            // 字符串 -> 数组
            $type = explode('.',$file['name'])[1];
            $filename = $name.'.'.$type;
            $path = '../upload/' . $time . '/' . $filename;
            move_uploaded_file($file['tmp_name'], $path);
            $this->str = '/flower/upload/'.$time.'/'.$filename;
            return $this->str;
        }
    }
    function uploads($files){
        $imgurl = '';
        for($i=0;$i<count($files['name']);$i++){
            if(is_uploaded_file($files['tmp_name'][$i])){
                if(!file_exists('../upload')){
                    mkdir('../upload');
                }
                $time = date('y-m-d');
                if(!file_exists('../upload/'.$time)){
                    mkdir('../upload/'.$time);
                }
                $name = time().mt_rand(0,100);
                $type = explode('.',$files['name'][$i])[1];
                $filename = $name.'.'.$type;
                $path = '../upload/'.$time.'/'.$filename;
                move_uploaded_file($files['tmp_name'][$i],$path);
                $str = '/flower/upload/'.$time.'/'.$filename;
                $imgurl.=$str.',';
            }
        }
         $imgurl= substr($imgurl,0,-1);
        return $imgurl;
    }
}

