/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : test_print

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-11-06 16:31:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `salary` double(10,2) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sal` (`salary`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of members
-- ----------------------------
