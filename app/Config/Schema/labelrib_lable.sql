/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : labelrib_lable

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-04 10:23:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `overview` text COLLATE utf8_unicode_ci,
  `specification` text COLLATE utf8_unicode_ci,
  `reviews` text COLLATE utf8_unicode_ci,
  `link_download` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `certificate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8_unicode_ci,
  `seo_keyword` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Shure KSE 15000', 'Audio Technica ATH AD900X', 'abc, hung, hungb4by', null, null, null, null, null, 'http://localhost/label-ribbon/', '', null, 'tai nghe urbeats, tai nghe rose gold, tai nghe xịn', '2016-05-18 18:05:49', '2016-05-18 18:05:49');
INSERT INTO `products` VALUES ('2', 'AKG K420 (Light Blue)', 'AKG K420 (Light Blue)AKG K420 (Light Blu', 'AKG', null, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh orci, commodo at mi non, ullamcorper elementum mauris. Fusce posuere sodales erat sed posuere. Integer sollicitudin, sem nec lobortis hendrerit, risus ante venenatis lacus, ut imperdiet ipsum ipsum.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nibh orci, commodo at mi non, ullamcorper elementum mauris. Fusce posuere sodales erat sed posuere. Integer sollicitudin, sem nec lobortis hendrerit, risus ante venenatis lacus, ut imperdiet ipsum ipsum ac arcu. Nunc sodales egestas tortor, id dapibus urna vulputate ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non odio sem. Proin id nunc cursus, tempus felis eu, accumsan felis. Donec commodo libero est, at lobortis ipsum congue ut.</p>\r\n', '<table>\r\n  <tbody>\r\n   <tr>\r\n      <td><strong>Living Area 1:</strong></td>\r\n      <td>22 x 24</td>\r\n    </tr>\r\n   <tr>\r\n      <td><strong>Living Area 2:</strong></td>\r\n      <td>14 x 24</td>\r\n    </tr>\r\n   <tr>\r\n      <td><strong>Dining Room:</strong></td>\r\n      <td>22 x 24</td>\r\n    </tr>\r\n   <tr>\r\n      <td><strong>Kitchen:</strong></td>\r\n      <td>22 x 24</td>\r\n    </tr>\r\n   <tr>\r\n      <td><strong>Master Bedroom:</strong></td>\r\n     <td>22 x 24</td>\r\n    </tr>\r\n </tbody>\r\n</table>\r\n', '<p>Nam non odio sem. Proin id nunc cursus, tempus felis eu, accumsan felis. Donec commodo libero est, at lobortis ipsum congue ut.</p>\r\n', 'http://localhost/label-ribbon/', '1246', '<p>Nam non odio sem. Proin id nunc cursus, tempus felis eu, accumsan felis. Donec commodo libero est, at lobortis ipsum congue ut.</p>\r\n', 'AKG, K420, 3KShop, Portable, Fodable', '2016-05-18 18:11:57', '2016-05-30 19:01:19');
INSERT INTO `products` VALUES ('3', 'Shure KSE 15000', 'Shure KSE 15000', 'Shure', null, '<p>Shure KSE 15000</p>\r\n', '<p>Shure KSE 15000</p>\r\n', '<p>Shure KSE 15000</p>\r\n', '<p>Shure KSE 15000</p>\r\n', 'dsd', 'sds', '<p>Shure KSE 15000</p>\r\n', 'Shure KSE 15000', '2016-05-18 18:41:09', '2016-05-30 19:02:03');
INSERT INTO `products` VALUES ('6', 'urBeats Rose Gold Edition', 'urBeats Rose Gold Edition', 'urBeats Rose Gold Edition', null, '<p>urBeats Rose Gold Edition</p>\r\n', '<p>urBeats Rose Gold Edition</p>\r\n', '<p>urBeats Rose Gold Edition</p>\r\n', '<p>urBeats Rose Gold Edition</p>\r\n', 'http://label-ribbon.vn/admin/product/add', '1246', '<p>urBeats Rose Gold Edition</p>\r\n', 'AKG, K420, 3KShop, Portable, Fodable', '2016-05-19 19:20:54', '2016-05-30 19:02:31');
INSERT INTO `products` VALUES ('7', 'urBeats Rose Gold Edition', 'urBeats Rose Gold Edition', 'urBeats Rose Gold Edition', null, '<p>urBeats Rose Gold Edition</p>\r\n', '<p>urBeats Rose Gold Edition</p>\r\n', '<p>urBeats Rose Gold Edition</p>\r\n', '<p>urBeats Rose Gold Edition</p>\r\n', 'http://label-ribbon.vn/admin/product/add', '1246', '<p>urBeats Rose Gold Edition</p>\r\n', 'AKG, K420, 3KShop, Portable, Fodable', '2016-05-19 19:22:05', '2016-05-30 19:02:17');
INSERT INTO `products` VALUES ('8', 'Audio Technica ATH AD900X', 'Audio Technica ATH AD900X', 'Audio Technica ATH AD900X', null, '<p>Audio Technica ATH AD900X</p>\r\n', '<p>Audio Technica ATH AD900X</p>\r\n', '<p>Audio Technica ATH AD900X</p>\r\n', '<p>Audio Technica ATH AD900X</p>\r\n', 'http://localhost/label-ribbon/', '1246', '<p>Audio Technica ATH AD900X</p>\r\n', 'Audio Technica ATH AD900X', '2016-05-19 19:23:27', '2016-05-30 19:01:36');
INSERT INTO `products` VALUES ('9', '1111111111', '111111', '1212', null, '<p>212</p>\r\n', '<p>12</p>\r\n', '<p>21</p>\r\n', '<p>21</p>\r\n', 'http://label-ribbon.local/admin/product/add', '1246', '<p>21</p>\r\n', '12qqqqq', '2016-05-19 19:29:29', '2016-05-30 19:01:03');
INSERT INTO `products` VALUES ('10', '3r23', '32f2', 'f32f', null, '<p>23f</p>\r\n', '<p>3</p>\r\n', '<p>32</p>\r\n', '<p>3</p>\r\n', 'http://localhost/label-ribbon/', '1246', '<p>23</p>\r\n', 'tai nghe urbeats, tai nghe rose gold, tai nghe xịn', '2016-05-19 19:33:54', '2016-05-20 12:40:48');
INSERT INTO `products` VALUES ('11', 'urBeats Rose Gold Edition', 'urBeats Rose Gold Edition', 'abc, hung, hungb4by', 'Tem nhãn,Tem in mã vạch,Ruy băng mã vạch,Ribbon wax,Ribbon wax rchin,Máy đọc mã thẻ,Thẻ treo', '', '', '', '', 'http://label-ribbon.local/admin/product/add', '1246', '', 'The Supremacy, Better Than Any Other Sound, high fidelity Burr-Brown', '2016-06-03 18:55:26', '2016-06-03 19:27:17');

-- ----------------------------
-- Table structure for product_images
-- ----------------------------
DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product_images
-- ----------------------------
INSERT INTO `product_images` VALUES ('1', '1', '052016\\3kshop-furutech-adl-h118.png', '2016-05-19 19:23:28', '2016-05-19 19:23:28');
INSERT INTO `product_images` VALUES ('6', '10', '052016\\3kshop-furutech-ADL-H118-4.jpg', '2016-05-19 19:33:54', '2016-05-19 19:33:54');
INSERT INTO `product_images` VALUES ('8', '10', '052016\\3kshop-furutech-ADL-H118-3 (1).jpg', '2016-05-20 12:40:48', '2016-05-20 12:40:48');
INSERT INTO `product_images` VALUES ('9', '9', '052016\\3kshop-furutech-ADL-H118-2.jpg', '2016-05-30 19:01:03', '2016-05-30 19:01:03');
INSERT INTO `product_images` VALUES ('10', '9', '052016\\3kshop-furutech-ADL-H118-3.jpg', '2016-05-30 19:01:03', '2016-05-30 19:01:03');
INSERT INTO `product_images` VALUES ('11', '2', '052016\\3kshop-furutech-ADL-H118-3 (1).jpg', '2016-05-30 19:01:19', '2016-05-30 19:01:19');
INSERT INTO `product_images` VALUES ('12', '8', '052016\\3kshop-furutech-adl-h118.png', '2016-05-30 19:01:36', '2016-05-30 19:01:36');
INSERT INTO `product_images` VALUES ('13', '3', '052016\\logoBD.png', '2016-05-30 19:02:03', '2016-05-30 19:02:03');
INSERT INTO `product_images` VALUES ('14', '7', '052016\\bd.png', '2016-05-30 19:02:17', '2016-05-30 19:02:17');
INSERT INTO `product_images` VALUES ('15', '6', '052016\\tuvanremcua.png', '2016-05-30 19:02:31', '2016-05-30 19:02:31');
INSERT INTO `product_images` VALUES ('16', '11', '062016\\rembachduogn1-30kxkplfeje34ri6ddr18q.jpg', '2016-06-03 18:55:26', '2016-06-03 18:55:26');
INSERT INTO `product_images` VALUES ('17', '11', '062016\\REMCUA11.jpg', '2016-06-03 18:55:26', '2016-06-03 18:55:26');
INSERT INTO `product_images` VALUES ('18', '11', '062016\\remdep.jpg', '2016-06-03 18:55:26', '2016-06-03 18:55:26');
INSERT INTO `product_images` VALUES ('19', '11', '062016\\tuvanremcua.png', '2016-06-03 18:55:26', '2016-06-03 18:55:26');

-- ----------------------------
-- Table structure for select_options
-- ----------------------------
DROP TABLE IF EXISTS `select_options`;
CREATE TABLE `select_options` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `column_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `select_code` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `display_order` int(4) NOT NULL,
  `display_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `perent_code` varchar(64) COLLATE utf8_unicode_ci DEFAULT '0',
  `memo` text COLLATE utf8_unicode_ci,
  `del_flag` varchar(1) COLLATE utf8_unicode_ci DEFAULT 'N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uni_key` (`column_name`,`select_code`,`display_name`),
  KEY `idx_column_name` (`column_name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of select_options
-- ----------------------------
INSERT INTO `select_options` VALUES ('1', 'category', '1', '1', 'Tem nhãn', '0', 'Tem nhãn', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('2', 'category', '2', '2', 'Tem in mã vạch', '1', 'Tem in mã vạch', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('3', 'category', '3', '3', 'Nhãn thực phẩm', '1', 'Nhãn thực phẩm', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('4', 'category', '4', '4', 'Nhãn mỹ phẩm', '1', 'Nhãn mỹ phẩm', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('5', 'category', '5', '5', 'Nhãn dược phẩm', '1', 'Nhãn dược phẩm', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('6', 'category', '6', '6', 'Nhãn điện tử', '1', 'Nhãn điện tử', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('7', 'category', '7', '7', 'Ruy băng mã vạch', '0', 'Ruy băng mã vạch', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('8', 'category', '8', '8', 'Ribbon wax', '2', 'Ribbon wax', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('9', 'category', '9', '9', 'Ribbon wax rchin', '2', 'Ribbon wax rchin', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('10', 'category', '10', '10', 'Ribbon rehin', '2', 'Ribbon rehin', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('11', 'category', '11', '11', 'Máy in mã thẻ', '0', 'Máy in mã thẻ', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('12', 'category', '12', '12', 'Máy đọc mã thẻ', '0', 'Máy đọc mã thẻ', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('13', 'category', '13', '13', 'Đầu in mã vạch', '0', 'Đầu in mã vạch', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');
INSERT INTO `select_options` VALUES ('14', 'category', '14', '14', 'Thẻ treo', '0', 'Thẻ treo', 'N', '2016-06-03 23:18:15', '2016-06-03 23:18:15');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_flag` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'N' COMMENT 'N',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- id: admin
-- pass: 12345678
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '$2a$10$FILNGi7E1tEWyK1UYjIWueXKGmE/B1t80EQ2zHrhRYAUuMq9rKDcy', 'admin', 'N', '2016-05-10 06:12:44', '2016-05-10 06:12:44');
