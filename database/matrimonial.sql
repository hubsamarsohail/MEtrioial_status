-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 12:12 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonial`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Lahore', 1, NULL, NULL),
(2, 'Multan', 2, NULL, NULL),
(3, 'Berlin', 9, NULL, NULL),
(4, 'Hamburg', 9, NULL, NULL),
(5, 'Alberta', 8, NULL, NULL),
(6, 'British Columbia', 8, NULL, NULL),
(7, 'Luxembourg', 7, NULL, NULL),
(8, 'Western Europe', 7, NULL, NULL),
(9, 'Burgenland', 6, NULL, NULL),
(10, 'Kärnten', 6, NULL, NULL),
(11, 'Buenos Aires', 5, NULL, NULL),
(12, 'Rosario', 5, NULL, NULL),
(13, 'Kabul', 3, NULL, NULL),
(14, 'Kandahar', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `cms_id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ln_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`cms_id`, `site_title`, `logo`, `fb_url`, `tw_url`, `ln_url`, `yt_url`, `in_url`, `video_url`, `contact_url`, `meta_title`, `meta_description`, `created_at`, `updated_at`, `tenant_id`, `created_by`, `contact_email`, `contact_number`, `contact_address`) VALUES
(26, 'Matrimonial', 'img-a7368906-2388-4187-9498-2e7b5c575618.png', 'facebook.com', NULL, 'linked.com', 'youtue.com', 'instagram.com', 'https://www.youtube.com/embed/-Dbwg5oG6RU', NULL, 'Matrimonial Meta Title', 'Matrimonial Meta Description', '2021-05-10 12:52:32', '2021-05-24 10:39:16', 1, 1, 'matrimonial@info.co', '042 1234567', 'Zainab Tower');

-- --------------------------------------------------------

--
-- Table structure for table `cms_slider_images`
--

CREATE TABLE `cms_slider_images` (
  `cms_slider_image_id` bigint(20) UNSIGNED NOT NULL,
  `img_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cms_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_slider_images`
--

INSERT INTO `cms_slider_images` (`cms_slider_image_id`, `img_name`, `img_title`, `img_description`, `created_at`, `updated_at`, `cms_id`, `tenant_id`, `created_by`) VALUES
(22, 'img-fe890527-5e17-4f86-9591-75d7504da4d0.jpg', 'love', 'love love', '2021-05-10 12:52:32', '2021-05-10 12:52:32', 26, 1, 1),
(23, 'img-e8da8cd0-f17d-4b4c-a8c0-80bc7ec71113.jpg', 'love', 'love love love love love love love love love', '2021-05-10 12:52:32', '2021-05-10 12:52:32', 26, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `complain_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complain_type_id` bigint(20) UNSIGNED NOT NULL,
  `user_profile_id` bigint(20) UNSIGNED NOT NULL,
  `from_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`complain_id`, `description`, `complain_type_id`, `user_profile_id`, `from_user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 70, 2, '2021-07-20 04:38:55', '2021-07-20 04:38:55'),
(3, NULL, 5, 62, 2, '2021-07-20 05:05:37', '2021-07-20 05:05:37'),
(4, NULL, 6, 41, 2, '2021-07-20 05:09:03', '2021-07-20 05:09:03'),
(5, NULL, 5, 18, 54, '2021-07-26 10:02:18', '2021-07-26 10:02:18'),
(6, NULL, 5, 41, 2, '2021-07-27 09:19:31', '2021-07-27 09:19:31'),
(7, NULL, 2, 45, 2, '2021-07-27 09:20:04', '2021-07-27 09:20:04'),
(8, NULL, 6, 18, 2, '2021-07-28 11:04:50', '2021-07-28 11:04:50'),
(9, NULL, 6, 16, 2, '2021-08-04 08:36:38', '2021-08-04 08:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `complain_types`
--

CREATE TABLE `complain_types` (
  `complain_tye_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complain_types`
--

INSERT INTO `complain_types` (`complain_tye_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Fake Profile', 1, '2021-07-19 05:44:49', '2021-07-19 06:17:01'),
(2, 'Harassment', 1, '2021-07-19 06:13:10', '2021-07-19 06:13:10'),
(5, 'Fake Gender', 1, '2021-07-19 06:28:02', '2021-07-19 06:28:02'),
(6, 'Sexsual activity', 1, '2021-07-19 06:33:29', '2021-07-19 06:33:29'),
(7, 'violent Threat', 1, '2021-07-19 08:54:25', '2021-07-19 08:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pakistan', '2020-03-02 05:14:18', '2020-04-23 19:00:00'),
(2, 'UAE', '2020-12-15 17:15:51', '2020-12-15 17:15:51'),
(3, 'Afghanistan', '2021-07-13 09:41:40', '2021-07-13 09:41:40'),
(4, 'Albania', '2021-07-13 09:41:40', '2021-07-13 09:41:40'),
(5, 'Argentina', '2021-07-13 09:42:39', '2021-07-13 09:42:39'),
(6, 'Australia', '2021-07-13 09:42:39', '2021-07-13 09:42:39'),
(7, 'Belgium', '2021-07-13 09:43:11', '2021-07-13 09:43:11'),
(8, 'Canada', '2021-07-13 09:43:11', '2021-07-13 09:43:11'),
(9, 'Germany', NULL, NULL),
(10, 'Hungary', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `distances`
--

CREATE TABLE `distances` (
  `distance` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `from_plaza_id` bigint(20) UNSIGNED NOT NULL,
  `to_plaza_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distances`
--

INSERT INTO `distances` (`distance`, `created_at`, `updated_at`, `from_plaza_id`, `to_plaza_id`, `created_by`) VALUES
(367.00, '2020-10-04 13:07:04', '2020-10-04 13:07:04', 2, 3, 1),
(355.00, '2020-10-04 13:07:04', '2020-10-04 13:07:04', 2, 4, 1),
(251.60, '2020-10-04 13:07:04', '2020-10-04 13:07:04', 2, 5, 1),
(367.00, '2020-10-04 13:07:04', '2020-10-04 13:07:04', 3, 2, 1),
(355.00, '2020-10-04 13:07:04', '2020-10-04 13:07:04', 4, 2, 1),
(251.60, '2020-10-04 13:07:04', '2020-10-04 13:07:04', 5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `road_detail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_used` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`road_detail`, `key`, `is_used`, `created_at`, `updated_at`, `tenant_id`) VALUES
('1-M2-2-LAHORE-3-STP-1-LANE-2-X', 'eyJpdiI6IkxPNUNXYjF5ZkY2aVBBVm0yemJWd3c9PSIsInZhbHVlIjoiQ0dFaXRyeUxLeGpmcDU3WjNmRDFYekZwUWZYTHhkSXVTdjVVQjdsTVpVYncyTjR0eDMyU3VCSFBrRjRVYnVOQi92SGdZOFpzd1B6TTRTem13RGU0aC9DVnlnOElPa053QVZqeVNqMndmUmtTSVJHVi9XRmdTUnVaMlE1aWtmZFNUMlo5bDNNZnVDcHVNZ2VrYnA1VktQNE0rWHlqMUNaM20wUHJVdkt5SW00WjFtY3hIRzIvTmNHeG14UmQ0cUJJYlE2em9iU3JKRWwrdHdleFVoQnpZblNlbTRQV2hGc3Q0TFAvN2hxYllJWUI3Vnl0UzUwZEJqbFRha0g3MlNnL250TjhtUWN1NnMyK3UzTjRKWVRNdzJITCtxRUNpbWRkVzJDaXFtK0czWC9SK0tBUlBkOTFaWE1sa09MR25zc2xpM2V2VFF1UjM0ZXNWdkR0MEpCRGozOGpzL0tEUHdSYkdRdTlnRjR0TUxvSU1jVWRxU0dDeHhNZFFxNDhpQTB1dVZLUlE1dlQxeEVOSzA4allDR2dva3RQVjBkbExMSGc3QXp3WHc3RXUzMHl4dUxDYVlsU2h4azB2S0kvR3JiTzI3aE4ybXdOL3JyRVpUQjdibmkzcnhocWJ0MGJraFJZUkJtQm1Lai85NkNMbjJyVEE3cEJUb1F0U0lNOHd3eUpVY3hZV09Mdlh4TjR2VkR3aVR3QmRMZW5ybFVoZU5sMlB5U1ZBcXVoU2ZnZktnNUJQRUdOaS9wRTY0cDhuSXh0WlE4N01CWXhtVVdRNVRURnZkYUV5M1pkNmJsT2I0LzluUTcvbjFzUWdVaUR1dnV3cU83aG03QnBjTUxpb0I4ZXBNZnd5NXNGSnNNYjRCNUx3T3ZhRzNkdldxcDRlYTk5NE9nWDRDQm9IYXU5TXp0aFpBLzV1bERqMzhZcE9KdndoU1h6TWp2bFZhSFowclFmQWdxQjNqUlJYWENXWXRtRmNLSGRSYVpRUTM1Y0xteU85aS8wZlM5OHhoK3FIaE8xRmZxL3dFNFlKUWdOR0FvcEJwOXduOHMzSCttM00rUm9BMU1qenZvSXc5dkl1Wm9DeFZmNkJ5a0o0YWc1UmpJNndpaVQ0bFBLaHJ2MFkwRlArN25iTGh1Tm1vc2RIMzIxaWt4NTRPOU1tb25IZ3Q0UHhmT3Y3L2taRFMwUG5oMlNNYXJnbzQ2MDNmb1hkZVkzTjNVUkRHc1NZL2VRVWdCMnd4UUZLM3UvV3g3aW4zdm9UYnlIWkdyZllma1dIa0tsYU9sMk9HRHl2NTRsZTM3aU13WlpLeGNBYy9vVWwycVhLUlhjOEFhd1RjOTZDVWpOT2w1OXJmcHo1Rnp2aWdBcHAvaWxURFFIU0NNaWg3RS83Yi9qL0cxMVhXUG5vcjZLakZ0aUtQb2hlVEh1UEo5czZZSE80Q1FWQzVSbzI4RmJaQmpZSFZSY0tUSE1QZmVIY2p2clZFWDRJZHIxRUhZY1h5QjRhR1RHTnFLb2NMalBQYzRXbjlJYnpQRk81bGxCb05BcFFvS3E3MnZRZld5RUFvUWNCcTNyOFRraUM3R0hWWTNGU0FSczU5QU9nbWpSZDZvbmtsaE84eXZmS2hSOVMyV1RrQnFFM1FrTlZUaVdUK2w4dzg3UHJ6YVVVeERFRWJWUm56OTJTeGI2MGczTGhGQkRvUlJWQnh5ZDJKMnlXVjc1THNWZkoxYTI1NFBIUSs1TGFBM2greGdjcVEwaWlTNGI4QzlONU5qSHV5NkNDNHlxLzRrYytDVWtROXhDWlRGSUxlbGtmVGhwSFc2akwwdTdOZkorU084QmdMNGI0VGZrYlliT2dsL1UzdFVFejVKU2p1V1VneGV5WHNyODVBTElzY3NoMG95N1Z2MHZhZzgyWndJYnQxNVFyQnFEa2g3UDByUS9NZmZFaXoyL3h3MU1iR1NZS0N5QWYvQ3k1TlEySXVibzBNcFgwMnFjVW5HLzFiaFdYU2k2ZVdRQS9oOEViRE4wWVN1M1UxNlpZZzdnT1FWMXVyNXlOWmozV3Y5a2h0aFpEaUdDUHJyRmhsby9OaVhXOExPMnZZTlE0T2NsU29JLzhCK0hvaUlzNXB2QjlJZmU5Y2dUMzZYSDIrRE5URFFzcUUwM0pEWEYrUFJEczlDM2tGVEVqVXYrUmREMENIbG9NeWR0ZFdOeCtXUkE3aUxWT3Fud1pNRllYQ3VLL1FTRFFTS09NVC93TVRoaHNaVlEvK1FsS0ZENHI4dWJrRkRuaW1LK05ZRms1RlNlT1NHeWEySWNncndJSnMya29hV0grQ1hxUVhsRG93KzRzZnlLT245OHRUbVRoNk91b0lZTWZ1UEM0SDQwT1FOZlNoME0ycUI5ZmEwZnJRRjBXNWlNcElFdThOT1VNV09RWi9aVUZCL1VUM1VHdUR0N0s0L0FVSFNlQTM3b1pla3haQm5veWRsRk13bVFxN04rQ0FjMGl5bzdqV0pQWTF3VkdQVmNTa0d3S3lPaVRKMUh5dzUvZDJkZHNQZElrdElrSmhUckJ6ZmsyaGFwRXlBc09LYTJvK2cyVXVvajQ3OThTQ00xVUFhdFBCcDVmZlZ4NmNLdm42YittNm0rZ0ovVFplVlhoM2t6alZMTmE1RTgraDcwSkFEOU5ELzJ2aXlobWR6ZDRVS3JYakZIUm1lenV3TEg0SGZJWDBmc2drTlRwRzFaTU4veEY1VnVMNE5DSVYrNEZNalJqelcwV2p5Z3ZoSEZNUW1kRlZDOFlGaCthVDFNL1FmeFJjTEQvK09RV2U1b3BjL2YvcjhnSjdJZWlyS1dOWlEwZXJEZEJDbjBxdXBxZTFiNHQ5UG5RQUV6c0VnWEpGTWgxZldXWks4UWd6dUxQcTFFYW5xbTVRdDJnN05yYXR6bmxjRi91SDMyTThXY0I0dkhHYzVob3VIeFMrN1FBdko0aXpFT21sbHpyV0dGKzUrY1RpcEphUGQyektWWnlFMUxZcDdQNkR3T0RLTlhqazFVVS9EMVdSYnZ2bjJvREJwLzBJb3ZuaTMxaTMyUzFBNWZVbTEyVWdKMHovNWtFaVZtM25KemRDajEyUE5ZZENSbzd4VXh2eXRXUUFTQ1NubkhiWHJKTWpDbnFPNDVGcTBRY01IMmgyVERlRWdTZHZyZ0tjNTAzRHp6aTN3WVE5MzdXNFVyNE1hd1IrVXNQMys2aHp4V0VqcVk2aVN4d1gzMTJmSklDcFo1dmx0SVVXVmdpU0U3bnVDTzJOZkxBV2R2dy8yaERTdUE1OTNaSDFBSjVkcnlnczMzZXdkbVg4eGxLMnJNOWJkQU80c1BaTTZVaW4yamRyTlBGcVlmdlhRZ1lhS0xFTS84dGJCSmpKMCtQWm80MTVQeXNYOE5YOXRqUHlZM3grZW9hRTVleUNseVczSFhWbUJweWlwdHFieXJZUjVnb3ZvY1ErZjQwUURSbjlqekJjTnh1SkZySmVsLzVkK3VyNFFhRzVhR1dndFBwQWxZcE5vZEg5THYzYWdrU1ZzRlVNc1pYY2d6eWw3S2FZMVNlS3RWMEFVanRXYWZXMnVtRjFBUzdzaTB3NEFKOGZUWVNXeXp3TXF2QUxTRkFUSU5WUTJoMWVTUWxmc2dybWVQVTVCSDdGTFYvOWdGSnRuY0d6SDZUOFpUbm4vc1VOQyt2bzJkdmxVbHF2ZGs0U2dCQ3BEWXhKOS93TzZvNUE1bkxzc213RlJNbkMwSHhnano0MWJxSklhT05lV0l4M2JRQ3pNT3F3cWFGNVN0OXMzd29IYUtWTkVZOWhBNjJuQVA5QWtXeXdueTFWdG8rT2NwdDZPNExUZUs2Q3JuMXdjbURtRHZxSFFocWkwL0tHRllrVlhZdVlYbHBDd2xlWXJUcXFYWVVDVTMrVlVRT002L0ZzaC83UEZuTlFsTFR2azRKSXc3dmNqaVVoSDN3Sm5zTlkzcUZ1SEtvSlNoM1ZFQ3lNUTNINVUvY0lKZGd1WkJHeWY2SVFlMm9RR2gzOG1NeVZBU1ZsUW1lYW91aWVHT0xTaVZVYkdKUlZKQitCSmtmVS9jSU1ZMisrSTJQMHdwTmp2QzBVNEE3dVh1VzluVS9SSzRhYkxNYXN5Wi9HbkJKaUZhZnI0T09CTzRPQVZHajZUR0p0RFhsc3RXRHMrS0dIWXdMaGs2ZmlaQjhkS1FUWWdua2NmTWd0MHJyYkNjWXg2RHlza0VtWVNOaVJwaU9RMisrZnJYTWpYRUUvWkdnbmczNzFLT0s5S0lNVURkdDNzY0pZM0NGNmszNEJLQjFLRWZpWXBHYmE5SG1xbjJtY1o0eXJGN2VpdjJYcnBGL2pOZGh4T0psWHByaUp5NHVHSmsrQVYvWkFxTkF3RVI4K0ZuSWVaZWxnY3A3cjBwUWpuWEg1aTRsZ1FwRittWTZxWklVclltbTJXZmZQMk10dXBuNHc9PSIsIm1hYyI6ImIwMmYwNTkwNzcxYTY5Yzk4ZjU5N2IwYTI4YmE1YjlkODk5YmM2M2VlM2E5NDAwNDIxZWVjZmM3NjRkYzY5MmIifQ==', 1, '2020-10-28 08:49:28', '2020-11-05 13:35:46', 1),
('1-M2-3-ISLAMABAD-3-STP-1-LANE-1-E', 'eyJpdiI6Imt3V1NJVlI2N1NRQTlJclFUTlVwRGc9PSIsInZhbHVlIjoiYmJmVG9TSGNnc0laMUU1d2crem1MU1JXSlA3a3VleThZU0tGUEVlZTRza0RGMHlRUncvSEdXS0F0ZjErSms3V2tNTFEwamVGNWZMMTd6OVZsdEtpV2VQNm1NbFpQS2EwZ3pyd3Nub1QwKzlqeEdqbkZZYXhidU1NNldzNWhZS1U0c212WjVWeUxNTkUvM1MweXhWRCsxYTNHbVRXUHc0MWtMZCsyU1BzWHp0M1U5YnQ1WGx0RnZSRm43eGFMdXQyK25uL1dMU1haRkM4NUx2OTc2L1ZTQVYyVkgxaUltNUdjYXpEMDdHNGRIdFNjZkMzdjUxTEltUW94dFp2elJVZk5JRWRVVU1tQWFISlpxa0RUUWdib3hWSkI4T3BPZFZ3YkdmUldrTWlkc2ZmRWdtT3lVUmVNemtGQWlPSTJmVVNrdVFKOHZ3V3BnS285WG9zUlcxZGk3MmhQMW1jMmpuQ01EU29xeVl2NDlqQmZXMVM4SFdMVUsyVHRpRTh0ZXNqbHJqQXJUWmhlNnU0QmkwTUg1cVZxaEF3aUhUT3dUQmJBY3d0TlpOanp6MDNVZmJJeEdQeG1nM1llNmZpekNSMEZsc3JrK0RFbEZhWS9DditMZk9BRjRnRlo4TC9sMFBBcnNON2Ivc0p6dVRra0JkeVQ3R2hralNqS2k2QldOQXZIaHVFZVpqUzdORkZQcDlCTFZpNGdZZG1maGpzbGIyeW9zYUFPNTZPV2xsaFFWbUc0YU1QMjBtQnZMQTd4bjRUSktyeDZ5dUNhUEIrcjRUZ0diR0ZFRXZlaVlGZUl2TjZPZEhuZ2V0NE5MK2R2eFBQa2ZsN3FGTFcxMXhkZ3c3dFNmdFgraUttMTRlVzRyaG02RFgzb29PeHpMbzdTMDlLeStSaDR6cm95TkJDQm12a2d6OUU0b3A5ZHJRN0wzaFhqOE0rVjk1cSt1M29PNFMvYkI5WXZlendkQWV5dlFqaWpvcE1uSzBNbWUybkhaZnFCSTJ5VnV5RlVFditXZTB4dWFJdXV2NjNzQkdSdElJVnUxOUZaZHZLck4vL3dCQm1vZDFvbEZHU090S0JQYmI2Q2RaVXhkVEZrUWgvWGZHMXV5UkViKzMyTnRLWnZTa085d0ZsbzMvUlBiV0V6OW94MHl4Nk5tZ2FSbm5vOEcrZXpNL0FLYWZaVzdiK1duVzhUcEVKOU9LcTBpVlV6MmtYZXJUb29iK1grclc2UzAxYzM3WXZ6cUNEbFlwc05BMEhPbDMva0JNZ2c2YXlUSGYrZUp2QTJYRGkxV0s2VWttUndEVjFCUkVkR2RvSFZKcHpiTnVmRTZDcitsUEhZZjNnVjJVOHFyanVaanhxTXNZZkhIR2VRejVpQ3RoM0pZZmtMeFFlUDdDRmpxbXAycG1tR2lXWFZiZVRjR1BIb3J1MFJHaTQ0cmsvK2wvY3JQUitKRXpoWW5ZVkE3SnIrNnBySTBldG84RGhPWVlleG5ibnowdjJ1SllOaTVOVDF3T0pvZU4wb2c5MlBOcTVLbGFuTDhoZGZxVXJscWVXZ1JVdys1aVorTSsyMzFLTEcvZzVvMDhMZm5RWEMzUkd1Ti82UlNXb05VenptRmdwTnZqYU1OYXUwL2dZYThqMTVhb050S3NWTHFycjA3OUZ0SnFBOG94NlBiVTZ2a0pxUTdrQVIrUFhtV1N3RFJmTURXelQ4Wkd3aDFrVklTcUpqQWhTaVF2WVNod1AvenJzazIzTElITVlTQTFkNzVaLzRiSkp3OVN0ZjMwV1dhYkV5Y1JURk9FMzk1VGVTaXRhUm1ubjZPK3cwdHlINnBiS2pCK0k0WUswTEpmL1llVzA0d2tCRTBxK0Z5MWZ5OE5HZTRXNGlnVzNVOVkxdFpTSW0wejNwVW5hWmgzNlM0YkhEMFNrYThCZEo2cVVYVU93RWdwRG1pbXhMTTR5NEViOTBucnpWTjFxS3NZR0UzS1JBM2FDMGQ3dmwrYzJWblRMSy9zY0NsWkpzaUZQUHV3VnVGVyt6c3VnK3V5OWJSTHlDTGlGTGtEdUhEMEJqWkZQcmxaT2FYWUlKTlNhM21ISXBDY3c5aFlYQktMUlVUTnpVYk9YTDRseEVyQ1FMMThoMWlhNlo2bEg0QjZTYVh1K2NRS0EzQ3Zzd2V0RE5JSUYrUnRyaWJpMThjVjFEbW1WQ1oyaktkSElaTWJHNlEyQ3V2M2VNR3RBNVRKcmRFRlVDcFN0cE5jNDVyUUVnaThycXhlZmhtajIvS2dJSzZjVXlad3dnNm9EZkx4NnBGOWx3ZHJuY0hvaXBua0ZkRkM0NlN1bldpR1BybjdDVjllQUMvWG1PVGNiUkxJb1FNNy9FT1diejRuelR1bitzNjdOUkNUeUkxRGxZdmFZZldoUll2UkF3QlNBRzRGekp2eTVMRGlXOFBvbWVoK1U0Qmg1VmJaUlROQmhEd2tXOUxLL2lyV1E3Mk55V2ZRc05IMmtNdG9tNGFtbTI3Z0dSVXBKZDhQNHkvU2V1VWZWN0sxeTFSaGZQcjhpdEhiTDVmNGEzUWRLTnZIcUtzc3dwK3ZLdjhFb21FR1FuU3d4MHczU0NkNGhnVHprN1JtT2plSnRxd0czekpCYWl4dEFzK05yR2lsNG5yUy9uaHIraW9SbnBSQlAyMkllaFZDSnF4Q2lSd2JDbVQrYWRFRmZCUDYxOVBVNjNhWDhKQ3JWdUVRQTE0VCtRU1BrNVlMZU80NzJxaFpFYjROSlU5aGFUMXRtSzdhOEF2T1pqNkJ2K3RlS21nbW9HT2FjQ2h3R1F6VzNYc2p5YmtSTytsSlVLcTVESFk0aXdCZGlGNGJTOXMvL3hCREgwY1Q0ZXZWaUtUM3ZIb2JJM3RTRml5Uy8rWUFsN0FqbjEyNDNRQkQ1M2g1ckl2V3NVY1VIS2xCNVA3TC9qNVVLUmpjUm1sTlkza3N3NmhXWStYbEsyNG1LZDgwK1BqaGhjK2kySGFpRy83VTd6SWt4c29nUzZqRVM2MTZka214YU9WdzhLejE3eUVtVjMxTjBWTHVZTnpYVldZUUc1czUwZ3AwMThheWFmZDNsNk1ENEJrUFkwTS9JOFlBNmhwWS9aRUszV1luU0lrWE1qK093aVEwV2ZBNU43aFpjNEo3WEFSV0k1TktONEMxT0RrNENpY1JJVU9XbXFxZ3hJOWFNM3l1ZEREUTFNaWVLOU1Rb0x3RGJJUnZJSng2R0s5RW1pZ3FqNVd3WHBPa1R1K2VzQ1hObTRBV0VZQVdqOVR5NW1nUHJhUkFEc0R2enlCYXFrU0F3a0NhR1lLckdTMlI5MjJBdmlEU0dGWVVOOFl3WHF3TnhxM2pOdnZRN3JZajNVRVJqRnMwdmRCWGh5OC9qTktERjd3ZGNadXdLVG80ejkzQkJnREZBdTRiV3p4Ti96WlUzbkI2Zm1CK0hGSkVRcnBXM1Y1STJ1UXlvMkFqY3E1M1Z2L01VVFRJaDVXQUhmdnI5djlGRmtCU0JEREN3MWM3MU5qVVJudmwxSnlscDhLZnB2QTRTa3FLNGliV0swenIvVHZ2ZVNLNWlISXE3RS9RUDJFUC8yUWU5Q0xJVlEzOGdxUDBzU2JNZkxVSEFKMjdabFkzRUlpMWJ3djd0T0VWSXRPMEJRc3FSYXArc0grckgwNDlLVDkvQjdhNVJLRFd5K3R6cnhycjIzcFVqZnZqaGJ5OXlEN3JBdFRKMUxNSTdkcmFXWXFLMjhCc0FnK1JiT3NXUWxsN0daYS95RG5BSzRQNlphcWtBbVNtV3RWS1UvaFNXUkVRZkRBOFR5c3pETHozWEg0cno4Ym8xcGRzNStSS1pFdjhFYmttNlZWdjZ6S0NHNitHRXB0T1hFalFlTVRCd3VhNWVOU21nd3ZqMWJtMzZwdmlmMG1EZjlhQ0MyRkpPUzFQaGxCQndIdEVSVS9KVHlNZHkwN2xEYmFDVEdhVWEyMUQ5bEZVRnBhZXFkL21QaHZ6WXpIcXZvdmUxME1YbW1aYmc4TzM0WktzMHErb01WdUFJZ3lFeVZLeEhvS0E2MTdJVXlBV1N5VThmTGEwd3Z5bUpSdjZxWDhhWlg2OHJJeVhYSFlkUG84V1AzZEZYMzR1dmFEUEUxQkdtdDlzUkhVZWdzMXNRSWV4VmNMajN0TEJyeHdEYmNidzBsSWNBYi9SK2R4Y3JDTXhxalZkTEZaU0dzQXpHNFlFTXhvRG9CM1UwUmZaVmYrL0JCejA1bm9ZZ014RXhJZmdubWFaS1diN3hpUjhINllVQkxJZ2tYN2tTbEpCc3BpeWdOcHVMVGJqWVBWK2g1cCtsL2pXQ2JPRmVQS0RsOHFDRSt2T1dFa3Vremw5MkxHc0JHQ3NjQW4rdkxrQWtrK3RIdzJnVTBYSnBxblplSnRHRE81M2QyMHlDQnFHSWRzZXlMaCtpWFpYQk4zdnNhd0I4Y3c9PSIsIm1hYyI6ImJiMTE1ZTY1NGJjOWIyM2FkYzQ0OWJjZGM3OGM3YTExNjNkYWU4YjYzYWVkNDE3NmU2MzU4YTg1MmRiYTU1MGYifQ==', 1, '2020-11-05 13:34:43', '2020-11-05 13:35:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lanes`
--

CREATE TABLE `lanes` (
  `lane_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lanes`
--

INSERT INTO `lanes` (`lane_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lane 1', '2020-08-03 08:24:51', NULL),
(2, 'Lane 2', '2020-08-03 08:25:02', NULL),
(3, 'Lane 3', '2020-08-03 08:25:11', NULL),
(4, 'Lane 4', '2020-08-03 08:25:21', NULL),
(5, 'Lane 5', '2020-08-03 08:25:30', NULL),
(6, 'Lane 6', '2020-08-03 08:25:38', NULL),
(7, 'Lane 7', '2020-08-03 08:26:06', NULL),
(8, 'Lane 8', '2020-08-03 08:27:06', NULL),
(9, 'Lane 9', '2020-09-29 15:24:25', NULL),
(10, 'Lane 10', '2020-09-29 15:24:36', NULL),
(11, 'Lane 11', '2020-09-29 15:24:46', NULL),
(12, 'Lane 12', '2020-09-29 15:24:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `parent_menu_id` bigint(20) NOT NULL DEFAULT 0,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_menu` tinyint(4) NOT NULL DEFAULT 1,
  `sort_order` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `parent_menu_id`, `title`, `route`, `display_menu`, `sort_order`, `is_active`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 0, 'Home', NULL, 1, 0, 1, '2020-07-27 12:05:08', '2020-07-27 12:05:08', 1),
(2, 1, 'Dashboard', 'aDashboard', 1, 0, 1, '2020-07-27 12:05:30', '2020-07-27 12:05:30', 1),
(3, 0, 'Users Management', NULL, 1, 0, 1, '2020-07-27 12:07:27', '2020-07-27 12:07:27', 1),
(4, 3, 'Roles', NULL, 1, 0, 1, '2020-07-27 12:08:47', '2020-07-27 12:08:47', 1),
(5, 4, 'View Roles', 'aRoleV', 1, 0, 1, '2020-07-27 12:09:09', '2020-07-27 12:09:09', 1),
(6, 4, 'Create Role', 'aRoleC', 1, 0, 1, '2020-07-27 12:09:37', '2020-07-27 12:09:37', 1),
(7, 4, 'Edit Role', 'aRoleU', 0, 0, 1, '2020-07-27 12:10:26', '2020-07-27 12:10:26', 1),
(8, 4, 'Delete Role', 'aRoleD', 0, 0, 1, '2020-07-27 12:10:48', '2020-07-27 12:10:48', 1),
(9, 3, 'Tenants', NULL, 1, 0, 1, '2020-07-27 12:11:30', '2020-07-27 12:11:30', 1),
(10, 9, 'View Tenants', 'aTenantV', 1, 0, 1, '2020-07-27 12:12:14', '2020-07-27 12:12:14', 1),
(11, 9, 'Create Tenant', 'aTenantC', 1, 0, 1, '2020-07-27 12:12:36', '2020-07-27 12:12:36', 1),
(12, 9, 'Edit Tenant', 'aTenantU', 0, 0, 1, '2020-07-27 12:13:03', '2020-07-27 12:13:03', 1),
(13, 9, 'Delete Tenant', 'aTenantD', 0, 0, 1, '2020-07-27 12:13:29', '2020-07-27 12:13:29', 1),
(14, 3, 'Menus', NULL, 1, 0, 1, '2020-07-27 12:14:19', '2020-07-27 12:14:19', 1),
(15, 14, 'View Menus', 'aMenuV', 1, 0, 1, '2020-07-27 12:14:59', '2020-07-27 12:14:59', 1),
(16, 14, 'Create Menu', 'aMenuC', 1, 0, 1, '2020-07-27 12:15:27', '2020-07-27 12:15:27', 1),
(17, 14, 'Edit Menu', 'aMenuU', 0, 0, 1, '2020-07-27 12:15:57', '2020-07-27 12:15:57', 1),
(18, 14, 'Delete Menu', 'aMenuD', 0, 0, 1, '2020-07-27 12:16:23', '2020-07-27 12:16:23', 1),
(19, 3, 'Assign Menus to Role', NULL, 1, 0, 1, '2020-07-27 12:22:22', '2020-07-27 12:22:22', 1),
(20, 19, 'View Assigned Role Menus', 'aRoleMenusV', 1, 0, 1, '2020-07-27 12:23:40', '2020-07-27 12:23:40', 1),
(21, 19, 'Create Role Menus', 'aRoleMenusCU', 1, 0, 1, '2020-07-27 12:24:44', '2020-07-27 12:24:44', 1),
(22, 3, 'Users', NULL, 1, 0, 1, '2020-07-27 12:25:26', '2020-07-27 12:25:26', 1),
(23, 22, 'View Users', 'aUserV', 1, 0, 1, '2020-07-27 12:26:02', '2020-07-27 12:26:02', 1),
(24, 22, 'Create User', 'aUserC', 1, 0, 1, '2020-07-27 12:26:58', '2020-07-27 12:26:58', 1),
(25, 22, 'Edit User', 'aUserU', 0, 0, 1, '2020-07-27 12:27:19', '2020-07-27 12:27:19', 1),
(26, 22, 'Delete User', 'aUserD', 0, 0, 1, '2020-07-27 12:27:40', '2020-07-27 12:27:40', 1),
(39, 0, 'Website Administration', NULL, 1, 0, 1, '2021-04-30 12:56:29', '2021-04-30 12:56:29', 1),
(40, 39, 'Services', NULL, 1, 0, 1, '2021-04-30 13:00:42', '2021-04-30 13:00:42', 1),
(41, 40, 'Create Service', 'aServiceC', 1, 0, 1, '2021-04-30 13:02:33', '2021-04-30 13:02:33', 1),
(43, 40, 'View Services', 'aServiceV', 1, 0, 1, '2021-05-03 11:20:01', '2021-05-03 11:20:01', 1),
(44, 40, 'Edit Service', 'aServiceU', 0, 0, 1, '2021-05-03 13:34:34', '2021-05-03 13:49:57', 1),
(45, 40, 'Delete Service', 'aServiceD', 0, 0, 1, '2021-05-04 11:13:52', '2021-05-04 11:14:49', 1),
(46, 39, 'CMS', NULL, 1, 0, 1, '2021-05-05 11:32:58', '2021-05-05 11:32:58', 1),
(47, 46, 'Create CMS', 'aCMSC', 1, 0, 1, '2021-05-05 11:33:56', '2021-05-05 11:33:56', 1),
(48, 46, 'View CMS', 'aCMSV', 1, 0, 1, '2021-05-10 13:12:02', '2021-05-10 13:12:02', 1),
(50, 46, 'Edit CMS', 'aCMSU', 0, 0, 1, '2021-05-11 11:50:31', '2021-05-11 11:50:31', 1),
(52, 0, 'Definitions', NULL, 1, 0, 1, '2021-07-27 08:47:57', '2021-07-27 08:47:57', 1),
(53, 52, 'Report Type', NULL, 1, 0, 1, '2021-07-27 08:48:30', '2021-07-27 08:48:30', 1),
(54, 53, 'View Report Type', 'acomplain.typev', 1, 0, 1, '2021-07-27 08:49:53', '2021-07-27 08:49:53', 1),
(55, 53, 'Create Report Type', 'acomplain.type', 1, 0, 1, '2021-07-27 08:51:09', '2021-07-27 08:51:09', 1),
(58, 52, 'Reports', NULL, 1, 0, 1, '2021-07-27 09:04:33', '2021-07-27 09:04:33', 1),
(59, 58, 'View Report', 'complainV', 1, 0, 1, '2021-07-27 09:05:11', '2021-07-27 09:05:11', 1),
(60, 46, 'Pages', NULL, 1, 0, 1, '2021-08-04 08:06:45', '2021-08-04 08:06:45', 1),
(61, 60, 'Create Page', 'aPagesC', 1, 0, 1, '2021-08-04 08:07:14', '2021-08-04 08:07:14', 1),
(62, 60, 'View Page', 'aPagesV', 1, 0, 1, '2021-08-04 08:08:06', '2021-08-04 08:08:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_permissions`
--

CREATE TABLE `menu_permissions` (
  `menu_permission_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_17_000000_create_roles_table', 1),
(2, '2020_06_18_000000_create_users_table', 1),
(3, '2020_07_19_000000_create_user_roles_table', 1),
(4, '2020_06_19_000000_create_menus_table', 2),
(5, '2020_06_20_000000_create_menu_permissions_table', 2),
(6, '2020_06_20_000000_create_role_menus_table', 2),
(7, '2020_07_18_000000_create_tenants_table', 2),
(8, '2020_07_19_000000_create_tenant_users_table', 2),
(9, '2020_07_20_000000_create_motorways_table', 3),
(11, '2020_07_21_000000_create_stations_table', 3),
(14, '2020_07_24_000000_create_lanes_table', 3),
(22, '2020_07_28_000000_create_distances_table', 6),
(23, '2020_07_20_000000_create_shifts_table', 7),
(25, '2020_07_26_000000_create_rates_table', 8),
(27, '2020_07_28_000000_create_keys_table', 9),
(28, '2020_07_20_000000_create_pages_table', 10),
(29, '2020_07_20_000000_create_services_table', 10),
(30, '2020_07_21_000000_create_cms_table', 10),
(31, '2020_07_22_000000_create_cms_slider_images_table', 10),
(32, '2021_05_23_183209_add_contact_number_and_add_contact_email_and_contact_address', 11),
(34, '2020_06_17_000000_create_web_roles_table', 12),
(35, '2021_05_26_161030_create_web_users_table', 13),
(36, '2021_05_27_161030_create_web_user_roles_table', 14),
(37, '2021_06_26_123546_create_countries_table', 15),
(38, '2021_06_26_123558_create_cities_table', 15),
(44, '2021_07_06_165847_create_user_images_table', 17),
(45, '2021_07_09_105512_create_my_favourites_table', 18),
(49, '2021_06_27_114650_create_user_profiles_table', 19),
(51, '2021_07_15_104058_create_parent_childs_table', 20),
(54, '2021_07_19_094301_create_complain_types', 23),
(56, '2021_07_19_094612_create_complains_table', 24),
(57, '2021_08_11_204547_create_notifications_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `my_favourites`
--

CREATE TABLE `my_favourites` (
  `my_favourite_id` bigint(20) UNSIGNED NOT NULL,
  `web_user_id` bigint(20) UNSIGNED NOT NULL,
  `user_profile_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_favourites`
--

INSERT INTO `my_favourites` (`my_favourite_id`, `web_user_id`, `user_profile_id`, `created_at`, `updated_at`) VALUES
(71, 2, 16, '2021-07-29 13:42:04', '2021-07-29 13:42:04'),
(72, 2, 88, '2021-08-05 11:30:26', '2021-08-05 11:30:26'),
(73, 17, 1, '2021-08-09 12:46:33', '2021-08-09 12:46:33'),
(74, 2, 47, '2021-08-10 09:06:19', '2021-08-10 09:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('[value-1]', '[value-2]', '[value-3]', 0, '[value-5]', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('5a10cc83-42fe-4b81-a26b-67d36b2a86e9', 'App\\Notifications\\NewUserGreeting', 'App\\Models\\Users', 1, '{\"message\":\"Hello you are login!\"}', NULL, '2021-08-11 17:05:49', '2021-08-11 17:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `body`, `created_at`, `updated_at`, `parent_page_id`, `tenant_id`, `created_by`) VALUES
(1, 'Lorem', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2021-08-04 08:09:29', '2021-08-04 08:09:29', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_images`
--

CREATE TABLE `page_images` (
  `page_image_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_images`
--

INSERT INTO `page_images` (`page_image_id`, `image_path`, `page_id`, `created_at`, `updated_at`) VALUES
(10, 'accomodation_8216a8ee5f82b.jpg', 9, '2021-08-02 06:36:52', '2021-08-02 06:36:52'),
(11, 'accomodation-3_86bc515110efd.jpg', 9, '2021-08-02 06:36:52', '2021-08-02 06:36:52'),
(16, 'accomodation-3_c258ad42299d4.jpg', 10, '2021-08-02 08:58:45', '2021-08-02 08:58:45'),
(17, 'attachment-4_e6a53955082de.jpg', 10, '2021-08-02 08:58:45', '2021-08-02 08:58:45'),
(19, 'accomodation-1_089a58c96f614.jpg', 1, '2021-08-04 08:09:29', '2021-08-04 08:09:29'),
(20, 'accomodation-3_db6111cfa1722.jpg', 1, '2021-08-04 08:09:29', '2021-08-04 08:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `parent_childs`
--

CREATE TABLE `parent_childs` (
  `parent_child_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_childs`
--

INSERT INTO `parent_childs` (`parent_child_id`, `is_active`, `parent_id`, `child_id`, `created_at`, `updated_at`) VALUES
(29, 1, 2, 13, '2021-07-17 07:39:15', '2021-07-17 07:41:08'),
(30, 1, 2, 14, '2021-07-17 07:39:33', '2021-07-17 07:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `profile_logs`
--

CREATE TABLE `profile_logs` (
  `profile_log_id` bigint(20) UNSIGNED NOT NULL,
  `web_user_id` bigint(20) UNSIGNED NOT NULL,
  `user_profile_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_logs`
--

INSERT INTO `profile_logs` (`profile_log_id`, `web_user_id`, `user_profile_id`, `created_at`, `updated_at`) VALUES
(7, 2, 1, '2021-07-27 11:10:29', '2021-07-27 11:10:29'),
(8, 2, 45, '2021-07-27 11:20:58', '2021-07-27 11:20:58'),
(9, 2, 78, '2021-07-28 11:01:19', '2021-07-28 11:01:19'),
(10, 2, 39, '2021-07-29 13:41:32', '2021-07-29 13:41:32'),
(11, 2, 39, '2021-08-04 08:36:47', '2021-08-04 08:36:47'),
(12, 2, 39, '2021-08-04 08:38:13', '2021-08-04 08:38:13'),
(13, 2, 39, '2021-08-04 08:40:33', '2021-08-04 08:40:33'),
(14, 2, 39, '2021-08-04 08:40:52', '2021-08-04 08:40:52'),
(15, 2, 39, '2021-08-04 08:41:02', '2021-08-04 08:41:02'),
(16, 2, 39, '2021-08-04 08:42:17', '2021-08-04 08:42:17'),
(17, 2, 39, '2021-08-04 08:42:28', '2021-08-04 08:42:28'),
(18, 2, 39, '2021-08-04 08:42:37', '2021-08-04 08:42:37'),
(19, 17, 16, '2021-08-09 12:35:59', '2021-08-09 12:35:59'),
(20, 2, 41, '2021-08-10 09:07:10', '2021-08-10 09:07:10'),
(21, 2, 62, '2021-08-10 09:07:28', '2021-08-10 09:07:28'),
(22, 2, 1, '2021-08-10 09:07:38', '2021-08-10 09:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `rate_id` bigint(20) UNSIGNED NOT NULL,
  `per_km_rate` double(8,4) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `motorway_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`rate_id`, `per_km_rate`, `is_active`, `created_at`, `updated_at`, `tenant_id`, `motorway_id`, `created_by`) VALUES
(2, 2.2615, 1, '2020-11-04 10:45:06', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrator', 1, '2020-07-19 11:00:55', NULL),
(2, 'Administrator', 1, '2020-07-19 11:01:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_menus`
--

CREATE TABLE `role_menus` (
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_menus`
--

INSERT INTO `role_menus` (`is_active`, `created_at`, `updated_at`, `menu_id`, `role_id`, `created_by`) VALUES
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 1, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 2, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 3, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 4, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 5, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 6, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 7, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 8, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 9, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 10, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 11, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 12, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 13, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 14, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 15, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 16, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 17, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 18, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 19, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 20, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 21, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 22, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 23, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 24, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 25, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 26, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 39, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 40, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 41, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 43, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 44, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 45, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 46, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 47, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 48, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 50, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 60, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 61, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 62, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 52, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 53, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 54, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 55, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 58, 1, 1),
(1, '2021-08-04 08:08:26', '2021-08-04 08:08:26', 59, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `title`, `img`, `excerpt`, `description`, `created_at`, `updated_at`, `parent_service_id`, `tenant_id`, `created_by`) VALUES
(25, 'Matrimonial', 'img-8cdb9166-c666-496a-b4ec-163afd78ce4b.jpg', 'Matrimonial Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Matrimonial Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.', '<p>Matrimonial Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.</p>', '2021-05-04 11:43:38', '2021-05-04 11:43:38', NULL, 1, 1),
(26, 'Tours & Trips', 'img-7443eed2-2812-412c-a065-4d1cee915749.jpg', 'Tours Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh', '<p>Tours&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh</p>', '2021-05-04 11:46:13', '2021-05-04 11:46:13', NULL, 1, 1),
(27, 'Ads', 'img-6a8b8da6-1253-4c05-b474-2cf123b624a5.jpg', 'Ads Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh', 'Ads&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh', '2021-05-04 11:47:18', '2021-05-04 11:47:18', NULL, 1, 1),
(28, 'Courses', 'img-4e07c2fe-af05-41d9-a7d3-1e54ba7924f1.jpg', 'Courses Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh', 'Courses Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibhLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh', '2021-05-04 11:48:00', '2021-05-04 11:48:00', NULL, 1, 1),
(29, 'Videos', 'img-61ef9d97-2fc2-4c4a-b151-584ee4e4bd44.jpg', 'Videos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.', '<p>Videos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Videos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Videos Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.</p>', '2021-05-04 12:41:05', '2021-05-04 12:41:05', NULL, 1, 1),
(30, 'Religious Events', 'img-b865cd87-9f4a-4108-83d7-f1b963e870d0.jpg', 'Religious Events Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.', 'Religious Events Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Religious Events Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.Religious Events Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus. Proin tincidunt metus. Etiam ut ultrices nibh. Etiam aliquam mauris non hendrerit faucibus.', '2021-05-04 12:42:39', '2021-05-04 12:42:39', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`shift_id`, `name`, `start_time`, `end_time`, `is_active`, `tenant_id`, `created_by`) VALUES
(1, 'Morning', '07:00:00', '18:59:59', 1, 1, 1),
(2, 'Evening', '19:00:00', '06:59:59', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `station_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`station_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'North', 1, '2020-08-03 08:23:30', NULL),
(2, 'South', 1, '2020-08-03 08:23:34', NULL),
(3, 'STP', 1, '2020-08-03 08:23:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`tenant_id`, `name`, `phone`, `email`, `address`, `logo`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Frontier Works Organization', '03334501937', 'fjmu@fjma.gop.pk', 'Lawrence Road Lahore', 'AdminLTELogo_1c4eed2a84add.png', 1, '2020-07-21 05:33:35', '2020-07-21 05:33:35'),
(4, 'National Logistic Cell', '12345678910', 'admin@nlc.gov.pk', 'Rawalpindi', NULL, 1, '2020-08-03 06:57:26', '2020-08-03 06:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `tenant_users`
--

CREATE TABLE `tenant_users` (
  `tenant_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenant_users`
--

INSERT INTO `tenant_users` (`tenant_user_id`, `created_at`, `updated_at`, `tenant_id`, `user_id`) VALUES
(19, '2020-09-25 02:12:26', '2020-09-25 02:12:26', 1, 1),
(20, '2020-09-25 02:12:26', '2020-09-25 02:12:26', 4, 1),
(21, '2020-09-25 02:15:14', '2020-09-25 02:15:14', 1, 2),
(22, '2020-09-25 10:12:16', '2020-09-25 10:12:16', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `mobile`, `address`, `img`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad', 'Junaid', 'itambassadorz', 'itambassadorz@gmail.com', '$2y$10$vMrwjH6Qi/bKjimzrbOhpOfxVxeyYTaDZvjAt8FtkoMnTpFwP8uMu', '03334501937', 'PCSIR Staff College Road Lahore', 'avatar5_9b414ba9506f3.png', 1, '2020-07-19 11:02:32', '2020-09-25 02:12:26'),
(2, 'Sofia1', 'Khan', 'zeeshan.manzoor', 'admin@admin.com', '$2y$10$lzfWvpDw7GR7qQxIO5zfk.sZlOY7wNSfZeZydKFn28FoQ.BaUrszK', '03349935944', 'gujjarpura Lahore', NULL, 1, '2020-09-25 02:15:14', '2021-07-06 11:32:10'),
(3, 'Aamir', 'Shahzad', 'aamir.shahzad', 'aamir.shahzad@csd.gov.pk', '$2y$10$LUeTIfQBs7RKftiQF9bLHea1Rq4MxZNOokNOpsQpjjIiPooSn3ZYG', '03208585760', 'Rawalpindi', NULL, 1, '2020-09-25 10:12:16', '2020-09-25 10:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `user_image_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`user_image_id`, `image_path`, `web_user_id`, `created_at`, `updated_at`) VALUES
(15, '20170418_222911_c7ddd4e4d72f2.jpg', 2, '2021-07-07 10:37:29', '2021-07-07 10:37:29'),
(16, '20170418_230323_be0cccf03d20a.jpg', 2, '2021-07-07 10:37:30', '2021-07-07 10:37:30'),
(17, '431572_1_17f9d6c8b2bd6.jpg', 2, '2021-07-08 05:49:54', '2021-07-08 05:49:54'),
(18, 'samr_01cdd60c1f0de.jpg', 2, '2021-07-08 05:49:54', '2021-07-08 05:49:54'),
(19, '431572_1_a7f340c9880ed.jpg', 2, '2021-07-08 09:30:45', '2021-07-08 09:30:45'),
(20, '203215517_207159144601736_5935835725506600258_n_65399f8a79742.jpg', 2, '2021-07-08 09:30:45', '2021-07-08 09:30:45'),
(21, '431572_1_3819f268b1968.jpg', 2, '2021-07-08 14:19:21', '2021-07-08 14:19:21'),
(22, 'samr_b20781a28c5bb.jpg', 2, '2021-07-08 14:19:21', '2021-07-08 14:19:21'),
(23, 'accomodation-2_b20191ab5e34d.jpg', 2, '2021-07-27 11:11:12', '2021-07-27 11:11:12'),
(24, 'accomodation-3_d8d4532b8f7bb.jpg', 2, '2021-07-27 11:11:12', '2021-07-27 11:11:12'),
(25, 'attachment-15_2ee402a65272c.jpg', 2, '2021-07-28 11:05:05', '2021-07-28 11:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `user_profile_id` bigint(20) UNSIGNED NOT NULL,
  `sur_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cast` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_lang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_lang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_addresss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instragram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hair_color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_shape` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eye_color` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skin_color` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_age` int(11) DEFAULT NULL,
  `complexion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `life_style` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_range` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docor_degree` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `physique_id` int(11) DEFAULT NULL,
  `no_of_children` int(11) DEFAULT NULL,
  `drink_status` tinyint(4) DEFAULT 0,
  `smoke_status` tinyint(4) DEFAULT 0,
  `pet_status` tinyint(4) DEFAULT 0,
  `chat` tinyint(4) NOT NULL DEFAULT 0,
  `phone_cell` tinyint(4) NOT NULL DEFAULT 0,
  `profession` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `types` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_turnour` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elementry_school` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heigh_school` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bachelor_school` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_school` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `partner_alcohol` tinyint(4) DEFAULT 0,
  `second_marriage` tinyint(4) DEFAULT 0,
  `partner_smoke` tinyint(4) DEFAULT 0,
  `partner_divorce` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `web_user_id` bigint(20) UNSIGNED NOT NULL,
  `residential_city` bigint(20) UNSIGNED NOT NULL,
  `work_city` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`user_profile_id`, `sur_name`, `nationality`, `age`, `dob`, `height`, `religion`, `cast`, `mother_lang`, `other_lang`, `image_path`, `mobile`, `email`, `fb_addresss`, `instragram`, `marital_status`, `hair_color`, `body_shape`, `eye_color`, `ethnicity`, `skin_color`, `child_age`, `complexion`, `life_style`, `salary_range`, `docor_degree`, `physique_id`, `no_of_children`, `drink_status`, `smoke_status`, `pet_status`, `chat`, `phone_cell`, `profession`, `job_title`, `education`, `skill`, `types`, `business_turnour`, `address`, `description`, `elementry_school`, `heigh_school`, `university`, `bachelor_school`, `master_school`, `is_active`, `partner_alcohol`, `second_marriage`, `partner_smoke`, `partner_divorce`, `created_at`, `updated_at`, `web_user_id`, `residential_city`, `work_city`, `country_id`, `city_id`) VALUES
(1, 'Goodwin', 'Consequatur Cupidit', 33, '1991-12-09', '218', '6', 'Veritatis incidunt', '1', '2', 'attachment-6_d61991cda4c75.jpg', 31111111111111, 'admin@admin.com', NULL, NULL, '4', 'Nostrud enim facilis', '2', '4', '3', '6', 78, '4', '1', '3', 'Vero occaecat enim v', 1, 67, 1, 0, 1, 0, 0, 'Mollit mollit dolore', 'Nulla in aut quaerat', NULL, 'Quam perferendis ut', '1', NULL, NULL, 'Officiis quia irureweewwew', 'Adipisci ad temporib', 'Necessitatibus est v', 'Fugiat doloribus fug', 'Est quia et autem a', 'Voluptates officiis', 1, 1, 1, 1, 1, '2021-07-13 04:26:00', '2021-07-26 10:59:33', 2, 1, 2, 1, 1),
(4, 'Medina', 'Sunt dolore anim rec', 30, '1979-11-15', '233', '8', 'Ut quo adipisicing e', '2', '3', 'bridesmaid-4_65ffc6f54ea07.jpg', 30001, 'admin@admin.com', NULL, NULL, '1', 'Minima ullam accusan', '3', '7', '6', '2', 47, '1', '1', '1', 'Dicta aut error hic', 2, 61, 0, 1, 1, 1, 0, 'Voluptatum et exerci', 'Laborum Dolorem nul', NULL, 'Irure aut dignissimo', '1', NULL, NULL, 'Recusandae Occaecat', 'Et ullam quos molest', 'Quasi magna perferen', 'Rerum placeat conse', 'Nisi qui eaque minim', 'Minus facilis accusa', 1, 1, 1, 1, 1, '2021-07-13 05:06:04', '2021-07-13 05:06:04', 2, 9, 9, 6, 9),
(5, 'Abrar', 'Pakistani', 39, '1970-12-05', NULL, '1', 'AWAN', '1', '1', NULL, 3001234567, 'sajidaabrar42@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'agent', 'Matric', 'good', '2', '10', 'Lahore pakistan', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 05:07:28', '2021-07-13 05:07:28', 5, 1, 2, 1, 1),
(6, 'James', 'Quas omnis et quisqu', 22, '1988-03-10', '122', '3', 'Quasi eum impedit e', '2', '3', 'attachment-13_eb402299c096d.jpg', 311111108, 'admin@admin.com', NULL, NULL, '3', 'Ea eu ipsum labore', '2', '6', '6', '4', 52, '4', '1', '4', 'Officia cillum labor', 1, 97, 0, 1, 0, 1, 1, 'Quia corrupti fugia', 'Et tenetur incidunt', NULL, 'Qui tempore eum arc', '1', NULL, NULL, 'Quo nesciunt at inc', 'Expedita qui ex qui', 'Reprehenderit quisqu', 'Et obcaecati dolores', 'Ipsum temporibus er', 'Iusto adipisci aute', 1, 0, 0, 0, 0, '2021-07-13 05:10:00', '2021-07-13 05:10:00', 2, 13, 13, 3, 13),
(8, 'Wong', 'Et aut laborum ducim', 30, '2011-09-04', '186', '9', 'Sunt porro ducimus', '2', '1', 'attachment-1_400c4235f3dd3.jpg', 311111111, 'shahid90@gmail.com', NULL, NULL, '1', 'Dolore enim consequa', '2', '6', '6', '2', NULL, '4', '3', '2', 'Maiores ipsum ullam', 1, NULL, 0, 1, 0, 1, 1, 'Laudantium modi eaq', 'Eu maiores mollitia', NULL, 'Corporis ullam exped', '1', NULL, NULL, 'Itaque non similique', 'Suscipit vel magni m', 'Magni duis qui error', 'A sunt do officiis s', 'Voluptatem Assumend', 'Proident magni plac', 1, 1, 1, 1, 1, '2021-07-13 05:43:44', '2021-07-13 05:43:44', 13, 10, 9, 6, 9),
(9, 'Hubbard', 'Aliquip sed qui eaqu', 20, '1972-11-18', NULL, '7', 'Quasi tenetur velit', '2', '2', 'accomodation-3_9c123d30965c7.jpg', 16, 'shahid90@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'Nihil culpa unde dol', 'matric', 'Minima eu atque perf', '2', '10 year', 'Consequatur voluptat', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 05:44:58', '2021-07-13 05:44:58', 13, 1, 2, 9, 1),
(10, 'khan', 'Pakistani', 32, '2021-06-30', '160', '1', 'AWAN', '1', '2', 'groomsmen-4_3d019ce73a57e.jpg', 3110732074, 'sufyan10@gmail.com', NULL, NULL, '1', 'black', '1', '2', '1', '2', 2, '2', '1', '2', NULL, 1, 2, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'yhjk', 'aaa', 'sss', 'multan', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-13 06:06:34', '2021-07-16 07:11:01', 14, 2, 2, 2, 2),
(11, 'khan', 'Pakistani', 32, '2021-06-30', NULL, '1', 'AWAN', '1', '2', 'accomodation-2_5118d32066a5c.jpg', 3110732074, 'sufyan10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'sd', 'inter', 'good', '2', '10 year', 'Atto k awan batapur', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 06:07:32', '2021-07-16 07:14:56', 14, 2, 2, 2, 2),
(12, 'khan', 'Afghani', 32, '2021-07-29', '167', '1', 'malhi', '2', '1', 'groomsmen-6_6a39cf38216de.jpg', 3225689745, 'murshad@gmail.com', NULL, NULL, '3', 'grey', '3', '3', '4', '5', 2, '2', '1', '2', NULL, 2, 1, 0, 0, 1, 1, 1, 'abc', 'teacher', NULL, 'good', '1', NULL, NULL, 'aasdd sdsd', 'BISE LAHORE', 'Govt school', 'kabul', 'BIT', NULL, 1, 0, 0, 0, 0, '2021-07-13 06:16:05', '2021-07-13 06:16:05', 15, 13, 1, 3, 13),
(13, 'khan', 'pakistani', 37, '2021-07-29', NULL, '1', 'malhi', '1', '1', 'bridesmaid-5_8516206f627bb.jpg', 3225689745, 'murshad@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'agent', 'Matric', 'good', '2', '15', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 06:21:42', '2021-07-13 06:21:42', 15, 2, 1, 3, 2),
(14, 'awan', 'Pakistani', 25, '2021-07-17', '157', '1', 'AWAN', '1', '1', 'bridesmaid-6_be7d43453c43f.jpg', 3236547895, 'Maryam@gmail.com', NULL, NULL, '1', 'black', '1', '3', '1', '5', NULL, '2', '2', '1', NULL, 1, NULL, 0, 0, 0, 1, 1, 'Teacher', 'teacher', NULL, 'good', '1', NULL, NULL, 'sdfasdfsd', 'BISE LAHORE', 'Govt school Lahore', 'Alberta', 'BIT', NULL, 1, 0, 0, 0, 0, '2021-07-13 06:27:03', '2021-07-13 06:27:03', 16, 5, 5, 8, 5),
(15, 'awan', 'Pakistani', 25, '2021-07-17', NULL, '1', 'AWAN', '1', '1', 'attachment-7_6839599ba7443.jpg', 3236547895, 'Maryam@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'employee', 'inter', 'good', '2', '12', 'Islamabad,', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 06:29:37', '2021-07-13 06:29:37', 16, 2, 2, 1, 1),
(16, 'khan', 'Pakistani', 29, '2021-07-02', '162', '2', 'AWAN', '1', '2', 'bridesmaid-3_a46d53a552a9a.jpg', 3002564565, 'zunaira@gmail.com', NULL, NULL, '3', 'brown', '1', '3', '1', '5', NULL, '1', '2', '2', NULL, 1, NULL, 0, 0, 0, 1, 1, 'Teacher', 'xyz', NULL, 'good', '1', NULL, NULL, 'sdcasdfdfce', 'aaa', 'sss', 'Lahore', 'BA', NULL, 1, 0, 0, 0, 1, '2021-07-13 06:45:47', '2021-07-13 06:45:47', 17, 1, 2, 1, 1),
(17, 'khan', 'Pakistani', 40, '2021-07-02', NULL, '2', 'AWAN', '1', '2', NULL, 3002564565, 'zunaira@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'xyz', 'inter', 'good', '2', '10 year', 'multan', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 06:47:34', '2021-07-13 06:47:34', 17, 1, 2, 1, 1),
(18, 'Ahmad', 'Pakistani', 35, '2021-09-15', '186', '1', 'AWAN', '1', '1', 'groomsmen-main-1920-a_16e4f48d583ae.jpg', 3004454230, 'abrar77@gmail.com', NULL, NULL, '2', 'black', '3', '2', '1', '2', 2, '3', '3', '3', NULL, 1, 1, 0, 0, 0, 1, 0, 'Police', 'ASI', NULL, 'good', '1', NULL, NULL, 'ferferferferf', 'BISE LAHORE', 'Govt school', 'Lahore', 'BA', NULL, 1, 0, 0, 0, 1, '2021-07-13 06:54:44', '2021-07-13 06:54:44', 18, 1, 1, 1, 1),
(19, 'Ahmad', 'Pakistani', 30, '2021-09-15', NULL, '1', 'AWAN', '1', '1', 'attachment-1_d7fc9a21fb4ed.jpg', 3004454230, 'abrar77@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'agent', 'inter', 'good', '2', '10 year', 'Multan', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 06:56:20', '2021-07-13 06:56:20', 18, 1, 1, 1, 1),
(20, 'khan', 'Pakistani', 26, '2021-08-06', '175', '1', 'jutt', '3', '3', 'groomsmen-3_b54fb6bcc42da.jpg', 302222222, 'ahmadhassan@gmail.com', NULL, NULL, '1', 'black', '2', '4', '1', '5', NULL, '1', '2', '3', NULL, 1, NULL, 0, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'nhfggyftyfty', 'aaa', 'sss', 'Alberta', 'BA', NULL, 1, 0, 1, 0, 0, '2021-07-13 07:02:49', '2021-07-13 07:02:49', 19, 6, 6, 8, 6),
(21, 'khan', 'Pakistani', 39, '2021-08-06', NULL, '1', 'jutt', '3', '3', 'her2_1d94aca59f4b8.jpg', 302222222, 'ahmadhassan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'xyz', 'BA', 'good', '2', '11', 'Karachi pakistan', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 07:04:18', '2021-07-13 07:04:18', 19, 1, 1, 8, 1),
(22, 'kashmiri', 'pakistani', 30, '2021-08-07', '177', '1', 'kashmiri', '2', '2', 'groomsmen-5_7ff7ce381acb8.jpg', 3125689754, 'kashmiri@gmail.com', NULL, NULL, '1', 'grey', '1', '5', '1', '5', NULL, '1', '1', '1', NULL, 1, NULL, 0, 1, 1, 1, 1, 'Police', 'xyz', NULL, 'good', '1', NULL, NULL, 'dsdfwdfwefwef', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BA', NULL, 1, 0, 0, 0, 0, '2021-07-13 07:09:17', '2021-07-13 07:09:17', 20, 12, 12, 5, 12),
(23, 'kashmiri', 'pakistani', 30, '2021-08-07', NULL, '1', 'kashmiri', '2', '2', 'attachment-8_521b456f06c33.jpg', 3125689754, 'kashmiri@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'xyz', 'BA', 'good', '2', '15', 'Lahore pakistan', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 07:10:29', '2021-07-13 07:10:29', 20, 1, 1, 5, 1),
(24, 'Hubbard', 'Pakistani', 26, '2021-07-23', '157', '2', 'malhi', '1', '1', 'her2_b32d35580b5ee.jpg', 325644444, 'katrina88@gmail.com', NULL, NULL, '4', 'brown', '3', '6', '5', '4', 4, '3', '1', '1', NULL, 2, 2, 0, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'wdwedfwerf', 'aaa', 'sss', 'Alberta', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-13 07:16:56', '2021-07-13 07:16:56', 21, 3, 3, 9, 3),
(25, 'Hubbard', 'Pakistani', 34, '2021-07-23', NULL, '2', 'malhi', '1', '1', 'groomsmen-4_1489fd934ce38.jpg', 325644444, 'katrina88@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'xyz', 'inter', 'good', 'Agent', '12', 'Karachi pakistan', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 07:18:04', '2021-07-13 07:18:04', 21, 1, 2, 9, 1),
(27, 'Goodwin', 'Consequatur Cupidit', 33, '1991-12-09', NULL, '6', 'Veritatis incidunt', '1', '2', 'accomodation-1_c9348d65f235b.jpg', 31111111111111, 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, 'Nulla in aut quaerat', 'asd', 'Quam perferendis ut', '2', 'asd', 'as', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-13 08:41:18', '2021-07-13 08:41:18', 2, 1, 2, 1, 1),
(28, 'Ortega', 'Qui commodo earum vi', 21, '1998-06-07', '183', '6', 'Sint in eu duis proi', '1', '1', 'bridesmaid-main-1920-a_fea8f7de1ccb6.jpg', 76, 'admin@admin.com', NULL, NULL, '1', 'Eveniet ea qui volu', '1', '1', '3', '2', NULL, '1', '1', '2', 'Est sit quisquam ea', 1, 31, 0, 1, 1, 1, 1, 'Et et voluptatem pro', 'Cumque nesciunt quo', NULL, 'Deserunt itaque quib', '1', NULL, NULL, 'Aut voluptates non v', 'Molestiae eveniet q', 'Error quasi est aut', 'Et sunt beatae aliq', 'Et eum distinctio V', 'Sit animi officiis', 1, 0, 0, 0, 1, '2021-07-13 09:03:28', '2021-07-13 09:03:28', 2, 5, 2, 8, 5),
(29, 'khan', 'Pakistani', 32, '2021-08-06', '170', '1', 'wattoo', '2', '2', 'groomsmen-1_18f7de24ece81.jpg', 3214444444, 'samar@gmail.com', NULL, NULL, '2', 'black', '1', '1', '1', '5', NULL, '2', '2', '1', NULL, 1, 3, 0, 1, 1, 1, 1, 'Teacher', 'xyz', NULL, 'good', '1', NULL, NULL, 'sdfdfasdfsdf', 'BISE LAHORE', 'Govt school', 'Lahore', 'BIT', NULL, 1, 1, 0, 0, 1, '2021-07-14 03:56:04', '2021-07-14 03:56:04', 23, 2, 2, 2, 2),
(30, 'khan', 'Pakistani', 18, '2021-02-21', '157', '1', 'AWAN', '3', '1', 'profile-her-popup_69504e4fc2904.jpg', 13021222222, 'javeria@gmail.com', NULL, NULL, '1', 'brown', '1', '2', '1', '5', NULL, '1', '1', '2', NULL, 1, NULL, 0, 0, 1, 1, 0, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'asasdfsfs', 'aaa', 'sss', 'multan', 'BA', NULL, 1, 0, 0, 0, 0, '2021-07-14 04:03:21', '2021-07-14 04:03:21', 24, 1, 1, 1, 1),
(31, 'khan', 'Pakistani', 45, '2021-02-21', NULL, '1', 'AWAN', '3', '1', NULL, 13021222222, 'javeria@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'xyz', 'BA', 'good', '2', '10', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 04:07:11', '2021-07-14 04:07:11', 24, 1, 1, 1, 1),
(32, 'khan', 'Pakistani', 38, '2021-02-21', NULL, '1', 'AWAN', '3', '1', 'attachment-1_26b8ad1779046.jpg', 13021222222, 'javeria@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'xyz', 'BA', 'good', '2', '11', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 04:10:17', '2021-07-14 04:10:17', 24, 1, 1, 1, 1),
(33, 'sadiq', 'Pakistani', 38, '2021-05-14', '175', '2', 'wattoo', '1', '2', NULL, 3110732074, 'qadeer@gmail.com', NULL, NULL, '4', 'black', '2', '3', '3', '6', NULL, '1', '1', '1', NULL, 1, 1, 0, 0, 1, 1, 1, 'abc', 'agent', NULL, 'good', '1', NULL, NULL, 'fbfgfghrfghtr', 'BISE LAHORE', 'Govt school', 'Lahore', 'BIT', NULL, 1, 0, 1, 0, 1, '2021-07-14 04:39:08', '2021-07-14 04:39:08', 25, 1, 1, 1, 1),
(34, 'sadiq', 'Pakistani', 46, '2021-05-14', NULL, '2', 'wattoo', '1', '2', 'attachment-1_7bf1854bb33ac.jpg', 3110732074, 'qadeer@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'agent', 'Matric', 'good', '2', '10 year', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 04:39:55', '2021-07-14 04:39:55', 25, 1, 1, 1, 1),
(35, 'Ahmad', 'Afghani', 30, '2021-07-24', '183', '5', 'malhi', '1', '1', NULL, 214444444, 'umair@gmail.com', NULL, NULL, '4', 'brown', '3', '1', '2', '4', NULL, '2', '2', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'dfvdfsdffdf', 'BISE LAHORE', 'sss', 'Alberta', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-14 06:06:33', '2021-07-14 06:06:33', 27, 11, 11, 5, 11),
(36, 'Ahmad', 'Afghani', 30, '2021-07-24', NULL, '5', 'malhi', '1', '1', 'attachment-8_5cbfa9b4e576d.jpg', 214444444, 'umair@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'xyz', 'BA', 'good', '2', '10 year', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 06:11:53', '2021-07-14 06:11:53', 27, 2, 1, 5, 1),
(37, 'khan', 'Afghani', 35, '2021-06-27', '186', '8', 'wattoo', '2', '1', 'attachment-1_3a271db171eda.jpg', 222222222222, 'kapoor@gmail.com', NULL, NULL, '2', 'brown', '2', '3', '5', '3', NULL, '4', '4', '1', NULL, 2, 1, 1, 0, 1, 1, 1, 'Teacher', 'agent', NULL, 'good', '1', NULL, NULL, 'dfdfdgf', 'BISE LAHORE', 'Govt school', 'Alberta', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-14 06:49:07', '2021-07-14 06:49:07', 28, 9, 7, 6, 9),
(38, 'khan', 'Afghani', 35, '2021-06-27', NULL, '8', 'wattoo', '2', '1', 'bridesmaid-2_0a4619798e6f3.jpg', 222222222222, 'kapoor@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'agent', 'Matric', 'good', '2', '15', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 06:50:12', '2021-07-14 06:50:12', 28, 2, 1, 6, 2),
(39, 'jennifer', 'Pakistani', 23, '2021-01-25', '162', '2', 'ethnic', '1', '1', 'footer-image-4_83b9edac3435b.jpg', 2144444444, 'jenny10@gmail.com', NULL, NULL, '1', 'brown', '1', '2', '5', '5', NULL, '1', '1', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'Teacher', 'agent', NULL, 'good', '1', NULL, NULL, 'fdffffffffffffffff', 'BISE LAHORE', 'sss', 'kabul', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-14 06:55:35', '2021-07-14 06:55:35', 29, 3, 3, 9, 3),
(40, 'jennifer', 'Pakistani', 23, '2021-01-25', NULL, '2', 'ethnic', '1', '1', 'attachment-6_4b975aa264cc0.jpg', 2144444444, 'jenny10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'agent', 'BA', 'good', '2', '10 year', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 06:56:32', '2021-07-14 06:56:32', 29, 2, 2, 9, 1),
(41, 'khan', 'Pakistani', 20, '2020-07-30', '155', '8', 'malhi', '1', '1', 'attachment-8_52f108f7ce2b6.jpg', 310000000000000000, 'tania@gmail.com', NULL, NULL, '3', 'brown', '2', '3', '1', '3', NULL, '2', '2', '1', NULL, 2, 1, 1, 1, 1, 1, 1, 'abc', 'ffg', NULL, 'good', '1', NULL, NULL, 'xxxxxxxxxxxxxxxxxx', 'aaa', 'sss', 'multan', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-14 07:00:57', '2021-07-14 07:00:57', 30, 1, 1, 1, 1),
(42, 'khan', 'Pakistani', 20, '2020-07-30', NULL, '8', 'malhi', '1', '1', 'attachment-16_d61fc48d240cf.jpg', 310000000000000000, 'tania@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'ffg', 'BA', 'good', '2', '12', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 07:01:49', '2021-07-14 07:01:49', 30, 1, 1, 1, 1),
(43, 'Hubbard', 'Afghani', 40, '2021-07-09', '165', '7', 'Quasi tenetur velit', '1', '1', 'bridesmaid-1_e9de3db1e1a75.jpg', 2155555555555555, 'marioalex@gmail.com', NULL, NULL, '3', 'grey', '1', '5', '5', '5', NULL, '1', '1', '1', NULL, 1, NULL, 1, 1, 1, 1, 1, 'Police', 'ffg', NULL, 'good', '1', NULL, NULL, 'aaaaaaaaaaaaa', 'BISE LAHORE', 'Govt school Lahore', 'Alberta', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-14 07:07:57', '2021-07-14 07:07:57', 31, 5, 5, 8, 5),
(44, 'Hubbard', 'Afghani', 40, '2021-07-09', NULL, '7', 'Quasi tenetur velit', '1', '1', 'attachment-1_7845472c767d6.jpg', 2155555555555555, 'marioalex@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'ffg', 'inter', 'good', '2', '12', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 07:09:46', '2021-07-14 07:09:46', 31, 1, 1, 8, 2),
(45, 'khan', 'Pakistani', 31, '2021-07-14', '162', '2', 'wattoo', '3', '3', 'bridesmaid-5_48a23bff5093e.jpg', 302222222222222, 'mishal@gmail.com', NULL, NULL, '4', 'black', '1', '4', '5', '2', NULL, '1', '4', '1', NULL, 1, NULL, 1, 1, 1, 1, 1, 'Teacher', 'teacher', NULL, 'good', '1', NULL, NULL, 'gthhhhhhhhhhhhhhhhh', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-14 07:16:27', '2021-07-14 07:16:27', 32, 1, 1, 1, 1),
(46, 'khan', 'Pakistani', 31, '2021-07-14', NULL, '2', 'wattoo', '3', '3', 'bridesmaid-1_00772f25dfa5b.jpg', 302222222222222, 'mishal@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'teacher', 'BA', 'good', '2', '11', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 07:17:09', '2021-07-14 07:17:09', 32, 1, 1, 1, 1),
(47, 'Hubbard', 'Pakistani', 34, '2021-07-24', '165', '5', 'malhi', '1', '1', 'gallery-6_1b1333e920ad9.jpg', 235666666666, 'alizbeth@gmail.com', NULL, NULL, '3', 'black', '3', '3', '3', '3', NULL, '3', '1', '3', NULL, 1, NULL, 1, 1, 1, 1, 1, 'Police', 'employee', NULL, 'good', '1', NULL, NULL, 'wwwwwwwwwwww', 'BISE LAHORE', 'Govt school Lahore', 'kabul', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-14 07:21:20', '2021-07-14 07:21:20', 33, 14, 14, 3, 14),
(48, 'Hubbard', 'Pakistani', 34, '2021-07-24', NULL, '5', 'malhi', '1', '1', 'footer-image-3_4de3954a5719f.jpg', 235666666666, 'alizbeth@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'employee', 'inter', 'good', '2', '10 year', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 07:22:12', '2021-07-14 07:22:12', 33, 2, 2, 3, 2),
(49, 'khan', 'Pakistani', 32, '2021-07-14', '150', '1', 'Rajpoot', '3', '1', 'attachment-couple_162a27f161aa2.jpg', 2111111111, 'cheetah@gmail.com', NULL, NULL, '4', 'grey', '1', '4', '7', '5', NULL, '1', '1', '1', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'bggggggggggggggggggg', 'aaa', 'sss', 'Lahore', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-14 07:32:50', '2021-07-14 07:32:50', 34, 7, 7, 7, 7),
(50, 'khan', 'Pakistani', 32, '2021-07-14', NULL, '1', 'Rajpoot', '3', '1', 'him2_f067a4568ed3c.jpg', 2111111111, 'cheetah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'xyz', 'BA', 'good', '2', '12', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-14 07:33:59', '2021-07-14 07:33:59', 34, 2, 1, 7, 2),
(51, 'khan', 'Pakistani', 26, '2021-07-16', '152', '1', 'Araien', '1', '1', NULL, 231111111, 'aqsamatloob@gmail.com', NULL, NULL, '1', 'brown', '1', '3', '1', '2', NULL, '2', '2', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'agent', NULL, 'good', '1', NULL, NULL, 'sssssssssssssssssssssss', 'BISE LAHORE', 'Govt school', 'multan', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 04:40:30', '2021-07-15 04:40:30', 35, 1, 1, 1, 1),
(52, 'khan', 'Pakistani', 26, '2021-07-16', NULL, '1', 'Araien', '1', '1', 'attachment-1_9c0e39555a599.jpg', 231111111, 'aqsamatloob@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'agent', 'matric', 'good', '2', '12', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 04:42:27', '2021-07-15 04:42:27', 35, 1, 1, 1, 1),
(53, 'khan', 'Pakistani', 26, '2021-07-16', '152', '1', 'Araien', '1', '1', 'bridesmaid-3_0c96b309c3567.jpg', 231111111, 'aqsamatloob@gmail.com', NULL, NULL, '1', 'brown', '1', '1', '1', '3', NULL, '3', '2', '1', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'zzzzzzzzzzzzzz', 'BISE LAHORE', 'Govt school', 'multan', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 04:44:38', '2021-07-15 04:44:38', 35, 1, 1, 1, 1),
(54, 'chadhar', 'Afghani', 35, '2021-10-13', '172', '1', 'jutt', '1', '1', 'groomsmen-5_062284de34c9f.jpg', 3110732074, 'ali99@gmail.com', NULL, NULL, '3', 'brown', '2', '2', '1', '2', NULL, '1', '1', '2', NULL, 2, NULL, 1, 1, 1, 1, 1, 'lawyer', 'lawyer', NULL, 'good', '1', NULL, NULL, 'sssssssssssssssssssssssss', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-15 04:48:27', '2021-07-15 04:48:27', 36, 2, 1, 2, 2),
(55, 'chadhar', 'Afghani', 35, '2021-10-13', NULL, '1', 'jutt', '1', '1', NULL, 3110732074, 'ali99@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'lawyer', 'BA', 'good', '2', '8', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 04:49:07', '2021-07-15 04:49:07', 36, 2, 1, 2, 2),
(56, 'khan', 'Afghani', 33, '2021-07-15', '172', '10', 'AWAN', '1', '1', 'groomsmen-6_e7cbb3581dccd.jpg', 3110732074, 'faraz@gmail.com', NULL, NULL, '4', 'black', '3', '1', '1', '3', NULL, '4', '4', '3', NULL, 2, 5, 1, 1, 1, 1, 1, 'Police', 'ffg', NULL, 'good', '1', NULL, NULL, 'ccccccc', 'BISE LAHORE', 'Govt school Lahore', 'Alberta', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 04:54:03', '2021-07-15 04:54:03', 37, 8, 8, 7, 8),
(57, 'khan', 'Afghani', 33, '2021-07-15', NULL, '10', 'AWAN', '1', '1', NULL, 3110732074, 'faraz@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'ffg', 'inter', 'good', '2', '8', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 04:54:45', '2021-07-15 04:54:45', 37, 2, 2, 7, 1),
(58, 'khan', 'Afghani', 38, '2021-07-19', '157', '3', 'malhi', '1', '1', 'bridesmaid-2_2f4dea7043dcf.jpg', 21333333333333, 'jannat@gmail.com', NULL, NULL, '4', 'black', '3', '3', '5', '2', NULL, '3', '4', '2', NULL, 1, 2, 1, 1, 1, 1, 1, 'Teacher', 'teacher', NULL, 'good', '1', NULL, NULL, 'wwwwwwwwwwww', 'BISE LAHORE', 'Govt school Lahore', 'Alberta', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-15 05:01:09', '2021-07-15 05:01:09', 38, 13, 13, 3, 13),
(59, 'khan', 'Afghani', 38, '2021-07-19', NULL, '3', 'malhi', '1', '1', NULL, 21333333333333, 'jannat@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'teacher', 'Matric', 'good', 'Agent', '10', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 05:01:57', '2021-07-15 05:01:57', 38, 1, 1, 3, 2),
(60, 'Hubbard', 'Indian', 40, '2021-07-15', '162', '2', 'Quasi tenetur velit', '1', '1', 'gallery-13_4617014198775.jpg', 215555555555, 'aster@gmail.com', NULL, NULL, '3', 'brown', '1', '2', '8', '5', NULL, '1', '1', '2', NULL, 1, 1, 1, 1, 1, 1, 1, 'lawyer', 'xyz', NULL, 'good', 'Matcher', NULL, NULL, 'wefweeeeeeeeeee', 'aaa', 'sss', 'kabul', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-15 05:06:47', '2021-07-15 05:06:47', 39, 10, 10, 6, 10),
(61, 'Hubbard', 'Indian', 44, '2021-07-15', NULL, '1', 'wattoo', '1', '3', 'gallery-7_31352a5cadfad.jpg', 102566666666, 'aster@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'employee', 'BA', 'good', 'Agent', '15', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 05:09:46', '2021-07-15 05:09:46', 39, 1, 1, 7, 1),
(62, 'nazim', 'pakistani', 22, '2021-07-29', '157', '1', 'AWAN', '1', '1', 'album1_71d3879477bc3.jpg', 3110732074, 'azalfa@gmail.com', NULL, NULL, '1', 'black', '1', '1', '1', '5', NULL, '1', '1', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'Teacher', 'agent', NULL, 'good', '1', NULL, NULL, 'aaswssssss', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 05:26:20', '2021-07-15 05:26:20', 40, 1, 1, 1, 1),
(63, 'nazim', 'pakistani', 22, '2021-07-29', NULL, '1', 'AWAN', '1', '1', 'admin2_5cd1fcfaef957.jpg', 3110732074, 'azalfa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'agent', 'BA', 'good', '2', '10 year', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 05:27:10', '2021-07-15 05:27:10', 40, 1, 1, 1, 1),
(64, 'Hubbard', 'Indian', 45, '2021-07-05', '165', '8', 'Quasi tenetur velit', '1', '1', 'album2_8e05c72ea2a23.jpg', 3110732074, 'susan@gmail.com', NULL, NULL, '3', 'grey', '1', '5', '7', '4', NULL, '1', '1', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'lawyer', 'employee', NULL, 'good', '1', NULL, NULL, 'qws', 'BISE LAHORE', 'Govt school', 'Alberta', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-15 05:31:00', '2021-07-15 05:31:00', 41, 4, 4, 9, 3),
(65, 'Hubbard', 'Indian', 45, '2021-07-05', NULL, '8', 'Quasi tenetur velit', '1', '1', 'audio-user5_252e02bf50173.jpg', 3110732074, 'susan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'employee', 'inter', 'good', '2', '8', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 05:32:31', '2021-07-15 05:32:31', 41, 1, 1, 9, 2),
(66, 'khan', 'Pakistani', 32, '2021-07-09', '157', '1', 'malhi', '1', '1', 'author2_372e8df6492f7.jpg', 3110732074, 'sabaharif@gmail.com', NULL, NULL, '1', 'black', '1', '2', '1', '5', NULL, '1', '2', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'Teacher', 'teacher', NULL, 'good', '1', NULL, NULL, 'sddddddddd', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 05:37:37', '2021-07-15 05:37:37', 42, 2, 2, 2, 2),
(67, 'khan', 'Pakistani', 32, '2021-07-09', NULL, '1', 'malhi', '1', '1', 'ceo1_aa849a380bed8.jpg', 3110732074, 'sabaharif@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'teacher', 'matric', 'good', '2', '12', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 05:38:34', '2021-07-15 05:38:34', 42, 2, 2, 2, 2),
(68, 'khan', 'Pakistani', 55, '2021-07-16', '170', '1', 'Rajpoot', '1', '1', 'ceo3_91da4093b0533.jpg', 3110732074, 'usmanhashmi@gmail.com', NULL, NULL, '2', 'black', '1', '3', '1', '2', NULL, '2', '2', '3', NULL, 1, 1, 0, 1, 1, 0, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'ddddddddddddddw', 'BISE LAHORE', 'Govt school Lahore', 'multan', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 05:47:29', '2021-07-15 05:47:29', 43, 1, 1, 1, 1),
(69, 'khan', 'Pakistani', 55, '2021-07-16', NULL, '1', 'Rajpoot', '1', '1', 'album4_f888229ffd5bf.jpg', 3110732074, 'usmanhashmi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'xyz', 'inter', 'good', '2', '15', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 05:48:23', '2021-07-15 05:48:23', 43, 1, 1, 1, 1),
(70, 'khan', 'Afghani', 31, '2021-07-13', '160', '4', 'Rajpoot', '2', '2', 'chatuser6_9b30a52cb7ae8.jpg', 3110732074, 'alisha@gmail.com', NULL, NULL, '4', 'brown', '3', '6', '6', '4', NULL, '3', '2', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'Teacher', 'agent', NULL, 'good', '1', NULL, NULL, 'sdcfs', 'aaa', 'sss', 'Alberta', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-15 05:52:27', '2021-07-15 05:52:27', 44, 2, 1, 2, 2),
(71, 'khan', 'Afghani', 31, '2021-07-13', NULL, '4', 'Rajpoot', '2', '2', 'audio-user2_fb1c5b758f1f3.jpg', 3110732074, 'alisha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'agent', 'inter', 'good', '2', '11', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 05:53:18', '2021-07-15 05:53:18', 44, 2, 1, 2, 2),
(72, 'khan', 'Pakistani', 38, '2021-07-15', '186', '1', 'malhi', '1', '1', 'ceo4_a5554fbdcc115.jpg', 3110732074, 'abdulhadi@gmail.com', NULL, NULL, '3', 'black', '3', '3', '1', '3', NULL, '2', '2', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'xxzcvvdddds', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 06:00:54', '2021-07-15 06:00:54', 45, 2, 2, 2, 2),
(73, 'khan', 'Pakistani', 38, '2021-07-15', NULL, '1', 'malhi', '1', '1', 'audio-user6_53f140dedb05b.jpg', 3110732074, 'abdulhadi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'xyz', 'BA', 'good', '2', '15', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 06:01:35', '2021-07-15 06:01:35', 45, 2, 2, 2, 2),
(74, 'Hubbard', 'indian', 26, '2021-08-07', '170', '7', 'Rajpoot', '1', '2', 'chatuser1_4733111c298da.jpg', 3110732074, 'john33@gmail.com', NULL, NULL, '1', 'black', '1', '5', '7', '5', NULL, '1', '1', '2', NULL, 1, NULL, 1, 1, 1, 1, 1, 'Teacher', 'xyz', NULL, 'good', '1', NULL, NULL, 'zxxxxxxxc', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-15 06:06:40', '2021-07-15 06:06:40', 46, 10, 6, 6, 9),
(75, 'Hubbard', 'indian', 26, '2021-08-07', NULL, '7', 'Rajpoot', '1', '2', 'ceo1_1bc112b0af176.jpg', 3110732074, 'john33@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'xyz', 'matric', 'good', '2', '15', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 06:07:50', '2021-07-15 06:07:50', 46, 1, 1, 6, 1),
(76, 'khan', 'Indian', 38, '2021-07-24', '160', '6', 'Rajpoot', '1', '1', 'chatuser3_f681ac0516c38.jpg', 3110732074, 'kajol@gmail.com', NULL, NULL, '2', 'black', '1', '2', '5', '3', NULL, '3', '1', '3', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'asads', 'BISE LAHORE', 'Govt school Lahore', 'kabul', 'BA', NULL, 1, 1, 1, 1, 1, '2021-07-15 06:35:44', '2021-07-15 06:35:44', 47, 6, 6, 8, 6),
(77, 'khan', 'Indian', 38, '2021-07-24', NULL, '6', 'Rajpoot', '1', '1', 'ceo2_da1826392e857.jpg', 3110732074, 'kajol@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'xyz', 'Matric', 'good', '2', '15', 'Marrar 42/RB, Tehsil sangla hill, District Nankana sahib', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 06:36:41', '2021-07-15 06:36:41', 47, 2, 1, 8, 2),
(78, 'Ahmad', 'Pakistani', 38, '2021-07-15', '162', '1', 'wattoo', '2', '1', 'date-user4_65e38dc9dbe58.jpg', 3110732074, 'aliya@gmail.com', NULL, NULL, '3', 'black', '1', '3', '1', '2', NULL, '2', '1', '3', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'cvb nb', 'BISE LAHORE', 'Govt school', 'Alberta', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 06:42:34', '2021-07-15 06:42:34', 48, 1, 1, 1, 1),
(79, 'Ahmad', 'Pakistani', 38, '2021-07-15', NULL, '1', 'wattoo', '2', '1', 'date-user2_fd805d0b3d9a8.jpg', 3110732074, 'aliya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'xyz', 'BA', 'good', '2', '8', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 06:43:25', '2021-07-15 06:43:25', 48, 1, 1, 1, 1),
(80, 'Ahmad', 'Indian', 22, '2021-07-15', '183', '1', 'AWAN', '1', '1', 'date-user12_789d0322ac601.jpg', 3110732074, 'zaheerkhan@gmail.com', NULL, NULL, '1', 'grey', '1', '3', '1', '5', NULL, '1', '1', '3', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'vvvvvvvbc', 'BISE LAHORE', 'Govt school Lahore', 'multan', 'BIT', NULL, 1, 0, 1, 1, 0, '2021-07-15 06:47:14', '2021-07-15 06:47:14', 49, 4, 3, 9, 3),
(81, 'Ahmad', 'Indian', 22, '2021-07-15', NULL, '1', 'AWAN', '1', '1', 'friend-avatar9_96164541171c6.jpg', 3110732074, 'zaheerkhan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'xyz', 'inter', 'good', '2', '12', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 06:48:24', '2021-07-15 06:48:24', 49, 2, 1, 9, 2),
(82, 'Ahmad', 'Afghani', 35, '2021-07-15', '165', '1', 'Rajpoot', '1', '1', 'chatuser5_dee7c9637f101.jpg', 3110732074, 'maham@gmail.com', NULL, NULL, '3', 'brown', '1', '1', '3', '5', NULL, '1', '2', '3', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'vggf', 'BISE LAHORE', 'Govt school Lahore', 'multan', 'BA', NULL, 1, 0, 1, 1, 0, '2021-07-15 06:53:19', '2021-07-15 06:53:19', 50, 13, 2, 3, 14),
(83, 'Ahmad', 'Afghani', 35, '2021-07-15', NULL, '1', 'Rajpoot', '1', '1', 'audio-user6_1be528f9c96f8.jpg', 3110732074, 'maham@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, NULL, 'xyz', 'inter', 'good', '2', '8', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 06:53:59', '2021-07-15 06:53:59', 50, 1, 2, 3, 2),
(84, 'Hubbard', 'Indian', 54, '2021-07-24', '172', '6', 'jutt', '1', '1', 'date-user5_85aa1c3951cee.jpg', 3110732074, 'sachin@gmail.com', NULL, NULL, '3', 'brown', '2', '3', '5', '6', NULL, '3', '2', '4', NULL, 2, NULL, 1, 1, 1, 1, 1, 'abc', 'agent', NULL, 'good', '1', NULL, NULL, 'hgfftgfgh', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BIT', NULL, 1, 1, 1, 1, 1, '2021-07-15 07:02:10', '2021-07-15 07:02:10', 51, 9, 1, 6, 9),
(85, 'Hubbard', 'Indian', 54, '2021-07-24', NULL, '6', 'jutt', '1', '1', 'forum-author3_175e764895661.png', 3110732074, 'sachin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, NULL, 'agent', 'Matric', 'good', '2', '15', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 07:03:06', '2021-07-15 07:03:06', 51, 1, 1, 6, 2),
(86, 'khan', 'Pakistani', 28, '2021-07-15', '175', '1', 'Rajpoot', '1', '1', 'date-user10_99055c8ba25eb.jpg', 3110732074, 'rehman@gmail.com', NULL, NULL, '2', 'brown', '1', '3', '1', '4', NULL, '1', '1', '4', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'ffggf', 'BISE LAHORE', 'Govt school Lahore', 'Lahore', 'BIT', NULL, 1, 0, 0, 0, 0, '2021-07-15 07:51:01', '2021-07-15 07:51:01', 52, 1, 1, 1, 1),
(87, 'khan', 'Pakistani', 28, '2021-07-15', NULL, '1', 'Rajpoot', '1', '1', 'date-user14_66dcbb96e1489.jpg', 3110732074, 'rehman@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 1, NULL, 'xyz', 'inter', 'good', '2', '10', 'Atto k awan batapur Lahore', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 0, '2021-07-15 07:52:17', '2021-07-15 07:52:17', 52, 1, 1, 1, 1),
(88, 'Ahmad', 'Pakistani', 22, '2021-09-15', '188', '1', 'AWAN', '1', '1', 'frnd-figure1_6017dbb5e1f73.jpg', 3110732074, 'abdullah@gmail.com', NULL, NULL, '1', 'black', '1', '2', '1', '5', NULL, '1', '4', '3', NULL, 1, NULL, 1, 1, 1, 1, 1, 'abc', 'xyz', NULL, 'good', '1', NULL, NULL, 'b       bv', 'BISE LAHORE', 'Govt school Lahore', 'multan', 'BIT', NULL, 1, 0, 0, 0, 0, '2021-07-15 07:57:06', '2021-07-15 07:57:06', 53, 2, 1, 2, 2),
(89, 'Goodwin', 'Consequatur Cupidit', 33, '1991-12-09', '186', '6', 'Veritatis incidunt', '1', '2', NULL, 31111111111111, 'admin@admin.com', NULL, NULL, '3', 'Voluptas ipsum eum n', '2', '3', '3', '2', NULL, '3', '3', '1', 'Recusandae Necessit', 1, 24, 1, 1, 1, 1, 1, 'Impedit excepteur m', 'Proident tempora et', NULL, 'Ipsum porro sit rer', '1', NULL, NULL, 'Voluptatem itaque id', 'Dolore ea dolores vo', 'Labore hic sint a au', 'Et dolor cupidatat e', 'Sint praesentium do', 'Tempora labore volup', 1, 1, 1, 1, 1, '2021-07-28 10:36:16', '2021-07-28 10:36:16', 2, 1, 2, 1, 1),
(90, 'Goodwin', 'Consequatur Cupidit', 33, '1991-12-09', '183', '6', 'Veritatis incidunt', '1', '2', 'pngwing.com_b18ca59036f2e.png', 31111111111111, 'admin@admin.com', NULL, NULL, '1', 'efd', '1', '1', '3', '3', NULL, '1', '1', '2', 'sgasd', 1, NULL, 1, 1, 1, 1, 1, 'hujk.nh', 'ghvbjhvhj', NULL, 'Quam perferendis ut', '1', NULL, NULL, 'sfdjjasidfj note', 'siosfjw', 'uwafja', 'joi fasdj', 'fjisda fjs', 'ijsdoj f', 1, 1, 1, 1, 1, '2021-08-05 11:27:27', '2021-08-05 11:27:27', 2, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_role_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_role_id`, `is_active`, `created_at`, `updated_at`, `role_id`, `user_id`) VALUES
(22, 1, '2020-09-25 02:12:26', '2020-09-25 02:12:26', 1, 1),
(23, 1, '2020-09-25 02:12:26', '2020-09-25 02:12:26', 2, 1),
(24, 1, '2020-09-25 02:15:14', '2020-09-25 02:15:14', 1, 2),
(25, 1, '2020-09-25 10:12:16', '2020-09-25 10:12:16', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `web_roles`
--

CREATE TABLE `web_roles` (
  `web_role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_users`
--

CREATE TABLE `web_users` (
  `web_user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_users`
--

INSERT INTO `web_users` (`web_user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'samr', 'aohIL', 'samar5078@gmail.com', '$2y$10$vMrwjH6Qi/bKjimzrbOhpOfxVxeyYTaDZvjAt8FtkoMnTpFwP8uMu', 'M', 1, NULL, NULL),
(2, 'Sofia', 'Khan', 'admin@admin.com', '$2y$10$qVg0YTRMNcxlZt9enHOFL.bkatuym0kjG54Jray9vLCC07dsh.HK2', 'M', 1, '2021-07-06 03:16:49', '2021-07-07 03:33:41'),
(4, 'Asif', 'Ali', 'asif@gmail.com', '$2y$10$731EZb1PPHiZ9RzuAV4MhuU5aXv7b0xcdFo6bxgXW4yi.Yc7G90wq', 'M', 1, '2021-07-09 10:54:17', '2021-07-09 10:54:17'),
(5, 'Sajida', 'Abrar', 'sajidaabrar42@gmail.com', '$2y$10$53RR6hEJB00V3pAB9Jd0h.1aAHGPbzjhfecgHiS.FxGnnRBLu7cKC', 'F', 1, '2021-07-13 04:38:01', '2021-07-13 04:38:01'),
(6, 'Abrar', 'awan', 'abrar@gmail.com', '$2y$10$jEDNUoob4ibZtTc6jgYfHun/ZfhZu0qGg9Cd9ekYWxJ9uSCMshXqi', 'M', 1, '2021-07-13 05:13:30', '2021-07-13 05:13:30'),
(7, 'Nazia', 'sarwar', 'naziasarwar30@gmail.com', '$2y$10$QA/2RfeTv3kYR7IFEEyXiOOKgoeDeTxtO5k9VOTrFbhMkL6EMwS7i', 'F', 1, '2021-07-13 05:15:38', '2021-07-13 05:15:38'),
(12, 'manzar', 'ali', 'manzar@gmail.com', '$2y$10$/xbg0C8UMmTDQkn77YDGBu5pxiVfwAKoUgg2odI6.u81O9gBvb9RS', 'M', 1, '2021-07-13 05:24:22', '2021-07-13 05:24:22'),
(13, 'Shahid', 'sadiq', 'shahid90@gmail.com', '$2y$10$mdjtgEpWJEI4kzcRXX8Fi.mlAHDd.oRVNYXt3Lso2chqKXAp8/S4m', 'M', 1, '2021-07-13 05:32:08', '2021-07-13 05:32:08'),
(14, 'Sufyan', 'Ashraf', 'sufyan10@gmail.com', '$2y$10$PBUb2ol370RwGdIawl8LAeyEnCj63vze1Cv/.Bt9I1RXGHyvPqqIC', 'M', 1, '2021-07-13 05:49:53', '2021-07-13 05:49:53'),
(15, 'Bilal', 'Ahmed', 'murshad@gmail.com', '$2y$10$QGlAlMxRAUTuoNgYd.nLAekSnXLaetRMsuGjFnUxmc8b9969nhuSO', 'M', 1, '2021-07-13 06:10:39', '2021-07-13 06:10:39'),
(16, 'Maryam', 'Ashraf', 'Maryam@gmail.com', '$2y$10$8493u6jH/f.Xy4RPmLLBtOFEiUincxEhnTfupiuCzbVC304DSZTI.', 'F', 1, '2021-07-13 06:22:51', '2021-07-13 06:22:51'),
(17, 'Zunaira', 'Ashraf', 'zunaira@gmail.com', '$2y$10$qAKi.bv0R9fuVgvL/gOjH.Po4lXLdDH9NjWUWGA9tjMF/28s0.9Sm', 'F', 1, '2021-07-13 06:40:57', '2021-07-13 06:40:57'),
(18, 'Abrar', 'Ashraf', 'abrar77@gmail.com', '$2y$10$SDQXt.5bmcgGO2TASYoC3uI1ppGFJlr6oNS/SjVPdwCcXQZNXIT2a', 'M', 1, '2021-07-13 06:50:04', '2021-07-13 06:50:04'),
(19, 'Ahmad', 'Hassan', 'ahmadhassan@gmail.com', '$2y$10$wSkf.3eIv62CsXl7By3U8OUzxxqfnsfuCLqxElDXj25XRFzeFyfV.', 'M', 1, '2021-07-13 06:57:41', '2021-07-13 06:57:41'),
(20, 'Waqas', 'Ahmad', 'kashmiri@gmail.com', '$2y$10$0gljfw7EHNo9ujISKpqG8uchbH0kXv/3fZQ3hYL/ZyooUay1gC4v2', 'M', 1, '2021-07-13 07:05:22', '2021-07-13 07:05:22'),
(21, 'Katrina', 'Khan', 'katrina88@gmail.com', '$2y$10$Z93dWDzk/OuO6dY9.rrPAeU1rFHaH.sRnUBEr9BLTC2Gwi9019Uje', 'F', 1, '2021-07-13 07:12:15', '2021-07-13 07:12:15'),
(22, 'Muhammad', 'Ahsan', 'ahsan1246@gmail.com', '$2y$10$Q67iaOOG.d9YBHjLpHqo3eug4IHdee3tHoaCHwTgOv05wJvj/S2Xi', 'M', 1, '2021-07-13 10:48:22', '2021-07-13 10:48:22'),
(23, 'samar', 'ahmad', 'samar@gmail.com', '$2y$10$R8vuCkXHaB.LOxORsc/2n.7Y3ir47ouSKgXoqE/tZz7sEMEUofh8G', 'M', 1, '2021-07-14 03:52:24', '2021-07-14 03:52:24'),
(24, 'Javeria', 'Nazim', 'javeria@gmail.com', '$2y$10$qorQbSkrrV4iNSwMZnClXuNuSiMOSKijI6kgoJII6C8cYBG2.xNd6', 'F', 1, '2021-07-14 03:59:36', '2021-07-14 03:59:36'),
(25, 'Qadeer', 'khan', 'qadeer@gmail.com', '$2y$10$NOJzLm5hXAl6L2VadT7sOefPXoGNhQSbS6UhlUwGVLlosk/Cgi1LS', 'M', 1, '2021-07-14 04:11:27', '2021-07-14 04:11:27'),
(26, 'Hammad', 'Ali', 'hammad@gmail.com', '$2y$10$52CmeaiCrOuODcav21uYQeOogkc3Qt/se3FKRXDhWBOJKM0q9AxRi', 'M', 1, '2021-07-14 04:41:08', '2021-07-14 04:41:08'),
(27, 'Umair', 'Ali', 'umair@gmail.com', '$2y$10$DQVb7HtwF990UxoGyF7HSuAgO9/RWCP03Qw8BSdyHb0VfrCvpUpiG', 'M', 1, '2021-07-14 05:59:12', '2021-07-14 05:59:12'),
(28, 'Kareena', 'kapoor', 'kapoor@gmail.com', '$2y$10$dplx9lDQV2fGRKqqs.x7U.Nw2227I8zuP8SRHTRAbuuJdgb.UgsMC', 'F', 1, '2021-07-14 06:13:30', '2021-07-14 06:13:30'),
(29, 'Jenny', 'Alex', 'jenny10@gmail.com', '$2y$10$c5PjpcW4nXdFzR/gjGCkA.7LVY7EVZvv6mWdwN5YJJS84RbZ948i6', 'F', 1, '2021-07-14 06:51:30', '2021-07-14 06:51:30'),
(30, 'Tania', 'zulfiqar', 'tania@gmail.com', '$2y$10$9zB8bNOrCkoJovcfwNWvMuKE6yqjQecKSLAKk.bf8VzxaNCyjt.Dm', 'F', 1, '2021-07-14 06:57:54', '2021-07-14 06:57:54'),
(31, 'Mario', 'alex', 'marioalex@gmail.com', '$2y$10$5f7vu/mzrOlkCCcvzGqG/ey4VJTgZgsBUHQZVY3XsLwxd3D.tYmYC', 'F', 1, '2021-07-14 07:03:06', '2021-07-14 07:03:06'),
(32, 'Mishal', 'Ali', 'mishal@gmail.com', '$2y$10$6bM7G2sA92bwmWOcf0EnweOhniVRdNQZKhk5Th12kegL3mKG1VBBq', 'F', 1, '2021-07-14 07:13:47', '2021-07-29 13:44:39'),
(33, 'Alizbeth', 'tailor', 'alizbeth@gmail.com', '$2y$10$B.7RbuqPD2eW7.1j68u.peiugd7jEywzf6LJ0UVL3TdObE9oiQsmq', 'F', 1, '2021-07-14 07:18:40', '2021-07-14 07:18:40'),
(34, 'Akram', 'Arshad', 'cheetah@gmail.com', '$2y$10$eTv9XhNzaiz/t0e7M.li3elKQQT4.oHHYnpUKwRAyP//0BuGKsIJK', 'M', 1, '2021-07-14 07:28:12', '2021-07-14 07:28:12'),
(35, 'Aqsa', 'Matloob', 'aqsamatloob@gmail.com', '$2y$10$K3OvOnO6V/oHSlUm65E.he4myC2cEjUSAjV27s3QNpb4jNyE4fh9.', 'F', 1, '2021-07-15 04:38:03', '2021-07-15 04:38:03'),
(36, 'Ali', 'Nawaz', 'ali99@gmail.com', '$2y$10$JqfIN5R1nlkfSZ3cUQ2byOCnBqLdx7ivOe90NaRYVfLcGzsRgL7qG', 'M', 1, '2021-07-15 04:45:46', '2021-07-15 04:45:46'),
(37, 'Faraz', 'Ashraf', 'faraz@gmail.com', '$2y$10$ZDkmPN.ocmwZoR/pD82KAe0xy88MlB1EgP5g0lJ1xby2BGaGykjfG', 'M', 1, '2021-07-15 04:50:48', '2021-07-15 04:50:48'),
(38, 'Jannat', 'fatima', 'jannat@gmail.com', '$2y$10$HwGo5DxLS6C2XWw2pyDP9O1Clr5GemK54YE7eZSm75jvDyj89EQMi', 'F', 1, '2021-07-15 04:58:17', '2021-07-15 04:58:17'),
(39, 'Aster', 'Alex', 'aster@gmail.com', '$2y$10$MuGyKMwjzXG8N3cLVlkHYuB3y1uS9gnnPRPnXzHP7rRPoLUI3btYq', 'F', 1, '2021-07-15 05:03:10', '2021-07-15 05:03:10'),
(40, 'azalfa', 'awan', 'azalfa@gmail.com', '$2y$10$mM35odDi15zNaLIeBmQGxOLrV17W6l.QrbM8GHLioGxSBfvR1X4oS', 'F', 1, '2021-07-15 05:19:06', '2021-07-26 06:10:30'),
(41, 'Susan', 'albert', 'susan@gmail.com', '$2y$10$UflwH4goH5.hA3unCqeEkerYYpb1/QYPmlIgz0h4Ju/5hAMY2m3Wq', 'F', 1, '2021-07-15 05:28:32', '2021-07-15 05:28:32'),
(42, 'Sabah', 'Arif', 'sabaharif@gmail.com', '$2y$10$krc14YRIQAvmkzznnaE/I.8IXDRTw6FjJXCIDLVbg/jbfVwPUxEXy', 'F', 1, '2021-07-15 05:34:21', '2021-07-15 05:34:21'),
(43, 'Usman', 'Hashmi', 'usmanhashmi@gmail.com', '$2y$10$rXNXqfby1.luMz5GdFt0GOBP5T9x/dehZm4752tIMvrEwP7iMTTZG', 'M', 1, '2021-07-15 05:39:55', '2021-07-15 05:39:55'),
(44, 'Alisha', 'zahid', 'alisha@gmail.com', '$2y$10$PQ/8OJGldDYZ43Y1.yGLcu6zpMBDXfHbBM7li0oAKp5Zd8TVRnde2', 'F', 1, '2021-07-15 05:49:14', '2021-07-27 09:15:09'),
(45, 'Abdul', 'Hadi', 'abdulhadi@gmail.com', '$2y$10$kcUsALOjphYmxrWLAKd68.IIyUvE32nUMf6veUyGCKR6iJyUNMhwm', 'M', 1, '2021-07-15 05:57:46', '2021-07-15 05:57:46'),
(46, 'John', 'albert', 'john33@gmail.com', '$2y$10$UbZHnr.5zTO3JaxuTf3q..56pLd10b6HIfpqK9VYrYX5lhH6s3iBS', 'M', 1, '2021-07-15 06:03:49', '2021-07-15 06:03:49'),
(47, 'Kajol', 'Ajay', 'kajol@gmail.com', '$2y$10$aJbAflf4jvObHHBX2cPkjupjDSuZahc3L.U.BstpC/j9ioEuDPpQ.', 'F', 1, '2021-07-15 06:32:47', '2021-07-15 06:32:47'),
(48, 'Aliya', 'Ali', 'aliya@gmail.com', '$2y$10$8eb3KGySA0R7Ck2U5R.oau6wvvU6Lasfsyl4p8cL/hcCEcK5Pyj6y', 'F', 1, '2021-07-15 06:39:04', '2021-07-15 06:39:04'),
(49, 'zaheer', 'khan', 'zaheerkhan@gmail.com', '$2y$10$XjQjf6ieXPIstXe1ilIz2uOoqIW7LIab/7.s1JC1iGtNND613Csvq', 'M', 1, '2021-07-15 06:44:41', '2021-07-15 06:44:41'),
(50, 'Maham', 'Ali', 'maham@gmail.com', '$2y$10$cNvffGYG/vLSkYRaVvR3WecmYW9yTUdz.cd6Sxns5HwHtIqCCAlEm', 'F', 1, '2021-07-15 06:50:16', '2021-07-15 06:50:16'),
(51, 'Sachin', 'tendulkar', 'sachin@gmail.com', '$2y$10$EyMomVQFs.uAoxIo5OnRjepOlb0jXi6cXsiPyxxtZ6jLCVnScUyzq', 'M', 1, '2021-07-15 06:59:18', '2021-07-15 06:59:18'),
(52, 'Rehman', 'Ahmad', 'rehman@gmail.com', '$2y$10$P7S4Us9MX7bIdmdI/5.10eZdhysEofN9V.RQ4/VAN5Z9UHe.6aVO.', 'M', 1, '2021-07-15 07:26:24', '2021-07-15 07:26:24'),
(53, 'Abdullah', 'Abrar', 'abdullah@gmail.com', '$2y$10$d5M72ahnRYQGRCQIl5q9AunkFxOwSrgqIiiTTEYkySOkIVW8Hf81.', 'M', 1, '2021-07-15 07:53:23', '2021-07-15 07:53:23'),
(54, 'Ali', 'Aslam', 'aliaslam@gmail.com', '$2y$10$4C/vBKhIxRu/g4nYYR2wWO2DMOLfqDPGV/9UadIvgh9Kadph3rDFy', 'M', 1, '2021-07-26 10:01:21', '2021-07-26 10:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `web_user_roles`
--

CREATE TABLE `web_user_roles` (
  `web_user_role_id` bigint(20) UNSIGNED NOT NULL,
  `web_role_id` bigint(20) UNSIGNED NOT NULL,
  `web_user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`cms_id`),
  ADD KEY `cms_tenant_id_foreign` (`tenant_id`),
  ADD KEY `cms_created_by_foreign` (`created_by`);

--
-- Indexes for table `cms_slider_images`
--
ALTER TABLE `cms_slider_images`
  ADD PRIMARY KEY (`cms_slider_image_id`),
  ADD KEY `cms_slider_images_cms_id_foreign` (`cms_id`),
  ADD KEY `cms_slider_images_tenant_id_foreign` (`tenant_id`),
  ADD KEY `cms_slider_images_created_by_foreign` (`created_by`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`complain_id`),
  ADD KEY `complains_complain_type_id_foreign` (`complain_type_id`),
  ADD KEY `complains_user_profile_id_foreign` (`user_profile_id`),
  ADD KEY `complains_from_user_id_foreign` (`from_user_id`);

--
-- Indexes for table `complain_types`
--
ALTER TABLE `complain_types`
  ADD PRIMARY KEY (`complain_tye_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `distances`
--
ALTER TABLE `distances`
  ADD KEY `distances_from_plaza_id_foreign` (`from_plaza_id`),
  ADD KEY `distances_to_plaza_id_foreign` (`to_plaza_id`),
  ADD KEY `distances_created_by_foreign` (`created_by`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD KEY `keys_tenant_id_foreign` (`tenant_id`);

--
-- Indexes for table `lanes`
--
ALTER TABLE `lanes`
  ADD PRIMARY KEY (`lane_id`),
  ADD UNIQUE KEY `lanes_name_unique` (`name`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menus_created_by_foreign` (`created_by`);

--
-- Indexes for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  ADD PRIMARY KEY (`menu_permission_id`),
  ADD KEY `menu_permissions_menu_id_foreign` (`menu_id`),
  ADD KEY `menu_permissions_user_id_foreign` (`user_id`),
  ADD KEY `menu_permissions_created_by_foreign` (`created_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_favourites`
--
ALTER TABLE `my_favourites`
  ADD PRIMARY KEY (`my_favourite_id`),
  ADD KEY `my_favourites_web_user_id_foreign` (`web_user_id`),
  ADD KEY `my_favourites_user_profile_id_foreign` (`user_profile_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `pages_parent_page_id_foreign` (`parent_page_id`),
  ADD KEY `pages_tenant_id_foreign` (`tenant_id`),
  ADD KEY `pages_created_by_foreign` (`created_by`);

--
-- Indexes for table `page_images`
--
ALTER TABLE `page_images`
  ADD PRIMARY KEY (`page_image_id`),
  ADD KEY `page_images_page_id_foreign` (`page_id`);

--
-- Indexes for table `parent_childs`
--
ALTER TABLE `parent_childs`
  ADD PRIMARY KEY (`parent_child_id`),
  ADD KEY `parent_childs_parent_id_foreign` (`parent_id`),
  ADD KEY `parent_childs_child_id_foreign` (`child_id`);

--
-- Indexes for table `profile_logs`
--
ALTER TABLE `profile_logs`
  ADD PRIMARY KEY (`profile_log_id`),
  ADD KEY `profile_logs_web_user_id_foreign` (`web_user_id`),
  ADD KEY `profile_logs_user_profile_id_foreign` (`user_profile_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `rates_tenant_id_foreign` (`tenant_id`),
  ADD KEY `rates_motorway_id_foreign` (`motorway_id`),
  ADD KEY `rates_created_by_foreign` (`created_by`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_menus`
--
ALTER TABLE `role_menus`
  ADD KEY `role_menus_menu_id_foreign` (`menu_id`),
  ADD KEY `role_menus_role_id_foreign` (`role_id`),
  ADD KEY `role_menus_created_by_foreign` (`created_by`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `services_parent_service_id_foreign` (`parent_service_id`),
  ADD KEY `services_tenant_id_foreign` (`tenant_id`),
  ADD KEY `services_created_by_foreign` (`created_by`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`shift_id`),
  ADD KEY `shifts_tenant_id_foreign` (`tenant_id`),
  ADD KEY `shifts_created_by_foreign` (`created_by`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`station_id`),
  ADD UNIQUE KEY `stations_name_unique` (`name`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`tenant_id`);

--
-- Indexes for table `tenant_users`
--
ALTER TABLE `tenant_users`
  ADD PRIMARY KEY (`tenant_user_id`),
  ADD KEY `tenant_users_tenant_id_foreign` (`tenant_id`),
  ADD KEY `tenant_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`user_image_id`),
  ADD KEY `user_images_web_user_id_foreign` (`web_user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`user_profile_id`),
  ADD KEY `user_profiles_web_user_id_foreign` (`web_user_id`),
  ADD KEY `user_profiles_residential_city_foreign` (`residential_city`),
  ADD KEY `user_profiles_work_city_foreign` (`work_city`),
  ADD KEY `user_profiles_country_id_foreign` (`country_id`),
  ADD KEY `user_profiles_city_id_foreign` (`city_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_role_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`);

--
-- Indexes for table `web_roles`
--
ALTER TABLE `web_roles`
  ADD PRIMARY KEY (`web_role_id`),
  ADD UNIQUE KEY `web_roles_name_unique` (`name`);

--
-- Indexes for table `web_users`
--
ALTER TABLE `web_users`
  ADD PRIMARY KEY (`web_user_id`),
  ADD UNIQUE KEY `web_users_email_unique` (`email`);

--
-- Indexes for table `web_user_roles`
--
ALTER TABLE `web_user_roles`
  ADD PRIMARY KEY (`web_user_role_id`),
  ADD KEY `web_user_roles_web_role_id_foreign` (`web_role_id`),
  ADD KEY `web_user_roles_web_user_id_foreign` (`web_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `cms_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cms_slider_images`
--
ALTER TABLE `cms_slider_images`
  MODIFY `cms_slider_image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `complain_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `complain_types`
--
ALTER TABLE `complain_types`
  MODIFY `complain_tye_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lanes`
--
ALTER TABLE `lanes`
  MODIFY `lane_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `menu_permissions`
--
ALTER TABLE `menu_permissions`
  MODIFY `menu_permission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `my_favourites`
--
ALTER TABLE `my_favourites`
  MODIFY `my_favourite_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_images`
--
ALTER TABLE `page_images`
  MODIFY `page_image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `parent_childs`
--
ALTER TABLE `parent_childs`
  MODIFY `parent_child_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `profile_logs`
--
ALTER TABLE `profile_logs`
  MODIFY `profile_log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `rate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `shift_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `station_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `tenant_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tenant_users`
--
ALTER TABLE `tenant_users`
  MODIFY `tenant_user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `user_image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `user_profile_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `user_role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `web_roles`
--
ALTER TABLE `web_roles`
  MODIFY `web_role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_users`
--
ALTER TABLE `web_users`
  MODIFY `web_user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `web_user_roles`
--
ALTER TABLE `web_user_roles`
  MODIFY `web_user_role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cms`
--
ALTER TABLE `cms`
  ADD CONSTRAINT `cms_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cms_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`tenant_id`) ON DELETE CASCADE;

--
-- Constraints for table `cms_slider_images`
--
ALTER TABLE `cms_slider_images`
  ADD CONSTRAINT `cms_slider_images_cms_id_foreign` FOREIGN KEY (`cms_id`) REFERENCES `cms` (`cms_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cms_slider_images_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cms_slider_images_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`tenant_id`) ON DELETE CASCADE;

--
-- Constraints for table `complains`
--
ALTER TABLE `complains`
  ADD CONSTRAINT `complains_complain_type_id_foreign` FOREIGN KEY (`complain_type_id`) REFERENCES `complain_types` (`complain_tye_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complains_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `web_users` (`web_user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complains_user_profile_id_foreign` FOREIGN KEY (`user_profile_id`) REFERENCES `user_profiles` (`user_profile_id`) ON DELETE CASCADE;

--
-- Constraints for table `keys`
--
ALTER TABLE `keys`
  ADD CONSTRAINT `keys_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`tenant_id`) ON DELETE CASCADE;

--
-- Constraints for table `profile_logs`
--
ALTER TABLE `profile_logs`
  ADD CONSTRAINT `profile_logs_user_profile_id_foreign` FOREIGN KEY (`user_profile_id`) REFERENCES `user_profiles` (`user_profile_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `profile_logs_web_user_id_foreign` FOREIGN KEY (`web_user_id`) REFERENCES `web_users` (`web_user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
