-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 09:37 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_locations`
--

CREATE TABLE `accident_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_informations`
--

CREATE TABLE `application_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_informations`
--

INSERT INTO `application_informations` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `spouse_name`, `gender`, `email`, `phone_number`, `birth_date`, `permanent_address`, `present_address`, `citizen`, `nid`, `passport`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Brad', 'Mueller', 'Willy Stamm MD', 'Nora VonRueden', 'Keeley Bayer III', 'female', 'adams.heath@yahoo.com', '+৮৮০৮৫৮৭৮৩', '1983-03-07', '৮২ হাজী গলি, পূর্বতলা বরিশাল', '৫ বরকত বাইপাস, দক্ষিনখানা চিটাগং', 'Bangladeshi', '4556338768511580', '4916465117277921', 'https://lorempixel.com/640/480/?25011', '2019-08-11 04:48:12', '2019-08-11 04:48:12'),
(2, 'Gaetano', 'Rolfson', 'Joel Pollich', 'Ms. Hellen Pouros', 'Myrl Toy', 'male', 'dax34@gmail.com', '+৮৮০৪০৭৪১৮৩', '2005-11-08', '৫৬ করিমউদ্দিন চিপা, পূর্বটাউন ঢাকা', '৫৬ বরকত ক্যাম্প, পশ্চিমখানা ঢাকা', 'Bangladeshi', '341518341734464', '371122573352948', 'https://lorempixel.com/640/480/?14283', '2019-08-11 04:48:12', '2019-08-11 04:48:12'),
(3, 'Summer', 'Dicki', 'Jayce Koepp DDS', 'Emilie Simonis II', 'Reyes Morissette', 'female', 'wisozk.ruth@hotmail.com', '+৮৮০৫০০১৫৬৪', '1975-11-06', '৭১ হাজী চিপা, দক্ষিনখানা কুমিল্লা', '২ হাজী ক্যাম্প, পশ্চিমখানা চিটাগং', 'Bangladeshi', '5297855425452321', '2221939577792524', 'https://lorempixel.com/640/480/?73236', '2019-08-11 04:48:13', '2019-08-11 04:48:13'),
(4, 'Talia', 'Goyette', 'Ezra Pollich DDS', 'Eliane Von', 'Aniyah Walker', 'female', 'vhahn@hotmail.com', '+৮৮০৫১৭১৭২৪', '2008-05-26', '৩৯ করিমউদ্দিন চিপা, পোর্টটাউন কুমিল্লা', '১৩ করিমউদ্দিন তলী, উত্তরটাউন সিলেট', 'Bangladeshi', '5296336095961173', '5528958236706272', 'https://lorempixel.com/640/480/?58572', '2019-08-11 04:48:14', '2019-08-11 04:48:14'),
(5, 'Camila', 'Reynolds', 'Prof. Harmon Schuppe', 'Jaunita Hoeger', 'Easton Tillman', 'female', 'umurphy@gmail.com', '+৮৮০৫৩১০৪২৯', '1981-09-13', '৪১ করিমউদ্দিন ব্রীজ, লেইকতলা বরিশাল', '৬৫ বরকত ব্রীজ, নতুনতলা খুলনা', 'Bangladeshi', '378202644891737', '4485973703944896', 'https://lorempixel.com/640/480/?81561', '2019-08-11 04:48:15', '2019-08-11 04:48:15'),
(6, 'Lavina', 'Carter', 'Prof. Bryce Koelpin DVM', 'Prof. Patricia Klocko', 'Katelyn Spencer', 'female', 'hallie70@yahoo.com', '+৮৮০৩৮৮৪৬২৩', '2008-09-18', '২৩ হাজী ক্যাম্প, উত্তরখানা বরিশাল', '১৮ বরকত সড়ক, দক্ষিনটাউন খুলনা', 'Bangladeshi', '6011054670384669', '2358663723177639', 'https://lorempixel.com/640/480/?43798', '2019-08-11 04:48:15', '2019-08-11 04:48:15'),
(7, 'Tessie', 'Kshlerin', 'Erin Flatley', 'Ms. Tessie Langosh V', 'Odie Stokes', 'male', 'lockman.agustina@hotmail.com', '+৮৮০৭১১২৫২৭', '2012-09-23', '৪৭ হাজী ব্রীজ, উত্তরখানা চিটাগং', '৩৬ হাজী তলী, পূর্বটাউন সিলেট', 'Bangladeshi', '5449673675243390', '4532798296477704', 'https://lorempixel.com/640/480/?46573', '2019-08-11 04:48:17', '2019-08-11 04:48:17'),
(8, 'Odell', 'Eichmann', 'Hayden Carroll', 'Mabel Jaskolski', 'Peter Ryan DDS', 'female', 'sgoldner@yahoo.com', '+৮৮০৫৪০৮৭৭০', '1978-10-05', '৯৮ করিমউদ্দিন ক্যাম্প, উত্তরতলা কুমিল্লা', '৬৪ করিমউদ্দিন ব্রীজ, পূর্বখানা খুলনা', 'Bangladeshi', '4024007182132414', '2308123646016159', 'https://lorempixel.com/640/480/?41231', '2019-08-11 04:48:17', '2019-08-11 04:48:17'),
(9, 'Roma', 'Gaylord', 'Dr. Clovis Reichert', 'Jackie Ondricka', 'Theodora Nienow', 'female', 'shana.mcclure@gmail.com', '+৮৮০৪৩৯৯৭৩১', '1985-12-20', '৭০ হাজী গলি, লেইকহাট রাজশাহী', '৮৮ বরকত ব্রীজ, নতুনহাট সিলেট', 'Bangladeshi', '5461394088536162', '4716002725619624', 'https://lorempixel.com/640/480/?37237', '2019-08-11 04:48:18', '2019-08-11 04:48:18'),
(10, 'Juliet', 'Romaguera', 'Adolfo Hammes', 'Gregoria Jenkins', 'Dr. Devon Dicki', 'female', 'edythe80@gmail.com', '+৮৮০৩৯৯৩২০', '2000-06-03', '৯৩ করিমউদ্দিন তলী, লেইকতলা রাজশাহী', '২৪ বরকত তলী, লেইকখানা সিলেট', 'Bangladeshi', '4578451248165515', '5389313697771514', 'https://lorempixel.com/640/480/?45425', '2019-08-11 04:48:19', '2019-08-11 04:48:19'),
(11, 'Shyanne', 'Brekke', 'Prof. Jacey Ullrich', 'Dr. Marilou Hoeger', 'Mr. Sage Romaguera III', 'female', 'celestino59@yahoo.com', '+৮৮০৫৪৩৪৪১৩', '1971-05-30', '২০ হাজী তলী, উত্তরতলা সিলেট', '৯৩ বরকত ব্রীজ, পূর্বহাট কুমিল্লা', 'Bangladeshi', '370231650826509', '2429116477965118', 'https://lorempixel.com/640/480/?94343', '2019-08-11 04:48:19', '2019-08-11 04:48:19'),
(12, 'Emil', 'Weber', 'Glen Schinner', 'Ethelyn Reinger', 'Prof. Hadley Green V', 'male', 'braun.francesca@gmail.com', '+৮৮০২৪৬০৮৪৯', '1979-10-07', '৩৭ হাজী গলি, উত্তরখানা বরিশাল', '৩ হাজী সড়ক, নতুনখানা বরিশাল', 'Bangladeshi', '4916668012337068', '4539044438938441', 'https://lorempixel.com/640/480/?60827', '2019-08-11 04:48:20', '2019-08-11 04:48:20'),
(13, 'Loyal', 'West', 'Mr. Broderick Kemmer', 'Alexane Connelly', 'Mrs. Lisette Miller V', 'female', 'hector.legros@yahoo.com', '+৮৮০২১১৭৪৬২', '1982-08-13', '৯২ বরকত গলি, দক্ষিনটাউন সিলেট', '৪৭ বরকত তলী, পূর্বটাউন ঢাকা', 'Bangladeshi', '370413744794485', '4539293031375986', 'https://lorempixel.com/640/480/?88351', '2019-08-11 04:48:21', '2019-08-11 04:48:21'),
(14, 'Donavon', 'Rutherford', 'Giovanni Mohr', 'Kira Schuster I', 'Yesenia Balistreri', 'male', 'tillman.benny@yahoo.com', '+৮৮০৬৬৭৪০৩', '2008-05-09', '৬৭ বরকত চিপা, উত্তরটাউন ঢাকা', '৫৪ বরকত সড়ক, দক্ষিনটাউন কুমিল্লা', 'Bangladeshi', '2221660316991520', '4485860433513697', 'https://lorempixel.com/640/480/?76035', '2019-08-11 04:48:22', '2019-08-11 04:48:22'),
(15, 'Bonita', 'Pouros', 'Ulices Farrell', 'Miss Sydnee Hane', 'Fatima Muller', 'male', 'yundt.nikolas@hotmail.com', '+৮৮০২৩২৬৪৭৩', '1984-09-06', '৭ বরকত বাইপাস, লেইকতলা কুমিল্লা', '৪৩ হাজী বাইপাস, উত্তরহাট বরিশাল', 'Bangladeshi', '5540251000765557', '4865515808196', 'https://lorempixel.com/640/480/?10770', '2019-08-11 04:48:22', '2019-08-11 04:48:22'),
(16, 'Chance', 'Gutmann', 'Prof. Braulio Kohler', 'Bethel Kunde', 'Kody Glover', 'male', 'jayda.donnelly@gmail.com', '+৮৮০৩১৪০৭০১', '1992-05-24', '৭৯ বরকত ক্যাম্প, পূর্বখানা সিলেট', '৩৪ করিমউদ্দিন তলী, লেইকটাউন ঢাকা', 'Bangladeshi', '4916594401032559', '4783927715509427', 'https://lorempixel.com/640/480/?52708', '2019-08-11 04:48:23', '2019-08-11 04:48:23'),
(17, 'Shanie', 'Cassin', 'Markus Abshire', 'Loyce Funk Sr.', 'Jaylan Braun', 'female', 'gleichner.myrtis@gmail.com', '+৮৮০৫৬৪৫৫১', '1984-11-30', '১৭ করিমউদ্দিন বাইপাস, নতুনটাউন বরিশাল', '৬১ হাজী তলী, পূর্বহাট খুলনা', 'Bangladeshi', '5375287856556971', '4578470636511924', 'https://lorempixel.com/640/480/?55438', '2019-08-11 04:48:24', '2019-08-11 04:48:24'),
(18, 'Marta', 'Wisoky', 'Dr. Emilio Nolan', 'Gabrielle Predovic', 'Carole Brekke', 'female', 'dorothea.stroman@gmail.com', '+৮৮০৯১২৯৮০৯', '2001-08-11', '৫ বরকত চিপা, লেইকতলা ঢাকা', '২ বরকত তলী, পূর্বটাউন চিটাগং', 'Bangladeshi', '5262859515166792', '2518274379621883', 'https://lorempixel.com/640/480/?21484', '2019-08-11 04:48:24', '2019-08-11 04:48:24'),
(19, 'Oma', 'Dach', 'Lowell Langworth', 'Mrs. Cathrine Veum I', 'Melisa Zieme', 'female', 'dessie44@hotmail.com', '+৮৮০২৯৬০৫১৪', '1996-06-23', '৭৬ করিমউদ্দিন ক্যাম্প, পশ্চিমতলা ঢাকা', '১০ বরকত সড়ক, দক্ষিনতলা কুমিল্লা', 'Bangladeshi', '4024007151452769', '2366890564124764', 'https://lorempixel.com/640/480/?68771', '2019-08-11 04:48:25', '2019-08-11 04:48:25'),
(20, 'Bert', 'Turcotte', 'Dr. Green Auer', 'Creola Nicolas', 'Mrs. Jewell Kertzmann', 'female', 'raynor.nels@hotmail.com', '+৮৮০১০০৯৩৪৩', '1979-05-14', '৭৫ করিমউদ্দিন সড়ক, পূর্বটাউন ঢাকা', '২৭ বরকত ব্রীজ, লেইকখানা কুমিল্লা', 'Bangladeshi', '2659147561198846', '5261744007785161', 'https://lorempixel.com/640/480/?54433', '2019-08-11 04:48:25', '2019-08-11 04:48:25'),
(21, 'Dixie', 'Hintz', 'Brock Larkin I', 'Celia Ullrich', 'Emelia Brakus', 'male', 'rae16@gmail.com', '+৮৮০৭২৮৬৬৩৩', '2008-05-20', '৪ বরকত ব্রীজ, উত্তরটাউন খুলনা', '৫৯ বরকত ক্যাম্প, পশ্চিমখানা বরিশাল', 'Bangladeshi', '5353353211516658', '376668929775955', 'https://lorempixel.com/640/480/?86291', '2019-08-11 04:48:26', '2019-08-11 04:48:26'),
(27, 'adsd', 'dsds', 'dads', 'sdsd', NULL, 'male', 'sdsd@kla.com', '9898989', '2012-12-12', 'jjii', 'kjoj', 'jkjkj', '909090', '090909090', NULL, '2019-08-14 07:35:29', '2019-08-14 07:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `daily_vehicles`
--

CREATE TABLE `daily_vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `issued_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_vehicles`
--

INSERT INTO `daily_vehicles` (`id`, `owner_id`, `vehicle_id`, `driver_id`, `issued_date`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 1, '2019-08-12', '2019-08-12 13:15:04', '2019-08-12 13:15:04'),
(2, 11, 4, 3, '2019-08-12', '2019-08-12 13:50:47', '2019-08-12 13:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `driver_applications`
--

CREATE TABLE `driver_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licence_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_transaction_no` bigint(20) NOT NULL,
  `police_verified` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_applications`
--

INSERT INTO `driver_applications` (`id`, `application_id`, `vehicle_class`, `application_type`, `licence_type`, `bank_transaction_no`, `police_verified`, `created_at`, `updated_at`) VALUES
(1, 1, 'dolore', 'cupiditate', 'aut', 374332272568002, '0', '2019-08-11 04:48:12', '2019-08-11 04:48:12'),
(2, 2, 'tenetur', 'aut', 'aut', 4539752629496, '1', '2019-08-11 04:48:12', '2019-08-11 04:48:12'),
(3, 3, 'atque', 'nobis', 'et', 4532042133686932, '1', '2019-08-11 04:48:13', '2019-08-11 04:48:13'),
(4, 4, 'quas', 'accusamus', 'praesentium', 4916676639956772, '1', '2019-08-11 04:48:14', '2019-08-11 04:48:14'),
(5, 5, 'culpa', 'et', 'molestiae', 347619081325952, '0', '2019-08-11 04:48:15', '2019-08-11 04:48:15'),
(6, 6, 'ut', 'blanditiis', 'qui', 4396057720003, '0', '2019-08-11 04:48:15', '2019-08-11 04:48:15'),
(7, 7, 'veritatis', 'illum', 'aut', 5194483619355566, '0', '2019-08-11 04:48:17', '2019-08-11 04:48:17'),
(8, 8, 'animi', 'soluta', 'porro', 4024007167035392, '0', '2019-08-11 04:48:17', '2019-08-11 04:48:17'),
(9, 9, 'commodi', 'reiciendis', 'provident', 5224172573327455, '0', '2019-08-11 04:48:18', '2019-08-11 04:48:18'),
(10, 10, 'dicta', 'aut', 'eos', 2512200845977688, '0', '2019-08-11 04:48:19', '2019-08-11 04:48:19'),
(11, 11, 'voluptas', 'harum', 'aut', 2617250208635963, '1', '2019-08-11 04:48:20', '2019-08-11 04:48:20'),
(12, 12, 'quo', 'neque', 'natus', 5327775536271283, '0', '2019-08-11 04:48:20', '2019-08-11 04:48:20'),
(13, 13, 'quia', 'eos', 'corporis', 4254447197398140, '0', '2019-08-11 04:48:21', '2019-08-11 04:48:21'),
(14, 14, 'illum', 'praesentium', 'deserunt', 4556107401975, '1', '2019-08-11 04:48:22', '2019-08-11 04:48:22'),
(15, 15, 'eum', 'fugiat', 'non', 5535050427552367, '0', '2019-08-11 04:48:22', '2019-08-11 04:48:22'),
(16, 16, 'aspernatur', 'sint', 'voluptatem', 2346431399263199, '0', '2019-08-11 04:48:24', '2019-08-11 04:48:24'),
(17, 17, 'et', 'nihil', 'voluptatem', 4916602687505352, '1', '2019-08-11 04:48:24', '2019-08-11 04:48:24'),
(18, 18, 'expedita', 'ex', 'iste', 4532610015962330, '1', '2019-08-11 04:48:24', '2019-08-11 04:48:24'),
(19, 19, 'aut', 'et', 'autem', 2347859569910877, '1', '2019-08-11 04:48:25', '2019-08-11 04:48:25'),
(20, 20, 'porro', 'eaque', 'odit', 5385993898769831, '1', '2019-08-11 04:48:26', '2019-08-11 04:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `driver_physically_fits`
--

CREATE TABLE `driver_physically_fits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_application` bigint(20) UNSIGNED NOT NULL,
  `headache` tinyint(1) NOT NULL,
  `visual_condition` tinyint(1) NOT NULL,
  `traffic_sign` tinyint(1) NOT NULL,
  `hearing` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_physically_fits`
--

INSERT INTO `driver_physically_fits` (`id`, `driver_application`, `headache`, `visual_condition`, `traffic_sign`, `hearing`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 1, '2019-08-11 04:48:12', '2019-08-11 04:48:12'),
(2, 2, 1, 0, 1, 1, '2019-08-11 04:48:13', '2019-08-11 04:48:13'),
(3, 3, 0, 1, 1, 0, '2019-08-11 04:48:13', '2019-08-11 04:48:13'),
(4, 4, 0, 1, 0, 1, '2019-08-11 04:48:15', '2019-08-11 04:48:15'),
(5, 5, 1, 0, 1, 1, '2019-08-11 04:48:15', '2019-08-11 04:48:15'),
(6, 6, 0, 1, 0, 1, '2019-08-11 04:48:15', '2019-08-11 04:48:15'),
(7, 7, 0, 0, 1, 1, '2019-08-11 04:48:17', '2019-08-11 04:48:17'),
(8, 8, 0, 0, 0, 0, '2019-08-11 04:48:17', '2019-08-11 04:48:17'),
(9, 9, 0, 0, 0, 0, '2019-08-11 04:48:18', '2019-08-11 04:48:18'),
(10, 10, 0, 1, 1, 0, '2019-08-11 04:48:19', '2019-08-11 04:48:19'),
(11, 11, 1, 0, 0, 1, '2019-08-11 04:48:20', '2019-08-11 04:48:20'),
(12, 12, 0, 0, 1, 1, '2019-08-11 04:48:20', '2019-08-11 04:48:20'),
(13, 13, 1, 1, 1, 1, '2019-08-11 04:48:21', '2019-08-11 04:48:21'),
(14, 14, 1, 1, 0, 0, '2019-08-11 04:48:22', '2019-08-11 04:48:22'),
(15, 15, 0, 0, 0, 0, '2019-08-11 04:48:22', '2019-08-11 04:48:22'),
(16, 16, 0, 0, 0, 1, '2019-08-11 04:48:24', '2019-08-11 04:48:24'),
(17, 17, 0, 0, 1, 1, '2019-08-11 04:48:24', '2019-08-11 04:48:24'),
(18, 18, 0, 1, 1, 0, '2019-08-11 04:48:24', '2019-08-11 04:48:24'),
(19, 19, 0, 1, 1, 1, '2019-08-11 04:48:25', '2019-08-11 04:48:25'),
(20, 20, 0, 0, 0, 1, '2019-08-11 04:48:26', '2019-08-11 04:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(410, '2014_10_12_000000_create_users_table', 1),
(411, '2014_10_12_100000_create_password_resets_table', 1),
(412, '2016_08_29_044844_create_roles_table', 1),
(413, '2016_08_29_044933_create_user_role_table', 1),
(414, '2017_03_21_100911_create_user_activations_table', 1),
(415, '2019_07_20_200402_create_application_informations_table', 1),
(416, '2019_07_20_200846_create_vehicle_applications_table', 1),
(417, '2019_07_20_200902_create_driver_applications_table', 1),
(418, '2019_07_20_200944_create_driver_physically_fits_table', 1),
(419, '2019_07_20_201022_create_registered_drivers_table', 1),
(420, '2019_07_20_201348_create_registered_vehicles_table', 1),
(421, '2019_07_20_202122_create_registered_user_informations_table', 1),
(422, '2019_07_20_202150_create_notification_users_table', 1),
(423, '2019_07_20_202246_create_daily_vehicles_table', 1),
(424, '2019_07_20_210316_create_accident_locations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification_users`
--

CREATE TABLE `notification_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_drivers`
--

CREATE TABLE `registered_drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `driving_licence_no` bigint(20) NOT NULL,
  `issued_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registered_drivers`
--

INSERT INTO `registered_drivers` (`id`, `driver_id`, `user_id`, `driving_licence_no`, `issued_date`, `expired_date`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 4539425499675172, '2001-03-08', '1974-04-21', '2019-08-11 04:48:14', '2019-08-11 04:48:14'),
(2, 6, 6, 4716944476784, '1975-11-17', '1993-09-15', '2019-08-11 04:48:16', '2019-08-11 04:48:16'),
(3, 9, 7, 5501554157916163, '1979-02-14', '1978-07-05', '2019-08-11 04:48:19', '2019-08-11 04:48:19'),
(4, 12, 8, 5183445583206839, '1995-02-22', '2013-08-31', '2019-08-11 04:48:21', '2019-08-11 04:48:21'),
(5, 15, 9, 4716830331527587, '1994-06-29', '2002-07-24', '2019-08-11 04:48:23', '2019-08-11 04:48:23'),
(6, 18, 10, 4024007160474465, '2011-03-27', '1995-09-22', '2019-08-11 04:48:25', '2019-08-11 04:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user_informations`
--

CREATE TABLE `registered_user_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `information_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registered_user_informations`
--

INSERT INTO `registered_user_informations` (`id`, `information_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 5, '2019-08-11 04:48:14', '2019-08-11 04:48:14'),
(2, 6, 6, '2019-08-11 04:48:16', '2019-08-11 04:48:16'),
(3, 9, 7, '2019-08-11 04:48:19', '2019-08-11 04:48:19'),
(4, 12, 8, '2019-08-11 04:48:21', '2019-08-11 04:48:21'),
(5, 15, 9, '2019-08-11 04:48:23', '2019-08-11 04:48:23'),
(6, 18, 10, '2019-08-11 04:48:25', '2019-08-11 04:48:25'),
(7, 21, 11, '2019-08-11 04:48:27', '2019-08-11 04:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `registered_vehicles`
--

CREATE TABLE `registered_vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_registration_no` bigint(20) NOT NULL,
  `issued_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registered_vehicles`
--

INSERT INTO `registered_vehicles` (`id`, `vehicle_id`, `user_id`, `vehicle_registration_no`, `issued_date`, `expired_date`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 4929512652993324, '1980-08-30', '1990-02-27', '2019-08-11 04:48:27', '2019-08-11 04:48:27'),
(2, 3, 11, 6011332605728014, '1986-11-11', '2020-03-16', '2019-08-11 04:48:28', '2019-08-11 04:48:28'),
(3, 4, 11, 4718930707812247, '2016-05-05', '2020-06-30', '2019-08-11 04:48:28', '2019-08-11 04:48:28'),
(4, 5, 11, 4532232263771444, '1977-01-14', '2020-01-14', '2019-08-11 04:48:28', '2019-08-11 04:48:28'),
(5, 12, 11, 2484336736225052, '1934-06-03', '1980-05-19', '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(6, 19, 11, 4532844817403173, '1976-12-21', '2018-12-12', '2019-08-11 04:48:30', '2019-08-11 04:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
(1, '2019-08-11 04:48:08', '2019-08-11 04:48:08', 'brta', ''),
(2, '2019-08-11 04:48:08', '2019-08-11 04:48:08', 'user', ''),
(3, '2019-08-11 04:48:08', '2019-08-11 04:48:08', 'driver', ''),
(4, '2019-08-11 04:48:08', '2019-08-11 04:48:08', 'malik', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `activated`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'brta', 'brta@brta.com', '$2y$10$gupC9sO4Am9AL4FEFmx0WuPPmE2MSB9XRkBNa9ejT/T8dFItbwflS', 1, NULL, '2019-08-11 04:48:08', '2019-08-11 04:48:08'),
(2, 'user', 'user@user.com', '$2y$10$cvxTW6r791689DsU/DVPg.hQ5DUccR7Klds.WAxF4tFw71he.2jcm', 1, NULL, '2019-08-11 04:48:10', '2019-08-11 04:48:10'),
(3, 'malik', 'malik@malik.com', '$2y$10$5bUPXj9n5C30.M88OofOOOfjrpqQutbz/nGC81vvv6Hwu8UFiH04y', 1, NULL, '2019-08-11 04:48:11', '2019-08-11 04:48:11'),
(4, 'driver', 'driver@driver.com', '$2y$10$w1r3o8Br2M6aN6LD158s3.vIUUDfYnl2tuU16Muxejz3POCL2goRy', 1, NULL, '2019-08-11 04:48:11', '2019-08-11 04:48:11'),
(5, 'alycia59', 'wisozk.ruth@hotmail.com', '$2y$10$o2VFjoNvQ1TOQ8HTl0QTB.xnQjhbLhD715BPJeJlOla5Hk0RcpjYW', 1, NULL, '2019-08-11 04:48:13', '2019-08-11 04:48:13'),
(6, 'dario66', 'hallie70@yahoo.com', '$2y$10$DvEjygcWNyjYGiQ8AapPr.fuRpUiOZHMJ8.dQkfMf0Y/2yUrp153C', 1, NULL, '2019-08-11 04:48:16', '2019-08-11 04:48:16'),
(7, 'stephan37', 'shana.mcclure@gmail.com', '$2y$10$vVRZGDWwGTePxwgrtPbBC.2n150cUL2R5H9RR4KnOqk0zI1UbTeDu', 1, NULL, '2019-08-11 04:48:18', '2019-08-11 04:48:18'),
(8, 'loma94', 'braun.francesca@gmail.com', '$2y$10$9cRj7p0L0nGGogbQyFBNb.k9gj03rPv9pu99IyS/wwsPvLnDHDG.S', 1, NULL, '2019-08-11 04:48:21', '2019-08-11 04:48:21'),
(9, 'felipa.pagac', 'yundt.nikolas@hotmail.com', '$2y$10$L2k82TaULiH/i5AnDnxP5eKwoVOI1GuWTS1y.mNbdGAEHx2iWXlqS', 1, NULL, '2019-08-11 04:48:23', '2019-08-11 04:48:23'),
(10, 'baumbach.rhea', 'dorothea.stroman@gmail.com', '$2y$10$FMKOjwrnMti3iPsoMKJuEenwQCPMcZ3SbuUmc3TB.3BWpMunxpMrW', 1, NULL, '2019-08-11 04:48:25', '2019-08-11 04:48:25'),
(11, 'queenie85', 'rae16@gmail.com', '$2y$10$wbVHnO2GVZqS90AQIO4pz.Cvg1haSVloZCtkzcA1VWSvXI2uL0WJi', 1, 'DGWNxYz0uMdSAQJCMpdZS19jFT2qdT1lihD3zTecKtTNUeeewe6IGiPN1gyN', '2019-08-11 04:48:27', '2019-08-11 04:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 2, 2),
(3, NULL, NULL, 3, 4),
(4, NULL, NULL, 4, 3),
(5, NULL, NULL, 5, 3),
(6, NULL, NULL, 6, 3),
(7, NULL, NULL, 7, 3),
(8, NULL, NULL, 8, 3),
(9, NULL, NULL, 9, 3),
(10, NULL, NULL, 10, 3),
(11, NULL, NULL, 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_applications`
--

CREATE TABLE `vehicle_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_id` bigint(20) UNSIGNED NOT NULL,
  `tyre_size` int(11) NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chasis_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_used` int(11) NOT NULL,
  `horse_power` int(11) NOT NULL,
  `rpm` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `cubic_capacity` int(11) NOT NULL,
  `standee_no` int(11) NOT NULL,
  `no_of_cylinders` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `engine_no` int(11) NOT NULL,
  `body_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makers_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maker_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_manufacture` int(11) NOT NULL,
  `fit` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_applications`
--

INSERT INTO `vehicle_applications` (`id`, `application_id`, `tyre_size`, `class`, `chasis_no`, `fuel_used`, `horse_power`, `rpm`, `seats`, `cubic_capacity`, `standee_no`, `no_of_cylinders`, `weight`, `engine_no`, `body_type`, `makers_country`, `maker_name`, `year_of_manufacture`, `fit`, `created_at`, `updated_at`) VALUES
(1, 21, 8876, 'v', '8122', 2387, 3959, 1440, 3467, 3128, 6716, 6433, 7744, 8934, 'animi', 'Cayman Islands', 'Ava Russel', 2016, 0, '2019-08-11 04:48:27', '2019-08-11 04:48:27'),
(2, 21, 7741, 'u', '1357', 2767, 4638, 1148, 8541, 6130, 4830, 3056, 8095, 6969, 'totam', 'Malta', 'Kaden Borer', 2012, 0, '2019-08-11 04:48:27', '2019-08-11 04:48:27'),
(3, 21, 1658, 'p', '1209', 4022, 3550, 4809, 8765, 7880, 6568, 3210, 4474, 3771, 'modi', 'Andorra', 'Lilian Robel', 2003, 1, '2019-08-11 04:48:28', '2019-08-11 04:48:28'),
(4, 21, 7107, 'g', '1512', 8689, 3105, 7910, 5306, 6852, 2022, 8980, 3824, 2114, 'consequatur', 'Moldova', 'Nestor Dach Jr.', 2015, 1, '2019-08-11 04:48:28', '2019-08-11 04:48:28'),
(5, 21, 6595, 'h', '7359', 1455, 4400, 5159, 2545, 1862, 2154, 8590, 5493, 1130, 'alias', 'Iceland', 'Kyleigh Champlin MD', 2017, 1, '2019-08-11 04:48:28', '2019-08-11 04:48:28'),
(6, 21, 3692, 'y', '1411', 3399, 7796, 5126, 4603, 5905, 6984, 5787, 2863, 6525, 'non', 'Fiji', 'Josie Weimann', 2017, 0, '2019-08-11 04:48:28', '2019-08-11 04:48:28'),
(7, 21, 3098, 'r', '5330', 5887, 1028, 3388, 5928, 5405, 2290, 8265, 1388, 3396, 'et', 'Liechtenstein', 'Sidney Wolf', 1981, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(8, 21, 5898, 'e', '5759', 1601, 2299, 3167, 6212, 1574, 7234, 3603, 4707, 4497, 'enim', 'Greenland', 'Mr. Chelsey Adams', 1980, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(9, 21, 1918, 'f', '3424', 5275, 8396, 1355, 3166, 4895, 5755, 8619, 8411, 8677, 'eaque', 'Greece', 'Monroe Ward', 1982, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(10, 21, 8093, 'a', '7789', 2835, 8453, 7358, 4870, 1852, 4886, 7533, 7376, 1595, 'architecto', 'Palau', 'Bernice Berge', 1979, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(11, 21, 5035, 'r', '1480', 4264, 1579, 8063, 6545, 2842, 4004, 4345, 2753, 5251, 'facilis', 'Latvia', 'Willy Gerhold', 1978, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(12, 21, 7099, 'p', '7533', 7763, 1900, 3285, 5805, 1331, 4400, 5815, 4779, 5931, 'molestiae', 'Mauritius', 'Miss Marianna Kris Sr.', 1976, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(13, 21, 4756, 'j', '4860', 2625, 5592, 3060, 8760, 8467, 2159, 4180, 5287, 6057, 'et', 'Kenya', 'Lorine McDermott', 1972, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(14, 21, 1843, 'd', '8324', 2566, 3463, 4808, 4256, 6435, 8064, 6254, 6343, 8555, 'et', 'Korea', 'Prof. Andy Leuschke', 1994, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(15, 21, 3662, 'e', '3646', 2105, 6237, 1513, 7150, 3594, 7096, 3183, 7201, 8678, 'qui', 'Turkey', 'Prof. Corrine Rosenbaum Jr.', 2008, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(16, 21, 3888, 'v', '3880', 6718, 6978, 5742, 5066, 3905, 5936, 4597, 8502, 7167, 'ut', 'Mali', 'Dr. Cicero Miller II', 1975, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(17, 21, 8155, 'p', '5056', 3680, 4401, 4543, 2531, 3463, 8302, 5537, 8177, 7250, 'harum', 'Svalbard & Jan Mayen Islands', 'Trycia Schneider', 2007, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(18, 21, 1530, 'u', '5726', 5840, 7884, 6124, 1902, 2713, 5387, 3980, 1403, 6103, 'suscipit', 'Antarctica (the territory South of 60 deg S)', 'Carole Gottlieb', 1998, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(19, 21, 7424, 'f', '8859', 8969, 7155, 4886, 1279, 8201, 7911, 1073, 2272, 2662, 'quae', 'Samoa', 'Tod Rosenbaum', 1992, 0, '2019-08-11 04:48:29', '2019-08-11 04:48:29'),
(20, 21, 6594, 'v', '4711', 8725, 5965, 1782, 6449, 4562, 5382, 5279, 7070, 5941, 'consequatur', 'Brazil', 'Reuben Schuster', 1971, 0, '2019-08-11 04:48:30', '2019-08-11 04:48:30'),
(21, 27, 9090, '0090', '090', 9090, 90, 9, 9, 9090, 9090, 9090, 909, 90, '0900', 'jkkj', 'oiii', 909, 0, '2019-08-14 07:35:29', '2019-08-14 07:35:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident_locations`
--
ALTER TABLE `accident_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accident_locations_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `application_informations`
--
ALTER TABLE `application_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_vehicles`
--
ALTER TABLE `daily_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daily_vehicles_owner_id_foreign` (`owner_id`),
  ADD KEY `daily_vehicles_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `daily_vehicles_driver_id_foreign` (`driver_id`);

--
-- Indexes for table `driver_applications`
--
ALTER TABLE `driver_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_applications_application_id_foreign` (`application_id`);

--
-- Indexes for table `driver_physically_fits`
--
ALTER TABLE `driver_physically_fits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_physically_fits_driver_application_foreign` (`driver_application`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_users`
--
ALTER TABLE `notification_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notification_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `registered_drivers`
--
ALTER TABLE `registered_drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registered_drivers_driver_id_foreign` (`driver_id`),
  ADD KEY `registered_drivers_user_id_foreign` (`user_id`);

--
-- Indexes for table `registered_user_informations`
--
ALTER TABLE `registered_user_informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registered_user_informations_information_id_foreign` (`information_id`),
  ADD KEY `registered_user_informations_user_id_foreign` (`user_id`);

--
-- Indexes for table `registered_vehicles`
--
ALTER TABLE `registered_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registered_vehicles_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `registered_vehicles_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_activations_user_id_foreign` (`user_id`),
  ADD KEY `user_activations_token_index` (`token`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_applications`
--
ALTER TABLE `vehicle_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_applications_application_id_foreign` (`application_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident_locations`
--
ALTER TABLE `accident_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_informations`
--
ALTER TABLE `application_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `daily_vehicles`
--
ALTER TABLE `daily_vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driver_applications`
--
ALTER TABLE `driver_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `driver_physically_fits`
--
ALTER TABLE `driver_physically_fits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT for table `notification_users`
--
ALTER TABLE `notification_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registered_drivers`
--
ALTER TABLE `registered_drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registered_user_informations`
--
ALTER TABLE `registered_user_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registered_vehicles`
--
ALTER TABLE `registered_vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicle_applications`
--
ALTER TABLE `vehicle_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accident_locations`
--
ALTER TABLE `accident_locations`
  ADD CONSTRAINT `accident_locations_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `registered_vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `daily_vehicles`
--
ALTER TABLE `daily_vehicles`
  ADD CONSTRAINT `daily_vehicles_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `registered_drivers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_vehicles_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `daily_vehicles_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `registered_vehicles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `driver_applications`
--
ALTER TABLE `driver_applications`
  ADD CONSTRAINT `driver_applications_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `application_informations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `driver_physically_fits`
--
ALTER TABLE `driver_physically_fits`
  ADD CONSTRAINT `driver_physically_fits_driver_application_foreign` FOREIGN KEY (`driver_application`) REFERENCES `driver_applications` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notification_users`
--
ALTER TABLE `notification_users`
  ADD CONSTRAINT `notification_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registered_drivers`
--
ALTER TABLE `registered_drivers`
  ADD CONSTRAINT `registered_drivers_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `driver_applications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registered_drivers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registered_user_informations`
--
ALTER TABLE `registered_user_informations`
  ADD CONSTRAINT `registered_user_informations_information_id_foreign` FOREIGN KEY (`information_id`) REFERENCES `application_informations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registered_user_informations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `registered_vehicles`
--
ALTER TABLE `registered_vehicles`
  ADD CONSTRAINT `registered_vehicles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `registered_vehicles_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle_applications` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD CONSTRAINT `user_activations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehicle_applications`
--
ALTER TABLE `vehicle_applications`
  ADD CONSTRAINT `vehicle_applications_application_id_foreign` FOREIGN KEY (`application_id`) REFERENCES `application_informations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
