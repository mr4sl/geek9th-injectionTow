/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : syc10ver_xpy

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-10-10 17:59:44
*/

create database `syc10ver_xpy` DEFAULT CHARACTER SET utf8 collate utf8_general_ci;


use syc10ver_xpy;

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fl4g
-- ----------------------------
DROP TABLE IF EXISTS `fl4g`;
CREATE TABLE `fl4g` (
  `easyflag` varchar(100) DEFAULT NULL,
  KEY `easyflag` (`easyflag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fl4g
-- ----------------------------
INSERT INTO `fl4g` VALUES ('SYC{syc10ver_b40_jiA0_Ba0_Hu1_bao_f3N_PE1}');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL,
  `lucknum` varchar(1000) DEFAULT NULL,
  `whatup` varchar(800) DEFAULT NULL,
  UNIQUE KEY `username` (`username`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2222', '934b535800b1cba8f96a5d72f72f1611', '2222', '2222');
INSERT INTO `user` VALUES ('3333', '2be9bd7a3434f7038ca27d1918de58bd', '333', '333');
