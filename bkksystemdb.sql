-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 02:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkksystemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesstype`
--

CREATE TABLE `accesstype` (
  `typeID` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accesstype`
--

INSERT INTO `accesstype` (`typeID`, `type`) VALUES
(1, 'AHLI'),
(2, 'PENGERUSI'),
(3, 'BENDAHARI'),
(4, 'AJK');

-- --------------------------------------------------------

--
-- Table structure for table `familydetails`
--

CREATE TABLE `familydetails` (
  `idFamilyMember` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Ic` varchar(14) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `idMember` int(11) DEFAULT NULL,
  `idRelationship` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `familydetails`
--

INSERT INTO `familydetails` (`idFamilyMember`, `name`, `Ic`, `birthdate`, `idMember`, `idRelationship`) VALUES
(2, 'Fuzyah binti Abdullah', '581204-08-5308', '1958-12-04', 2, 1),
(3, 'Natasha Hanum binti Zainudin', '901024-10-5404', '1990-10-24', 2, 3),
(4, 'Suraya binti Zainudin', '880515-06-5048', '1988-05-15', 2, 3),
(5, 'Rohani binti Sahrawi', '521220-08-6218', '1952-12-20', 3, 1),
(6, 'Rohaya binti Harun', '641123-10-6818', '1964-11-23', 4, 1),
(7, 'Izzati Syahirah binti Shaharuddin', '921109-10-5022', '1992-11-09', 4, 3),
(8, 'Nisaa Fatini binti Shaharuddin', '950715-10-5930', '1995-07-15', 4, 3),
(9, 'Muhammad Aqil bin Shaharuddin', '020104-10-1067', '2002-01-04', 4, 2),
(10, 'Muhammad Amir Rayyan bin Shaharuddin', '030113-10-1359', '2003-01-13', 4, 2),
(11, 'Ida Idris', '660425-01-5624', '1966-04-25', 5, 1),
(12, 'Irina Rafil', '000131-14-0530', '2000-01-31', 5, 3),
(13, 'Pon Mohamed Don', '460712-01-5022', '1946-07-12', 5, 6),
(14, 'Nadhirah binti Mohd Baharudin', '890508-01-5316', '1989-05-08', 6, 1),
(15, 'Masrani binti Hj Mokhtar', '560626-10-5062', '1956-06-26', 7, 1),
(16, 'Nur Maizatul Akmar binti Mat Nordi', '850923-06-5058', '1985-09-23', 7, 3),
(17, 'Muhammad Fawwaz Aizuddin bin Mat Nordi', '931111-10-5493', '1993-11-11', 7, 4),
(18, 'Hajah Ramlah binti Haji Bujang', '530717-04-5192', '1953-07-17', 8, 1),
(19, 'Sara Nazhatul Shima binti Shaharuddin', '890221-43-5380', '1989-02-21', 8, 3),
(20, 'Fatimah Wati binti Mohamad', '550405-10-5078', '1955-04-05', 9, 1),
(21, 'Norizan binti Mohamed Anuar', '520815-08-6204', '1952-08-15', 10, 1),
(22, 'Nurhida binti Ariffin', '790411-08-6400', '1979-04-11', 11, 1),
(23, 'Sufinur Allisha binti Shahrul Isha', '100328-10-1090', '2010-03-28', 11, 3),
(24, 'Shahadif Isha bin Shahrul Isha', '120106-10-1341', '2012-01-06', 11, 2),
(25, 'Ismail bin Hanapiah', '520705-08-5227', '1952-07-05', 11, 6),
(26, 'Shahanum binti Johari', '570625-07-6094', '1957-06-25', 11, 6),
(27, 'Shaharraz Isha bin Shahrul Isha', '151127-10-1641', '2015-11-27', 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `idFee` int(11) NOT NULL,
  `feeName` varchar(45) NOT NULL,
  `paymentDate` date DEFAULT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `transactionNo` varchar(45) DEFAULT NULL,
  `receiptNo` varchar(45) DEFAULT NULL,
  `idMember` int(11) DEFAULT NULL,
  `paymentID` int(11) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`idFee`, `feeName`, `paymentDate`, `amount`, `transactionNo`, `receiptNo`, `idMember`, `paymentID`, `statusID`) VALUES
(1, 'Yuran Pendaftaran', '2020-10-30', '170.00', NULL, '1010100', 2, 10, 1),
(2, 'Yuran Pendaftaran', NULL, '170.00', NULL, NULL, 3, NULL, 2),
(3, 'Yuran Pendaftaran', '2020-11-01', '170.00', '78109234', '10101002', 4, 20, 1),
(4, 'Yuran Pendaftaran', '2020-12-06', '0.00', 'null', '', 5, 10, 1),
(5, 'Yuran Pendaftaran', '2020-12-10', '170.00', '78023471', '1010105', 6, 20, 1),
(6, 'Yuran Pendaftaran', '0000-00-00', '0.00', 'null', 'null', 13, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membersdetail`
--

CREATE TABLE `membersdetail` (
  `idMember` int(11) NOT NULL,
  `noAhli` int(11) DEFAULT NULL,
  `tokenID` varchar(45) NOT NULL,
  `memberName` varchar(45) NOT NULL,
  `memberIC` varchar(14) DEFAULT NULL,
  `phoneNum` varchar(14) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `homeNum` varchar(14) DEFAULT NULL,
  `registeredDate` datetime DEFAULT NULL,
  `idStatusReg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membersdetail`
--

INSERT INTO `membersdetail` (`idMember`, `noAhli`, `tokenID`, `memberName`, `memberIC`, `phoneNum`, `email`, `address1`, `address2`, `postcode`, `city`, `state`, `homeNum`, `registeredDate`, `idStatusReg`) VALUES
(2, 1000, 'a9b7ba70783b617e9998dc4dd82eb3c5', 'Zainudin bin Abd Aziz', '560515-08-5011', '011-61601011', NULL, '7, Jalan Silat Lincah 11/3E', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', NULL, '2020-10-23 10:53:00', 'A'),
(3, 1001, 'b8c37e33defde51cf91e1e03e51657da', 'Mohamad Saber bin Mian', '420228-05-5173', '019-6410242', NULL, '45, Jalan Tepak 11/8', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', '03-55191948', '2020-10-23 13:17:42', 'A'),
(4, 1002, 'fba9d88164f3e2d9109ee770223212a0', 'Shaharuddin bin Idrus', '600910-10-5637', '019-2123938', 'shaharuddinidrus60@gmail.com', '9, Jalan Wau Tujuh 11/1G', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', '03-55231152', '2020-10-23 16:52:45', 'A'),
(5, 1003, 'aa68c75c4a77c87f97fb686b2f068676', 'Rafil Elyas', '661006-10-6059', '016-5535556', 'idaidris@mac.com', '8, Jalan Temenggung 12/6', 'Seksyen 12', '40000', 'Shah Alam', 'Selangor', NULL, '2020-10-24 00:11:20', 'A'),
(6, 1004, 'fed33392d3a48aa149a87a38b875ba4a', 'Muhammad Fariz Ihtisyamuddin bin Mat Nordi', '880508-06-5381', '018-3598588', 'f.ihtisyam@gmail.com', '20, Jalan Guli 11/1B', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', NULL, '2020-10-24 00:14:06', 'A'),
(7, 1005, '2387337ba1e0b0249ba90f55b2ba2521', 'Mat Nordi bin Awang', '550927-11-5185', '013-3552755', 'nordi.awg181@gmail.com', '20, Jalan Guli 11/1B', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', '03-55112755', '2020-10-24 00:43:50', 'A'),
(8, 1006, '9246444d94f081e3549803b928260f56', 'Haji Shaharuddin bin Mohd Jani', '501229-10-5579', '019-6622970', 'mj.saha@yahoo.com', '40, Jalan Semerit 11/10', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', '03-55240650', '2020-10-24 05:05:37', 'A'),
(9, 1007, 'd7322ed717dedf1eb4e6e52a37ea7bcd', 'Mohd Suradi bin Imam @ Hj Mohd Yasin', '510802-10-5745', '012-3830995', 'Msuradiyasin@yahoo.com', '5, Jalan Beduk 11/5B', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', '03-55243483', '2020-10-24 06:18:35', 'A'),
(10, 1008, '1587965fb4d4b5afe8428a4a024feb0d', 'Idris bin Mohashim', '490804-08-5201', '011-10654849', 'idris49ar@gmail.com', '14, Jalan Canggung 11/2F', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', NULL, '2020-10-24 06:55:20', 'A'),
(11, 1009, '31b3b31a1c2f8a370206f111127c0dbd', 'Shahrul Isha bin Ismail', '780509-10-5471', '012-2379607', 'schaoyz@gmail.com', '10, Jalan Serunai 11/5H', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', '03-58893208', '2020-10-24 07:14:40', 'A'),
(12, 1010, '1e48c4420b7073bc11916c6c1de226bb', 'Dato Sri Mustaffa bin Abd Rahman', '600922-06-5353', '012-3995666', 'armustaffa@gmail.com', '15, Jalan Badik 11/4', 'Seksyen 11', '40200', 'Shah Alam', 'Selangor', '03-58877666', '2020-10-24 07:18:55', 'A'),
(13, 1011, '7f975a56c761db6506eca0b37ce6ec87', 'Atiqah Basirah', '020730-10-0184', '011-56658406', 'atiqbasirah20023007@gmail.com', '22, Jalan Guli 11/1B', 'Seksyen 11', '40100', 'Shah Alam', 'Selangor', '03-55237854', '2022-07-09 21:01:11', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `paymentstatus`
--

CREATE TABLE `paymentstatus` (
  `statusID` int(11) NOT NULL,
  `statusName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentstatus`
--

INSERT INTO `paymentstatus` (`statusID`, `statusName`) VALUES
(1, 'SUDAH BAYAR'),
(2, 'BELUM BAYAR');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttype`
--

CREATE TABLE `paymenttype` (
  `paymentID` int(11) NOT NULL,
  `paymentName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymenttype`
--

INSERT INTO `paymenttype` (`paymentID`, `paymentName`) VALUES
(10, 'TUNAI'),
(20, 'TRANSAKSI ATAS TALIAN');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE `relationship` (
  `idRelationship` int(11) NOT NULL,
  `relType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`idRelationship`, `relType`) VALUES
(1, 'Isteri/Isteri-Isteri'),
(2, 'Anak Lelaki bawah 25 tahun'),
(3, 'Anak Perempuan yang belum berkahwin'),
(4, 'Anak OKU (tiada had umur)'),
(5, 'Cucu yatim/piatu'),
(6, 'Ibu/Bapa Ahli atau Ibu/Bapa Mertua Ahli');

-- --------------------------------------------------------

--
-- Table structure for table `statusregistration`
--

CREATE TABLE `statusregistration` (
  `idStatusReg` char(1) NOT NULL,
  `statusType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statusregistration`
--

INSERT INTO `statusregistration` (`idStatusReg`, `statusType`) VALUES
('A', 'APPROVED'),
('P', 'PENDING'),
('R', 'REJECTED');

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE `systemuser` (
  `userId` varchar(14) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userPassword` varchar(45) NOT NULL,
  `typeID` int(11) NOT NULL,
  `idMember` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`userId`, `userName`, `userPassword`, `typeID`, `idMember`) VALUES
('1001', 'atiq', '3007', 2, 13),
('1002', 'mai', '6802', 3, NULL),
('1003', 'nasha', '0616', 4, NULL),
('1004', 'Mohamad Saber bin Mian', '1501', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesstype`
--
ALTER TABLE `accesstype`
  ADD PRIMARY KEY (`typeID`);

--
-- Indexes for table `familydetails`
--
ALTER TABLE `familydetails`
  ADD PRIMARY KEY (`idFamilyMember`),
  ADD KEY `idMember` (`idMember`),
  ADD KEY `idRelationship` (`idRelationship`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`idFee`),
  ADD KEY `idMember` (`idMember`),
  ADD KEY `paymentID` (`paymentID`),
  ADD KEY `statusID` (`statusID`);

--
-- Indexes for table `membersdetail`
--
ALTER TABLE `membersdetail`
  ADD PRIMARY KEY (`idMember`),
  ADD KEY `idStatusReg` (`idStatusReg`);

--
-- Indexes for table `paymentstatus`
--
ALTER TABLE `paymentstatus`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `paymenttype`
--
ALTER TABLE `paymenttype`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`idRelationship`);

--
-- Indexes for table `statusregistration`
--
ALTER TABLE `statusregistration`
  ADD PRIMARY KEY (`idStatusReg`);

--
-- Indexes for table `systemuser`
--
ALTER TABLE `systemuser`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `typeID` (`typeID`),
  ADD KEY `idMember` (`idMember`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `familydetails`
--
ALTER TABLE `familydetails`
  MODIFY `idFamilyMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `idFee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `membersdetail`
--
ALTER TABLE `membersdetail`
  MODIFY `idMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `familydetails`
--
ALTER TABLE `familydetails`
  ADD CONSTRAINT `familydetails_ibfk_1` FOREIGN KEY (`idMember`) REFERENCES `membersdetail` (`idmember`),
  ADD CONSTRAINT `familydetails_ibfk_2` FOREIGN KEY (`idRelationship`) REFERENCES `relationship` (`idRelationship`);

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`idMember`) REFERENCES `membersdetail` (`idmember`),
  ADD CONSTRAINT `fee_ibfk_2` FOREIGN KEY (`paymentID`) REFERENCES `paymenttype` (`paymentID`),
  ADD CONSTRAINT `fee_ibfk_3` FOREIGN KEY (`statusID`) REFERENCES `paymentstatus` (`statusID`);

--
-- Constraints for table `membersdetail`
--
ALTER TABLE `membersdetail`
  ADD CONSTRAINT `membersdetail_ibfk_1` FOREIGN KEY (`idStatusReg`) REFERENCES `statusregistration` (`idStatusReg`);

--
-- Constraints for table `systemuser`
--
ALTER TABLE `systemuser`
  ADD CONSTRAINT `systemuser_ibfk_1` FOREIGN KEY (`typeID`) REFERENCES `accesstype` (`typeID`),
  ADD CONSTRAINT `systemuser_ibfk_2` FOREIGN KEY (`idMember`) REFERENCES `membersdetail` (`idmember`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
