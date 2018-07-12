# npm

### 初始化
- npm init
- npm init —yes

### 安装包
- npm install package
- npm install package -g
- npm install package@v
- npm install package@latest
- npm install package”>=0.1.0 <0.2.0”

### 切换源
- npm install nrm -g
- nrm ls
- nrm use cnpm
- cnpm install package

- npm install cnpm -g
- cnpm install jquery

# node语法

### 存在
- fs.existsSync

### 文件
- 写 fs.writeFile.fs

### 目录
- 创建 fs.mkdir  fs.mkdierSync
- 删除 fs.rmdir  fs.rmdirSync  空目录
- 修改 fs.rename  fs.renameSync(oldpath,newpath)
- 读  fs.readdir  fs.readdirSync
