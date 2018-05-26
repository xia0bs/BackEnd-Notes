> 表

```
查询
什么 哪张表
select * from users
```
```
修改
表 哪条信息 哪个字段
update tablename set 字段 = 值 while 条件
```
```
插入
表 字段 值 
insert into 表名 （字段1，字段2.....） values（值1，值2.....）
```
```
删除
delete from 表名 where 条件
```

命令：

```
show databases;
use wuif1803()库名;
show tables;
select * from user;(全部的)
select username from user;(一项)
insert into user (id,username,password)
value(5,"张三","密码")

```

PHP操作数据库：
```
1. 连接数据库
   判断是否连接成功
2. sql语句
3. 查询
4. 对比
```
```
$mysql = new mysqli(host:'localhost',username:'root',passwd:'',dbname:'',port:3306);
if($mysql->connect_errno){
    echo '数据库连接失败' . $mysql->connect_errno;
    exit();
}

$mysql->query(query:'set names utf8');

$sql = "select * from users";

$data = $mysql->query($sql)->fetch_all(resulttype:MYSQL_ASSOC);

for($i=0;$i<count($data);$i++){

    /*$data[$i]['username']   $data[$i]['password']*/
    
    if($data[$i]['username'] == $user && $data[$i]['password'] == $pass){
        echo 'success';
        exit();
    }
}

echo 'fail';
```
