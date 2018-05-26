项目结构：

```
📁admin （后台）

📁index （前台）

📁static （静态资源）

📁template  （界面）
   📁admin  （后台界面）
       index.html （首页）
   📁index  （前台界面）

admin.php   （后台验证）
index.php   （前台验证）
```

> admin.php

```
header('location:admin/login.php');
```

> login.php

```
//登录页面
//验证

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    //登录页面
    include '../template/admin/login.html';
}else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //信息验证
    echo '验证';
}
```
> index.html
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    这是后台登录界面
    <form action="login.php" method="post">
        <input type="text" value="用户名">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
```
