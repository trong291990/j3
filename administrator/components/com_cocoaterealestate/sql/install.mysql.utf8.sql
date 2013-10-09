DROP TABLE IF EXISTS `#__cocoaterealestate_objects`;
 
CREATE TABLE `#__cocoaterealestate_objects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ordering` int(10) unsigned NOT NULL DEFAULT '0',
  `image` varchar(255)  NOT NULL DEFAULT '',
  `meta_descr` varchar(250) DEFAULT NULL,
  `meta_keys` varchar(250) DEFAULT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `description` text,
  `city` varchar(100) NOT NULL DEFAULT '',
  `zip` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(100) NOT NULL DEFAULT '',
  `price` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
 
 INSERT INTO `#__cocoaterealestate_objects`  VALUES(1, 42, '2011-11-29 15:39:10', 1, 0, 'http://farm4.staticflickr.com/3100/2724105775_4d039b4127.jpg', NULL, NULL, 'First House', 'Sed id leo metus, ut mollis mi. Etiam malesuada ornare felis, vel imperdiet eros cursus sollicitudin. Nulla viverra, neque sodales porttitor accumsan, felis purus varius libero, eu posuere odio risus ac nisl. Proin quis eros ipsum, sit amet pretium eros? Proin at purus cras amet.\r\n', 'Fitou', '11510', 'France', 85000);

INSERT INTO `#__cocoaterealestate_objects` VALUES(2, 42, '2011-11-29 15:39:10', 1, 0, 'http://farm6.staticflickr.com/5298/5489897350_eaf091d99b.jpg', NULL, NULL, 'Second House', 'bumsclabe laber Sed id leo metus, ut mollis mi. Etiam malesuada ornare felis, vel imperdiet eros cursus sollicitudin. Nulla viverra, neque sodales porttitor accumsan, felis purus varius libero, eu posuere odio risus ac nisl. Proin quis eros ipsum, sit amet pretium eros? Proin at purus cras amet.\r\n', 'Fitou', '11510', 'France', 100000);

