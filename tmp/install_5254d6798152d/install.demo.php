<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

function com_install()
{
$db=JFactory::getDBO();
$command=explode("#","drop table if exists demo_list#
CREATE TABLE `demo_list` (`id` int(11) NOT NULL auto_increment,`name` varchar(255) NOT NULL,`age` int(2) NOT NULL default '1',`state` int(11) NOT NULL default '1',PRIMARY KEY  (`id`)) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8#
INSERT INTO `demo_list` VALUES ('', 'Valentino',20,0)#
INSERT INTO `demo_list` VALUES ('', 'Mina',21,1)#
INSERT INTO `demo_list` VALUES ('', 'Nguyễn Hiền',22,0)#
INSERT INTO `demo_list` VALUES ('', 'Rio Flex',20,0)#
INSERT INTO `demo_list` VALUES ('', 'Umin',19,1)#
INSERT INTO `demo_list` VALUES ('', 'Rebecca',18,1)#
INSERT INTO `demo_list` VALUES ('', 'Fred',25,0)#
INSERT INTO `demo_list` VALUES ('', 'Alex',26,0)#
INSERT INTO `demo_list` VALUES ('', 'Natasa',27,1)#
INSERT INTO `demo_list` VALUES ('', 'Uno Red',22,0)#
INSERT INTO `demo_list` VALUES ('', 'Olili',20,1)#
INSERT INTO `demo_list` VALUES ('', 'Van Kilmer',20,0)#
INSERT INTO `demo_list` VALUES ('', 'Alien',20,1)#
INSERT INTO `demo_list` VALUES ('', 'Spring',20,1)#
INSERT INTO `demo_list` VALUES ('', 'Val Killer',20,0)#
INSERT INTO `demo_list` VALUES ('', 'Vido',20,1)");
for($i=0,$n=count($command);$i<$n;$i++)
{
	$db->setQuery($command[$i]);
	if(!$db->query())
	{
	echo "<script>alert('Lỗi dữ liệu tại dòng thứ ".($i+1)."---> ".addslashes($db->stderr())."<-------\nNội dung : $command[$i]');document.history.go(-1);</script>"; 
	exit();
		
	}
}
	?>
	<div class="header">Demo truy vấn dữ liệu dùng cho Joomla 1.5!</div>
	<p>
	Tạo Bảng dữ liệu demo_list có 4 trường.<br>id: int(11) NOT NULL auto_increment<br>name: varchar(255) NOT NULL<br>age: int(2) NOT NULL default '1'<br>state: int(11) NOT NULL default '1'<br>PRIMARY KEY: id.
	<p>
	Đã cài đặt thành công Demo !<br>
	Phiên bản 1.0 do Phạm trương hồng ngân phát triển.
	</p>
<?php
}

?>