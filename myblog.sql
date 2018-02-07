-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-26 11:13:11
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `author` varchar(30) NOT NULL COMMENT '作者',
  `keywords` varchar(100) NOT NULL COMMENT '关键词',
  `des` varchar(300) NOT NULL COMMENT '描述',
  `pic` varchar(200) DEFAULT NULL COMMENT '文章图片',
  `rem` mediumint(5) NOT NULL COMMENT '推荐:0不推荐,1一级推荐,2二级推荐',
  `num` int(11) NOT NULL DEFAULT '1' COMMENT '文章阅读量',
  `content` text NOT NULL COMMENT '内容',
  `url` varchar(200) NOT NULL COMMENT '演示url',
  `cateid` mediumint(5) NOT NULL COMMENT '所属栏目id',
  `subtime` varchar(20) NOT NULL COMMENT '提交时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `keywords`, `des`, `pic`, `rem`, `num`, `content`, `url`, `cateid`, `subtime`) VALUES
(1, '爱自己是终生浪漫的开始', 'Mr.Wu', '开始', 'the whole of life becomes an act of letting go, but what always hurts the most is not taking a moment to say goodbye', '/Uploads/2017-05-26/59280a9a35d93.jpg', 5, 0, '&lt;h2 id=&quot;t_5f1f4dc70102e4j3&quot; class=&quot;titName SG_txta&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; color: rgb(119, 78, 167); font-size: 18px; font-family: 微软雅黑, 黑体; font-weight: 300; display: inline;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;十句经典生活哲理名言&lt;/h2&gt;&lt;p&gt;&amp;nbsp;&lt;span class=&quot;img2&quot; style=&quot;padding-top: 4px;&quot;&gt;&lt;img width=&quot;15&quot; height=&quot;15&quot; align=&quot;absmiddle&quot; title=&quot;此博文包含图片&quot; src=&quot;http://simg.sinajs.cn/blog7style/images/common/sg_trans.gif&quot; class=&quot;SG_icon SG_icon18&quot; style=&quot;margin: 0px 0px 0px 5px; padding: 0px; border: 0px; list-style: none; background-image: url(&amp;quot;../../../images/common/sg_icon.png?20131218&amp;quot;); background-position: 255px top; vertical-align: text-bottom;&quot;/&gt;	&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;1. I suppose in the end, the whole of life becomes an act of letting go, but what always hurts the most is not taking a moment to say goodbye. ——Life of Pi&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;到头来，生命是一场不断放下的旅程，最痛心莫过于来不及好好道别。——《少年派的奇幻漂流》&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;2. The best part of human languages, properly so called, is derived from reflection on the acts of the mind itself. ——Samuel Talyor Coleridge (1722-1834)&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;名副其实的所谓人类语言的最好部分，是源于心灵本身活动的反映。——柯勒律治&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;3. The reasonable man adapts himself to the world; the unreasonable one persists in trying to adapt the world to himself.&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;明白事理的人使自己适应世界，不明事理的人想使世界适应自己。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;4. It&amp;#39;s true that we don&amp;#39;t know what we&amp;#39;ve got until we lose it, but it&amp;#39;s also true that we don&amp;#39;t know what we&amp;#39;ve been missing until it arrives.&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;的确只有当我们失去时才知道曾经拥有的是什么，同样，只有当我们拥有了才知道曾经失去了什么。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;5. Sometimes affection is a shy flower that takes time to blossom.——Becoming Jane&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;有时候爱情是朵含蓄的花，需要时间才能怒放。——《成为简·奥斯汀》&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;6. In one minute you can&amp;nbsp;&lt;wbr/&gt;change your attitude and in that minute you can change your entire day.&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;改变心态只需一分钟，而这一分钟却能改变一整天。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;7. Anyone who takes himself too seriously always runs the risk of looking ridiculous; anyone who can consistently laugh at himself does not.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p&gt;自以为是的人难免会显得滑稽可笑；而能经常自嘲的人则不然。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p&gt;8. Ask yourself whether you are happy, and you cease to be so.——John Stuart Mill&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;问问你自己是否幸福，你就不会再这样。——穆勒&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;9. An honest tale speeds best being plainly told.——Richard III&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;坦率地讲述一件真心实意的事情，是最能打动人心的。——《理查三世》&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;&amp;nbsp;&lt;wbr/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;10. I have a dream that one day this nation will rise up, live out the true meaning of its creed: we hold these truths to be self-evident, that all men are created equal.——Marting Luther King&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; padding: 0px; border: 0px; list-style: none; word-wrap: normal; word-break: normal; line-height: 21px;&quot;&gt;我有一个梦想，某一天，这个国家会站立起来，真正实现其信条的真谛：我们认为这些真理是无可争辩的：人人生而平等。——马丁·路德·金&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '', 8, '1481796378');

-- --------------------------------------------------------

--
-- 表的结构 `cate`
--

CREATE TABLE `cate` (
  `id` mediumint(5) NOT NULL,
  `catename` varchar(100) NOT NULL COMMENT '栏目名',
  `type` mediumint(5) NOT NULL DEFAULT '1' COMMENT '栏目类型:1新闻,2视觉,3娱乐,4新闻子,5视觉子',
  `sort` mediumint(5) NOT NULL DEFAULT '50' COMMENT '排序',
  `nav_show` mediumint(5) NOT NULL DEFAULT '0' COMMENT '是否导航显示',
  `cate_pic` varchar(200) DEFAULT NULL COMMENT '栏目图片',
  `keywords` varchar(100) NOT NULL COMMENT '关键词',
  `des` text NOT NULL COMMENT '描述',
  `parentid` mediumint(5) NOT NULL COMMENT '上级栏目id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cate`
--

INSERT INTO `cate` (`id`, `catename`, `type`, `sort`, `nav_show`, `cate_pic`, `keywords`, `des`, `parentid`) VALUES
(1, '学无止境', 1, 1, 1, NULL, '', '', 0),
(2, 'PHP', 1, 50, 0, NULL, '', '', 1),
(3, 'mysql', 1, 50, 0, NULL, '', '', 1),
(4, 'js/ajax', 1, 50, 0, NULL, '', '', 1),
(5, 'linux', 1, 50, 0, NULL, '', '', 1),
(6, 'css/html', 1, 50, 0, NULL, '', '', 1),
(7, 'IIS', 1, 50, 0, NULL, '', '', 1),
(8, '随笔', 2, 2, 1, NULL, '', '', 0),
(9, '图库', 3, 3, 1, NULL, '', '', 0),
(10, '存档', 4, 4, 1, NULL, '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `content_logo`
--

CREATE TABLE `content_logo` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL COMMENT '后台首页内容',
  `logo_pic` varchar(200) DEFAULT NULL COMMENT '网站logo图片'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `content_logo`
--

INSERT INTO `content_logo` (`id`, `content`, `logo_pic`) VALUES
(1, '&lt;p&gt;&lt;span style=&quot;color: rgb(93, 93, 93); font-family: 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);&quot;&gt;我们可以耐心等，幸福可以来的慢一些，只要它是真的。人生的路，走走停停是一种闲适，边走边看是一种优雅，边走边忘是一种豁达。没有不会谢的花，没有不会退的浪，没有不会暗的光，没有不会好的伤，没有不会停下来的绝望。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(93, 93, 93); font-family: 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(93, 93, 93); font-family: 微软雅黑; font-size: 14px; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;--------------------------------------------等你,一起.&lt;/span&gt;&lt;/p&gt;', '/Uploads/2017-05-25/5926457a9d91d.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `image`
--

CREATE TABLE `image` (
  `id` mediumint(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(250) NOT NULL,
  `time` varchar(20) NOT NULL,
  `artid` mediumint(5) NOT NULL,
  `pic` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `image`
--

INSERT INTO `image` (`id`, `title`, `des`, `time`, `artid`, `pic`) VALUES
(15, 'banner4', 'banner4', '1495796528', 1, '/Uploads/2017-05-26/59280b305edd3.jpg'),
(12, 'banner1', 'banner1', '1495796458', 1, '/Uploads/2017-05-26/59280aea2965b.jpg'),
(13, 'banner2', 'banner2', '1495796485', 1, '/Uploads/2017-05-26/59280b0504c6b.jpg'),
(14, 'banner3', 'banner3', '1495796499', 1, '/Uploads/2017-05-26/59280b130fc33.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `link`
--

CREATE TABLE `link` (
  `id` mediumint(5) NOT NULL,
  `linkname` varchar(50) NOT NULL,
  `linkurl` varchar(150) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '50'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `login_log`
--

CREATE TABLE `login_log` (
  `id` mediumint(9) NOT NULL,
  `username` varchar(20) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL COMMENT '登录地址',
  `ip` varchar(20) NOT NULL COMMENT '登录真实ip',
  `head_pic` varchar(200) NOT NULL,
  `time` varchar(20) NOT NULL COMMENT '登录时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `login_log`
--

INSERT INTO `login_log` (`id`, `username`, `realname`, `address`, `ip`, `head_pic`, `time`) VALUES
(1, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494066019'),
(2, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494066192'),
(3, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494066599'),
(4, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494066615'),
(5, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494066625'),
(6, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494066632'),
(7, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494066640'),
(8, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494069248'),
(9, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494069256'),
(10, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494069263'),
(11, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494069270'),
(12, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494504349'),
(13, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494504409'),
(14, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494504484'),
(15, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494554466'),
(16, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494646430'),
(17, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494647321'),
(18, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494647354'),
(19, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494648621'),
(20, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494648677'),
(21, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494648850'),
(22, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494649574'),
(23, 'admin222', 'xiaoming2', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-05/590c46eb30391.jpg', '1494738223'),
(24, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494738353'),
(25, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494811301'),
(26, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494904587'),
(27, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1494994010'),
(28, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1495081776'),
(29, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1495088931'),
(30, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1495156641'),
(31, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1495423647'),
(32, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1495423860'),
(33, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1495611283'),
(34, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1495676492'),
(35, 'admin', '小明', '湖北武汉', '127.0.0.1', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1495787076');

-- --------------------------------------------------------

--
-- 表的结构 `msg`
--

CREATE TABLE `msg` (
  `id` mediumint(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pic` varchar(300) DEFAULT NULL COMMENT '游客头像',
  `content` text NOT NULL,
  `artid` mediumint(5) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `privilege`
--

CREATE TABLE `privilege` (
  `id` mediumint(5) NOT NULL,
  `pri_name` varchar(30) NOT NULL COMMENT '权限名称',
  `mname` varchar(20) NOT NULL COMMENT '模块名',
  `cname` varchar(20) NOT NULL COMMENT '控制器名',
  `aname` varchar(20) NOT NULL COMMENT '方法名',
  `parentid` mediumint(5) NOT NULL COMMENT '上级权限'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `privilege`
--

INSERT INTO `privilege` (`id`, `pri_name`, `mname`, `cname`, `aname`, `parentid`) VALUES
(1, '栏目管理', 'Admin', 'Cate', 'lst', 0),
(2, '栏目添加', 'Admin', 'Cate', 'add', 1),
(8, '文章管理', 'Admin', 'Article', 'lst', 0),
(9, '文章修改', 'Admin', 'Article', 'edit', 8),
(5, '栏目修改', 'Admin', 'Cate', 'edit', 1),
(10, '文章添加', 'Admin', 'Article', 'add', 8),
(11, '文章删除', 'Admin', 'Article', 'del', 8),
(12, '登录日志查看', 'Admin', 'Log', 'login_log', 0),
(13, '网站设置管理', 'Admin', 'System', 'index', 0),
(14, '友情链接管理', 'Admin', 'Link', 'lst', 0),
(15, '添加友情链接', 'Admin', 'Link', 'add', 14),
(16, '修改友情链接', 'Admin', 'Link', 'edit', 14),
(17, '删除友情链接', 'Admin', 'Link', 'del', 14),
(18, '友情链接排序', 'Admin', 'Link', 'linksort', 0);

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE `role` (
  `id` mediumint(5) NOT NULL,
  `rolename` varchar(30) NOT NULL,
  `pri_id_list` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `rolename`, `pri_id_list`) VALUES
(1, '超级管理员', '*'),
(2, '栏目管理员', '1,2,5'),
(3, '文章管理员', '8,9,10,11'),
(4, '栏目文章管理员', '1,2,5,8,9,10,11');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` mediumint(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `realname` varchar(30) NOT NULL COMMENT '真实姓名',
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `head_pic` varchar(100) DEFAULT NULL COMMENT '头像',
  `reg_time` varchar(30) NOT NULL COMMENT '注册时间',
  `roleid` mediumint(5) NOT NULL COMMENT '角色id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `realname`, `email`, `phone`, `password`, `head_pic`, `reg_time`, `roleid`) VALUES
(1, 'admin', '小明', 'admin@admin.com', '13566667777', 'e10adc3949ba59abbe56e057f20f883e', '/Uploads/2017-05-06/590d7f00c5e92.jpg', '1433966911', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_logo`
--
ALTER TABLE `content_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `cate`
--
ALTER TABLE `cate`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `content_logo`
--
ALTER TABLE `content_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `image`
--
ALTER TABLE `image`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `link`
--
ALTER TABLE `link`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `login_log`
--
ALTER TABLE `login_log`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- 使用表AUTO_INCREMENT `msg`
--
ALTER TABLE `msg`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- 使用表AUTO_INCREMENT `role`
--
ALTER TABLE `role`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
