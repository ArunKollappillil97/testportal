-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2019 at 01:28 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11518296_educhamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `codeigniter_quiz`
--

CREATE TABLE `codeigniter_quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `choice1` varchar(100) NOT NULL,
  `choice2` varchar(100) NOT NULL,
  `choice3` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codeigniter_quiz`
--

INSERT INTO `codeigniter_quiz` (`id`, `question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'What should be added to -5/4 to get -1?', '-1/4', '1', '-3/4', '1/4'),
(2, 'What should be subtracted from -5/4 to get -1?', '1/4', '1', '-3/4', '-1/4'),
(3, 'Which of the following is the identity element?', '1', '-1', 'None of these', '0'),
(4, 'Which of the following is the Multiplicative identity for rational numbers?', '-1', '0', 'None of these', '1'),
(5, 'Which of the following is neither appositive nor a negative rational number?', '1', 'Such a rational number doesn\'t exist', 'None of these', '0'),
(6, 'Which of the following lies between 0 and -1?', '0', '-3', '4/3', '-2/3'),
(7, 'Which of the following is the product of 7/8 and -4/21?', '1/12', '-16/63', '-147/16', '-1/6'),
(8, 'Which of the following is the product of (-7/8) and 4/21?', '12', '-63/16', '-16/147', '-1/6'),
(9, 'Which of the following is the reciprocal of the reciprocal of a rational number?', '-1', '1', '0', 'The number itself'),
(10, 'Which of the following is the numerical coefficient of -5xy?', '5', '-x', '-y', '-5'),
(11, 'pqr is what type of polynomial?', 'Binomial', 'Trimonial', 'None of these', 'Monomial'),
(12, 'On what a discount is calculated?', 'S.P.', 'C.P.', 'None of these', 'Market price'),
(13, 'On which figure the VAT of a product is calculated?', 'C.P.', 'Market price', 'None of these', 'S.P.'),
(14, 'If an article sold for Rs 100 then there is a gain of Rs 20, which of the following is the gain percent?', '22%', '20%', '16%', '25%'),
(15, 'What should be the rate of interest per annum if interest is calculated quarterly?', 'reduced to half', 'is doubled', 'becomes four times', 'reduced to one fourth'),
(16, 'If an increase in one quantity brings about a corresponding decrease in the other and ice versa, then the two quantities vary:', 'directly', 'sometimes directly and sometimes inversely', 'none of these', 'inversely'),
(17, 'Which of the following has its area and perimeter numerically equal?', 'an equilateral triangle of side 1 cm', 'a square of side 1 cm', 'a regular pentagon of side 1 cm', 'a square of side 1 cm'),
(18, 'If M is a number such that M ÷ 5 gives a remainder of 1, then which of the following is the one’s digit of M?', '1', '6', 'none of these', '1 or 6'),
(19, 'A number divisible by 9 is also divisible by:', '6', '11', 'none of these', '3'),
(20, 'In the equation 3x = 4-x, transposing -x to LHS we get', '3x - x = 4', '-3x + x = 4', '-3x - x = 4', '3x + x = 4');

-- --------------------------------------------------------

--
-- Table structure for table `codeigniter_register`
--

CREATE TABLE `codeigniter_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codeigniter_register`
--

INSERT INTO `codeigniter_register` (`id`, `name`, `email`, `password`) VALUES
(37, 'Abhilash', 'bhlshn9@gmail.com', 'BABSfwAWAD1UQlIVBxcDCFQ3U2QGcAdZCkFQFwZ6'),
(38, 'Abhilash', 'abhilashnambiar@pm.me', 'AmABaFA3UjIEZAE6BWYFZA=='),
(39, 'Abhilash', 'abhilash.alora@gmail.com', 'ASMHK1JjACZScwdz'),
(40, 'Abhilash', 'abhilash@gmail.com', 'CCpWegU0ACZQcQ15'),
(41, 'Sandeep', 'konar@gmail.com', 'CWtTOgdgB2cGZgE6AGNSMw=='),
(42, 'Pavan', 'pavan@gmail.com', 'v4/zAquO4rJ+LNRegguepviVOB4cjV992EigS2KIGLItGXxeqityouSAI2o9gdPM2OyzZ4ZFXd8hdMiEyTQqQA=='),
(43, 'Soham', 'soham@gmail.com', '5A7a7HMSwC+S5xJDRyq+deSK5TXKLajTaqwFcyIjokxiQ/SAvjp+JjXQaBqsgf+5WWGvM0x1JjBO6Di2DHOf1A=='),
(44, 'Mitaanshu', 'abc@gmail.com', '1QXk5Z+vZYKrduq7KT/ZNAkTW1vB0iUaYcdVPDmkoQPcU63oYH98NiumKIT1GU5z5VZWOYSgLLOn94UAxVEjdQ=='),
(45, 'Nikhil', 'Nairnikhil8@gmail.com', 'iVf7OCv7DIB8r5zJYlWZXf5HAemr2Z7I8UkGLGYdnnuvLLlCVojDDY6SD22bLKYsana0pHwusaMmz1/VPW62mQ==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codeigniter_quiz`
--
ALTER TABLE `codeigniter_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codeigniter_register`
--
ALTER TABLE `codeigniter_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codeigniter_quiz`
--
ALTER TABLE `codeigniter_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `codeigniter_register`
--
ALTER TABLE `codeigniter_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
