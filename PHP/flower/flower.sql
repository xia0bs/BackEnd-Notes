-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-05-31 09:49:16
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `engname` varchar(100) NOT NULL,
  `pid` int(10) NOT NULL,
  `template` varchar(100) NOT NULL COMMENT '栏目页对应模板'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `cname`, `engname`, `pid`, `template`) VALUES
(1, '花言花语', 'hyhy', 0, 'list'),
(2, '素馨动态', 'sxdt', 0, 'list'),
(9, '素馨商城', 'sxsc', 0, 'list_store'),
(13, '素馨花艺', 'sxhy', 0, 'list_flower');

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE `content` (
  `cid` int(10) NOT NULL,
  `ctitle` varchar(100) NOT NULL,
  `cdescription` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `thumb` varchar(500) NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hits` int(10) NOT NULL,
  `content` varchar(500) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`cid`, `ctitle`, `cdescription`, `author`, `thumb`, `ctime`, `hits`, `content`, `pid`) VALUES
(6, ' 最适合教师节的迷你花束', '在诸多的传统节日中，教师节是一个既令人肃然起敬又饱含慈爱深情的节日。自古以来就有“一日为师终身为父”的深刻思想流传，这不仅仅是因为教师这个神圣的岗位为祖国培养了无数栋梁之才，最重要的是作为启蒙者教育后人做人的道理，让一代又一代国人继承着善良、谦和、恭敬等优秀传统品德。所以教师这一职业一直享有“桃李满天下"的美..', '王亚楠', '/flower/upload/18-05-30/1527659569.jpg', '2018-05-30 05:52:49', 11, '/flower/upload/18-05-30/152765956988.jpg,/flower/upload/18-05-30/152765956984.jpg,/flower/upload/18-05-30/152765956951.jpg', 1),
(10, '桌花瓶插花', '这些争鲜斗艳的花朵如冬日深夜火焰般温暖，浓烈。火红色多头玫瑰、香橙色郁金香与紫罗兰碰撞穿插，浓缩成精致的盘花。', '王亚楠', '/flower/upload/18-05-31/1527733844.jpg', '2018-05-31 02:30:44', 20, '/flower/upload/18-05-31/152773384412.JPG,/flower/upload/18-05-31/152773384495.JPG,/flower/upload/18-05-31/152773384471.JPG,/flower/upload/18-05-31/15277338448.JPG,/flower/upload/18-05-31/152773384435.JPG', 13),
(7, ' 秋如黑天鹅般优雅的到来', '伴着街头偶尔飘落的黄叶，和着萧瑟的凉风划过脸颊的不忍，秋正如镜头中低吟的黑天鹅般优雅的到来，不声不响，悄然而至，很喜欢她的低调、她的优雅。初秋是一个需要被温暖的季节，恰巧有一些可人的花儿就是这样应景般出现。扶郎花，又名非洲菊、太阳花，就是那么恬静柔美的花儿，很符合秋的气质，秋的模样。', '王亚楠', '/flower/upload/18-05-30/1527660950.jpg', '2018-05-30 06:15:50', 15, '/flower/upload/18-05-30/152766095062.jpg,/flower/upload/18-05-30/152766095069.jpg,/flower/upload/18-05-30/152766095031.jpg', 1),
(8, ' 那些配材花的点睛之笔', ' 那些配材花的点睛之笔 在花艺作品的制作中一般都有三个板块融合穿插而成，她们分工明确而又密切合作，她们承认重点花材不可替代的核心地位，也尊重所谓配材花的衬托力量以及末级中心勾勒轮廓的枝叶。今天我们来欣赏那些配材花的魅力带给我们视觉的享受。市场上常见的配材花有满天星、水晶草、红豆、夕雾草、星辰花、须苞石竹，还有品种繁多的小菊，如孔雀菊...', '王亚楠', '/flower/upload/18-05-30/1527661009.jpg', '2018-05-30 06:16:49', 15, '/flower/upload/18-05-30/152766100985.jpg,/flower/upload/18-05-30/152766100916.jpg,/flower/upload/18-05-30/152766100996.jpg', 2),
(9, ' 绿萝的养护', '对于花友而言，绿萝可能是养在家中的第一盆绿植。她的新叶是夏日峰回路转的一簇簇清凉，而且大家似乎都看到了它净化空气的能力非常强。最主要的原因是现今我们素馨花卉出售的绿萝便宜又好养，备受人们的青睐与喜爱。花友养绿萝常见的问题大概有三个：1、浇水不当。绿萝是喜欢湿润土壤的植物，当盆内水分不够的时候，绿萝就会出现叶子发...', '王亚楠', '/flower/upload/18-05-30/1527661100.jpg', '2018-05-30 06:18:20', 20, '/flower/upload/18-05-30/152766110072.jpg,/flower/upload/18-05-30/152766110056.jpg,/flower/upload/18-05-30/152766110045.jpg,/flower/upload/18-05-30/152766110015.jpg', 9),
(11, '小彩瓷', '小彩瓷随意搭配小菊、康乃馨，即便不需要专业的花艺师，也能做出清新脱俗的感觉。', '张三', '/flower/upload/18-05-31/1527733844.jpg', '2018-05-31 02:30:44', 30, '/flower/upload/18-05-31/152773384412.JPG,/flower/upload/18-05-31/152773384495.JPG,/flower/upload/18-05-31/152773384471.JPG,/flower/upload/18-05-31/15277338448.JPG,/flower/upload/18-05-31/152773384435.JPG', 13),
(12, ' 插花花篮', '香槟玫瑰、红玫瑰配以红豆，几支康乃馨和黄莺，以手工编织花篮装饰，清新脱俗。', '王亚楠', '/flower/upload/18-05-31/1527734731.jpg', '2018-05-31 02:45:31', 15, '/flower/upload/18-05-31/152773473158.JPG,/flower/upload/18-05-31/152773473159.JPG,/flower/upload/18-05-31/152773473163.JPG,/flower/upload/18-05-31/152773473165.JPG', 13),
(13, '迷你花束', '迷你花束，简洁时尚，选择一束鲜花表达自己的情感，小小花束，大大心意。', '王亚楠', '/flower/upload/18-05-31/1527734903.jpg', '2018-05-31 02:48:23', 30, '/flower/upload/18-05-31/152773490339.JPG,/flower/upload/18-05-31/152773490391.JPG,/flower/upload/18-05-31/152773490356.JPG,/flower/upload/18-05-31/152773490349.JPG', 13);

-- --------------------------------------------------------

--
-- 表的结构 `manage`
--

CREATE TABLE `manage` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET ucs2 NOT NULL,
  `password` varchar(100) CHARACTER SET ucs2 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manage`
--

INSERT INTO `manage` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `content`
--
ALTER TABLE `content`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `manage`
--
ALTER TABLE `manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
