-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2021 at 07:55 PM
-- Server version: 8.0.25
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval_log`
--

CREATE TABLE `approval_log` (
  `id` int NOT NULL,
  `request_id` int DEFAULT NULL,
  `approver_id` int DEFAULT NULL,
  `status` smallint DEFAULT NULL,
  `approval_date` datetime NOT NULL,
  `approval_level` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approval_log`
--

INSERT INTO `approval_log` (`id`, `request_id`, `approver_id`, `status`, `approval_date`, `approval_level`) VALUES
(1, 1, 8, 1, '2021-07-20 14:17:38', 1),
(2, 1, 9, 1, '2021-07-20 14:47:08', 2),
(3, 1, 10, 1, '2021-07-20 19:28:20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int NOT NULL,
  `attribute_id` int DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `description`) VALUES
(1, 'Lenovo', 'd'),
(2, 'Other', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'HP', 'd'),
(2, 'Electronics', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `description`) VALUES
(1, 'naturals', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int NOT NULL,
  `stock_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `stock_id`, `name`, `description`) VALUES
(1, NULL, 'ju', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int NOT NULL,
  `college_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `college_id`, `name`, `description`) VALUES
(1, 1, 'biology', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_approval_status`
--

CREATE TABLE `item_approval_status` (
  `id` int NOT NULL,
  `approval_log_id` int DEFAULT NULL,
  `orders_id` int DEFAULT NULL,
  `allowed_quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_approval_status`
--

INSERT INTO `item_approval_status` (`id`, `approval_log_id`, `orders_id`, `allowed_quantity`) VALUES
(1, 1, 1, 4),
(2, 2, 1, 3),
(3, 3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `request_id` int DEFAULT NULL,
  `stock_id` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered` smallint DEFAULT '0',
  `status` smallint DEFAULT '0',
  `unitprice` int DEFAULT NULL,
  `approved_quantity` int DEFAULT NULL,
  `stock_unique_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `request_id`, `stock_id`, `quantity`, `model`, `serial`, `delivered`, `status`, `unitprice`, `approved_quantity`, `stock_unique_id`) VALUES
(1, 1, NULL, 5, 'Other', NULL, 1, NULL, 1500, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `name`, `code`, `description`) VALUES
(1, 'Approver1', 'approver1', NULL),
(2, 'Approver2', 'Approver2', NULL),
(3, 'Approver3', 'Approver3', NULL),
(4, 'manage college', 'manage_college', NULL),
(5, 'manage department', 'manage_department', NULL),
(6, 'manage store', 'manage_store', NULL),
(7, 'manage catagory', 'manage_catagory', NULL),
(8, 'manage brand', 'manag_brand', NULL),
(9, 'manage usage type', 'manage_usage_type', NULL),
(10, 'manage product type', 'manage_product_type', NULL),
(11, 'manage unit of measure', 'manage_unit_of_measure', NULL),
(12, 'manage request', 'manage_request', NULL),
(13, 'manage stock', 'manage_stock', NULL),
(14, 'manage company', 'manage_company', NULL),
(15, 'manage report', 'manage_report', NULL),
(16, 'manage user', 'manage_user', NULL),
(17, 'manage permission and usergroup', 'manage_permision_and_usergroup', NULL),
(18, 'view issued request', 'issued_request', NULL),
(20, 'view balance', 'balance', NULL),
(21, 'view my items', 'my_items', NULL),
(22, 'read only stock in out', 'property', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `brand_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `product_type_id` int DEFAULT NULL,
  `unit_of_measure_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `can_transfered` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `brand_id`, `category_id`, `product_type_id`, `unit_of_measure_id`, `name`, `description`, `can_transfered`) VALUES
(1, 1, 1, 1, NULL, 'Electronics', 'd', '1'),
(2, 1, 1, 1, 1, 'Core i3 Laptop', 'desc', '1'),
(3, 2, 2, 1, 3, 'Table', 'desc', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `description`) VALUES
(1, 'alaki', 'd'),
(2, 'Quami', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int NOT NULL,
  `requester_id` int DEFAULT NULL,
  `requested_date` date DEFAULT NULL,
  `status` smallint DEFAULT NULL,
  `closed` smallint DEFAULT NULL,
  `reason` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `received_date` date DEFAULT NULL,
  `delivered` smallint DEFAULT NULL,
  `current_approval_step` smallint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `requester_id`, `requested_date`, `status`, `closed`, `reason`, `received_date`, `delivered`, `current_approval_step`) VALUES
(1, 11, '2021-07-20', 1, 1, 'here messages', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `selector` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(1, 2, 'wmOLa7blseFAjP0zb1gI', 'DXx32jtaeAOcZiwjwYHgrO8m7VvviANotSn/megcgiU=', '2021-03-13 10:12:47', '2021-03-13 11:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `serials`
--

CREATE TABLE `serials` (
  `id` int NOT NULL,
  `orders_id` int DEFAULT NULL,
  `serial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transfer_request` int DEFAULT NULL,
  `current_owner_id` int DEFAULT NULL,
  `has_serial` tinyint(1) DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serials`
--

INSERT INTO `serials` (`id`, `orders_id`, `serial`, `model`, `transfer_request`, `current_owner_id`, `has_serial`, `quantity`) VALUES
(1, 1, '1452', '54512', 0, NULL, 1, 1),
(2, 1, '54654641', '131321', 0, NULL, 1, 1),
(3, 1, '', '', 0, NULL, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `store_id` int DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `date` date NOT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_id`, `store_id`, `company_id`, `quantity`, `date`, `price`) VALUES
(1, 2, 1, 1, 55, '2021-07-20', 1200),
(2, 3, 1, 1, 10, '2021-07-20', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `stock_unique`
--

CREATE TABLE `stock_unique` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `given` int DEFAULT NULL,
  `available` int DEFAULT NULL,
  `requested` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_unique`
--

INSERT INTO `stock_unique` (`id`, `product_id`, `quantity`, `total_price`, `given`, `available`, `requested`) VALUES
(1, 2, 55, 1200, NULL, NULL, NULL),
(2, 3, 10, 1500, 3, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `description`, `is_active`) VALUES
(1, 'store1', 'sdd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `store_user`
--

CREATE TABLE `store_user` (
  `store_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_setting`
--

CREATE TABLE `system_setting` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_setting`
--

INSERT INTO `system_setting` (`id`, `name`, `value`) VALUES
(1, 'update_count', '581980424');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int NOT NULL,
  `approved_by_id` int DEFAULT NULL,
  `group_id` int DEFAULT NULL,
  `serial_id` int DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfered_items_group`
--

CREATE TABLE `transfered_items_group` (
  `id` int NOT NULL,
  `to_id` int DEFAULT NULL,
  `from_id` int DEFAULT NULL,
  `group_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfers_approval_log`
--

CREATE TABLE `transfers_approval_log` (
  `id` int NOT NULL,
  `transfer_id` int DEFAULT NULL,
  `approver_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `approval_date` date NOT NULL,
  `approval_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_of_measure`
--

CREATE TABLE `unit_of_measure` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_of_measure`
--

INSERT INTO `unit_of_measure` (`id`, `name`) VALUES
(1, 'Kg'),
(2, 'ml'),
(3, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `department_id` int DEFAULT NULL,
  `user_type_id` int DEFAULT NULL,
  `username` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `locale` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `department_id`, `user_type_id`, `username`, `roles`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `is_active`, `last_login`, `date`, `locale`, `confirm_token`, `role`, `store_id`) VALUES
(2, 1, 1, 'amtadesse', '["ROLE_ADMIN"]', '$argon2id$v=19$m=65536,t=4,p=1$uieDgzN672sipStssj6eEQ$C0DOqwQ1jjNgfirIHZcbVDZAN7S3RoH6va7AHH7BSl0', 'amsalu', 'tadesse', NULL, 'tadesseamsalu@gmail.com', 1, '2021-07-20 19:24:54', NULL, '1', NULL, '["ROLE_ADMIN"]', NULL),
(3, 1, 1, 'sahalu', '["ROLE_ADMIN"]', '$argon2id$v=19$m=65536,t=4,p=1$uieDgzN672sipStssj6eEQ$C0DOqwQ1jjNgfirIHZcbVDZAN7S3RoH6va7AHH7BSl0', 'one', 'two\r\n', NULL, 'one@one.com', 1, '2021-03-04 00:00:00', NULL, '1', NULL, NULL, NULL),
(4, 1, 1, 'amtadesse2', '["ROLE_ADMIN"]', '$argon2id$v=19$m=65536,t=4,p=1$uieDgzN672sipStssj6eEQ$C0DOqwQ1jjNgfirIHZcbVDZAN7S3RoH6va7AHH7BSl0', 'amsalu', 'tadesse', NULL, NULL, 1, '2021-03-04 00:00:00', NULL, '1', NULL, NULL, NULL),
(8, 1, 2, 'dhead', '["ROLE_USER"]', '$argon2id$v=19$m=65536,t=4,p=1$+FBYtmb9/16cOzN9uRRoZQ$nFWP8iSu6cGOUUytIpbjsMGTTvSV0MiSCTdnbxEhkAQ', 'dhead', 'dhead', 'dhead', NULL, 1, '2021-07-20 14:16:01', '2021-07-20 18:59:20', '1', NULL, NULL, NULL),
(9, 1, 4, 'property', '["ROLE_USER"]', '$argon2id$v=19$m=65536,t=4,p=1$JjLSSPdC26derBwpln9fww$AmFt0LJJZ6UD2rO0Em4yPUMUMLTC5FC4rFj5zwptU4Q', 'propertyHead', 'propertyHead', 'propertyHead', NULL, 1, '2021-07-20 14:58:16', '2021-07-20 18:59:24', '1', NULL, NULL, 1),
(10, 1, 4, 'storekeeper', '["ROLE_USER"]', '$argon2id$v=19$m=65536,t=4,p=1$/+yxquFoK7u8aJ+DdU71cw$m1yHYUMgyO26AsjFs9ph3G9C7tkdoFRKhIA2aw6cO1A', 'StoreKeeper', 'StoreKeeper', 'StoreKeeper', NULL, 1, '2021-07-20 19:27:39', '2021-03-13 10:54:00', '1', NULL, NULL, 1),
(11, 1, 5, 'staff', '["ROLE_USER"]', '$argon2id$v=19$m=65536,t=4,p=1$Q3UqpWu+PGVgBtWBy2H5LA$OJ61fru/yc/WkEX+pIOvYkMSGg5Uh/YyHsVV8HrRNYo', 'Staff', 'Staff', 'Staff', NULL, 1, '2021-07-20 14:11:20', '2021-03-13 10:54:26', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int NOT NULL,
  `registered_by_id` int NOT NULL,
  `updated_by_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `registered_by_id`, `updated_by_id`, `name`, `description`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 2, NULL, 'Admins', NULL, '2021-03-02 09:08:00', NULL, 1),
(2, 2, NULL, 'Department Heads', NULL, '2021-03-10 15:51:31', NULL, 1),
(3, 2, 2, 'Property and General Service Head', NULL, '2021-03-10 15:51:31', '2021-03-13 09:31:24', 1),
(4, 2, 2, 'Store Keeper', NULL, '2021-03-10 15:51:31', '2021-03-13 09:31:16', 1),
(5, 2, NULL, 'Staffs', NULL, '2021-03-10 15:51:31', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group_permission`
--

CREATE TABLE `user_group_permission` (
  `user_group_id` int NOT NULL,
  `permission_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_group_permission`
--

INSERT INTO `user_group_permission` (`user_group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 20),
(1, 21),
(1, 22),
(2, 1),
(2, 15),
(2, 18),
(2, 20),
(2, 21),
(3, 2),
(3, 15),
(3, 18),
(3, 20),
(3, 21),
(3, 22),
(4, 3),
(4, 4),
(4, 5),
(4, 7),
(4, 8),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 18),
(4, 20),
(5, 18),
(5, 20),
(5, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user_store`
--

CREATE TABLE `user_store` (
  `user_id` int NOT NULL,
  `store_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `description`) VALUES
(1, 'admin', NULL),
(2, 'Department Head', NULL),
(3, 'Property and General Service Head', NULL),
(4, 'Store Keeper', NULL),
(5, 'Staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_user_group`
--

CREATE TABLE `user_user_group` (
  `user_id` int NOT NULL,
  `user_group_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_user_group`
--

INSERT INTO `user_user_group` (`user_id`, `user_group_id`) VALUES
(2, 1),
(3, 2),
(8, 2),
(9, 3),
(10, 4),
(11, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval_log`
--
ALTER TABLE `approval_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E41565A6427EB8A5` (`request_id`),
  ADD KEY `IDX_E41565A6BB23766C` (`approver_id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FE4FBB82B6E62EFA` (`attribute_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4FBF094FDCD6110` (`stock_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_CD1DE18A770124B2` (`college_id`);

--
-- Indexes for table `item_approval_status`
--
ALTER TABLE `item_approval_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E5457C37CEE39F0F` (`approval_log_id`),
  ADD KEY `IDX_E5457C37CFFE9AD6` (`orders_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E52FFDEE427EB8A5` (`request_id`),
  ADD KEY `IDX_E52FFDEEDCD6110` (`stock_id`),
  ADD KEY `IDX_E52FFDEE7B5B65AB` (`stock_unique_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD44F5D008` (`brand_id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`),
  ADD KEY `IDX_D34A04AD14959723` (`product_type_id`),
  ADD KEY `IDX_D34A04ADDA4E2C90` (`unit_of_measure_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7B85D651ED442CF4` (`requester_id`);

--
-- Indexes for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Indexes for table `serials`
--
ALTER TABLE `serials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_94B8253DCFFE9AD6` (`orders_id`),
  ADD KEY `IDX_94B8253DE3441BD3` (`current_owner_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4B3656604584665A` (`product_id`),
  ADD KEY `IDX_4B365660B092A811` (`store_id`),
  ADD KEY `IDX_4B365660979B1AD6` (`company_id`);

--
-- Indexes for table `stock_unique`
--
ALTER TABLE `stock_unique`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7A8484E14584665A` (`product_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_user`
--
ALTER TABLE `store_user`
  ADD PRIMARY KEY (`store_id`,`user_id`),
  ADD KEY `IDX_6F2A7887B092A811` (`store_id`),
  ADD KEY `IDX_6F2A7887A76ED395` (`user_id`);

--
-- Indexes for table `system_setting`
--
ALTER TABLE `system_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4034A3C02D234F6A` (`approved_by_id`),
  ADD KEY `IDX_4034A3C0FE54D947` (`group_id`),
  ADD KEY `IDX_4034A3C0AF82D095` (`serial_id`);

--
-- Indexes for table `transfered_items_group`
--
ALTER TABLE `transfered_items_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F688DC0F30354A65` (`to_id`),
  ADD KEY `IDX_F688DC0F78CED90B` (`from_id`);

--
-- Indexes for table `transfers_approval_log`
--
ALTER TABLE `transfers_approval_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5BFCA07F537048AF` (`transfer_id`),
  ADD KEY `IDX_5BFCA07FBB23766C` (`approver_id`);

--
-- Indexes for table `unit_of_measure`
--
ALTER TABLE `unit_of_measure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD KEY `IDX_8D93D649AE80F5DF` (`department_id`),
  ADD KEY `IDX_8D93D6499D419299` (`user_type_id`),
  ADD KEY `IDX_8D93D649B092A811` (`store_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F02BF9D27E92E18` (`registered_by_id`),
  ADD KEY `IDX_8F02BF9D896DBBDE` (`updated_by_id`);

--
-- Indexes for table `user_group_permission`
--
ALTER TABLE `user_group_permission`
  ADD PRIMARY KEY (`user_group_id`,`permission_id`),
  ADD KEY `IDX_4A91B1C51ED93D47` (`user_group_id`),
  ADD KEY `IDX_4A91B1C5FED90CCA` (`permission_id`);

--
-- Indexes for table `user_store`
--
ALTER TABLE `user_store`
  ADD PRIMARY KEY (`user_id`,`store_id`),
  ADD KEY `IDX_1D95A32FA76ED395` (`user_id`),
  ADD KEY `IDX_1D95A32FB092A811` (`store_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_user_group`
--
ALTER TABLE `user_user_group`
  ADD PRIMARY KEY (`user_id`,`user_group_id`),
  ADD KEY `IDX_28657971A76ED395` (`user_id`),
  ADD KEY `IDX_286579711ED93D47` (`user_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval_log`
--
ALTER TABLE `approval_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `item_approval_status`
--
ALTER TABLE `item_approval_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reason`
--
ALTER TABLE `reason`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `serials`
--
ALTER TABLE `serials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stock_unique`
--
ALTER TABLE `stock_unique`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `system_setting`
--
ALTER TABLE `system_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transfered_items_group`
--
ALTER TABLE `transfered_items_group`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transfers_approval_log`
--
ALTER TABLE `transfers_approval_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unit_of_measure`
--
ALTER TABLE `unit_of_measure`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval_log`
--
ALTER TABLE `approval_log`
  ADD CONSTRAINT `FK_E41565A6427EB8A5` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`),
  ADD CONSTRAINT `FK_E41565A6BB23766C` FOREIGN KEY (`approver_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD CONSTRAINT `FK_FE4FBB82B6E62EFA` FOREIGN KEY (`attribute_id`) REFERENCES `attribute` (`id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `FK_4FBF094FDCD6110` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `FK_CD1DE18A770124B2` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);

--
-- Constraints for table `item_approval_status`
--
ALTER TABLE `item_approval_status`
  ADD CONSTRAINT `FK_E5457C37CEE39F0F` FOREIGN KEY (`approval_log_id`) REFERENCES `approval_log` (`id`),
  ADD CONSTRAINT `FK_E5457C37CFFE9AD6` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_E52FFDEE427EB8A5` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`),
  ADD CONSTRAINT `FK_E52FFDEE7B5B65AB` FOREIGN KEY (`stock_unique_id`) REFERENCES `stock_unique` (`id`),
  ADD CONSTRAINT `FK_E52FFDEEDCD6110` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_D34A04AD14959723` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`),
  ADD CONSTRAINT `FK_D34A04AD44F5D008` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `FK_D34A04ADDA4E2C90` FOREIGN KEY (`unit_of_measure_id`) REFERENCES `unit_of_measure` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `FK_7B85D651ED442CF4` FOREIGN KEY (`requester_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `serials`
--
ALTER TABLE `serials`
  ADD CONSTRAINT `FK_94B8253DCFFE9AD6` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `FK_94B8253DE3441BD3` FOREIGN KEY (`current_owner_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `FK_4B3656604584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_4B365660979B1AD6` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `FK_4B365660B092A811` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`);

--
-- Constraints for table `stock_unique`
--
ALTER TABLE `stock_unique`
  ADD CONSTRAINT `FK_7A8484E14584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `store_user`
--
ALTER TABLE `store_user`
  ADD CONSTRAINT `FK_6F2A7887A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6F2A7887B092A811` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `FK_4034A3C02D234F6A` FOREIGN KEY (`approved_by_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_4034A3C0AF82D095` FOREIGN KEY (`serial_id`) REFERENCES `serials` (`id`),
  ADD CONSTRAINT `FK_4034A3C0FE54D947` FOREIGN KEY (`group_id`) REFERENCES `transfered_items_group` (`id`);

--
-- Constraints for table `transfered_items_group`
--
ALTER TABLE `transfered_items_group`
  ADD CONSTRAINT `FK_F688DC0F30354A65` FOREIGN KEY (`to_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_F688DC0F78CED90B` FOREIGN KEY (`from_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `transfers_approval_log`
--
ALTER TABLE `transfers_approval_log`
  ADD CONSTRAINT `FK_5BFCA07F537048AF` FOREIGN KEY (`transfer_id`) REFERENCES `transfered_items_group` (`id`),
  ADD CONSTRAINT `FK_5BFCA07FBB23766C` FOREIGN KEY (`approver_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6499D419299` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`),
  ADD CONSTRAINT `FK_8D93D649AE80F5DF` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `FK_8D93D649B092A811` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`);

--
-- Constraints for table `user_group`
--
ALTER TABLE `user_group`
  ADD CONSTRAINT `FK_8F02BF9D27E92E18` FOREIGN KEY (`registered_by_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_8F02BF9D896DBBDE` FOREIGN KEY (`updated_by_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_group_permission`
--
ALTER TABLE `user_group_permission`
  ADD CONSTRAINT `FK_4A91B1C51ED93D47` FOREIGN KEY (`user_group_id`) REFERENCES `user_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4A91B1C5FED90CCA` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_store`
--
ALTER TABLE `user_store`
  ADD CONSTRAINT `FK_1D95A32FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1D95A32FB092A811` FOREIGN KEY (`store_id`) REFERENCES `store` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_user_group`
--
ALTER TABLE `user_user_group`
  ADD CONSTRAINT `FK_286579711ED93D47` FOREIGN KEY (`user_group_id`) REFERENCES `user_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_28657971A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
