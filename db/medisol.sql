/*
 Navicat Premium Data Transfer

 Source Server         : locahost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : medisol

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 06/12/2021 11:46:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','apotek') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('04031a0f-308c-11ec-8f91-88d7f69998cf', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');
INSERT INTO `admin` VALUES ('16ef35de-309c-11ec-8f91-88d7f69998cf', 'wahyu', 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'apotek');
INSERT INTO `admin` VALUES ('289a1082-4da1-11ec-b1b9-88d7f69998cf', 'tes', 'tes', '6756088577abe3c76de3cf1bb0c04991', 'admin');
INSERT INTO `admin` VALUES ('2dc52291-4da1-11ec-b1b9-88d7f69998cf', 'awd', 'awd', '1f73402c644002a7ea3c9532e8ba4139', 'apotek');

-- ----------------------------
-- Table structure for apotek
-- ----------------------------
DROP TABLE IF EXISTS `apotek`;
CREATE TABLE `apotek`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `longitude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `langitude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `no_wa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of apotek
-- ----------------------------
INSERT INTO `apotek` VALUES ('013a07e1-30b1-11ec-8f91-88d7f69998cf', 'Apotek 1', 'Jln Alamat', '123456', '654321', '481942-PGSHOT-900.jpg', '');
INSERT INTO `apotek` VALUES ('0da1afa1-30b1-11ec-8f91-88d7f69998cf', 'Apotek 2', 'Alamat 2', '0', '01', 'photo_2021-10-25_16-05-29.jpg', '');
INSERT INTO `apotek` VALUES ('ffca4784-49b0-11ec-aba6-88d7f69998cf', 'Apotek Sejahtera', 'Jalan Mangaludi 021', '23124124', '12414142', 'Untitled-1.jpg', '');

-- ----------------------------
-- Table structure for lowongan
-- ----------------------------
DROP TABLE IF EXISTS `lowongan`;
CREATE TABLE `lowongan`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_apotek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `judul_lowongan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_awal` date NULL DEFAULT NULL,
  `tgl_akhir` date NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lowongan
-- ----------------------------
INSERT INTO `lowongan` VALUES ('44b7e73b-4f27-11ec-8fee-88d7f69998cf', '013a07e1-30b1-11ec-8f91-88d7f69998cf', 'adwadawda1231', '2021-11-11', '2021-11-27', '<p>dawdad</p>');
INSERT INTO `lowongan` VALUES ('b46862a8-4f24-11ec-8fee-88d7f69998cf', '013a07e1-30b1-11ec-8f91-88d7f69998cf', 'tes', '2021-11-11', '2021-11-27', '<p>awdawd</p>');

-- ----------------------------
-- Table structure for obat
-- ----------------------------
DROP TABLE IF EXISTS `obat`;
CREATE TABLE `obat`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `komposisi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `efek_samping` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `indikasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dosis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aturan_pakai` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `perhatian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kontra_indikasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `kemasan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `manufaktur` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of obat
-- ----------------------------
INSERT INTO `obat` VALUES ('448a12d5-3244-11ec-a377-88d7f69998cf', 'C2', 'Karbon', 'Ngantuk', 'Over', '1x1 Sehari', 'Anjuran Dokter', 'Tidak ada', NULL, NULL, NULL, '<ol><li>jangan tidur</li><li>jangan makan</li></ol>', 'product_07_large.png');
INSERT INTO `obat` VALUES ('a2413ad9-3f65-11ec-a520-88d7f69998cf', 'obat 2', 'awd', 'dawd', 'awdw', 'awd', 'dawd', 'awd', NULL, NULL, NULL, '<p>awdawd</p>', 'product_01.png');
INSERT INTO `obat` VALUES ('a30c0180-361a-11ec-ab8b-88d7f69998cf', 'awd', 'wdad', 'wadw', 'dad', 'dad', 'dad', 'dadd', NULL, NULL, NULL, '<p>awdadw</p>', 'product_05.png');
INSERT INTO `obat` VALUES ('a993fbcd-3f65-11ec-a520-88d7f69998cf', 'awd', 'wdd', 'dwad', 'dadw', 'dad', 'dad', 'd', NULL, NULL, NULL, '<p>dw</p>', 'product_03.png');
INSERT INTO `obat` VALUES ('afb55d2f-3f65-11ec-a520-88d7f69998cf', 'dawd', 'dawdw', 'dad', 'wad', 'dadw', 'dad', 'dad', NULL, NULL, NULL, '<p>dawdad</p>', 'product_02.png');
INSERT INTO `obat` VALUES ('e80ac343-3611-11ec-ab8b-88d7f69998cf', 'tes', 'daw', 'lkjl', 'lkjl', 'lkjl', 'lkjl', 'kjlkjl', NULL, NULL, NULL, '<p>wdadadadadadwd</p>', 'product_06.png');

-- ----------------------------
-- Table structure for obat_apotek
-- ----------------------------
DROP TABLE IF EXISTS `obat_apotek`;
CREATE TABLE `obat_apotek`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_apotek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_obat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of obat_apotek
-- ----------------------------
INSERT INTO `obat_apotek` VALUES ('65378f84-3891-11ec-9730-88d7f69998cf', '0da1afa1-30b1-11ec-8f91-88d7f69998cf', '448a12d5-3244-11ec-a377-88d7f69998cf');
INSERT INTO `obat_apotek` VALUES ('6d44ebb3-3891-11ec-9730-88d7f69998cf', '013a07e1-30b1-11ec-8f91-88d7f69998cf', '448a12d5-3244-11ec-a377-88d7f69998cf');
INSERT INTO `obat_apotek` VALUES ('6d457043-3891-11ec-9730-88d7f69998cf', '013a07e1-30b1-11ec-8f91-88d7f69998cf', 'a30c0180-361a-11ec-ab8b-88d7f69998cf');
INSERT INTO `obat_apotek` VALUES ('6d45c8c7-3891-11ec-9730-88d7f69998cf', '013a07e1-30b1-11ec-8f91-88d7f69998cf', 'e80ac343-3611-11ec-ab8b-88d7f69998cf');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','apotek') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_apotek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('04031a0f-308c-11ec-8f91-88d7f69998cf', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL);
INSERT INTO `users` VALUES ('16ef35de-309c-11ec-8f91-88d7f69998cf', 'wahyu', 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 'apotek', '013a07e1-30b1-11ec-8f91-88d7f69998cf');
INSERT INTO `users` VALUES ('289a1082-4da1-11ec-b1b9-88d7f69998cf', 'tes', 'tes', '6756088577abe3c76de3cf1bb0c04991', 'admin', NULL);
INSERT INTO `users` VALUES ('2dc52291-4da1-11ec-b1b9-88d7f69998cf', 'awd', 'awd', '1f73402c644002a7ea3c9532e8ba4139', 'admin', '013a07e1-30b1-11ec-8f91-88d7f69998cf');
INSERT INTO `users` VALUES ('7c248594-4dab-11ec-b1b9-88d7f69998cf', 'tess', 'tess', '8b8be2799a2796a36a02004608426bdb', 'apotek', '013a07e1-30b1-11ec-8f91-88d7f69998cf');

SET FOREIGN_KEY_CHECKS = 1;
