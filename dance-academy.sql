-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 08:23 AM
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
(11, 'KSEB  building mangavu road', 673014, 'Pantheerankavu', 'Kozhikode');

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
(1, 'Suhail A K', '1998-10-28', 'Valathel house', 'MARANCHERY', 679581, 'Malappuram', 9633058949, 'suhu3515@gmail.com', 12000, 'Bsc Danceology');

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
(21, 'prjin34@gmail.com', 'STUDENT', '111111'),
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
(64, 'suhu3515@gmail.com', 'CHOREOGRAPHER', 'abcd123');

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
(1, 7, '12:00:00', '2021-04-20', 1),
(2, 7, '12:00:00', '2021-04-21', 1),
(3, 7, '10:00:00', '2021-04-21', 1),
(4, 9, '12:00:00', '2021-04-21', 1);

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
  `batch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_dob`, `student_gender`, `address`, `place`, `pincode`, `district`, `nearest_branch`, `email_address`, `mobile_number`, `profile_photo`, `batch_id`) VALUES
(1, 'Nandu', '2020-03-03', 'Male', 'vadakkel methal house may', 'mayanad', 673008, 'Kozhikode', 10, 'nandu03@gmail.com', 9746541990, NULL, 0),
(2, 'Manju N S ', '2015-06-01', 'Female', 'Ittapurathu house', 'mundikkalthazam', 673004, 'Kozhikode', 10, 'manjuns@gmail.com', 8129321420, NULL, 17),
(3, 'Ranju H', '2018-11-14', 'Male', 'puthiyakandi house', 'mayanad', 673008, 'Kozhikode', 10, 'ranjuh@gmail.com', 9865432567, NULL, 0),
(4, 'Ashwini S', '2014-11-05', 'Female', 'Melekkandi house', 'chevayoor', 673017, 'Kozhikode', 8, 'ashwini3456@gmail.com', 9654366654, NULL, 7),
(5, 'Harikrishnan', '2021-07-05', 'Male', 'varazikinnil house', 'kotooli', 673998, 'Kozhikode', 8, 'harikrishnan78@gmail.com', 9834556785, NULL, 0),
(6, 'Anusree M T', '2016-12-16', 'Female', 'MELEKKANDI HOUSE', 'KOVOOR', 673003, 'Kozhikode', 8, 'anusree1234@gmail.com', 98345676534, NULL, 7),
(7, 'Midhun N S', '2015-03-15', 'Male', 'Mangool house', 'chevayoor', 673005, 'Kozhikode', 11, 'midhunremesh67@gmail.com', 8755764312, NULL, 24),
(8, 'Mrithul Remesh', '2018-09-02', 'Male', 'vadakkelikathoor house', 'managavu', 673005, 'Kozhikode', 11, 'mrithul45@gmail.com', 9976443214, NULL, 0),
(9, 'Athul Ramesh N S', '2015-11-09', 'Male', 'melekkandathil house', 'palazhi', 673880, 'Kozhikode', 11, 'athul111@gmail.com', 7796543214, NULL, 24),
(10, 'Dilna V', '2015-06-21', 'Female', 'Harikrishnan house', 'Manasseri', 673001, 'Kozhikode', 9, 'dilnasajeesh11@gmail.com', 6543216785, NULL, 12),
(11, 'Anusha R', '2017-03-21', 'Female', 'Bargavan nilayam house', 'Kattangal', 673601, 'Kozhikode', 9, 'anusha5643@gmail.com', 8877665544, NULL, 12),
(12, 'Vishnu O', '2015-02-03', 'Male', 'Melekkandi varidathil hou', 'Mukkam', 673111, 'Kozhikode', 9, 'vishnusr@gmail.com', 9876544567, NULL, 12),
(13, 'Renjith G', '2011-05-08', 'Male', 'THAZEPARAMBIL HOUSE', 'Ozukkara', 673008, 'Kozhikode', 10, 'renjith7654@gmail.com', 9915643215, NULL, 17),
(14, 'Ashli E', '2010-02-02', 'Female', 'Malayithoodil house', 'Kalari', 673008, 'Kozhikode', 10, 'ashlisr@gmail.com', 8879898789, NULL, 18),
(15, 'Shiyaas Z', '2009-11-22', 'Male', 'JAVAN PARAMBIL HOUSE', 'MAUNDIKKALTHAZAM', 673007, 'Kozhikode', 10, 'shiyaas123@gmail.com', 8897766554, NULL, 18),
(16, 'Anand A', '2006-11-12', 'Male', 'Arakkinar house', 'chevayoor', 673990, 'Kozhikode', 8, 'anandfsa@gmail.com', 9876598765, NULL, 8),
(17, 'Anaswara V', '2007-05-06', 'Female', 'MALAKUNNUL HOUSE', 'MEDICAL MCOLLEHGE', 673008, 'Kozhikode', 8, 'anaswarav2345@gmail.com', 8769876543, NULL, 8),
(18, 'Princy  C', '2008-05-21', 'Female', 'NALUKANDATHIL HOUSE', 'VRINDAVAN COLONY', 67305, 'Kozhikode', 8, 'prijncyc234@gmail.com', 8798876678, NULL, 8),
(19, 'Jincy C', '2007-09-12', 'Female', 'Melekkandi varathil house', 'Mayavadu', 673765, 'Kozhikode', 11, 'jincy@gmail.com', 8877665544, NULL, 23),
(20, 'Prjin R', '2011-04-04', 'Male', 'Balusseri house ', 'Mangaavu', 673998, 'Kozhikode', 11, 'prjin34@gmail.com', 997008800, NULL, 24),
(21, 'Seethu H', '2009-01-05', 'Female', 'VARIDATHI HOUSE', 'cherikkampoyil', 679335, 'Kozhikode', 11, 'seethu@gmail.com', 9988443322, NULL, 23),
(22, 'Anusree B', '2011-03-01', 'Female', 'NANGARI MEETHAL HOUSE', 'Agasthyamuzhi', 678445, 'Kozhikode', 9, 'anusree1678@gmail.com', 6754321567, NULL, 13),
(23, 'Anagha N V', '2010-12-18', 'Female', 'Harikrishnan house', 'Manasseri', 6783354, 'Kozhikode', 9, 'anuss234@gmail.com', 8765498765, NULL, 13),
(24, 'Neethu', '2006-01-29', 'Female', 'Fahasil house', 'Mukkam', 673003, 'Kozhikode', 9, 'neethuamal2222@gmail.com', 9999789909, NULL, 14),
(25, 'Ashwini M', '1996-11-14', 'Female', 'Vadakel meethal house', 'Mayanad', 673008, 'Kozhikode', 10, 'ashwiniachu9020@gmail.com', 8129321420, NULL, 19),
(26, 'Abhinraj M', '1998-06-15', 'Male', 'BAALIKULAM HOUSE', 'Kalari', 673005, 'Kozhikode', 10, 'abinraj@gmail.com', 9988776655, NULL, 19),
(27, 'Jishnu M', '1998-12-23', 'Male', 'Mekkamdamadathil house', 'Mayanad', 673008, 'Kozhikode', 10, 'jishnu@gmail.com', 7657890876, NULL, 19),
(28, 'Abai raj', '1999-07-01', 'Male', 'Janavadha house', 'Chest hospital', 673008, 'Kozhikode', 8, 'abinn111@gmail.com', 9192939495, NULL, 9),
(29, 'Jinsha V', '2000-04-10', 'Female', 'NAALIKALATHIL HOUSE', 'Kaavu', 673003, 'Kozhikode', 8, 'jinsha156@gmail.com', 6112233445, NULL, 9),
(30, 'Nithinraj N M', '2001-10-11', 'Male', 'Asokapuram house', 'Patteri', 673017, 'Kozhikode', 8, 'nithin@gmail.com', 9834556777, NULL, 9),
(31, 'RAHOOF S', '2001-12-28', 'Male', 'Naalayikandathil house', 'Chelathoor', 673005, 'Kozhikode', 11, 'rahoof@gmail.com', 8755764343, NULL, 25),
(32, 'Shanidh L', '2002-02-02', 'Male', 'Ishaal house', 'Maalikulam', 673966, 'Kozhikode', 11, 'saanu@gmail.com', 8877665500, NULL, 25),
(33, 'Adith Mohan', '2005-11-20', 'Male', 'Yeyagthil house', 'PARAMBIL', 673000, 'Kozhikode', 11, 'adith234@gmail.com', 8129321423, NULL, 25),
(34, 'Dipin M', '2021-07-11', 'Male', 'Mangool  parambil house', 'Agasthyamuzhi', 673008, 'Kozhikode', 9, 'dipin@gmail.com', 9834556325, NULL, 0),
(37, 'Vineth F', '2001-08-30', 'Male', 'Daaritha janam house', 'Thamarasseri', 673998, 'Kozhikode', 9, 'vineth5432@gmail.com', 8877665599, NULL, 14),
(38, 'Dhanu W', '2000-02-22', 'Female', 'ERAKUDATHI HOUSE', 'OOMASSERI', 673889, 'Kozhikode', 9, 'dhanu23@gmail.com', 9112233445, NULL, 14),
(39, 'Sruthi O', '1995-02-17', 'Female', 'NAALI PARAMBIL HOUSE', 'VELLIPARAMB', 673008, 'Kozhikode', 10, 'sruthi111@gmail.com', 8755764310, NULL, 21),
(40, 'Megha B', '1994-01-04', 'Female', 'SAKUNTHALA HOUSE', 'KARANTHOOR', 673008, 'Kozhikode', 10, 'kavaya123@gmail.com', 9021436576, NULL, 21),
(41, 'Kavya C', '1994-07-01', 'Female', 'MANAKKADAVU', 'Medical college', 673017, 'Kozhikode', 10, 'kunju123@gmail.com', 9654366611, NULL, 21),
(42, 'Rosi', '1993-11-11', 'Female', 'Jaanaki patamnil', 'Bhatt road', 673998, 'Kozhikode', 8, 'rosi123@gmail.com', 9876540987, NULL, 11),
(43, 'MAALU JANVI', '1992-11-23', 'Female', 'ANUPARAMA HOUSE', 'VELLAYIL', 678999, 'Kozhikode', 8, 'maalu123@gmail.com', 8123212345, NULL, 11),
(44, 'Thaani ', '1991-09-23', 'Female', 'Deevadas house', 'Westhill', 673017, 'Kozhikode', 8, 'thaani100@gmail.com', 8129321433, NULL, 11),
(45, 'Nijisha A', '1990-12-22', 'Female', 'Maatuparambil house', 'Pantheerankavu', 673005, 'Kozhikode', 11, 'nijisha123456@gmail.com', 6655443322, NULL, 27),
(46, 'Sreelakshmi S', '1993-12-01', 'Female', 'Janavadha  colony house', 'poovatuparamb', 673003, 'Kozhikode', 11, 'sree333@gmail.com', 8129321466, NULL, 27),
(47, 'Jamsheena F', '1991-07-22', 'Female', 'Mangool house puthiyameet', 'perumanna', 673880, 'Kozhikode', 11, 'jamshee3334@gmail.com', 9192000000, NULL, 27),
(48, 'Sini I', '1994-02-18', 'Female', 'NARALIKULAM HOUSE', 'Adivaaram', 673005, 'Kozhikode', 9, 'sini1234@gmail.com', 8877660000, NULL, 16),
(49, 'Jaaziya N ', '1990-10-27', 'Female', 'Haarithoodu valavbu', 'OOMASSERI', 678977, 'Kozhikode', 9, 'jaaziya299@gmail.com', 9834550021, NULL, 16),
(50, 'Midhuna N ', '1994-12-30', 'Female', 'Harikrishnan house meetha', 'Manasseri', 673008, 'Kozhikode', 9, 'miduna12@gmail.com', 9834556666, NULL, 16),
(51, 'Faaziz', '1995-12-12', 'Male', 'Javaerithaduthil house', 'Kuttikkattoor', 670099, 'Kozhikode', 10, 'faz123@gmail.com', 6677889900, NULL, 20),
(52, 'Swarag F', '1993-11-29', 'Male', 'Melekkandi  valavil house', 'Anakuzhikkara', 673003, 'Kozhikode', 10, 'swaga1889@gmail.com', 8755761111, NULL, 20),
(53, 'Jithindas', '1988-05-01', 'Male', 'Mayanadu kuziyil house', 'Mayanad', 673008, 'Kozhikode', 10, 'jithin123@gmail.com', 9876543218, NULL, 20),
(54, 'Akshay Das', '1987-08-11', 'Male', 'Manakadavu veetil ', 'Puthiyappa vellayil', 678990, 'Kozhikode', 8, 'akshay123@gmail.com', 8765432134, NULL, 10),
(55, 'Aswin T', '1987-03-18', 'Male', 'Arakkinar house', 'Bhatt road', 673005, 'Kozhikode', 8, 'aswin111@gmail.com', 9746541993, NULL, 10),
(56, 'Akshay sreenivas', '1984-11-10', 'Male', 'APPOZATHU PATMBIL HOUSE', 'chevayoor', 673005, 'Kozhikode', 8, 'sreenivas67@gmail.com', 9898989898, NULL, 10),
(57, 'Yogeesh A', '1994-07-16', 'Male', 'Mangool house kadavu', 'Mavanad', 673998, 'Kozhikode', 11, 'ywes@gmail.com', 9834556781, NULL, 26),
(58, 'Suresh Babu', '1981-06-11', 'Male', 'Puthuvaaridathil meethal', 'Kaaruthil', 673017, 'Kozhikode', 11, 'suru123@gmail.com', 9754323456, NULL, 26),
(59, 'Rathnakaran', '1982-10-12', 'Male', 'Melekkandi house meethal', 'chelavoor', 673008, 'Kozhikode', 11, 'rathnan@gmail.com', 8755764322, NULL, 26),
(60, 'Anil kumar', '1992-10-01', 'Male', 'Ittapythau house', 'Thiruvambaadi', 673017, 'Kozhikode', 9, 'anil89@gmail.com', 7890564312, NULL, 15),
(61, 'Akash M', '1983-12-12', 'Male', 'Malabar building ', 'Mukkam', 673998, 'Kozhikode', 9, 'akash123@gmail.com', 9876543210, NULL, 15),
(62, 'Nithin N M', '1988-01-25', 'Male', 'NANGARI MEETHAL HOUSE', 'Mukkam', 678999, 'Kozhikode', 9, 'nithin003@gmail.com', 8765767676, NULL, 15);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

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
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `choreographer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `fk_branch_batch` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
