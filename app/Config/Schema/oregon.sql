

DROP TABLE IF EXISTS `chi_360days`.`posts`;
DROP TABLE IF EXISTS `chi_360days`.`users`;


CREATE TABLE `chi_360days`.`posts` (
	`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`theloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`image` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`body` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

CREATE TABLE `chi_360days`.`users` (
	`id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`role` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

