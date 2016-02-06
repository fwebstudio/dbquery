/*
Navicat MySQL Data Transfer

Source Server         : Local Server
Source Server Version : 50149
Source Host           : localhost:3306
Source Database       : sharedb

Target Server Type    : MYSQL
Target Server Version : 50149
File Encoding         : 65001

Date: 2011-07-27 11:53:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_gender`
-- ----------------------------
DROP TABLE IF EXISTS `t_gender`;
CREATE TABLE `t_gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_gender_desc` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_gender
-- ----------------------------
INSERT INTO `t_gender` VALUES ('1', 'Laki-laki');
INSERT INTO `t_gender` VALUES ('2', 'Perempuan');

-- ----------------------------
-- Table structure for `t_status`
-- ----------------------------
DROP TABLE IF EXISTS `t_status`;
CREATE TABLE `t_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_status_desc` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_status
-- ----------------------------
INSERT INTO `t_status` VALUES ('1', 'Belum Menikah');
INSERT INTO `t_status` VALUES ('2', 'Menikah');
INSERT INTO `t_status` VALUES ('3', 'Duda');
INSERT INTO `t_status` VALUES ('4', 'Janda');
INSERT INTO `t_status` VALUES ('5', 'Gak Jelas');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(25) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_gender` int(11) DEFAULT '1',
  `c_status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', 'Sri Sumarsih', 'sri@yahoo.cm', '0', '2');
INSERT INTO `t_user` VALUES ('2', 'Fulan bin Fulan', 'fulan@fulan.com', '1', '1');
INSERT INTO `t_user` VALUES ('3', 'Yuni Shara', 'yuni@shara.com', '2', '1');
INSERT INTO `t_user` VALUES ('4', 'Rudi Wowor', 'rudi@wowor.com', '2', '1');
INSERT INTO `t_user` VALUES ('5', 'Burhannudin Marsose', 'burhan@yahoo.com', '1', '1');
