<?php
$files = $_FILES['files'];
/*var_dump($files);
exit();*/
for($i=0;$i<count($files['name']);$i++){
    if(is_uploaded_file($files['tmp_name'][$i])){
        if(!file_exists('upload')){
            mkdir('upload');
        }
        $time = date('y-m-d');
        if(!file_exists('upload/'.$time)){
            mkdir('upload/'.$time);
        }

        $name = time().mt_rand(0,100);
        $type = explode('.',$files['name'][$i])[1];
        $filename = $name.'.'.$type;
        $path = 'upload/'.$time.'/'.$filename;
        move_uploaded_file($files['tmp_name'][$i],$path);
    }


}


