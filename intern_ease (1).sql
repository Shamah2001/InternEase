-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2023 at 06:28 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_ease`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdc_user`
--

DROP TABLE IF EXISTS `pdc_user`;
CREATE TABLE IF NOT EXISTS `pdc_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pdc_user`
--

INSERT INTO `pdc_user` (`id`, `email`, `first_name`, `last_name`, `password`) VALUES
(5, 'valar0829@gmail.com', 'Sharmini', 'Senthilrasa', '$2y$10$RTe1EJNwpdSpWUNg8XSHTuz1U6S53LpGPtUeiETBC14kIGDVp2D1S'),
(6, 'sayisenthil@gmail.com', 'Hamsayini', 'Senthilrasa', '$2y$10$O4/ZutT5UVEsrTZqck0hbO/bcUpOamvHENPCioVfQEDGA.EC50xp6'),
(7, 'saaraasivaa@gmail.com', 'Hamsayini', 'Senthilrasa', '$2y$10$cyMsdsKqalgxQOn.xg8NfOFuO67lRvCMFNfYLf4FC0AYHBCbgOYxy'),
(8, 'saii@gmail.com', 'Sai', 'Sen', '$2y$10$vcKzruffxpehPEIvwG66ne7EM8yti7zVquQZHnJUAs4MJ/.GjBl5O');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `index_no` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reg_no` (`reg_no`),
  UNIQUE KEY `index_no` (`index_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `first_name`, `last_name`, `password`, `reg_no`, `index_no`) VALUES
(1, 'sayisenthil@gmail.com', 'Sayini', 'Senthilrasa', '$2y$10$/m/3vMtgLU.CsU1y/tbpTeeq6QuCMGtCHpiGW7z.g6bWBuBUcjBR.', '2021/IS/033', '21020337'),
(4, 'nufdha@gmail.com', 'Nufdha', 'Macky', '$2y$10$YohQeA30MIJO6cQbExL5Ou6yemUJybf9RN1jKG9aMeKvWROzhz9VW', '2021/IS/069', '21020697'),
(5, 'gawesh@gmail.com', 'Gawesh', 'Geesara', '$2y$10$EMTVjlkrzkTU7Kk4x/rbW.MhFLERk/tCJtZ/i7Qx6W3Z6mYlFFkb.', '2021/IS/045', '21020452'),
(10, 'shamah@gmail.com', 'shamah', 'fathima', '$2y$10$nEKl.x9jzMJvci1UjaBc.OIpkd/cshbYsZ3rMgXf.GcJwGbdh8evi', '2021/IS/050', '2021/is/50'),
(11, 'vimuki@gmail.com', 'Vimuki', 'Sekar', '$2y$10$w8vGuZO26G1H4kVsA8iM4.mMda4cQJf2TZ/1D1tUC148oVPfTqUgi', '2021/IS/044', '21020445'),
(12, 'samudi@gmail.com', 'samudi', 'kasun', '$2y$10$mbTVI39eSq3XXDMT315W2uvLUatX39OZZ.4KuYTGyhSSFM5GgBSw.', '2021/IS/021', '21020211'),
(14, 'rumal@gmail.com', 'rumal', 'geethika', '$2y$10$XpY/yvEc6/CpzYH91NIqNOZC7K5OhRG/HVghV2aQ6AQckSfBpxQVK', '2021/IS/040', '21020401'),
(17, 'sarani@gmail.com', 'Sarani', 'Wikiramasinga', '$2y$10$.HpzQ.VMwLTw8ZG/ke.SB.msrWdq1zUrG3ZygK7wiA0dPHeYzOTMO', '2021/IS/012', '21020112'),
(19, 'binali@gmail.com', 'Binali', 'Ukwatte', '$2y$10$wE9/qtE.vn.xPelouesCoeOmsz26T6KlK5uBF3Le63xsQfe35Oeoi', '2021/IS/097', '21020971');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
