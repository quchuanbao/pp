/*
 Navicat Premium Data Transfer

 Source Server         : 192.168.1.151
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : 192.168.1.151
 Source Database       : homestead

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : utf-8

 Date: 03/22/2018 15:39:21 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `adminpassword_resets`
-- ----------------------------
DROP TABLE IF EXISTS `adminpassword_resets`;
CREATE TABLE `adminpassword_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `adminpassword_resets_email_index` (`email`),
  KEY `adminpassword_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `admins`
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `admins`
-- ----------------------------
BEGIN;
INSERT INTO `admins` VALUES ('1', '菜太咸', 'test@test.com', '$2y$10$UK8O7IccLPdMjYl4/9rRNOSTVz.BM5JuA1o5.aScSIjp5GKurxBhS', '/storage/news/mJQq6GNQk8yntdgQN2m6k1zrXurWPHRxWPHBTAbr.jpeg', null, 'urRAB7Fji3aI6BheIc7oHAClZ0fAJqVhQc9jHQE1Ey3s7sFe14PJLImeM6N9', null, '2018-03-16 16:18:33', '13552513007', '超级管理员'), ('3', 'test', 'test1@test.com', '$2y$10$nhvftquKOD0Mvg.Chijt0u3qb6yBQhVCaTo48Gs8GmgB/XbQOjLG2', '/storage/news/XB8bpL33s4kMALhmd8FVZtCinUMe0B4wEfpe5Y0o.jpeg', '2018-03-16 16:33:41', null, '2018-03-16 16:31:59', '2018-03-16 16:33:41', '13552513007', '111'), ('4', 'test', 'bao11@test.com', '$2y$10$/pzp0zb7xDkC7CTu4V51BeqI/eFOQ57OnPEubOglKN9ixZfqKulZa', '/storage/news/GLThC7UINOePXcMRWmbHOpMKOH3fgs9gxgl9r4XB.jpeg', '2018-03-20 14:22:52', null, '2018-03-19 18:15:25', '2018-03-20 14:22:52', '13552513007', 'qwe23'), ('5', 'test', 'test22@test.com', '$2y$10$qqSWnY2jjzdtVSNMpii3Vu7ZudBzS4eFCdRUzt9Zzmu4doIS1BPlG', '/storage/news/7zmaL7JT75GGZtffXv53xrV6SOU8bcPGN84XjvJi.jpeg', '2018-03-20 14:32:27', null, '2018-03-20 14:32:09', '2018-03-20 14:32:27', '13552513007', '爱扥啊');
COMMIT;

-- ----------------------------
--  Table structure for `log_requests`
-- ----------------------------
DROP TABLE IF EXISTS `log_requests`;
CREATE TABLE `log_requests` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `finger` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `method` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `host` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `full_url` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `params` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `log_requests`
-- ----------------------------
BEGIN;
INSERT INTO `log_requests` VALUES ('1', '4c5c74bb5e803b14b1344caaddb14c169d9cbfb4', 'POST', 'http://pp.com', 'admin/admins/store', 'http://pp.com/admin/admins/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\"], \"email\": \"test@test.com\", \"_token\": \"X10r3oZ5vL7BkcVRmzwHbLBPfLOI0H0b7oVgpZkt\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-19 18:42:30', '2018-03-19 18:42:30'), ('2', '4c5c74bb5e803b14b1344caaddb14c169d9cbfb4', 'POST', 'http://pp.com', 'admin/admins/store', 'http://pp.com/admin/admins/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\"], \"email\": \"test@test.com\", \"_token\": \"X10r3oZ5vL7BkcVRmzwHbLBPfLOI0H0b7oVgpZkt\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-19 18:46:02', '2018-03-19 18:46:02'), ('3', '4c5c74bb5e803b14b1344caaddb14c169d9cbfb4', 'POST', 'http://pp.com', 'admin/admins/store', 'http://pp.com/admin/admins/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\"], \"email\": \"test@test.com\", \"_token\": \"PSfDsT96q8GUbGrP5F3ZlJihRSCfIvvocUmrrh42\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-20 14:08:21', '2018-03-20 14:08:21'), ('4', '4c5c74bb5e803b14b1344caaddb14c169d9cbfb4', 'POST', 'http://pp.com', 'admin/admins/store', 'http://pp.com/admin/admins/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": null, \"pic\": {}, \"tel\": \"13552513007\", \"name\": \"test\", \"email\": \"test22@test.com\", \"_token\": \"PSfDsT96q8GUbGrP5F3ZlJihRSCfIvvocUmrrh42\", \"password\": \"qwe123\", \"description\": \"爱扥啊\", \"password_confirmation\": \"qwe123\"}', '2018-03-20 14:32:09', '2018-03-20 14:32:09'), ('5', 'c2ca6c8a3be16533ef3339eeded1e1b7bab7dfca', 'GET', 'http://pp.com', 'admin/admins/del/5', 'http://pp.com/admin/admins/del/5', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '[]', '2018-03-20 14:32:27', '2018-03-20 14:32:27'), ('6', 'f06d7d77d0fb8096749367133a292a124c6da5e1', 'POST', 'http://pp.com', 'admin/role/store', 'http://pp.com/admin/role/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"4\", \"name\": \"administrator\", \"_token\": \"VtCpUzFccqc8ko1VfDRYqzTzjESW7eiQcw74esnr\", \"permission\": [\"1\", \"2\"], \"description\": \"管理员\", \"display_name\": \"管理员\"}', '2018-03-21 11:07:55', '2018-03-21 11:07:55'), ('7', 'f06d7d77d0fb8096749367133a292a124c6da5e1', 'POST', 'http://pp.com', 'admin/role/store', 'http://pp.com/admin/role/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"4\", \"name\": \"administrator\", \"_token\": \"VtCpUzFccqc8ko1VfDRYqzTzjESW7eiQcw74esnr\", \"permission\": [\"1\", \"2\"], \"description\": \"管理员\", \"display_name\": \"管理员\"}', '2018-03-21 11:12:38', '2018-03-21 11:12:38'), ('8', '66bd067754272acfc677488558c36b570af48546', 'POST', 'http://pp.com', 'admin/permission/store', 'http://pp.com/admin/permission/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"3\", \"name\": \"admin\", \"_token\": \"VtCpUzFccqc8ko1VfDRYqzTzjESW7eiQcw74esnr\", \"description\": \"管理员管理\", \"display_name\": \"管理员管理\"}', '2018-03-21 11:13:32', '2018-03-21 11:13:32'), ('9', '66bd067754272acfc677488558c36b570af48546', 'POST', 'http://pp.com', 'admin/permission/store', 'http://pp.com/admin/permission/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"3\", \"name\": \"admin\", \"_token\": \"VtCpUzFccqc8ko1VfDRYqzTzjESW7eiQcw74esnr\", \"description\": \"管理员管理\", \"display_name\": \"管理员管理\"}', '2018-03-21 11:14:03', '2018-03-21 11:14:03'), ('10', 'f06d7d77d0fb8096749367133a292a124c6da5e1', 'POST', 'http://pp.com', 'admin/role/store', 'http://pp.com/admin/role/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": null, \"name\": \"test\", \"_token\": \"XxzoWJcL08MiWBfBRTfVICyeIpVVr2iBw1WEoh9N\", \"permission\": [\"1\", \"2\", \"3\"], \"description\": \"测试角色\", \"display_name\": \"测试角色\"}', '2018-03-21 18:34:11', '2018-03-21 18:34:11'), ('11', '4c5c74bb5e803b14b1344caaddb14c169d9cbfb4', 'POST', 'http://pp.com', 'admin/admins/store', 'http://pp.com/admin/admins/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\", \"6\"], \"email\": \"test@test.com\", \"_token\": \"XxzoWJcL08MiWBfBRTfVICyeIpVVr2iBw1WEoh9N\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-21 18:34:24', '2018-03-21 18:34:24'), ('12', '4c5c74bb5e803b14b1344caaddb14c169d9cbfb4', 'POST', 'http://pp.com', 'admin/admins/store', 'http://pp.com/admin/admins/store', '192.168.1.46', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\"], \"email\": \"test@test.com\", \"_token\": \"SbaiDQQt8tjowm3n2LjRQY80tckRiYW2eT545BUD\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-22 14:46:13', '2018-03-22 14:46:13');
COMMIT;

-- ----------------------------
--  Table structure for `logs`
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_id` int(11) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `union_id` int(11) unsigned DEFAULT NULL,
  `action_type` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `log_id` (`log_id`),
  KEY `user_id` (`user_id`),
  KEY `union_id` (`union_id`),
  KEY `action_type` (`action_type`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `logs`
-- ----------------------------
BEGIN;
INSERT INTO `logs` VALUES ('1', '1', '1', '1', 'admins', 'create', '创建管理员：菜太咸', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\"], \"email\": \"test@test.com\", \"_token\": \"X10r3oZ5vL7BkcVRmzwHbLBPfLOI0H0b7oVgpZkt\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-19 18:42:30', '2018-03-19 18:42:30'), ('2', '2', '1', '1', 'admins', 'edit', '编辑管理员：菜太咸', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\"], \"email\": \"test@test.com\", \"_token\": \"X10r3oZ5vL7BkcVRmzwHbLBPfLOI0H0b7oVgpZkt\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-19 18:46:02', '2018-03-19 18:46:02'), ('3', '3', '1', '1', 'admins', 'edit', '编辑管理员：菜太咸', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\"], \"email\": \"test@test.com\", \"_token\": \"PSfDsT96q8GUbGrP5F3ZlJihRSCfIvvocUmrrh42\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-20 14:08:21', '2018-03-20 14:08:21'), ('4', '4', '1', '5', 'admins', 'create', '创建管理员：test', '{\"id\": null, \"pic\": {}, \"tel\": \"13552513007\", \"name\": \"test\", \"email\": \"test22@test.com\", \"_token\": \"PSfDsT96q8GUbGrP5F3ZlJihRSCfIvvocUmrrh42\", \"password\": \"qwe123\", \"description\": \"爱扥啊\", \"password_confirmation\": \"qwe123\"}', '2018-03-20 14:32:09', '2018-03-20 14:32:09'), ('5', '5', '1', '5', 'admins', 'delete', '删除管理员：test', '[]', '2018-03-20 14:32:27', '2018-03-20 14:32:27'), ('6', '6', '1', '4', 'roles', 'edit', '编辑角色：administrator', '{\"id\": \"4\", \"name\": \"administrator\", \"_token\": \"VtCpUzFccqc8ko1VfDRYqzTzjESW7eiQcw74esnr\", \"permission\": [\"1\", \"2\"], \"description\": \"管理员\", \"display_name\": \"管理员\"}', '2018-03-21 11:07:55', '2018-03-21 11:07:55'), ('7', '7', '1', '4', 'roles', 'edit', '编辑角色：管理员', '{\"id\": \"4\", \"name\": \"administrator\", \"_token\": \"VtCpUzFccqc8ko1VfDRYqzTzjESW7eiQcw74esnr\", \"permission\": [\"1\", \"2\"], \"description\": \"管理员\", \"display_name\": \"管理员\"}', '2018-03-21 11:12:38', '2018-03-21 11:12:38'), ('8', '8', '1', '3', 'permissions', 'edit', '编辑权限：admin', '{\"id\": \"3\", \"name\": \"admin\", \"_token\": \"VtCpUzFccqc8ko1VfDRYqzTzjESW7eiQcw74esnr\", \"description\": \"管理员管理\", \"display_name\": \"管理员管理\"}', '2018-03-21 11:13:32', '2018-03-21 11:13:32'), ('9', '9', '1', '3', 'permissions', 'edit', '编辑权限：管理员管理', '{\"id\": \"3\", \"name\": \"admin\", \"_token\": \"VtCpUzFccqc8ko1VfDRYqzTzjESW7eiQcw74esnr\", \"description\": \"管理员管理\", \"display_name\": \"管理员管理\"}', '2018-03-21 11:14:03', '2018-03-21 11:14:03'), ('10', '10', '1', '6', 'roles', 'create', '创建角色：测试角色', '{\"id\": null, \"name\": \"test\", \"_token\": \"XxzoWJcL08MiWBfBRTfVICyeIpVVr2iBw1WEoh9N\", \"permission\": [\"1\", \"2\", \"3\"], \"description\": \"测试角色\", \"display_name\": \"测试角色\"}', '2018-03-21 18:34:11', '2018-03-21 18:34:11'), ('11', '11', '1', '1', 'admins', 'edit', '编辑管理员：菜太咸', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\", \"6\"], \"email\": \"test@test.com\", \"_token\": \"XxzoWJcL08MiWBfBRTfVICyeIpVVr2iBw1WEoh9N\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-21 18:34:24', '2018-03-21 18:34:24'), ('12', '12', '1', '1', 'admins', 'edit', '编辑管理员：菜太咸', '{\"id\": \"1\", \"tel\": \"13552513007\", \"name\": \"菜太咸\", \"role\": [\"4\"], \"email\": \"test@test.com\", \"_token\": \"SbaiDQQt8tjowm3n2LjRQY80tckRiYW2eT545BUD\", \"password\": null, \"description\": \"超级管理员\", \"password_confirmation\": null}', '2018-03-22 14:46:13', '2018-03-22 14:46:13');
COMMIT;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `migrations`
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1'), ('2', '2014_10_12_100000_create_password_resets_table', '1'), ('10', '2018_03_13_082710_create_admins_table', '3'), ('11', '2018_03_13_082922_create_adminspassword_resets_table', '3'), ('12', '2018_03_15_164735_entrust_setup_tables', '4');
COMMIT;

-- ----------------------------
--  Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Table structure for `permission_role`
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `permission_role`
-- ----------------------------
BEGIN;
INSERT INTO `permission_role` VALUES ('1', '4'), ('2', '4'), ('1', '6'), ('2', '6'), ('3', '6');
COMMIT;

-- ----------------------------
--  Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `permissions`
-- ----------------------------
BEGIN;
INSERT INTO `permissions` VALUES ('1', 'permission', '权限管理', '权限管理', '2018-03-16 13:50:36', '2018-03-16 17:03:06'), ('2', 'role', '角色管理', '角色管理', '2018-03-16 14:14:23', '2018-03-16 17:02:59'), ('3', 'admin', '管理员管理', '管理员管理', '2018-03-16 14:14:33', '2018-03-16 17:02:53');
COMMIT;

-- ----------------------------
--  Table structure for `role_user`
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `role_user`
-- ----------------------------
BEGIN;
INSERT INTO `role_user` VALUES ('1', '4'), ('3', '4');
COMMIT;

-- ----------------------------
--  Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `roles`
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES ('4', 'administrator', '管理员', '管理员', '2018-03-16 15:24:49', '2018-03-16 17:03:23'), ('6', 'test', '测试角色', '测试角色', '2018-03-21 18:34:11', '2018-03-21 18:34:11');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'test', 'test@test.com', '$2y$10$YyKmQ9NZ4pOxsm4SPACUguHZp.F1MJ0JWoVBrBO4hFQJaUguHUMOy', 'xnCdRddZ6CkkhoYeMP5FD3kkro19g2Vwd87YSyAhDwXvQSnr9qi1nGhBtG4n', '2018-03-13 06:58:17', '2018-03-13 06:58:17');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
