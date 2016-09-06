/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : wgyt

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-09-06 17:53:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for property
-- ----------------------------
DROP TABLE IF EXISTS `property`;
CREATE TABLE `property` (
  `Id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `propertyid` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `img1` varchar(64) DEFAULT NULL,
  `img2` varchar(64) DEFAULT NULL,
  `img3` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of property
-- ----------------------------
INSERT INTO `property` VALUES ('2', '222', '管理员 ', '13520955372', '北京市朝阳区 ', '57bbfc20ba287.jpg', '57bbfc20bb227.jpg', '57bbfc20bbde0.jpg');
INSERT INTO `property` VALUES ('16', '1', '管理员 ', '13520955372', '北京市朝阳区 ', '20160726151856158.JPG', '20160726151856158.JPG', '20160726151856158.JPG');
INSERT INTO `property` VALUES ('18', '1', '管理员 ', '13520955372', '北京市朝阳区 ', '20160726151856158.JPG', '20160726151856159.JPG', '20160726151856158.JPG');
INSERT INTO `property` VALUES ('19', '1', '管理员 ', '13520955372', '北京市朝阳区 ', '20160726151856158.JPG', '20160726151856158.JPG', '20160726151856158.JPG');
INSERT INTO `property` VALUES ('20', '1', '管理员 ', '13520955372', '北京市朝阳区 ', '20160726151856158.JPG', '20160726151856158.JPG', '20160726151856158.JPG');
INSERT INTO `property` VALUES ('71', '22', '22', '22', '22', null, null, '');
INSERT INTO `property` VALUES ('72', '33333', '333333', '33333333', '3333', '57b6c402b6b17.jpg', '', '');
INSERT INTO `property` VALUES ('75', '333333', '自主城', '13520955374', '朝阳区111', '57bc1e7f9ee13.jpg', '57bc1e7f9fdb3.jpg', '57bc1e7fa096b.jpg');
INSERT INTO `property` VALUES ('76', '222222', '啊啊士大夫', '13520955374', '自主城', '57bc1f888b62b.jpg', '', '');
INSERT INTO `property` VALUES ('77', '0000', '0000', '00000', '0000', '57bc2247addcd.jpg', '', '');
INSERT INTO `property` VALUES ('79', '0000', '0000', '00000', '0000', '57bc226ddd455.jpg', '', '');
INSERT INTO `property` VALUES ('81', '0000000', '0000000', '00000', '00000', '57bc257bee8a1.jpg', '57bc257bef841.jpg', '');
INSERT INTO `property` VALUES ('82', '0000000', '0000000', '00000', '00000', '57bc25e911299.jpg', '57bc25e912239.jpg', '');
INSERT INTO `property` VALUES ('83', '0000000', '0000000', '00000', '00000', '57bc262d61f35.jpg', '57bc262d62ed5.jpg', '');
INSERT INTO `property` VALUES ('84', '0000000', '0000000', '00000', '00000', '57bc267cf0e85.jpg', '57bc267cf220e.jpg', '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  `propertyid` varchar(50) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT '1',
  `address` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `authcode` varchar(6) DEFAULT NULL,
  `createtime` date DEFAULT NULL,
  `usertype` int(11) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', '111', '222', '20002700004', '1', '北京市2', 'upload/20160717122358.png', '1', '2016-08-15', '9', '235b2e288562db0a15e3d73dc2d6c2d7', '22222222222');
INSERT INTO `users` VALUES ('3', '4', '4', '20002700005', '1', '北京市3', 'upload/20160717122358.png', '1', '2016-08-15', '9', '235b2e288562db0a15e3d73dc2d6c2d7', '33333333333');
INSERT INTO `users` VALUES ('5', '111', '5', '20002700007', '0', '北京市5', 'upload/20160717122358.png', '1', '2016-08-15', '9', '235b2e288562db0a15e3d73dc2d6c2d7', '54555555555');
INSERT INTO `users` VALUES ('6', null, null, null, '1', null, null, null, null, null, null, null);
INSERT INTO `users` VALUES ('9', null, '222222', '13520955372', '1', '北京市朝阳区 ', null, null, null, '9', '13520955372', null);
INSERT INTO `users` VALUES ('10', null, '0000000', '00000', '1', '00000', null, null, null, '9', '00000', null);
INSERT INTO `users` VALUES ('11', null, 'admin', 'admin', '1', 'admin', null, null, null, '9', 'admin', null);
