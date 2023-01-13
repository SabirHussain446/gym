-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2022 at 01:50 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
CREATE TABLE IF NOT EXISTS `assets` (
  `asset_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL,
  `purchase_date` varchar(254) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`asset_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`asset_id`, `name`, `image`, `purchase_date`, `quantity`) VALUES
(1, 'Chest Fly Machine.', 'single-station-pec-deck-fly-500x500', '2021-12-12', 11),
(2, 'Shoulder Press Machine', 'shoulder-press-machine-500x500', '2021-11-28', 6),
(3, 'Metal Plates', 'gym-cast-iron-weight-plate-500x500', '2021-06-23', 5),
(4, 'Stationary Bike', '2ded04d1-9177-47e6-8561-13a04c9d7fd3_1.4f23c653aa83466603bf672a496c88ae.jpeg', '2021-12-08', 11);

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

DROP TABLE IF EXISTS `diet`;
CREATE TABLE IF NOT EXISTS `diet` (
  `diet_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(253) NOT NULL,
  `description` varchar(254) NOT NULL,
  PRIMARY KEY (`diet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`diet_id`, `name`, `description`) VALUES
(1, 'muscle gain', 'Eggs, salmon, chicken, Greek Yogurt, tuna, Shrimp'),
(3, 'weight gain', 'milk, rice, nuts, red meats, protein, potatoes'),
(4, 'shoulder pain', 'Nuts, Seeds, Brassica Vegetables, Lentils, Beans, Garlic, Root Vegetables and Whole Grains');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `package_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `name`) VALUES
(1, 'one month(5000)'),
(2, 'six month(40000)'),
(3, 'one year(100000)');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `plan_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `image` varchar(210) NOT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `name`, `image`) VALUES
(1, 'legs', 'The-Only-Legs-Workouts-You-Need-To-Do-At-The-Gym-2019.jpg'),
(6, 'chest', 'hero-1.jpg'),
(7, 'back', '708f9e289a623351e3287f5c74371f96'),
(10, 'Triceps', 'Tricept-Workouts'),
(9, 'shoulders', '11-of-the-Best-Shoulder-Exercises-for-Mass'),
(15, 'chun_up', 'hero-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `register_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `user_name`, `email`, `password`, `image`) VALUES
(40, 'Shoaib Hassan', 'shoaib@gmail.com', '123456', 'kljkh.JPG'),
(42, 'ahmed shb', 'ahmadshb@gmail.com', '123456789', 's.jpg'),
(41, 'Sabir Hussain', 'abc@gmail.com', '12345', 'sabir.jpg'),
(37, 'admin', 'sabirhussainsipple786@gmail.com', 'q', 'yutu.JPG'),
(38, 'Sabir Hussain', 'sabir@gmail.com', '12345', 'io.JPG'),
(39, 'sabir saleem', 'sabir46@gmauil.com', '1122', 'ur,kids_mask_7x3_flatlay_front,product,1000x1000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

DROP TABLE IF EXISTS `trainee`;
CREATE TABLE IF NOT EXISTS `trainee` (
  `trainee_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `f_name` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL,
  `address` varchar(254) NOT NULL,
  `gender` varchar(254) NOT NULL,
  `age` int NOT NULL,
  `plan_id` int NOT NULL,
  `package_id` int NOT NULL,
  `status` varchar(254) NOT NULL,
  PRIMARY KEY (`trainee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`trainee_id`, `name`, `f_name`, `image`, `address`, `gender`, `age`, `plan_id`, `package_id`, `status`) VALUES
(3, 'Shahbaz Hussain', 'Hussain Abbas', '940ff665651d9565a9f8c750f40a3062', 'Lahore', 'male', 21, 6, 1, '1'),
(15, 'Aqsa khan', 'Ghafoor Kamal', '41311807cf31ae30c3bf9093b73aba6f', 'Islamabad', 'female', 30, 9, 3, '0'),
(6, 'Sabir Hussain', 'Hussain Abbas', 'IMG-20211013-WA0044', 'layyah', 'male', 21, 10, 3, '1'),
(16, 'Tanzila zafar', 'Zafar Manzoor', 'images (2)', 'M.garh', 'female', 44, 1, 2, '0'),
(17, 'Sidra Iqbal', 'Muhammad Iqbal', 'photo-1601288496920-b6154fe3626a', 'kot addu', 'female', 25, 6, 2, '1'),
(21, 'Aqsa khan', 'Ghafoor Kamal', '41311807cf31ae30c3bf9093b73aba6f', 'Islamabad', 'female', 30, 9, 3, '0'),
(22, 'Sabir Hussain', 'Hussain Abbas', 'IMG-20211013-WA0044', 'layyah', 'male', 21, 10, 3, '1'),
(23, 'Tanzila zafar', 'Zafar Manzoor', 'images (2)', 'M.garh', 'female', 44, 1, 2, '0'),
(24, 'Sidra Iqbal', 'Muhammad Iqbal', 'photo-1601288496920-b6154fe3626a', 'kot addu', 'female', 25, 6, 2, '1'),
(26, 'Aqsa khan', 'Ghafoor Kamal', '41311807cf31ae30c3bf9093b73aba6f', 'Islamabad', 'female', 30, 9, 3, '0'),
(27, 'Sabir Hussain', 'Hussain Abbas', 'IMG-20211013-WA0044', 'layyah', 'male', 21, 10, 3, '0'),
(28, 'Tanzila zafar', 'Zafar Manzoor', 'images (2)', 'M.garh', 'female', 44, 1, 2, '1'),
(29, 'Sidra Iqbal', 'Muhammad Iqbal', 'photo-1601288496920-b6154fe3626a', 'kot addu', 'female', 25, 6, 2, '0'),
(31, 'Aqsa khan', 'Ghafoor Kamal', '41311807cf31ae30c3bf9093b73aba6f', 'Islamabad', 'female', 30, 9, 3, '1'),
(32, 'Sabir Hussain', 'Hussain Abbas', 'IMG-20211013-WA0044', 'layyah', 'male', 21, 10, 3, '1'),
(33, 'Tanzila zafar', 'Zafar Manzoor', 'images (2)', 'M.garh', 'female', 44, 1, 2, '0'),
(34, 'Sidra Iqbal', 'Muhammad Iqbal', 'photo-1601288496920-b6154fe3626a', 'kot addu', 'female', 25, 6, 2, '1'),
(40, 'fida hussain', 'muhamamd musa', 'ls,13inch,x1000-c,90,0,1000,1000-bg,f8f8f8 (1).jpg', 'jataoi', 'male', 23, 7, 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

DROP TABLE IF EXISTS `trainers`;
CREATE TABLE IF NOT EXISTS `trainers` (
  `trainer_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL,
  PRIMARY KEY (`trainer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`trainer_id`, `name`, `image`) VALUES
(9, 'Sabir Hussain', 'starofservice_11000img20170801142049309'),
(10, 'Aqsa Ali', '56e69f2127c63'),
(7, 'Fida Hussain', 'personal-training-by-yash-uttam-nagar-delhi-personal-gym-trainers-136q9zoxic'),
(11, 'Shakeela Iman', 'high01'),
(13, 'Aqsa khannn', 'image-asset'),
(16, 'amir sippal', 'MYXJ_20211106132435_fast.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
