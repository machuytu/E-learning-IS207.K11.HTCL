-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2019 lúc 04:33 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_hocs`
--

CREATE TABLE `bai_hocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_bai_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien_quan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loi_ngan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vi_tri_bai_hoc` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `lop_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_hocs`
--

INSERT INTO `bai_hocs` (`id`, `ten_bai_hoc`, `lien_quan`, `loi_ngan`, `noi_dung`, `vi_tri_bai_hoc`, `created_at`, `updated_at`, `deleted_at`, `lop_id`) VALUES
(1, 'guygy', NULL, NULL, NULL, NULL, '2019-11-21 04:27:47', '2019-11-23 21:20:30', '2019-11-23 21:20:30', 1),
(2, '1 lesson', NULL, NULL, NULL, 1, '2019-11-23 19:42:15', '2019-11-23 19:42:15', NULL, 1),
(3, '2 lesson', NULL, NULL, NULL, 2, '2019-11-23 19:52:15', '2019-11-23 19:52:15', NULL, 1),
(4, 'dfas', NULL, NULL, NULL, 1, '2019-11-23 20:26:45', '2019-11-23 23:14:03', '2019-11-23 23:14:03', 5),
(5, '3 lesson', NULL, NULL, NULL, 2, '2019-11-23 21:19:47', '2019-11-23 21:19:47', NULL, 5),
(6, '3 lesson 2', NULL, NULL, NULL, 3, '2019-11-23 21:20:20', '2019-11-23 21:38:50', NULL, 1),
(7, 'dasd', NULL, NULL, NULL, 1, '2019-11-27 18:38:15', '2019-11-27 18:38:15', NULL, 2),
(8, 'guygy', NULL, NULL, NULL, 2, '2019-11-28 03:47:30', '2019-11-28 03:47:30', NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `co_sos`
--

CREATE TABLE `co_sos` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_cs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `co_sos`
--

INSERT INTO `co_sos` (`id`, `ten_cs`, `dia_chi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'coso1', '1245', '2019-11-21 04:26:29', '2019-11-21 04:26:29', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lops`
--

CREATE TABLE `lops` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_lop_hoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thgian_bd` date DEFAULT NULL,
  `thgian_kt` date DEFAULT NULL,
  `gia` decimal(15,2) DEFAULT NULL,
  `published` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `mo_hoc_id` int(10) UNSIGNED NOT NULL,
  `the_loai_id` int(10) UNSIGNED NOT NULL,
  `phong_hoc_id` int(10) UNSIGNED NOT NULL,
  `giao_vien_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lops`
--

INSERT INTO `lops` (`id`, `ten_lop_hoc`, `thgian_bd`, `thgian_kt`, `gia`, `published`, `created_at`, `updated_at`, `deleted_at`, `mo_hoc_id`, `the_loai_id`, `phong_hoc_id`, `giao_vien_id`) VALUES
(1, 'abc', '2019-11-13', '2019-11-05', NULL, 0, '2019-11-21 04:27:36', '2019-11-21 21:35:55', NULL, 1, 2, 1, 2),
(2, '123', '2019-11-24', '2019-11-30', '5465.00', 1, '2019-11-23 19:04:41', '2019-11-27 09:44:40', NULL, 1, 3, 1, 4),
(3, '123', '2019-11-24', '2019-11-30', '5465.00', 0, '2019-11-23 19:08:04', '2019-11-27 09:48:24', NULL, 1, 3, 1, 4),
(4, '456', '2019-11-24', '2019-11-24', NULL, 1, '2019-11-23 19:08:39', '2019-11-27 09:52:07', NULL, 1, 3, 1, 4),
(5, 'def', '2019-11-24', '2019-12-24', NULL, 1, '2019-11-23 20:24:58', '2019-11-28 03:31:36', NULL, 1, 3, 1, 2),
(6, 'fadjoạid', '2019-10-30', '2019-12-08', '65465165.00', 1, '2019-11-27 10:03:36', '2019-11-27 10:03:36', NULL, 1, 3, 1, 2),
(7, 'fadjoạid', NULL, NULL, NULL, 1, '2019-11-27 10:14:23', '2019-11-27 10:14:23', NULL, 1, 3, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop_user`
--

CREATE TABLE `lop_user` (
  `lop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Lop', 7, 'hinh_anh_lop', '5ddeaeda8f9ed_18595161_726089927571056_5859797514765437234_o', '5ddeaeda8f9ed_18595161_726089927571056_5859797514765437234_o.jpg', 'image/jpeg', 'public', 364113, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 1, '2019-11-27 10:14:23', '2019-11-27 10:14:26'),
(2, 'App\\Lop', 7, 'hinh_anh_lop', '5ddf1fe71eacd_Nv2k6sl', '5ddf1fe71eacd_Nv2k6sl.jpg', 'image/jpeg', 'public', 1287287, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 2, '2019-11-27 18:16:25', '2019-11-27 18:16:30'),
(3, 'App\\Lop', 7, 'hinh_anh_lop', '5ddf21786dc85_18595161_726089927571056_5859797514765437234_o', '5ddf21786dc85_18595161_726089927571056_5859797514765437234_o.jpg', 'image/jpeg', 'public', 364113, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 3, '2019-11-27 18:23:05', '2019-11-27 18:23:06'),
(4, 'App\\Lop', 7, 'hinh_anh_lop', '5ddf24ad8c730_logo-uit', '5ddf24ad8c730_logo-uit.png', 'image/png', 'public', 65440, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 4, '2019-11-27 18:36:48', '2019-11-27 18:36:48'),
(5, 'App\\Lop', 6, 'hinh_anh_lop', '5ddf24dd1b6ca_logo-uit', '5ddf24dd1b6ca_logo-uit.png', 'image/png', 'public', 65440, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 5, '2019-11-27 18:37:34', '2019-11-27 18:37:35'),
(6, 'App\\Lop', 5, 'hinh_anh_lop', '5ddfa1faa8ac8_18595161_726089927571056_5859797514765437234_o', '5ddfa1faa8ac8_18595161_726089927571056_5859797514765437234_o.jpg', 'image/jpeg', 'public', 364113, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 6, '2019-11-28 03:31:24', '2019-11-28 03:31:27'),
(7, 'App\\Lop', 4, 'hinh_anh_lop', '5ddfa2191f47c_Nv2k6sl', '5ddfa2191f47c_Nv2k6sl.jpg', 'image/jpeg', 'public', 1287287, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 7, '2019-11-28 03:31:54', '2019-11-28 03:31:55'),
(8, 'App\\Lop', 2, 'hinh_anh_lop', '5ddfa23510e6d_Nv2k6sl', '5ddfa23510e6d_Nv2k6sl.jpg', 'image/jpeg', 'public', 1287287, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 8, '2019-11-28 03:32:23', '2019-11-28 03:32:23'),
(9, 'App\\Lop', 7, 'hinh_anh_lop', '5ddfa3a1b498d_jotform-logo-orange-400x200', '5ddfa3a1b498d_jotform-logo-orange-400x200.png', 'image/png', 'public', 3432, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 9, '2019-11-28 03:38:26', '2019-11-28 03:38:27'),
(10, 'App\\Lop', 7, 'hinh_anh_lop', '5ddfa47808c26_cplusnangcao', '5ddfa47808c26_cplusnangcao.jpg', 'image/jpeg', 'public', 366903, '[]', '{\"generated_conversions\":{\"thumb\":true}}', '[]', 10, '2019-11-28 03:42:01', '2019-11-28 03:42:02'),
(11, 'App\\BaiHoc', 8, 'file', '5ddfa5bc7f51b_yuzu_installer', '5ddfa5bc7f51b_yuzu_installer.log', 'text/plain', 'public', 13726, '[]', '[]', '[]', 11, '2019-11-28 03:47:30', '2019-11-28 03:47:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_11_21_0000010_create_bai_hocs_table', 1),
(8, '2019_11_21_000001_create_media_table', 1),
(9, '2019_11_21_000002_create_permissions_table', 1),
(10, '2019_11_21_000003_create_roles_table', 1),
(11, '2019_11_21_000004_create_users_table', 1),
(12, '2019_11_21_000005_create_mon_hocs_table', 1),
(13, '2019_11_21_000006_create_the_loais_table', 1),
(14, '2019_11_21_000007_create_co_sos_table', 1),
(15, '2019_11_21_000008_create_phong_hocs_table', 1),
(16, '2019_11_21_000009_create_lops_table', 1),
(17, '2019_11_21_000011_create_permission_role_pivot_table', 1),
(18, '2019_11_21_000012_create_lop_user_pivot_table', 1),
(19, '2019_11_21_000013_add_relationship_fields_to_phong_hocs_table', 1),
(20, '2019_11_21_000014_create_role_user_pivot_table', 1),
(21, '2019_11_21_000015_add_approval_fields', 1),
(22, '2019_11_21_000016_add_relationship_fields_to_lops_table', 1),
(23, '2019_11_21_000017_add_relationship_fields_to_bai_hocs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_hocs`
--

CREATE TABLE `mon_hocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_mh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta_mh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mon_hocs`
--

INSERT INTO `mon_hocs` (`id`, `ten_mh`, `mo_ta_mh`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'lap trinh', 'lap trinh', '2019-11-21 04:26:47', '2019-11-21 04:26:47', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'mon_hoc_create', NULL, NULL, NULL),
(18, 'mon_hoc_edit', NULL, NULL, NULL),
(19, 'mon_hoc_show', NULL, NULL, NULL),
(20, 'mon_hoc_delete', NULL, NULL, NULL),
(21, 'mon_hoc_access', NULL, NULL, NULL),
(22, 'the_loai_create', NULL, NULL, NULL),
(23, 'the_loai_edit', NULL, NULL, NULL),
(24, 'the_loai_show', NULL, NULL, NULL),
(25, 'the_loai_delete', NULL, NULL, NULL),
(26, 'the_loai_access', NULL, NULL, NULL),
(27, 'co_so_create', NULL, NULL, NULL),
(28, 'co_so_edit', NULL, NULL, NULL),
(29, 'co_so_show', NULL, NULL, NULL),
(30, 'co_so_delete', NULL, NULL, NULL),
(31, 'co_so_access', NULL, NULL, NULL),
(32, 'phong_hoc_create', NULL, NULL, NULL),
(33, 'phong_hoc_edit', NULL, NULL, NULL),
(34, 'phong_hoc_show', NULL, NULL, NULL),
(35, 'phong_hoc_delete', NULL, NULL, NULL),
(36, 'phong_hoc_access', NULL, NULL, NULL),
(37, 'lop_create', NULL, NULL, NULL),
(38, 'lop_edit', NULL, NULL, NULL),
(39, 'lop_show', NULL, NULL, NULL),
(40, 'lop_delete', NULL, NULL, NULL),
(41, 'lop_access', NULL, NULL, NULL),
(42, 'bai_hoc_create', NULL, NULL, NULL),
(43, 'bai_hoc_edit', NULL, NULL, NULL),
(44, 'bai_hoc_show', NULL, NULL, NULL),
(45, 'bai_hoc_delete', NULL, NULL, NULL),
(46, 'bai_hoc_access', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
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
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(3, 19),
(3, 21),
(3, 24),
(3, 26),
(3, 29),
(3, 31),
(3, 34),
(3, 36),
(3, 39),
(3, 41),
(3, 42),
(3, 43),
(3, 44),
(3, 45),
(3, 46),
(4, 19),
(4, 21),
(4, 24),
(4, 26),
(4, 29),
(4, 31),
(4, 34),
(4, 36),
(4, 39),
(4, 41),
(4, 44),
(4, 46);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_hocs`
--

CREATE TABLE `phong_hocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_phong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `co_so_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong_hocs`
--

INSERT INTO `phong_hocs` (`id`, `ten_phong`, `created_at`, `updated_at`, `deleted_at`, `co_so_id`) VALUES
(1, '324', '2019-11-21 04:26:36', '2019-11-21 04:26:36', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL),
(3, 'GiaoVien', '2019-11-21 20:57:18', '2019-11-21 20:57:18', NULL),
(4, 'HocVien', '2019-11-21 20:58:17', '2019-11-21 20:58:17', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 3),
(3, 4),
(4, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_loais`
--

CREATE TABLE `the_loais` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_tl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_loais`
--

INSERT INTO `the_loais` (`id`, `ten_tl`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'lap trinh', '2019-11-21 04:26:41', '2019-11-21 21:33:22', '2019-11-21 21:33:22'),
(2, 'lap trinh', '2019-11-21 21:35:34', '2019-11-21 21:36:05', '2019-11-21 21:36:05'),
(3, 'lap trinh', '2019-11-23 19:03:56', '2019-11-23 19:03:56', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `approved`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$YfozFQATu6bYOKg/SWmu1OIDH6F.S.ovswK.lw3eel3ycs/PYvm4O', NULL, 1, NULL, NULL, NULL),
(2, 'Nguyễn Minh Nhựt', 'nhut@yahoo.com', NULL, '$2y$10$sZDugCo/P/KM/CjLDXhqLOy3KcDEBugtIXPymD10FYbrXrLQqFi4.', NULL, 1, '2019-11-21 20:59:52', '2019-11-21 20:59:52', NULL),
(3, 'Quốc Cường', 'cuong@yahoo.com', NULL, '$2y$10$K.Im87zX.GD7nd6ptkNDs.IUeYeTO0FeakZbCG3bhcE0RomlNqqGe', NULL, 1, '2019-11-21 21:00:46', '2019-11-21 21:00:46', NULL),
(4, 'Hòa lê', 'hoa@yahoo.com', NULL, '$2y$10$mDQXSQsd06BmML0WrWAIWu2bBk.I63hUpqgq6OMRY7HgpNNAvsUY6', NULL, 1, '2019-11-23 09:32:54', '2019-11-23 09:32:54', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_hocs`
--
ALTER TABLE `bai_hocs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lop_fk_632834` (`lop_id`);

--
-- Chỉ mục cho bảng `co_sos`
--
ALTER TABLE `co_sos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lops`
--
ALTER TABLE `lops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mo_hoc_fk_624826` (`mo_hoc_id`),
  ADD KEY `the_loai_fk_624827` (`the_loai_id`),
  ADD KEY `phong_hoc_fk_624828` (`phong_hoc_id`),
  ADD KEY `giao_vien_fk_624838` (`giao_vien_id`);

--
-- Chỉ mục cho bảng `lop_user`
--
ALTER TABLE `lop_user`
  ADD KEY `lop_id_fk_624829` (`lop_id`),
  ADD KEY `user_id_fk_624829` (`user_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mon_hocs`
--
ALTER TABLE `mon_hocs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Chỉ mục cho bảng `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_624742` (`role_id`),
  ADD KEY `permission_id_fk_624742` (`permission_id`);

--
-- Chỉ mục cho bảng `phong_hocs`
--
ALTER TABLE `phong_hocs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_so_fk_624790` (`co_so_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_624751` (`user_id`),
  ADD KEY `role_id_fk_624751` (`role_id`);

--
-- Chỉ mục cho bảng `the_loais`
--
ALTER TABLE `the_loais`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_hocs`
--
ALTER TABLE `bai_hocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `co_sos`
--
ALTER TABLE `co_sos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lops`
--
ALTER TABLE `lops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `mon_hocs`
--
ALTER TABLE `mon_hocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `phong_hocs`
--
ALTER TABLE `phong_hocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `the_loais`
--
ALTER TABLE `the_loais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bai_hocs`
--
ALTER TABLE `bai_hocs`
  ADD CONSTRAINT `lop_fk_632834` FOREIGN KEY (`lop_id`) REFERENCES `lops` (`id`);

--
-- Các ràng buộc cho bảng `lops`
--
ALTER TABLE `lops`
  ADD CONSTRAINT `giao_vien_fk_624838` FOREIGN KEY (`giao_vien_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `mo_hoc_fk_624826` FOREIGN KEY (`mo_hoc_id`) REFERENCES `mon_hocs` (`id`),
  ADD CONSTRAINT `phong_hoc_fk_624828` FOREIGN KEY (`phong_hoc_id`) REFERENCES `phong_hocs` (`id`),
  ADD CONSTRAINT `the_loai_fk_624827` FOREIGN KEY (`the_loai_id`) REFERENCES `the_loais` (`id`);

--
-- Các ràng buộc cho bảng `lop_user`
--
ALTER TABLE `lop_user`
  ADD CONSTRAINT `lop_id_fk_624829` FOREIGN KEY (`lop_id`) REFERENCES `lops` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_624829` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_624742` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_624742` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `phong_hocs`
--
ALTER TABLE `phong_hocs`
  ADD CONSTRAINT `co_so_fk_624790` FOREIGN KEY (`co_so_id`) REFERENCES `co_sos` (`id`);

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_624751` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_624751` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
