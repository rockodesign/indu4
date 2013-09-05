/*
Navicat MySQL Data Transfer

Source Server         : Rocko
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : indu4

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-08-30 01:56:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `delegados`
-- ----------------------------
DROP TABLE IF EXISTS `delegados`;
CREATE TABLE `delegados` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `curso` varchar(40) DEFAULT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of delegados
-- ----------------------------
INSERT INTO `delegados` VALUES ('4', 'ramita', 'probando', 'Delegado');
INSERT INTO `delegados` VALUES ('5', 'retter', '5to Informatica', 'Delegado');
INSERT INTO `delegados` VALUES ('9', 'Franco Herrera', '6to InformÃ¡tica', 'Delegado');
INSERT INTO `delegados` VALUES ('10', 'Rockito querido', '5to Informatica', 'Sub Delegado');
INSERT INTO `delegados` VALUES ('11', 'Brian Medina', '5to Construcciones', 'Delegado');
INSERT INTO `delegados` VALUES ('12', 'Ezequiel Mendoza', '6to InformÃ¡tica', 'Sub Delegado');
INSERT INTO `delegados` VALUES ('13', 'Gian Bucci', '3ro 5ta', 'Sub Delegado');
INSERT INTO `delegados` VALUES ('14', 'Nuevo Delegado', '2do 3ra', 'Delegado');
INSERT INTO `delegados` VALUES ('15', 'Nuevo pibe', '2do 3ra', 'Sub Delegado');
INSERT INTO `delegados` VALUES ('16', 'Completar Datos', '1ro 7ma', 'Delegado');
INSERT INTO `delegados` VALUES ('17', 'Gianfranco Mele', '3ro 4ta', 'Sub Delegado');
INSERT INTO `delegados` VALUES ('18', 'Nico AcuÃ±a', '2do 1ra', 'Sub Delegado');
INSERT INTO `delegados` VALUES ('19', 'Rodrigo Martinez', '4to Electronica', 'Delegado');
INSERT INTO `delegados` VALUES ('20', 'Luisito Lopez', '6to Electronica', 'Delegado');
INSERT INTO `delegados` VALUES ('21', 'Ramiro Perez', '1ro 2da', 'Delegado');
INSERT INTO `delegados` VALUES ('22', 'John Lennon', '1ro 1ra', 'Sub Delegado');
INSERT INTO `delegados` VALUES ('23', 'Huguito', '3ro 6ta', 'Sub Delegado');

-- ----------------------------
-- Table structure for `futbol`
-- ----------------------------
DROP TABLE IF EXISTS `futbol`;
CREATE TABLE `futbol` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `jugador` varchar(50) DEFAULT NULL,
  `curso` varchar(50) DEFAULT NULL,
  `edad` double(2,0) DEFAULT NULL,
  `categoria` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of futbol
-- ----------------------------
INSERT INTO `futbol` VALUES ('22', 'Ezequiel Mendoza', '6to Informatica', '18', 'Sub19');
INSERT INTO `futbol` VALUES ('23', 'David Barrientos', '5to Electromecanica', '18', 'Sub19');
INSERT INTO `futbol` VALUES ('24', 'Jonathan Arismendi', '6to Electromecanica', '19', 'Sub19');
INSERT INTO `futbol` VALUES ('25', 'Leonardo Oyarzo', '6to Electromecanica', '20', 'Sub19');
INSERT INTO `futbol` VALUES ('26', 'Alan Arismendi', '4to Electromecanica', '17', 'Sub19');
INSERT INTO `futbol` VALUES ('27', 'Gonzalo Bahamonde', '6to Electromecanica', '19', 'Sub19');
INSERT INTO `futbol` VALUES ('28', 'Cristian Barrientos', '5to Construcciones', '18', 'Sub19');
