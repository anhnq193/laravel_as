-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 12:51 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_details`
--

CREATE TABLE `attendance_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `attendance_slot` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_slots`
--

CREATE TABLE `attendance_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_slot_id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance_slots`
--

INSERT INTO `attendance_slots` (`id`, `class_id`, `time_slot_id`, `subject`, `created_at`) VALUES
(1, 'T1701M', 1, 'ADF', '2018-05-29 15:15:06'),
(2, 'T1702M', 3, 'MLJ', '2018-05-29 15:15:06'),
(3, 'T1703M', 2, 'AP', '2018-05-29 15:15:06'),
(4, 'T1704M', 1, 'WADP', '2018-05-29 15:15:06'),
(5, 'T1705M', 3, 'IBD', '2018-05-29 15:15:06'),
(6, 'T1701M', 1, 'ADF', '2018-05-29 15:36:11'),
(7, 'T1702M', 3, 'MLJ', '2018-05-29 15:36:11'),
(8, 'T1703M', 2, 'AP', '2018-05-29 15:36:11'),
(9, 'T1704M', 1, 'WADP', '2018-05-29 15:36:11'),
(10, 'T1705M', 3, 'IBD', '2018-05-29 15:36:11'),
(11, 'T1701M', 1, 'ADF', '2018-05-29 15:44:09'),
(12, 'T1702M', 3, 'MLJ', '2018-05-29 15:44:09'),
(13, 'T1703M', 2, 'AP', '2018-05-29 15:44:09'),
(14, 'T1704M', 1, 'WADP', '2018-05-29 15:44:09'),
(15, 'T1705M', 3, 'IBD', '2018-05-29 15:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `status`, `created_at`) VALUES
('T1701M', 1, '2018-05-29 22:14:17'),
('T1702M', 1, '2018-05-29 22:14:17'),
('T1703M', 0, '2018-05-29 22:14:17'),
('T1704M', 1, '2018-05-29 22:14:17'),
('T1705M', 0, '2018-05-29 22:14:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_29_191609_create_classes_table', 1),
(4, '2018_05_29_191700_create_students_table', 1),
(5, '2018_05_29_191706_create_time_slots_table', 1),
(6, '2018_05_29_191738_create_student_classes_table', 1),
(7, '2018_05_29_191758_create_attendance_slots_table', 1),
(8, '2018_05_29_191817_create_attendance_details_table', 1);

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`) VALUES
('D0001', 'Tran Van A'),
('D0002', 'Tran Văn B'),
('D0003', 'Tran Thi C'),
('D0004', 'Mai Van A'),
('D0005', 'Mai Quang B'),
('D0006', 'Mai Quang C'),
('D0007', 'Dinh Quang A'),
('D0008', 'Dinh Quang B'),
('D0009', 'Dinh Quang C'),
('D0010', 'Nguyen Van A'),
('D0011', 'Nguyen Van B'),
('D0012', 'Nguyen Van C'),
('D0013', 'Vo Thi A'),
('D0014', 'Vo Thi B'),
('D0015', 'Vo Thi C');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `student_id`, `class_id`, `status`, `created_at`) VALUES
(1, 'D0001', 'T1701M', 1, '2018-05-29 15:14:42'),
(2, 'D0002', 'T1701M', 1, '2018-05-29 15:14:42'),
(3, 'D0003', 'T1701M', 1, '2018-05-29 15:14:42'),
(4, 'D0004', 'T1702M', 1, '2018-05-29 15:14:42'),
(5, 'D0005', 'T1702M', 1, '2018-05-29 15:14:42'),
(6, 'D0006', 'T1702M', 1, '2018-05-29 15:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `time_slots`
--

CREATE TABLE `time_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_slots`
--

INSERT INTO `time_slots` (`id`, `time`) VALUES
(1, '8h-12h'),
(2, '13h30-17h30'),
(3, '17h-21h');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_details_attendance_slot_foreign` (`attendance_slot`),
  ADD KEY `attendance_details_student_id_foreign` (`student_id`);

--
-- Indexes for table `attendance_slots`
--
ALTER TABLE `attendance_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_slots_class_id_foreign` (`class_id`),
  ADD KEY `attendance_slots_time_slot_id_foreign` (`time_slot_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_classes_student_id_foreign` (`student_id`),
  ADD KEY `student_classes_class_id_foreign` (`class_id`);

--
-- Indexes for table `time_slots`
--
ALTER TABLE `time_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_details`
--
ALTER TABLE `attendance_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_slots`
--
ALTER TABLE `attendance_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `time_slots`
--
ALTER TABLE `time_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_details`
--
ALTER TABLE `attendance_details`
  ADD CONSTRAINT `attendance_details_attendance_slot_foreign` FOREIGN KEY (`attendance_slot`) REFERENCES `attendance_slots` (`id`),
  ADD CONSTRAINT `attendance_details_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `attendance_slots`
--
ALTER TABLE `attendance_slots`
  ADD CONSTRAINT `attendance_slots_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `attendance_slots_time_slot_id_foreign` FOREIGN KEY (`time_slot_id`) REFERENCES `time_slots` (`id`);

--
-- Constraints for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD CONSTRAINT `student_classes_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `student_classes_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
