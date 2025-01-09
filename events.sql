/*
Navicat MySQL Data Transfer
Source Host     : localhost:3306
Source Database : test
Target Host     : localhost:3306
Target Database : test
Date: 2021-11-19 14:04:37
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `id` int(12) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('000000000001', 'Mustafa', 'Dargon Bull ', 'The Dragon Bull Monster Start At : 7.43 PM End 8.43 PM          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'images/events/ev.png');
INSERT INTO `events` VALUES ('000000000002', 'rew', 'Bull ', 'ter Start At : 7.43 PM End 8.43 PM          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'images/events/ev.png');
