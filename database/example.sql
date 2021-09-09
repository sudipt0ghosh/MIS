-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2018 at 01:14 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `user_id`, `password`, `mobile`, `email`, `id`) VALUES
('ADMIN', 'admin', 'admin1234', 9034234587, 'admin.medas@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

DROP TABLE IF EXISTS `appoinment`;
CREATE TABLE IF NOT EXISTS `appoinment` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(50) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `patient_name`, `disease`, `doctor`, `date`) VALUES
(1, 'Sudipta Ghosh', 'Fever', 'Dr. B. Sarkar', '2018-12-04'),
(2, 'Debashis Ghosh', 'cold', 'Dr.A.Swarnaker', '2018-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `schedule` varchar(17) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `designation`, `department`, `hospital`, `schedule`) VALUES
(1, 'DR. ANGSHUMAN DE', 'M.B.B.S., M.D.', 'BIOCHEMISTRY', 'MMCH, LILA, MANMOHINI', '10.00am - 2.00pm'),
(2, 'Dr. Debdas Saha', 'MBBS, MD', 'Professor & Head(MMCH)', 'MMCH', 'NONE'),
(3, 'Prof (Dr) Krishnapada Mandal', 'Professor and HOD ', 'DENTISTRY', 'MMCH', '10.00am - 4.00pm'),
(4, 'Dr. Babrak Manuar', 'MBBS,MD', 'RMO Cum Clinical Tutor ', 'MMCH, MANMOHINI', '02.00pm - 4.pm'),
(5, 'Soumya Bhattacharya', 'M.D.(Respiratory Diseases) ', 'RESPIRATORY MEDICINE', 'MMCH,GLOCAL,LILA', '10.00am - 4.00pm'),
(6, 'Dr A K Bera', 'M.B.B.S.,M.D.', 'Orthopedic', 'BHP Hospital', '10.00am-2.00pm'),
(7, 'Dr D Dutta', 'M.B.B.S.,M.D.', 'Obstetrician-Gynecologist', 'LILA', '10.00am-2.00pm'),
(8, 'Dr. Debabrata Sarkar', 'M.D.(Respiratory Diseases) ', 'DENTISTRY', 'GLOCAL', '10.00am-2.00pm'),
(9, 'Dr. R. Jain', 'M.B.B.S.,M.D.', 'Neuro Psychiatrist', 'GLOCAL', '10.00am-2.00pm'),
(10, 'Dr.H.K.MONDAL ', 'M.B.B.S.,M.D.', 'ORTHOPEDICS', 'MMCH', '10.00am-2.00pm'),
(11, 'Dr.Shrabani Chaudhury', 'M.B.B.S.,M.D.', 'Obstetrician-Gynecologist', 'LALDIGHI NURSING HOME', '10.00am-8.00pm'),
(12, 'Dr Nirjhar Nath', 'M.D.(Respiratory Diseases) ', 'Ophthalmologist ', 'MMCH', '10.00am-2.00pm'),
(13, 'Dr Subhamaya Ghatak', 'M.B.B.S.,M.D.', 'Orthopedic', 'GLOCAL', '10.00am-2.00pm'),
(14, 'Dr Madhob Kumar Mandal', 'M.B.B.S.,M.D.', 'DENTISTRY', 'LILA', '10.00am-2.00pm'),
(15, 'Dr. Anindya Bhattacharyya', 'M.D.(Respiratory Diseases) ', 'Neuro Psychiatrist', 'LALDIGHI NURSING HOME', '10.00am-8.00pm');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Hname` varchar(100) NOT NULL,
  `Haddress` varchar(100) NOT NULL,
  `Himage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `Hname`, `Haddress`, `Himage`) VALUES
(1, 'Murshidabad Medical Collage & Hospital', '73, Station Road,Berhampore, West Bengal', 'images/mmch.jpg'),
(2, 'Manmohini Healthcare', '24/A/b/15, Kalikapur Road, Berhampore, West bengal', 'images/manmonini.jpg'),
(3, 'Susrut Eye Foundation & Research Centre', '25/1, Kalikapur Road, Berhampore, West Bengal', 'images/susrut.jpg'),
(4, 'Lila Hospital', 'Indraprastha, Berhampore, West Bengal', 'images/lila.jpg'),
(5, 'City Hospital', 'Raninagar, Chaltia, West Bengal', 'images/city.jpg'),
(6, 'Disha Hospital', '69/A, Laldighi, Berhampore, West Bengal', 'images/disha.png'),
(7, 'Gitaram Hospital', 'NH34, Radharghat GitaRam More Berhampore, Murshidabad, West Bengal', 'images/gitaram.jpg'),
(8, 'Glocal Hospital', 'Near Karbala Road, Chalpatti More, Raninagar, Radhikanagar, Berhampore, West Bengal', 'images/glocal.jpg'),
(9, 'LALDIGHI NURSING HOME', ' Tagore Rd, Gora Bazar, Berhampore, West Bengal', 'images/lnh.jpg'),
(10, 'JEEVANDEEP SPECIAL CARE & DIAGNOSTIC CENTRE', 'Talbagan, Bhakuri Village, Berhampore, West Bengal', 'images/jeevandip.jpg'),
(11, 'MEDICARE NURSING HOME', 'Hospital road, Berhampore, West Bengal', 'images/medicare.jpg'),
(12, 'Murshidabad Royal Institude Diadnostic & Polyclinic(MRI)', 'swarnamoyee, Berhampore, West Bengal', 'images/mri.jpeg'),
(13, 'RABINDRANATH THAKUR DIAGNOSTIC & MEDICAL CARE CENTRE', '30, C. R. Das Rd, Raninagar, Gora Bazar, Berhampore, West Bengal', 'images/rnt.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `password` varchar(33) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES
(1, 'Sudipta Ghosh', '12345', 'Sg98@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
