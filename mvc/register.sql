/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : register

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-05-22 21:34:15
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `info`
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', 'modi', 'bixa', 'admin', 'admin');
INSERT INTO `info` VALUES ('2', 'abc', 'admin', 'abc@gmail.com', '123456');
INSERT INTO `info` VALUES ('3', 'ABC', 'DEF', 'a@gmail.com', '123456');

-- ----------------------------
-- Table structure for `report`
-- ----------------------------
DROP TABLE IF EXISTS `report`;
CREATE TABLE `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of report
-- ----------------------------
INSERT INTO `report` VALUES ('1', '1', 'riki', 'fork', '0');
INSERT INTO `report` VALUES ('2', '2', 'kun', 'ship', '0');
INSERT INTO `report` VALUES ('3', '3', 'furi', 'travel', '1');
INSERT INTO `report` VALUES ('4', '2', 'congkhuong', 'tra', '0');
INSERT INTO `report` VALUES ('5', '3', 'tttttttttt', 'CCCCCCCCCCC', null);
INSERT INTO `report` VALUES ('6', '2', 'qqqqqqq', 'wwwwwww', null);
INSERT INTO `report` VALUES ('7', '2', 'tttttttttt', 'CCCCCCCCCCC', null);
INSERT INTO `report` VALUES ('8', '1', 'qqqqqqq', 'CCCCCCCCCCC', null);
INSERT INTO `report` VALUES ('9', '2', 'aaaaaaaaaaaa', 'bbbbbbbbbbbbb', null);
INSERT INTO `report` VALUES ('10', '1', 'ggggggg', 'ggggggggggg', null);

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'kun', 'ka', 'admin', 'admin', '1');
INSERT INTO `user` VALUES ('2', 'Jonh', 'ka', 'lead', 'lead', '2');
INSERT INTO `user` VALUES ('3', 'Jonh', 'phi', 'user', 'user', '3');
