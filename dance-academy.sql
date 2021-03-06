-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 04:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dance-academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `stud_id` int(11) DEFAULT NULL,
  `choreo_id` int(11) DEFAULT NULL,
  `attendance_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_date`, `stud_id`, `choreo_id`, `attendance_status`) VALUES
(9, '2021-05-04', 4, NULL, 1),
(11, '2021-05-10', 4, NULL, 1),
(12, '2021-05-11', NULL, 1, 1),
(15, '2021-05-11', 4, NULL, 1),
(16, '2021-05-11', 6, NULL, 0),
(28, '2021-05-16', NULL, 1, 1),
(29, '2021-05-16', 4, NULL, 1),
(30, '2021-05-16', 6, NULL, 0),
(31, '2021-05-17', NULL, 1, 1),
(32, '2021-05-17', 4, NULL, 0),
(33, '2021-05-17', 6, NULL, 0),
(34, '2021-05-18', NULL, 1, 1),
(35, '2021-05-18', 4, NULL, 1),
(36, '2021-05-18', 6, NULL, 1),
(37, '2021-05-15', NULL, 1, 1),
(38, '2021-05-15', 4, NULL, 1),
(39, '2021-05-15', 6, NULL, 1),
(40, '2021-05-19', NULL, 1, 1),
(41, '2021-05-19', 4, NULL, 1),
(42, '2021-05-19', 6, NULL, 0),
(43, '2021-05-20', NULL, 1, 1),
(44, '2021-05-20', 4, NULL, 1),
(45, '2021-05-20', 6, NULL, 1),
(46, '2021-05-20', NULL, 2, 1),
(47, '2021-05-25', NULL, 1, 1),
(48, '2021-05-25', 4, NULL, 1),
(49, '2021-05-25', 6, NULL, 1),
(50, '2021-05-26', NULL, 1, 1),
(51, '2021-05-26', 4, NULL, 1),
(52, '2021-05-26', 6, NULL, 0),
(53, '2021-05-28', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(40) NOT NULL,
  `batch_age_grp` varchar(35) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `choreographer_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_name`, `batch_age_grp`, `branch_id`, `choreographer_id`) VALUES
(7, '8_branch_4-10 yrs_19_04', '4-10 yrs', 8, 1),
(8, '8_branch_11-15 yrs_19_04', '11-15 yrs', 8, 0),
(9, '8_branch_16-25 yrs_19_04', '16-25 yrs', 8, 0),
(10, '8_branch_25+ yrs male_19_04', '25+ yrs male', 8, 0),
(11, '8_branch_25+ yrs female_19_04', '25+ yrs female', 8, 0),
(12, '9_branch_4-10 yrs_19_04', '4-10 yrs', 9, 0),
(13, '9_branch_11-15 yrs_19_04', '11-15 yrs', 9, 0),
(14, '9_branch_16-25 yrs_19_04', '16-25 yrs', 9, 0),
(15, '9_branch_25+ yrs male_19_04', '25+ yrs male', 9, 0),
(16, '9_branch_25+ yrs female_19_04', '25+ yrs female', 9, 0),
(17, '10_branch_4-10 yrs_19_04', '4-10 yrs', 10, 0),
(18, '10_branch_11-15 yrs_19_04', '11-15 yrs', 10, 0),
(19, '10_branch_16-25 yrs_19_04', '16-25 yrs', 10, 0),
(20, '10_branch_25+ yrs male_19_04', '25+ yrs male', 10, 0),
(21, '10_branch_25+ yrs female_19_04', '25+ yrs female', 10, 0),
(23, '11_branch_11-15 yrs_19_04', '11-15 yrs', 11, 0),
(24, '11_branch_4-10 yrs_19_04', '4-10 yrs', 11, 0),
(25, '11_branch_16-25 yrs_19_04', '16-25 yrs', 11, 0),
(26, '11_branch_25+ yrs male_19_04', '25+ yrs male', 11, 0),
(27, '11_branch_25+ yrs female_19_04', '25+ yrs female', 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_landmark` varchar(40) NOT NULL,
  `branch_pincode` int(11) NOT NULL,
  `branch_place` varchar(30) NOT NULL,
  `branch_dst` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_landmark`, `branch_pincode`, `branch_place`, `branch_dst`) VALUES
(8, 'Opposite Baby memorial hospital', 673004, 'Arayidathupalam', 'Kozhikode'),
(9, 'Opposite Star hotel Pc junction', 673602, 'mukkam', 'Kozhikode'),
(10, 'Wayanad road', 673571, 'Karanthur', 'Kozhikode'),
(11, 'KSEB ??building mangavu road', 673014, 'Pantheerankavu', 'Kozhikode');

-- --------------------------------------------------------

--
-- Table structure for table `choreographer`
--

CREATE TABLE `choreographer` (
  `choreographer_id` int(11) NOT NULL,
  `choreographer_name` varchar(50) NOT NULL,
  `choreographer_dob` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `place` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `district` varchar(25) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `sallary` int(11) NOT NULL,
  `qualification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choreographer`
--

INSERT INTO `choreographer` (`choreographer_id`, `choreographer_name`, `choreographer_dob`, `address`, `place`, `pincode`, `district`, `mobile`, `email`, `sallary`, `qualification`) VALUES
(1, 'Suhail A K', '1998-10-28', 'Valathel house', 'MARANCHERY', 679581, 'Malappuram', 9633058949, 'suhu3515@gmail.com', 12000, 'Bsc Danceology'),
(2, 'Mohammed Sakkeer', '1990-10-11', 'Ward 7, valathel house', 'mavoor', 679581, 'Malappuram', 9946739215, 'mohamedsawa@gmail.com', 15000, 'Ba Arts'),
(3, 'Mohammed Salih', '1998-11-14', 'Valathel house', 'MARANCHERY', 679581, 'Malappuram', 9446476392, 'mohamedsalih@gmail.com', 11000, 'Ba Arts');

-- --------------------------------------------------------

--
-- Table structure for table `choreographer_leave`
--

CREATE TABLE `choreographer_leave` (
  `leave_id` int(11) NOT NULL,
  `choreo_id` int(11) NOT NULL,
  `leave_reason` text NOT NULL,
  `leave_date` varchar(20) NOT NULL,
  `leave_days` int(11) NOT NULL,
  `leave_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choreographer_leave`
--

INSERT INTO `choreographer_leave` (`leave_id`, `choreo_id`, `leave_reason`, `leave_date`, `leave_days`, `leave_status`) VALUES
(2, 1, 'I want to take leave on 30th April since i have a interim evaluation', '2021-04-30', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dance`
--

CREATE TABLE `dance` (
  `dance_id` int(11) NOT NULL,
  `dance_name` varchar(40) NOT NULL,
  `dance_price` int(11) NOT NULL,
  `dance_description` text NOT NULL,
  `dance_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dance`
--

INSERT INTO `dance` (`dance_id`, `dance_name`, `dance_price`, `dance_description`, `dance_status`) VALUES
(1, 'HipHop ', 600, 'Hiphop dance, ', 1),
(2, 'Classic', 1200, 'Classic dance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(40) NOT NULL,
  `event_poster` text NOT NULL,
  `event_description` text NOT NULL,
  `event_date` date NOT NULL,
  `event_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_poster`, `event_description`, `event_date`, `event_status`) VALUES
(11, 'Lets Dance Guys', 'events/download.jpg', 'Life is all about dancing.,,', '2021-05-22', 1),
(12, 'Lets Dance ', 'events/demo_poster.jpg', 'Life can be more realistic with dance', '2021-05-23', 1),
(13, 'Party Night', 'events/demo_poster.jpg', 'A night which can be completely dedicated to dance', '2021-05-23', 1),
(15, 'DJ Night', 'events/download.jpg', 'Life is all about enjoying', '2021-05-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `fees_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `paid_date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fees_id`, `student_id`, `amount`, `paid_date`) VALUES
(1, 1, 550, '24-04-2021'),
(2, 2, 1350, '24-04-2021'),
(3, 1, 50, '24-04-2021'),
(4, 4, 1000, '24-04-2021'),
(5, 4, 100, '24-04-2021'),
(6, 4, 100, '24-04-2021'),
(7, 2, -150, '24-04-2021'),
(8, 6, 650, '24-04-2021'),
(9, 3, 600, '27-04-2021'),
(10, 3, 600, '27-04-2021'),
(11, 6, 50, '27-04-2021');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `image_id` int(11) NOT NULL,
  `image_title` varchar(50) NOT NULL,
  `image_loc` text NOT NULL,
  `image_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`image_id`, `image_title`, `image_loc`, `image_status`) VALUES
(1, 'Dance', '../gallery/demo_poster.jpg', 1),
(3, 'Poster', '../gallery/download.jpg', 1),
(4, 'Event', '../gallery/download.jpg', 1),
(5, 'Come on Dance', '../gallery/demo_poster.jpg', 1),
(6, 'Come Dance', '../gallery/download.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `user_type`, `password`) VALUES
(1, 'admin', 'ADMIN', 'admin'),
(3, 'nandu03@gmail.com', 'STUDENT', 'nandu@03'),
(4, 'manjuns@gmail.com', 'STUDENT', 'manju@01'),
(5, 'ranjuh@gmail.com', 'STUDENT', 'RANJU@14'),
(6, 'ashwini3456@gmail.com', 'STUDENT', '111111'),
(7, 'harikrishnan78@gmail.com', 'STUDENT', '111111'),
(8, 'midhunremesh67@gmail.com', 'STUDENT', '111111'),
(9, 'mrithul45@gmail.com', 'STUDENT', '111111'),
(10, 'athul111@gmail.com', 'STUDENT', '111111'),
(11, 'dilnasajeesh11@gmail.com', 'STUDENT', '111111'),
(12, 'anusha5643@gmail.com', 'STUDENT', '111111'),
(13, 'vishnusr@gmail.com', 'STUDENT', '111111'),
(14, 'renjith7654@gmail.com', 'STUDENT', '111111'),
(15, 'ashlisr@gmail.com', 'STUDENT', '111111'),
(16, 'shiyaa123@gmail.com', 'STUDENT', '111111'),
(17, 'anandfsa@gmail.com', 'STUDENT', '111111'),
(18, 'anaswarav2345@gmail.com', 'STUDENT', '111111'),
(19, 'princyc234@gmail.com', 'STUDENT', '111111'),
(20, 'jincy@gmail.com', 'STUDENT', '111111'),
(21, 'prjin34@gmail.com', 'STUDENT', '121212'),
(22, 'seethu@gmail.com', 'STUDENT', '111111'),
(23, 'anusree1678@gmail.com', 'STUDENT', '111111'),
(24, 'anuss234@gmail.com', 'STUDENT', '111111'),
(25, 'neethuamal2222@gmail.com', 'STUDENT', '111111'),
(26, 'ashwiniachu9020@gmail.com', 'STUDENT', '111111'),
(27, 'abinraj@gmail.com', 'STUDENT', '111111'),
(28, 'jishnu@gmail.com', 'STUDENT', '111111'),
(29, 'abinn111@gmail.com', 'STUDENT', '111111'),
(30, 'jinsha156@gmail.com', 'STUDENT', '111111'),
(31, 'nithin@gmail.com', 'STUDENT', '111111'),
(32, 'rahoof@gmail.com', 'STUDENT', '111111'),
(33, 'saanu@gmail.com', 'STUDENT', '111111'),
(34, 'adith234@gmail.com', 'STUDENT', '111111'),
(35, 'dipin@gmail.com', 'STUDENT', '111111'),
(36, 'vineth5432@gmail.com', 'STUDENT', '111111'),
(37, 'dhanu23@gmail.com', 'STUDENT', '111111'),
(38, 'sruthi111@gmail.com', 'STUDENT', '111111'),
(39, 'kavya123@gmail.com', 'STUDENT', '111111'),
(40, 'kunju123@gmail.com', 'STUDENT', '111111'),
(41, 'rosi123@gmail.com', 'STUDENT', '111111'),
(42, 'maalu123@gmail.com', 'STUDENT', '111111'),
(43, 'thaani100@gmail.com', 'STUDENT', '111111'),
(44, 'nijisha123456@gmail.com', 'STUDENT', '111111'),
(45, 'sree333@gmail.com', 'STUDENT', '111111'),
(46, 'jamshee3334@gmail.com', 'STUDENT', '111111'),
(47, 'sini1234@gmail.com', 'STUDENT', '111111'),
(48, 'jaaziya299@gmail.com', 'STUDENT', '111111'),
(49, 'miduna12@gmail.com', 'STUDENT', '111111'),
(50, 'faz123@gmail.com', 'STUDENT', '111111'),
(51, 'swaga1889@gmail.com', 'STUDENT', '111111'),
(52, 'jithin123@gmail.com', 'STUDENT', '111111'),
(53, 'akshay123@gmail.com', 'STUDENT', '111111'),
(54, 'aswin111@gmail.com', 'STUDENT', '111111'),
(55, 'sreenivas67@gmail.com', 'STUDENT', '111111'),
(56, 'ywes@gmail.com', 'STUDENT', '111111'),
(57, 'suru123@gmail.com', 'STUDENT', '111111'),
(58, 'rathnan@gmail.com', 'STUDENT', '111111'),
(59, 'anil89@gmail.com', 'STUDENT', '111111'),
(60, 'akash123@gmail.com', 'STUDENT', '111111'),
(61, 'nithin003@gmail.com', 'STUDENT', '111111'),
(64, 'suhu3515@gmail.com', 'CHOREOGRAPHER', 'abcd123'),
(70, 'safwantrz@gmail.com', 'STUDENT', 'abcde'),
(71, 'aslamkedpl12@gmail.com', 'STUDENT', 'abcdef'),
(72, 'mohamedsawa@gmail.com', 'CHOREOGRAPHER', 'abcde123'),
(73, 'mohamedsalih@gmail.com', 'CHOREOGRAPHER', 'abcd123'),
(74, 'shijina@gmail.com', 'STUDENT', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message_title` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `message_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `from_id`, `to_id`, `message_title`, `message`, `message_status`) VALUES
(1, 111, 3, 'fee_dues', 'Hello Ranju H, You have a due amount of Rs. 1200 /-. Please clear the dues soon.\r\n                                                    -Admin', 0),
(2, 111, 5, 'fee_dues', 'Hello Harikrishnan, You have a due amount of Rs. 600 /-. Please clear the dues soon.\r\n                                                    -Admin', 1),
(3, 111, 6, 'fee_dues', 'Hello Anusree M T, You have a due amount of Rs. 550 /-. Please clear the dues soon.\r\n                                                    -Admin', 1),
(5, 1, 111, 'video_request', 'The video lecture that was provided has been completed. Therefore, requesting you for a new video lecture\r\n-Suhail A K', 0),
(6, 1, 111, 'video_request', 'The video lecture that was provided has been completed. Therefore, requesting you for a new video lecture\r\n-Suhail A K', 0),
(7, 1, 111, 'video_request', 'The video lecture that was provided has been completed. Therefore, requesting you for a new video lecture\r\n-Suhail A K', 0),
(8, 1, 111, 'video_request', 'The video lecture that was provided has been completed. Therefore, requesting you for a new video lecture\r\n-Suhail A K', 0),
(12, 6, 111, 'user_admin', 'Good', 1),
(13, 6, 111, 'user_admin', 'Good', 1),
(15, 48, 111, 'user_admin', 'good morning', 1),
(16, 111, 48, 'user_admin', 'it\'s good evening dear...', 1),
(17, 48, 111, 'user_admin', 'sorry.', 1),
(31, 7, 111, 'user_admin', 'Hello sir', 1),
(32, 9, 111, 'user_admin', 'Hello sir,', 1),
(33, 9, 111, 'user_admin', 'I would like to file a complaint against the choreographer', 1),
(34, 2, 111, 'user_admin', 'Hi sir', 1),
(35, 2, 111, 'user_admin', 'Are you free to talk???', 1),
(36, 11, 111, 'user_admin', 'Enthaanu sir ith', 1),
(37, 11, 111, 'user_admin', 'Ithu Shari alal', 1),
(38, 11, 111, 'user_admin', 'alla *', 1),
(39, 24, 111, 'user_admin', 'Hello sir', 1),
(40, 23, 111, 'user_admin', 'Good night sir...', 1),
(41, 23, 111, 'user_admin', 'Good night sir...', 1),
(42, 23, 111, 'user_admin', 'Hello sir', 1),
(43, 23, 111, 'user_admin', 'good for growing', 1),
(44, 23, 111, 'user_admin', 'Hawaii is my favourite destination', 1),
(174, 111, 48, 'user_admin', 'Thats ok', 1),
(175, 111, 48, 'user_admin', 'What do you do now???', 1),
(176, 48, 111, 'user_admin', 'Nothing sir', 1),
(177, 20, 111, 'user_admin', 'hello sir', 1),
(178, 1, 111, 'video_request', 'The video lecture that was provided has been completed. Therefore, requesting you for a new video lecture for batch \r\n-Suhail A K', 1),
(179, 1, 111, 'video_request', 'The video lecture that was provided has been completed. Therefore, requesting you for a new video lecture for this batch ID 9\r\n-Suhail A K', 1),
(180, 1, 111, 'video_request', 'The video lecture that was provided has been completed. Therefore, requesting you for a new video lecture for this batch \r\n-Suhail A K', 1),
(181, 113, 111, 'user_admin', 'Hello ', 1),
(182, 20, 111, 'user_admin', 'hi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_class`
--

CREATE TABLE `personal_class` (
  `personal_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_mobile` bigint(12) NOT NULL,
  `user_date` date NOT NULL,
  `user_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_class`
--

INSERT INTO `personal_class` (`personal_id`, `user_name`, `user_mobile`, `user_date`, `user_time`) VALUES
(11, 'Mohammed Salih', 9633058949, '2021-05-21', '09:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `sallary`
--

CREATE TABLE `sallary` (
  `sallary_id` int(11) NOT NULL,
  `choreo_id` int(11) NOT NULL,
  `sallary` int(11) NOT NULL,
  `paid_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sallary`
--

INSERT INTO `sallary` (`sallary_id`, `choreo_id`, `sallary`, `paid_date`) VALUES
(1, 1, 10000, '2021-05-19'),
(2, 2, 9500, '2021-05-19'),
(3, 3, 5000, '2021-05-20'),
(4, 2, 2000, '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `batch_id`, `schedule_time`, `schedule_date`, `schedule_status`) VALUES
(1, 7, '12:00:00', '2021-04-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `student_dob` varchar(30) NOT NULL,
  `student_gender` varchar(12) NOT NULL,
  `address` varchar(25) NOT NULL,
  `place` varchar(25) NOT NULL,
  `pincode` int(11) NOT NULL,
  `district` varchar(30) NOT NULL,
  `nearest_branch` int(11) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  `mobile_number` bigint(12) NOT NULL,
  `profile_photo` text DEFAULT NULL,
  `batch_id` int(11) DEFAULT 0,
  `fee_status` int(11) NOT NULL DEFAULT 0,
  `student_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_dob`, `student_gender`, `address`, `place`, `pincode`, `district`, `nearest_branch`, `email_address`, `mobile_number`, `profile_photo`, `batch_id`, `fee_status`, `student_status`) VALUES
(1, 'Nandu', '2020-03-03', 'Male', 'vadakkel methal house may', 'mayanad', 673008, 'Kozhikode', 10, 'nandu03@gmail.com', 9746541990, NULL, 0, 1, 1),
(2, 'Manju N S ', '2015-06-01', 'Female', 'Ittapurathu house', 'mundikkalthazam', 673004, 'Kozhikode', 10, 'manjuns@gmail.com', 8129321420, NULL, 17, 1, 1),
(3, 'Ranju H', '2018-11-14', 'Male', 'puthiyakandi house', 'mayanad', 673008, 'Kozhikode', 10, 'ranjuh@gmail.com', 9865432567, NULL, 0, 1, 1),
(4, 'Ashwini S', '2014-11-05', 'Female', 'Melekkandi house', 'chevayoor', 673017, 'Kozhikode', 8, 'ashwini3456@gmail.com', 9654366654, NULL, 7, 1, 1),
(5, 'Harikrishnan', '2021-07-05', 'Male', 'varazikinnil house', 'kotooli', 673998, 'Kozhikode', 8, 'harikrishnan78@gmail.com', 9834556785, NULL, 0, 0, 1),
(6, 'Anusree M T', '2016-12-16', 'Female', 'MELEKKANDI HOUSE', 'KOVOOR', 673003, 'Kozhikode', 8, 'anusree1234@gmail.com', 98345676534, NULL, 7, 0, 1),
(7, 'Midhun N S', '2015-03-15', 'Male', 'Mangool house', 'chevayoor', 673005, 'Kozhikode', 11, 'midhunremesh67@gmail.com', 8755764312, NULL, 24, 0, 1),
(8, 'Mrithul Remesh', '2018-09-02', 'Male', 'vadakkelikathoor house', 'managavu', 673005, 'Kozhikode', 11, 'mrithul45@gmail.com', 9976443214, NULL, 0, 0, 1),
(9, 'Athul Ramesh N S', '2015-11-09', 'Male', 'melekkandathil house', 'palazhi', 673880, 'Kozhikode', 11, 'athul111@gmail.com', 7796543214, NULL, 24, 0, 1),
(10, 'Dilna V', '2015-06-21', 'Female', 'Harikrishnan house', 'Manasseri', 673001, 'Kozhikode', 9, 'dilnasajeesh11@gmail.com', 6543216785, NULL, 12, 0, 1),
(11, 'Anusha R', '2017-03-21', 'Female', 'Bargavan nilayam house', 'Kattangal', 673601, 'Kozhikode', 9, 'anusha5643@gmail.com', 8877665544, NULL, 12, 0, 1),
(12, 'Vishnu O', '2015-02-03', 'Male', 'Melekkandi varidathil hou', 'Mukkam', 673111, 'Kozhikode', 9, 'vishnusr@gmail.com', 9876544567, NULL, 12, 0, 1),
(13, 'Renjith G', '2011-05-08', 'Male', 'THAZEPARAMBIL HOUSE', 'Ozukkara', 673008, 'Kozhikode', 10, 'renjith7654@gmail.com', 9915643215, NULL, 17, 0, 1),
(14, 'Ashli E', '2010-02-02', 'Female', 'Malayithoodil house', 'Kalari', 673008, 'Kozhikode', 10, 'ashlisr@gmail.com', 8879898789, NULL, 18, 0, 1),
(15, 'Shiyaas Z', '2009-11-22', 'Male', 'JAVAN PARAMBIL HOUSE', 'MAUNDIKKALTHAZAM', 673007, 'Kozhikode', 10, 'shiyaas123@gmail.com', 8897766554, NULL, 18, 0, 1),
(16, 'Anand A', '2006-11-12', 'Male', 'Arakkinar house', 'chevayoor', 673990, 'Kozhikode', 8, 'anandfsa@gmail.com', 9876598765, NULL, 8, 0, 1),
(17, 'Anaswara V', '2007-05-06', 'Female', 'MALAKUNNUL HOUSE', 'MEDICAL MCOLLEHGE', 673008, 'Kozhikode', 8, 'anaswarav2345@gmail.com', 8769876543, NULL, 8, 0, 1),
(18, 'Princy  C', '2008-05-21', 'Female', 'NALUKANDATHIL HOUSE', 'VRINDAVAN COLONY', 67305, 'Kozhikode', 8, 'prijncyc234@gmail.com', 8798876678, NULL, 8, 0, 1),
(19, 'Jincy C', '2007-09-12', 'Female', 'Melekkandi varathil house', 'Mayavadu', 673765, 'Kozhikode', 11, 'jincy@gmail.com', 8877665544, NULL, 23, 0, 1),
(20, 'Prjin R', '2011-04-04', 'Male', 'Balusseri house', 'Mangaavu', 673998, 'Kozhikode', 11, 'prjin34@gmail.com', 9970088010, NULL, 24, 0, 1),
(21, 'Seethu H', '2009-01-05', 'Female', 'VARIDATHI HOUSE', 'cherikkampoyil', 679335, 'Kozhikode', 11, 'seethu@gmail.com', 9988443322, NULL, 23, 0, 1),
(22, 'Anusree B', '2011-03-01', 'Female', 'NANGARI MEETHAL HOUSE', 'Agasthyamuzhi', 678445, 'Kozhikode', 9, 'anusree1678@gmail.com', 6754321567, NULL, 13, 0, 1),
(23, 'Anagha N V', '2010-12-18', 'Female', 'Harikrishnan house', 'Manasseri', 6783354, 'Kozhikode', 9, 'anuss234@gmail.com', 8765498765, NULL, 13, 0, 1),
(24, 'Neethu', '2006-01-29', 'Female', 'Fahasil house', 'Mukkam', 673003, 'Kozhikode', 9, 'neethuamal2222@gmail.com', 9999789909, NULL, 14, 0, 1),
(25, 'Ashwini M', '1996-11-14', 'Female', 'Vadakel meethal house', 'Mayanad', 673008, 'Kozhikode', 10, 'ashwiniachu9020@gmail.com', 8129321420, NULL, 19, 0, 1),
(26, 'Abhinraj M', '1998-06-15', 'Male', 'BAALIKULAM HOUSE', 'Kalari', 673005, 'Kozhikode', 10, 'abinraj@gmail.com', 9988776655, NULL, 19, 0, 1),
(27, 'Jishnu M', '1998-12-23', 'Male', 'Mekkamdamadathil house', 'Mayanad', 673008, 'Kozhikode', 10, 'jishnu@gmail.com', 7657890876, NULL, 19, 0, 1),
(28, 'Abai raj', '1999-07-01', 'Male', 'Janavadha house', 'Chest hospital', 673008, 'Kozhikode', 8, 'abinn111@gmail.com', 9192939495, NULL, 9, 0, 1),
(29, 'Jinsha V', '2000-04-10', 'Female', 'NAALIKALATHIL HOUSE', 'Kaavu', 673003, 'Kozhikode', 8, 'jinsha156@gmail.com', 6112233445, NULL, 9, 0, 1),
(30, 'Nithinraj N M', '2001-10-11', 'Male', 'Asokapuram house', 'Patteri', 673017, 'Kozhikode', 8, 'nithin@gmail.com', 9834556777, NULL, 9, 0, 1),
(31, 'RAHOOF S', '2001-12-28', 'Male', 'Naalayikandathil house', 'Chelathoor', 673005, 'Kozhikode', 11, 'rahoof@gmail.com', 8755764343, NULL, 25, 0, 1),
(32, 'Shanidh L', '2002-02-02', 'Male', 'Ishaal house', 'Maalikulam', 673966, 'Kozhikode', 11, 'saanu@gmail.com', 8877665500, NULL, 25, 0, 1),
(33, 'Adith Mohan', '2005-11-20', 'Male', 'Yeyagthil house', 'PARAMBIL', 673000, 'Kozhikode', 11, 'adith234@gmail.com', 8129321423, NULL, 25, 0, 1),
(34, 'Dipin M', '2021-07-11', 'Male', 'Mangool  parambil house', 'Agasthyamuzhi', 673008, 'Kozhikode', 9, 'dipin@gmail.com', 9834556325, NULL, 0, 0, 1),
(37, 'Vineth F', '2001-08-30', 'Male', 'Daaritha janam house', 'Thamarasseri', 673998, 'Kozhikode', 9, 'vineth5432@gmail.com', 8877665599, NULL, 14, 0, 1),
(38, 'Dhanu W', '2000-02-22', 'Female', 'ERAKUDATHI HOUSE', 'OOMASSERI', 673889, 'Kozhikode', 9, 'dhanu23@gmail.com', 9112233445, NULL, 14, 0, 1),
(39, 'Sruthi O', '1995-02-17', 'Female', 'NAALI PARAMBIL HOUSE', 'VELLIPARAMB', 673008, 'Kozhikode', 10, 'sruthi111@gmail.com', 8755764310, NULL, 21, 0, 1),
(40, 'Megha B', '1994-01-04', 'Female', 'SAKUNTHALA HOUSE', 'KARANTHOOR', 673008, 'Kozhikode', 10, 'kavaya123@gmail.com', 9021436576, NULL, 21, 0, 1),
(41, 'Kavya C', '1994-07-01', 'Female', 'MANAKKADAVU', 'Medical college', 673017, 'Kozhikode', 10, 'kunju123@gmail.com', 9654366611, NULL, 21, 0, 1),
(42, 'Rosi', '1993-11-11', 'Female', 'Jaanaki patamnil', 'Bhatt road', 673998, 'Kozhikode', 8, 'rosi123@gmail.com', 9876540987, NULL, 11, 0, 1),
(43, 'MAALU JANVI', '1992-11-23', 'Female', 'ANUPARAMA HOUSE', 'VELLAYIL', 678999, 'Kozhikode', 8, 'maalu123@gmail.com', 8123212345, NULL, 11, 0, 1),
(44, 'Thaani ', '1991-09-23', 'Female', 'Deevadas house', 'Westhill', 673017, 'Kozhikode', 8, 'thaani100@gmail.com', 8129321433, NULL, 11, 0, 1),
(45, 'Nijisha A', '1990-12-22', 'Female', 'Maatuparambil house', 'Pantheerankavu', 673005, 'Kozhikode', 11, 'nijisha123456@gmail.com', 6655443322, NULL, 27, 0, 1),
(46, 'Sreelakshmi S', '1993-12-01', 'Female', 'Janavadha  colony house', 'poovatuparamb', 673003, 'Kozhikode', 11, 'sree333@gmail.com', 8129321466, NULL, 27, 0, 1),
(47, 'Jamsheena F', '1991-07-22', 'Female', 'Mangool house puthiyameet', 'perumanna', 673880, 'Kozhikode', 11, 'jamshee3334@gmail.com', 9192000000, NULL, 27, 0, 1),
(48, 'Sini I', '1994-02-18', 'Female', 'NARALIKULAM HOUSE', 'Adivaaram', 673005, 'Kozhikode', 9, 'sini1234@gmail.com', 8877660000, NULL, 16, 0, 1),
(49, 'Jaaziya N ', '1990-10-27', 'Female', 'Haarithoodu valavbu', 'OOMASSERI', 678977, 'Kozhikode', 9, 'jaaziya299@gmail.com', 9834550021, NULL, 16, 0, 1),
(50, 'Midhuna N ', '1994-12-30', 'Female', 'Harikrishnan house meetha', 'Manasseri', 673008, 'Kozhikode', 9, 'miduna12@gmail.com', 9834556666, NULL, 16, 0, 1),
(51, 'Faaziz', '1995-12-12', 'Male', 'Javaerithaduthil house', 'Kuttikkattoor', 670099, 'Kozhikode', 10, 'faz123@gmail.com', 6677889900, NULL, 20, 0, 1),
(52, 'Swarag F', '1993-11-29', 'Male', 'Melekkandi  valavil house', 'Anakuzhikkara', 673003, 'Kozhikode', 10, 'swaga1889@gmail.com', 8755761111, NULL, 20, 0, 1),
(53, 'Jithindas', '1988-05-01', 'Male', 'Mayanadu kuziyil house', 'Mayanad', 673008, 'Kozhikode', 10, 'jithin123@gmail.com', 9876543218, NULL, 20, 0, 1),
(54, 'Akshay Das', '1987-08-11', 'Male', 'Manakadavu veetil ', 'Puthiyappa vellayil', 678990, 'Kozhikode', 8, 'akshay123@gmail.com', 8765432134, NULL, 10, 0, 1),
(55, 'Aswin T', '1987-03-18', 'Male', 'Arakkinar house', 'Bhatt road', 673005, 'Kozhikode', 8, 'aswin111@gmail.com', 9746541993, NULL, 10, 0, 1),
(56, 'Akshay sreenivas', '1984-11-10', 'Male', 'APPOZATHU PATMBIL HOUSE', 'chevayoor', 673005, 'Kozhikode', 8, 'sreenivas67@gmail.com', 9898989898, NULL, 10, 0, 1),
(57, 'Yogeesh A', '1994-07-16', 'Male', 'Mangool house kadavu', 'Mavanad', 673998, 'Kozhikode', 11, 'ywes@gmail.com', 9834556781, NULL, 26, 0, 1),
(58, 'Suresh Babu', '1981-06-11', 'Male', 'Puthuvaaridathil meethal', 'Kaaruthil', 673017, 'Kozhikode', 11, 'suru123@gmail.com', 9754323456, NULL, 26, 0, 1),
(59, 'Rathnakaran', '1982-10-12', 'Male', 'Melekkandi house meethal', 'chelavoor', 673008, 'Kozhikode', 11, 'rathnan@gmail.com', 8755764322, NULL, 26, 0, 1),
(60, 'Anil kumar', '1992-10-01', 'Male', 'Ittapythau house', 'Thiruvambaadi', 673017, 'Kozhikode', 9, 'anil89@gmail.com', 7890564312, NULL, 15, 0, 1),
(61, 'Akash M', '1983-12-12', 'Male', 'Malabar building ', 'Mukkam', 673998, 'Kozhikode', 9, 'akash123@gmail.com', 9876543210, NULL, 15, 0, 1),
(62, 'Nithin N M', '1988-01-25', 'Male', 'NANGARI MEETHAL HOUSE', 'Mukkam', 678999, 'Kozhikode', 9, 'nithin003@gmail.com', 8765767676, NULL, 15, 0, 1),
(76, 'Safwan V', '2002-09-30', 'Male', 'valathel House', 'athikaripadi', 679581, 'Malappuram', 9, 'safwantrz@gmail.com', 7994367615, NULL, 15, 0, 1),
(77, 'Mohammed Aslam K', '1998-05-18', 'Male', 'Kallingal House', 'Edappal', 679584, 'Malappuram', 10, 'aslamkedpl12@gmail.com', 9567105860, NULL, NULL, 0, 1),
(113, 'Shijina K', '1998-08-12', 'Female', 'jayam nivas', 'kalladathode', 670008, 'Kannur', 9, 'shijina@gmail.com', 9567865234, NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_dance`
--

CREATE TABLE `student_dance` (
  `stud_dance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `dance_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_dance`
--

INSERT INTO `student_dance` (`stud_dance_id`, `student_id`, `dance_id`) VALUES
(3, 76, 1),
(4, 62, 1),
(5, 61, 2),
(6, 60, 1),
(7, 59, 1),
(8, 58, 2),
(9, 57, 1),
(10, 56, 1),
(11, 55, 1),
(12, 54, 1),
(13, 53, 2),
(14, 52, 2),
(15, 51, 1),
(16, 50, 2),
(17, 49, 1),
(18, 48, 1),
(19, 47, 1),
(20, 46, 2),
(21, 45, 1),
(22, 44, 1),
(23, 43, 2),
(24, 42, 2),
(25, 41, 1),
(26, 40, 2),
(27, 39, 1),
(28, 38, 2),
(29, 37, 1),
(30, 34, 1),
(31, 33, 2),
(32, 32, 1),
(33, 31, 1),
(34, 30, 2),
(35, 29, 1),
(36, 28, 2),
(37, 27, 1),
(38, 26, 2),
(39, 25, 1),
(40, 24, 2),
(41, 23, 2),
(42, 22, 1),
(43, 21, 2),
(44, 20, 1),
(45, 19, 2),
(46, 18, 2),
(47, 17, 2),
(48, 16, 1),
(49, 15, 1),
(50, 14, 1),
(51, 13, 1),
(52, 12, 1),
(53, 11, 2),
(54, 10, 1),
(55, 9, 2),
(56, 8, 1),
(57, 7, 1),
(58, 6, 2),
(59, 5, 1),
(60, 4, 2),
(61, 3, 2),
(62, 2, 2),
(63, 1, 1),
(65, 76, 2),
(66, 3, 1),
(67, 113, 1);

-- --------------------------------------------------------

--
-- Table structure for table `video_class`
--

CREATE TABLE `video_class` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(50) NOT NULL,
  `video_location` text NOT NULL,
  `batch_id` int(11) NOT NULL,
  `video_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_class`
--

INSERT INTO `video_class` (`video_id`, `video_title`, `video_location`, `batch_id`, `video_status`) VALUES
(1, 'Coca_Cola tu Dance  Cute Kids  Deepak Tulsyan Chor', 'videos/Coca_Cola tu Dance  Cute Kids  Deepak Tulsyan Choreography  G M Dance  Tony kakkar_360p.MP4', 11, 1),
(3, '#chunkathi #mechgirl.mp4', 'videos/#chunkathi #mechgirl.mp4', 10, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `fk_student_attendance` (`stud_id`),
  ADD KEY `fk_choreographer_attendance` (`choreo_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `fk_branch_batch` (`branch_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `choreographer`
--
ALTER TABLE `choreographer`
  ADD PRIMARY KEY (`choreographer_id`);

--
-- Indexes for table `choreographer_leave`
--
ALTER TABLE `choreographer_leave`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `fk_choreographer_leave` (`choreo_id`);

--
-- Indexes for table `dance`
--
ALTER TABLE `dance`
  ADD PRIMARY KEY (`dance_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`fees_id`),
  ADD KEY `fk_student_fees` (`student_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `personal_class`
--
ALTER TABLE `personal_class`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `sallary`
--
ALTER TABLE `sallary`
  ADD PRIMARY KEY (`sallary_id`),
  ADD KEY `fk_choreographer_sallary` (`choreo_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `fk_schedule_batch` (`batch_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `fk_student_branch` (`nearest_branch`);

--
-- Indexes for table `student_dance`
--
ALTER TABLE `student_dance`
  ADD PRIMARY KEY (`stud_dance_id`),
  ADD KEY `fk_student_id` (`student_id`),
  ADD KEY `fk_student_dance` (`dance_id`);

--
-- Indexes for table `video_class`
--
ALTER TABLE `video_class`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `fk_video_batch` (`batch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `choreographer`
--
ALTER TABLE `choreographer`
  MODIFY `choreographer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `choreographer_leave`
--
ALTER TABLE `choreographer_leave`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dance`
--
ALTER TABLE `dance`
  MODIFY `dance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `fees_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `personal_class`
--
ALTER TABLE `personal_class`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sallary`
--
ALTER TABLE `sallary`
  MODIFY `sallary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `student_dance`
--
ALTER TABLE `student_dance`
  MODIFY `stud_dance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `video_class`
--
ALTER TABLE `video_class`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `fk_choreographer_attendance` FOREIGN KEY (`choreo_id`) REFERENCES `choreographer` (`choreographer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_attendance` FOREIGN KEY (`stud_id`) REFERENCES `student` (`student_id`) ON UPDATE CASCADE;

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `fk_branch_batch` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON UPDATE CASCADE;

--
-- Constraints for table `choreographer_leave`
--
ALTER TABLE `choreographer_leave`
  ADD CONSTRAINT `fk_choreographer_leave` FOREIGN KEY (`choreo_id`) REFERENCES `choreographer` (`choreographer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `fk_student_fees` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON UPDATE CASCADE;

--
-- Constraints for table `sallary`
--
ALTER TABLE `sallary`
  ADD CONSTRAINT `fk_choreographer_sallary` FOREIGN KEY (`choreo_id`) REFERENCES `choreographer` (`choreographer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_schedule_batch` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_branch` FOREIGN KEY (`nearest_branch`) REFERENCES `branch` (`branch_id`) ON UPDATE CASCADE;

--
-- Constraints for table `student_dance`
--
ALTER TABLE `student_dance`
  ADD CONSTRAINT `fk_student_dance` FOREIGN KEY (`dance_id`) REFERENCES `dance` (`dance_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON UPDATE CASCADE;

--
-- Constraints for table `video_class`
--
ALTER TABLE `video_class`
  ADD CONSTRAINT `fk_video_batch` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
