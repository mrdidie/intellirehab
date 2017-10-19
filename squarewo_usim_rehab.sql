-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 11, 2017 at 12:11 PM
-- Server version: 5.6.33
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `squarewo_usim_rehab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `iduser` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `date_appointment` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `iduser`, `keterangan`, `date_appointment`) VALUES
(1, 6, 'makan', '2017-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clinical23`
--

CREATE TABLE IF NOT EXISTS `tbl_clinical23` (
  `idclinical` int(10) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_rn` varchar(15) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `value` int(1) NOT NULL,
  PRIMARY KEY (`idclinical`),
  KEY `pat_researchID` (`pat_researchID`,`session`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `tbl_clinical23`
--

INSERT INTO `tbl_clinical23` (`idclinical`, `idtherapy`, `session`, `pat_rn`, `pat_researchID`, `value`) VALUES
(44, 0, 1, '', 'RID00004', 1),
(45, 0, 1, '', 'RID00004', 3),
(46, 0, 1, '', 'RID00004', 5),
(47, 0, 1, '', 'RID00004', 0),
(48, 0, 1, '', 'RID00001', 1),
(49, 0, 1, '', 'RID00001', 0),
(63, 0, 1, '', 'RID00002', 0),
(64, 0, 1, '', 'RID00005', 1),
(65, 0, 1, '', 'RID00005', 2),
(66, 0, 1, '', 'RID00005', 3),
(67, 0, 1, '', 'RID00005', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clinical29`
--

CREATE TABLE IF NOT EXISTS `tbl_clinical29` (
  `idclinical` int(5) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_rn` varchar(15) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `value` int(1) NOT NULL,
  PRIMARY KEY (`idclinical`),
  KEY `session` (`session`,`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_clinical29`
--

INSERT INTO `tbl_clinical29` (`idclinical`, `idtherapy`, `session`, `pat_rn`, `pat_researchID`, `value`) VALUES
(2, 0, 1, '', 'RID00002', 1),
(3, 0, 1, '', 'RID00003', 1),
(4, 0, 1, '', 'RID00003', 0),
(5, 0, 1, '', 'RID00004', 2),
(6, 0, 1, '', 'RID00004', 4),
(7, 0, 1, '', 'RID00004', 0),
(11, 0, 1, '', 'RID00001', 1),
(12, 0, 1, '', 'RID00001', 5),
(13, 0, 1, '', 'RID00001', 0),
(17, 0, 1, '', 'RID00005', 1),
(18, 0, 1, '', 'RID00005', 2),
(19, 0, 1, '', 'RID00005', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clinicalD13_D28`
--

CREATE TABLE IF NOT EXISTS `tbl_clinicalD13_D28` (
  `idclinical` int(10) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_rn` varchar(15) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `cli_13` int(1) DEFAULT NULL,
  `cli_14` int(1) DEFAULT NULL,
  `cli_15` int(1) DEFAULT NULL,
  `cli_16` int(1) DEFAULT NULL,
  `cli_17` int(1) DEFAULT NULL,
  `cli_18` date NOT NULL DEFAULT '0000-00-00',
  `cli_19` date NOT NULL DEFAULT '0000-00-00',
  `cli_19FollowUp` date NOT NULL DEFAULT '0000-00-00',
  `cli_20` date NOT NULL DEFAULT '0000-00-00',
  `cli_21` date NOT NULL DEFAULT '0000-00-00',
  `cli_22` int(1) DEFAULT NULL,
  `cli_24` int(1) DEFAULT NULL,
  `cli_25` int(1) DEFAULT NULL,
  `cli_26` int(1) DEFAULT NULL,
  `cli_BarthelBowel` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelFeeding` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelBladder` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelDressing` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelGrooming` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelMobility` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelToilet` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelTransfer` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelBathing` int(1) NOT NULL DEFAULT '9',
  `cli_BarthelStairs` int(1) NOT NULL DEFAULT '9',
  `cli_27` int(1) DEFAULT NULL,
  `cli_27a` int(1) DEFAULT NULL,
  `cli_27b` int(1) DEFAULT NULL,
  `cli_27c` int(1) DEFAULT NULL,
  `cli_28a` int(1) DEFAULT NULL,
  `cli_28b` int(1) DEFAULT NULL,
  `cli_28c` int(1) DEFAULT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `edit_by` int(5) NOT NULL,
  `edit_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_status` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`idclinical`),
  UNIQUE KEY `idclinical` (`idclinical`),
  KEY `session` (`session`,`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_clinicalD13_D28`
--

INSERT INTO `tbl_clinicalD13_D28` (`idclinical`, `idtherapy`, `session`, `pat_rn`, `pat_researchID`, `cli_13`, `cli_14`, `cli_15`, `cli_16`, `cli_17`, `cli_18`, `cli_19`, `cli_19FollowUp`, `cli_20`, `cli_21`, `cli_22`, `cli_24`, `cli_25`, `cli_26`, `cli_BarthelBowel`, `cli_BarthelFeeding`, `cli_BarthelBladder`, `cli_BarthelDressing`, `cli_BarthelGrooming`, `cli_BarthelMobility`, `cli_BarthelToilet`, `cli_BarthelTransfer`, `cli_BarthelBathing`, `cli_BarthelStairs`, `cli_27`, `cli_27a`, `cli_27b`, `cli_27c`, `cli_28a`, `cli_28b`, `cli_28c`, `saved_by`, `saved_date`, `edit_by`, `edit_date`, `approval`, `approval_status`, `approval_by`, `approval_date`) VALUES
(1, 0, 1, '', 'RID00001', 1, 1, 0, 0, 0, '0000-00-00', '2017-02-21', '2017-03-21', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 9, 9, 9, 9, 9, 9, 9, 0, 0, 0, 2, 9, 9, 9, 9, 0, 9, 6, '2017-03-16', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(2, 0, 1, '', 'RID00004', 1, 1, 1, 1, 1, '2017-03-15', '2017-03-16', '2017-04-13', '0000-00-00', '0000-00-00', 1, 1, 1, 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 6, '2017-03-15', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(3, 0, 1, '', 'RID00002', 0, 0, 0, 0, 0, '0000-00-00', '2017-03-16', '2017-04-13', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 0, 9, 6, '2017-03-16', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(4, 0, 1, '', 'RID00005', 1, 1, 2, 0, 0, '2017-03-17', '2017-03-16', '2017-04-13', '2017-03-01', '2017-02-01', 1, 1, 1, 1, 0, 9, 0, 9, 0, 9, 0, 9, 0, 9, 1, 1, 1, 1, 1, 1, 1, 6, '2017-03-16', 0, '0000-00-00', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clinicalD29_D41`
--

CREATE TABLE IF NOT EXISTS `tbl_clinicalD29_D41` (
  `idclinical` int(5) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_rn` varchar(15) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `cli_30` int(1) DEFAULT NULL,
  `cli_31` int(1) DEFAULT NULL,
  `cli_32` int(1) DEFAULT NULL,
  `cli_33` int(1) DEFAULT NULL,
  `cli_34` int(1) DEFAULT NULL,
  `cli_35` int(1) DEFAULT NULL,
  `cli_36` int(1) DEFAULT NULL,
  `cli_37a` int(1) DEFAULT NULL,
  `cli_37b` int(1) DEFAULT NULL,
  `cli_37c` int(1) DEFAULT NULL,
  `cli_37d` int(1) DEFAULT NULL,
  `cli_37e` int(1) DEFAULT NULL,
  `cli_38` int(11) DEFAULT NULL,
  `cli_38Hour` varchar(10) DEFAULT NULL,
  `cli_39` int(1) DEFAULT NULL,
  `cli_40a` int(1) DEFAULT NULL,
  `cli_40a1` int(1) DEFAULT NULL,
  `cli_40a2` int(1) DEFAULT NULL,
  `cli_40b` int(1) DEFAULT NULL,
  `cli_40b1` int(1) DEFAULT NULL,
  `cli_40b2` int(1) DEFAULT NULL,
  `cli_40b3` int(1) DEFAULT NULL,
  `cli_40c` int(1) DEFAULT NULL,
  `cli_40d` int(1) DEFAULT NULL,
  `cli_40e` int(1) DEFAULT NULL,
  `cli_41` int(1) DEFAULT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `edit_by` int(5) NOT NULL,
  `edit_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_status` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`idclinical`),
  KEY `session` (`session`,`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_clinicalD29_D41`
--

INSERT INTO `tbl_clinicalD29_D41` (`idclinical`, `idtherapy`, `session`, `pat_rn`, `pat_researchID`, `cli_30`, `cli_31`, `cli_32`, `cli_33`, `cli_34`, `cli_35`, `cli_36`, `cli_37a`, `cli_37b`, `cli_37c`, `cli_37d`, `cli_37e`, `cli_38`, `cli_38Hour`, `cli_39`, `cli_40a`, `cli_40a1`, `cli_40a2`, `cli_40b`, `cli_40b1`, `cli_40b2`, `cli_40b3`, `cli_40c`, `cli_40d`, `cli_40e`, `cli_41`, `saved_by`, `saved_date`, `edit_by`, `edit_date`, `approval`, `approval_status`, `approval_by`, `approval_date`) VALUES
(1, 0, 1, '', 'RID00002', 2, 0, 0, 3, 0, 0, 0, 3, 3, 2, 1, 3, 4, NULL, 3, 2, 1, 1, 2, 2, 2, 2, 2, 2, 1, 1, 6, '2017-02-24', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(2, 0, 1, '', 'RID00003', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, '2017-03-15', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(3, 0, 1, '', 'RID00004', 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 2, 2, 0, 0, 1, 2, 1, 2, 1, 2, 2, 1, 6, '2017-03-15', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(4, 0, 1, '', 'RID00001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, '2017-03-16', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(5, 0, 1, '', 'RID00005', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 6, '2017-03-16', 0, '0000-00-00', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clinicalD42_D52`
--

CREATE TABLE IF NOT EXISTS `tbl_clinicalD42_D52` (
  `idclinical` int(10) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_rn` varchar(15) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `cli_42` int(1) DEFAULT NULL,
  `cli_43` int(1) DEFAULT NULL,
  `cli_43a` int(1) DEFAULT NULL,
  `cli_44` int(1) DEFAULT NULL,
  `cli_44a` int(1) DEFAULT NULL,
  `cli_44b` int(1) DEFAULT NULL,
  `cli_44c` int(1) DEFAULT NULL,
  `cli_44d` int(1) DEFAULT NULL,
  `cli_45` int(1) DEFAULT NULL,
  `cli_45a` int(1) DEFAULT NULL,
  `cli_45b` int(1) DEFAULT NULL,
  `cli_46` int(1) DEFAULT NULL,
  `cli_47` int(1) DEFAULT NULL,
  `cli_48` int(1) DEFAULT NULL,
  `cli_48Desc` varchar(50) NOT NULL,
  `cli_49` int(1) DEFAULT NULL,
  `cli_50a` int(1) DEFAULT NULL,
  `cli_50b` int(1) DEFAULT NULL,
  `cli_50c` int(1) DEFAULT NULL,
  `cli_50d` int(1) DEFAULT NULL,
  `cli_50e` int(1) DEFAULT NULL,
  `cli_50f` int(1) DEFAULT NULL,
  `cli_51` int(1) DEFAULT NULL,
  `cli_51a` int(1) DEFAULT NULL,
  `cli_51b` int(1) DEFAULT NULL,
  `cli_51c` int(1) DEFAULT NULL,
  `cli_52` int(1) DEFAULT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `edit_by` int(5) NOT NULL,
  `edit_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_status` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`idclinical`),
  KEY `session` (`session`,`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_clinicalD42_D52`
--

INSERT INTO `tbl_clinicalD42_D52` (`idclinical`, `idtherapy`, `session`, `pat_rn`, `pat_researchID`, `cli_42`, `cli_43`, `cli_43a`, `cli_44`, `cli_44a`, `cli_44b`, `cli_44c`, `cli_44d`, `cli_45`, `cli_45a`, `cli_45b`, `cli_46`, `cli_47`, `cli_48`, `cli_48Desc`, `cli_49`, `cli_50a`, `cli_50b`, `cli_50c`, `cli_50d`, `cli_50e`, `cli_50f`, `cli_51`, `cli_51a`, `cli_51b`, `cli_51c`, `cli_52`, `saved_by`, `saved_date`, `edit_by`, `edit_date`, `approval`, `approval_status`, `approval_by`, `approval_date`) VALUES
(1, 0, 1, '', 'RID00002', 2, 2, 0, 2, 2, 2, 3, 3, 2, 3, 4, 3, 3, 3, '', 5, 3, 3, 4, 2, 3, 3, 3, 0, 0, 0, 3, 6, '2017-02-24', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(2, 0, 1, '', 'RID00004', 1, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 2, 2, 1, '', 2, 2, 2, 3, 2, 3, 2, 2, 0, 0, 0, 2, 6, '2017-03-15', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(3, 0, 1, '', 'RID00001', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, '2017-03-16', 0, '0000-00-00', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_count`
--

CREATE TABLE IF NOT EXISTS `tbl_count` (
  `description` varchar(50) NOT NULL,
  `counter` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_count`
--

INSERT INTO `tbl_count` (`description`, `counter`) VALUES
('research_id', 6),
('session', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnostic`
--

CREATE TABLE IF NOT EXISTS `tbl_diagnostic` (
  `iddiagnostic` int(10) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `diag_53` int(1) DEFAULT NULL,
  `diag_53Desc` varchar(20) NOT NULL,
  `diag_54` int(1) DEFAULT NULL,
  `diag_55` int(1) DEFAULT NULL,
  `diag_56` int(1) DEFAULT NULL,
  `diag_58` int(1) DEFAULT NULL,
  `diag_58a` int(1) DEFAULT NULL,
  `diag_58Desc` varchar(20) NOT NULL,
  `diag_59` int(1) DEFAULT NULL,
  `diag_60a` int(1) DEFAULT NULL,
  `diag_60b` int(1) DEFAULT NULL,
  `diag_60c` int(1) DEFAULT NULL,
  `diag_611a` int(1) DEFAULT NULL,
  `diag_611b` int(1) DEFAULT NULL,
  `diag_611c` int(1) DEFAULT NULL,
  `diag_612a` int(1) DEFAULT NULL,
  `diag_612b` int(1) DEFAULT NULL,
  `diag_612c` int(1) DEFAULT NULL,
  `diag_613` int(1) DEFAULT NULL,
  `diag_614` int(1) DEFAULT NULL,
  `diag_615` int(1) DEFAULT NULL,
  `diag_616` int(1) DEFAULT NULL,
  `diag_62a` int(1) DEFAULT NULL,
  `diag_62b` int(1) DEFAULT NULL,
  `diag_62c` int(1) DEFAULT NULL,
  `diag_62d` int(1) DEFAULT NULL,
  `diag_62e` int(1) DEFAULT NULL,
  `diag_62f` int(1) DEFAULT NULL,
  `diag_62g` int(1) DEFAULT NULL,
  `diag_62h` int(1) DEFAULT NULL,
  `diag_62hDesc` varchar(20) DEFAULT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_status` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`iddiagnostic`),
  KEY `session` (`session`,`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_diagnostic`
--

INSERT INTO `tbl_diagnostic` (`iddiagnostic`, `idtherapy`, `session`, `pat_researchID`, `diag_53`, `diag_53Desc`, `diag_54`, `diag_55`, `diag_56`, `diag_58`, `diag_58a`, `diag_58Desc`, `diag_59`, `diag_60a`, `diag_60b`, `diag_60c`, `diag_611a`, `diag_611b`, `diag_611c`, `diag_612a`, `diag_612b`, `diag_612c`, `diag_613`, `diag_614`, `diag_615`, `diag_616`, `diag_62a`, `diag_62b`, `diag_62c`, `diag_62d`, `diag_62e`, `diag_62f`, `diag_62g`, `diag_62h`, `diag_62hDesc`, `saved_by`, `saved_date`, `approval`, `approval_status`, `approval_by`, `approval_date`) VALUES
(1, 0, 1, 'RID00002', 2, '', 2, 3, 4, 1, 2, '', 2, 1, 2, 2, 2, 3, 3, 2, 2, 3, 3, 1, 2, 3, 2, 2, 2, 2, 2, 2, 2, 3, NULL, 6, '2017-02-24', 1, 0, 0, '0000-00-00'),
(2, 0, 1, 'RID00004', 1, '', 1, 0, 0, 2, 0, '', 2, 2, 1, 1, 1, 2, 2, 1, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 6, '2017-03-15', 1, 0, 0, '0000-00-00'),
(3, 0, 1, 'RID00001', 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 6, '2017-03-16', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnostic57`
--

CREATE TABLE IF NOT EXISTS `tbl_diagnostic57` (
  `iddiagnostic` int(10) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `value` int(5) NOT NULL,
  PRIMARY KEY (`iddiagnostic`),
  KEY `session` (`session`,`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_diagnostic57`
--

INSERT INTO `tbl_diagnostic57` (`iddiagnostic`, `idtherapy`, `session`, `pat_researchID`, `value`) VALUES
(1, 0, 1, 'RID00002', 2),
(2, 0, 1, 'RID00002', 4),
(3, 0, 1, 'RID00002', 0),
(4, 0, 1, 'RID00004', 1),
(5, 0, 1, 'RID00004', 2),
(6, 0, 1, 'RID00004', 4),
(7, 0, 1, 'RID00004', 0),
(9, 0, 1, 'RID00001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_followup74`
--

CREATE TABLE IF NOT EXISTS `tbl_followup74` (
  `idfollowup` int(15) NOT NULL AUTO_INCREMENT,
  `pat_researchID` varchar(15) NOT NULL,
  `session` int(1) NOT NULL,
  `fieldNo` int(2) NOT NULL,
  `value` int(1) NOT NULL,
  PRIMARY KEY (`idfollowup`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_followup74`
--

INSERT INTO `tbl_followup74` (`idfollowup`, `pat_researchID`, `session`, `fieldNo`, `value`) VALUES
(1, 'RID00001', 1, 74, 1),
(2, 'RID00001', 1, 74, 2),
(3, 'RID00001', 1, 74, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_followupD74toD84`
--

CREATE TABLE IF NOT EXISTS `tbl_followupD74toD84` (
  `idfollowup` int(15) NOT NULL AUTO_INCREMENT,
  `pat_researchID` varchar(15) NOT NULL,
  `session` int(2) NOT NULL,
  `pat_died` int(1) NOT NULL,
  `follow75` int(1) NOT NULL,
  `follow76` int(1) NOT NULL,
  `follow77` int(1) NOT NULL,
  `follow77a` int(1) NOT NULL,
  `follow77aDesc` int(1) NOT NULL,
  `follow78` int(1) NOT NULL,
  `follow79` int(1) NOT NULL,
  `follow80a` int(1) NOT NULL,
  `follow80b` int(1) NOT NULL,
  `follow81` int(1) NOT NULL,
  `follow81a` int(1) NOT NULL,
  `follow81b` int(1) NOT NULL,
  `follow82` int(1) NOT NULL,
  `follow83` int(1) NOT NULL,
  `follow84` int(1) NOT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_status` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`idfollowup`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_followupD74toD84`
--

INSERT INTO `tbl_followupD74toD84` (`idfollowup`, `pat_researchID`, `session`, `pat_died`, `follow75`, `follow76`, `follow77`, `follow77a`, `follow77aDesc`, `follow78`, `follow79`, `follow80a`, `follow80b`, `follow81`, `follow81a`, `follow81b`, `follow82`, `follow83`, `follow84`, `saved_by`, `saved_date`, `approval`, `approval_status`, `approval_by`, `approval_date`) VALUES
(1, 'RID00001', 1, 0, 1, 1, 1, 2, 0, 1, 1, 1, 2, 1, 1, 2, 1, 1, 1, 6, '2017-03-20', 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_followupD85toD91`
--

CREATE TABLE IF NOT EXISTS `tbl_followupD85toD91` (
  `idfollowup` int(15) NOT NULL AUTO_INCREMENT,
  `pat_researchID` varchar(15) NOT NULL,
  `session` int(1) NOT NULL,
  `follow86` int(1) NOT NULL,
  `Dressing` int(3) NOT NULL,
  `Grooming` int(3) NOT NULL,
  `Bathing` int(3) NOT NULL,
  `Toilet` int(3) NOT NULL,
  `Bowel` int(3) NOT NULL,
  `Bladder` int(3) NOT NULL,
  `Feeding` int(3) NOT NULL,
  `Transfer` int(3) NOT NULL,
  `Mobility` int(3) NOT NULL,
  `Stairs` int(3) NOT NULL,
  `telephone` int(3) NOT NULL,
  `shopping` int(3) NOT NULL,
  `preparefood` int(3) NOT NULL,
  `housekeeping` int(3) NOT NULL,
  `laundry` int(3) NOT NULL,
  `transport` int(3) NOT NULL,
  `medications` int(3) NOT NULL,
  `finances` int(3) NOT NULL,
  `hads` int(2) NOT NULL,
  `follow88` int(1) NOT NULL,
  `fast` int(3) NOT NULL,
  `mme` int(2) NOT NULL,
  `csi` int(2) NOT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`idfollowup`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_for_notification`
--

CREATE TABLE IF NOT EXISTS `tbl_for_notification` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `part` int(1) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `session` int(1) NOT NULL,
  `saved_by` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_for_notification`
--

INSERT INTO `tbl_for_notification` (`id`, `part`, `pat_researchID`, `session`, `saved_by`) VALUES
(1, 2, 'RID00001', 1, 6),
(2, 1, 'RID00002', 1, 6),
(3, 3, 'RID00002', 1, 6),
(4, 4, 'RID00002', 1, 6),
(5, 5, 'RID00002', 1, 6),
(6, 6, 'RID00002', 1, 6),
(7, 7, 'RID00002', 1, 6),
(8, 1, 'RID00003', 1, 6),
(9, 3, 'RID00003', 1, 6),
(10, 1, 'RID00004', 1, 6),
(11, 2, 'RID00004', 1, 6),
(12, 3, 'RID00004', 1, 6),
(13, 4, 'RID00004', 1, 6),
(14, 5, 'RID00004', 1, 6),
(15, 6, 'RID00004', 1, 6),
(16, 7, 'RID00004', 1, 6),
(17, 3, 'RID00001', 1, 6),
(18, 4, 'RID00001', 1, 6),
(19, 5, 'RID00001', 1, 6),
(20, 6, 'RID00001', 1, 6),
(21, 7, 'RID00001', 1, 6),
(22, 2, 'RID00002', 1, 6),
(23, 1, 'RID00005', 1, 6),
(24, 2, 'RID00005', 1, 6),
(25, 3, 'RID00005', 1, 6),
(26, 7, 'RID00005', 1, 6),
(27, 1, 'RID00006', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE IF NOT EXISTS `tbl_log` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `iduser` int(5) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=156 ;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`id`, `iduser`, `last_login`, `last_logout`) VALUES
(1, 1, '2017-02-18 22:29:43', '2017-02-18 22:29:48'),
(2, 6, '2017-02-18 22:29:57', '2017-02-18 22:30:03'),
(3, 1, '2017-02-18 22:30:16', '2017-02-18 22:30:26'),
(4, 6, '2017-02-18 22:35:18', '2017-02-18 22:51:43'),
(5, 6, '2017-02-20 07:57:51', '2017-02-20 07:57:53'),
(6, 1, '2017-02-20 07:57:59', '2017-02-20 07:58:03'),
(7, 6, '2017-02-20 08:02:39', '2017-02-20 08:08:39'),
(8, 1, '2017-02-20 08:08:45', '2017-02-20 09:12:44'),
(9, 6, '2017-02-20 09:12:48', '2017-02-20 11:04:17'),
(10, 1, '2017-02-20 11:04:21', '2017-02-20 11:46:12'),
(11, 6, '2017-02-20 11:46:19', '0000-00-00 00:00:00'),
(12, 6, '2017-02-20 17:54:02', '0000-00-00 00:00:00'),
(13, 6, '2017-02-20 20:15:50', '0000-00-00 00:00:00'),
(14, 1, '2017-02-21 00:55:20', '2017-02-21 00:56:25'),
(15, 6, '2017-02-21 06:54:21', '2017-02-21 07:11:41'),
(16, 1, '2017-02-21 07:11:46', '0000-00-00 00:00:00'),
(17, 1, '2017-02-21 13:41:27', '2017-02-21 13:42:52'),
(18, 6, '2017-02-21 16:04:59', '0000-00-00 00:00:00'),
(19, 6, '2017-02-21 16:08:29', '2017-02-21 17:23:01'),
(20, 6, '2017-02-21 16:17:25', '2017-02-21 16:17:52'),
(21, 6, '2017-02-21 16:17:55', '0000-00-00 00:00:00'),
(22, 6, '2017-02-22 13:52:45', '0000-00-00 00:00:00'),
(23, 6, '2017-02-22 14:31:54', '2017-02-22 14:43:47'),
(24, 6, '2017-02-22 20:23:09', '2017-02-22 20:25:06'),
(25, 6, '2017-02-22 20:25:15', '0000-00-00 00:00:00'),
(26, 6, '2017-02-22 20:29:15', '0000-00-00 00:00:00'),
(27, 6, '2017-02-22 21:26:01', '0000-00-00 00:00:00'),
(28, 6, '2017-02-22 21:32:43', '0000-00-00 00:00:00'),
(29, 6, '2017-02-22 22:10:40', '0000-00-00 00:00:00'),
(30, 1, '2017-02-23 01:12:02', '2017-02-23 01:25:28'),
(31, 6, '2017-02-23 01:25:33', '2017-02-23 02:01:17'),
(32, 6, '2017-02-23 02:07:23', '2017-02-23 02:07:48'),
(33, 6, '2017-02-23 03:43:16', '0000-00-00 00:00:00'),
(34, 6, '2017-02-23 16:22:16', '2017-02-23 16:42:06'),
(35, 1, '2017-02-24 11:29:06', '2017-02-24 11:29:14'),
(36, 1, '2017-02-24 12:27:38', '2017-02-24 12:27:48'),
(37, 6, '2017-02-24 12:30:20', '0000-00-00 00:00:00'),
(38, 6, '2017-02-24 13:17:55', '0000-00-00 00:00:00'),
(39, 6, '2017-02-24 13:22:51', '2017-02-24 14:46:45'),
(40, 1, '2017-02-24 16:39:58', '2017-02-24 17:03:37'),
(41, 1, '2017-02-24 19:47:47', '0000-00-00 00:00:00'),
(42, 1, '2017-02-25 01:07:10', '0000-00-00 00:00:00'),
(43, 1, '2017-02-25 11:59:08', '0000-00-00 00:00:00'),
(44, 6, '2017-02-26 23:57:19', '0000-00-00 00:00:00'),
(45, 6, '2017-02-27 18:24:48', '0000-00-00 00:00:00'),
(46, 6, '2017-02-27 21:15:59', '2017-02-27 21:46:58'),
(47, 6, '2017-02-27 22:48:04', '2017-02-27 22:48:35'),
(48, 4, '2017-02-27 22:48:40', '0000-00-00 00:00:00'),
(49, 1, '2017-02-27 22:48:48', '2017-02-27 22:49:16'),
(50, 6, '2017-02-28 00:44:54', '2017-02-28 00:49:33'),
(51, 6, '2017-02-28 08:01:41', '0000-00-00 00:00:00'),
(52, 6, '2017-02-28 16:58:00', '0000-00-00 00:00:00'),
(53, 6, '2017-02-28 19:24:17', '0000-00-00 00:00:00'),
(54, 6, '2017-02-28 22:33:49', '2017-02-28 22:36:12'),
(55, 1, '2017-02-28 22:36:16', '2017-02-28 22:37:51'),
(56, 6, '2017-03-01 10:09:26', '2017-03-01 10:42:44'),
(57, 1, '2017-03-01 10:46:35', '2017-03-01 10:55:54'),
(58, 6, '2017-03-01 11:07:35', '2017-03-01 11:07:51'),
(59, 6, '2017-03-01 11:47:59', '2017-03-01 11:50:21'),
(60, 6, '2017-03-01 15:23:55', '2017-03-01 15:46:06'),
(61, 6, '2017-03-01 15:46:52', '2017-03-01 15:51:23'),
(62, 6, '2017-03-01 21:11:41', '2017-03-01 21:11:48'),
(63, 6, '2017-03-01 22:11:58', '2017-03-01 22:12:11'),
(64, 6, '2017-03-02 00:24:07', '2017-03-02 00:26:10'),
(65, 1, '2017-03-02 00:34:08', '2017-03-02 00:34:38'),
(66, 6, '2017-03-02 12:33:09', '0000-00-00 00:00:00'),
(67, 6, '2017-03-02 13:25:34', '2017-03-02 13:27:56'),
(68, 6, '2017-03-02 14:33:08', '2017-03-02 14:34:49'),
(69, 1, '2017-03-02 14:34:54', '2017-03-02 14:36:13'),
(70, 6, '2017-03-02 14:36:17', '2017-03-02 14:37:04'),
(71, 6, '2017-03-03 16:16:40', '2017-03-03 16:16:43'),
(72, 6, '2017-03-04 21:39:10', '2017-03-04 21:39:22'),
(73, 6, '2017-03-05 21:02:04', '2017-03-05 21:02:56'),
(74, 6, '2017-03-05 23:35:41', '2017-03-05 23:36:37'),
(75, 6, '2017-03-06 16:31:59', '0000-00-00 00:00:00'),
(76, 6, '2017-03-06 19:13:15', '2017-03-06 22:25:34'),
(77, 6, '2017-03-06 22:26:18', '2017-03-06 22:26:27'),
(78, 6, '2017-03-08 15:02:04', '2017-03-08 15:11:03'),
(79, 1, '2017-03-08 15:11:06', '2017-03-08 15:13:14'),
(80, 6, '2017-03-08 15:13:19', '0000-00-00 00:00:00'),
(81, 6, '2017-03-09 11:44:06', '0000-00-00 00:00:00'),
(82, 6, '2017-03-09 12:56:37', '0000-00-00 00:00:00'),
(83, 6, '2017-03-09 13:09:49', '0000-00-00 00:00:00'),
(84, 6, '2017-03-10 09:14:46', '2017-03-10 09:19:47'),
(85, 6, '2017-03-10 09:14:48', '0000-00-00 00:00:00'),
(86, 6, '2017-03-10 10:56:15', '2017-03-10 10:56:19'),
(87, 6, '2017-03-11 18:46:48', '2017-03-11 19:53:19'),
(88, 6, '2017-03-12 21:27:16', '2017-03-12 21:27:31'),
(89, 1, '2017-03-13 13:12:50', '2017-03-13 13:12:54'),
(90, 6, '2017-03-15 13:50:34', '2017-03-15 14:14:38'),
(91, 6, '2017-03-15 20:18:20', '0000-00-00 00:00:00'),
(92, 6, '2017-03-15 20:43:38', '2017-03-15 20:51:26'),
(93, 1, '2017-03-15 20:52:27', '2017-03-15 20:54:51'),
(94, 7, '2017-03-15 20:55:08', '0000-00-00 00:00:00'),
(95, 7, '2017-03-15 20:56:00', '0000-00-00 00:00:00'),
(96, 7, '2017-03-15 20:57:17', '0000-00-00 00:00:00'),
(97, 6, '2017-03-15 20:58:50', '0000-00-00 00:00:00'),
(98, 6, '2017-03-15 20:59:01', '0000-00-00 00:00:00'),
(99, 7, '2017-03-15 20:59:36', '2017-03-15 21:00:03'),
(100, 6, '2017-03-15 21:00:04', '0000-00-00 00:00:00'),
(101, 6, '2017-03-15 21:00:16', '2017-03-15 21:31:00'),
(102, 6, '2017-03-15 21:14:43', '2017-03-15 22:17:50'),
(103, 6, '2017-03-15 22:17:52', '2017-03-15 22:17:55'),
(104, 4, '2017-03-15 22:17:58', '0000-00-00 00:00:00'),
(105, 1, '2017-03-15 22:18:05', '2017-03-15 22:18:50'),
(106, 6, '2017-03-15 23:09:10', '2017-03-15 23:41:41'),
(107, 6, '2017-03-16 00:17:51', '2017-03-16 00:52:15'),
(108, 6, '2017-03-16 09:26:40', '0000-00-00 00:00:00'),
(109, 6, '2017-03-16 11:44:59', '2017-03-16 13:13:15'),
(110, 6, '2017-03-16 13:13:21', '0000-00-00 00:00:00'),
(111, 6, '2017-03-20 14:46:35', '0000-00-00 00:00:00'),
(112, 6, '2017-03-20 15:03:32', '2017-03-20 15:10:15'),
(113, 6, '2017-03-20 15:38:28', '2017-03-20 15:44:22'),
(114, 6, '2017-03-20 15:58:56', '0000-00-00 00:00:00'),
(115, 6, '2017-03-20 16:22:21', '2017-03-20 16:26:09'),
(116, 6, '2017-03-20 22:20:47', '2017-03-20 22:24:38'),
(117, 6, '2017-03-20 23:27:57', '0000-00-00 00:00:00'),
(118, 6, '2017-03-20 23:40:27', '0000-00-00 00:00:00'),
(119, 6, '2017-03-21 08:22:39', '2017-03-21 11:31:22'),
(120, 6, '2017-03-21 08:59:30', '0000-00-00 00:00:00'),
(121, 6, '2017-03-21 11:54:05', '0000-00-00 00:00:00'),
(122, 6, '2017-03-21 12:56:47', '2017-03-21 13:01:20'),
(123, 1, '2017-03-25 16:54:53', '2017-03-25 16:55:19'),
(124, 6, '2017-03-26 22:54:54', '2017-03-26 22:55:32'),
(125, 1, '2017-03-30 17:04:18', '2017-03-30 17:04:22'),
(126, 6, '2017-03-31 00:32:54', '2017-03-31 00:53:05'),
(127, 6, '2017-03-31 00:54:14', '2017-03-31 00:56:11'),
(128, 4, '2017-03-31 00:56:23', '0000-00-00 00:00:00'),
(129, 1, '2017-03-31 00:56:30', '2017-03-31 00:57:35'),
(130, 1, '2017-03-31 01:00:03', '2017-03-31 01:00:15'),
(131, 6, '2017-03-31 01:05:22', '0000-00-00 00:00:00'),
(132, 6, '2017-04-04 13:45:02', '0000-00-00 00:00:00'),
(133, 6, '2017-04-04 20:07:34', '0000-00-00 00:00:00'),
(134, 6, '2017-04-05 21:56:43', '0000-00-00 00:00:00'),
(135, 6, '2017-04-06 00:17:54', '0000-00-00 00:00:00'),
(136, 6, '2017-04-06 10:28:39', '0000-00-00 00:00:00'),
(137, 6, '2017-04-07 09:13:15', '0000-00-00 00:00:00'),
(138, 6, '2017-04-07 15:17:53', '2017-04-07 15:36:33'),
(139, 6, '2017-04-11 04:30:37', '0000-00-00 00:00:00'),
(140, 6, '2017-04-11 11:37:14', '0000-00-00 00:00:00'),
(141, 6, '2017-04-11 15:53:51', '0000-00-00 00:00:00'),
(142, 6, '2017-04-22 21:28:29', '2017-04-22 23:13:49'),
(143, 6, '2017-04-23 09:39:23', '0000-00-00 00:00:00'),
(144, 6, '2017-04-24 21:00:06', '0000-00-00 00:00:00'),
(145, 6, '2017-05-02 12:23:26', '0000-00-00 00:00:00'),
(146, 6, '2017-05-06 12:46:26', '0000-00-00 00:00:00'),
(147, 6, '2017-05-06 23:03:38', '2017-05-06 23:07:04'),
(148, 6, '2017-05-06 23:49:13', '2017-05-06 23:49:34'),
(149, 6, '2017-05-07 02:21:35', '2017-05-07 02:21:48'),
(150, 6, '2017-05-07 10:22:53', '2017-05-07 10:23:15'),
(151, 6, '2017-05-08 10:57:47', '0000-00-00 00:00:00'),
(152, 6, '2017-05-08 13:36:28', '2017-05-08 13:38:05'),
(153, 6, '2017-05-09 11:39:32', '0000-00-00 00:00:00'),
(154, 6, '2017-05-10 22:41:04', '0000-00-00 00:00:00'),
(155, 6, '2017-05-11 01:22:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_management`
--

CREATE TABLE IF NOT EXISTS `tbl_management` (
  `idmgt` int(10) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `mgt_64` int(1) DEFAULT NULL,
  `mgt_65` int(1) DEFAULT NULL,
  `mgt_66` int(1) DEFAULT NULL,
  `mgt_67` int(1) DEFAULT NULL,
  `mgt_68` int(1) DEFAULT NULL,
  `mgt_69` int(1) DEFAULT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_status` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`idmgt`),
  KEY `session` (`session`,`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_management`
--

INSERT INTO `tbl_management` (`idmgt`, `idtherapy`, `session`, `pat_researchID`, `mgt_64`, `mgt_65`, `mgt_66`, `mgt_67`, `mgt_68`, `mgt_69`, `saved_by`, `saved_date`, `approval`, `approval_status`, `approval_by`, `approval_date`) VALUES
(1, 0, 1, 'RID00002', 2, 2, 3, 2, 1, 3, 6, '2017-02-24', 1, 0, 0, '0000-00-00'),
(2, 0, 1, 'RID00004', 2, 2, 4, 3, 2, 3, 6, '2017-03-15', 1, 0, 0, '0000-00-00'),
(3, 0, 1, 'RID00001', 0, 0, 0, 0, 0, 0, 6, '2017-03-16', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_management63`
--

CREATE TABLE IF NOT EXISTS `tbl_management63` (
  `idmgt` int(10) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(5) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `fieldNo` varchar(3) NOT NULL,
  `value` int(1) NOT NULL,
  PRIMARY KEY (`idmgt`),
  KEY `session` (`session`,`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tbl_management63`
--

INSERT INTO `tbl_management63` (`idmgt`, `idtherapy`, `session`, `pat_researchID`, `fieldNo`, `value`) VALUES
(1, 0, 1, 'RID00002', '63', 2),
(2, 0, 1, 'RID00002', '63', 0),
(3, 0, 1, 'RID00002', '73a', 2),
(4, 0, 1, 'RID00002', '73a', 0),
(5, 0, 1, 'RID00002', '73b', 3),
(6, 0, 1, 'RID00002', '73b', 0),
(7, 0, 1, 'RID00002', '73b', 3),
(8, 0, 1, 'RID00002', '73b', 0),
(9, 0, 1, 'RID00002', '70', 2),
(10, 0, 1, 'RID00002', '70', 0),
(11, 0, 1, 'RID00002', '71', 2),
(12, 0, 1, 'RID00002', '71', 5),
(13, 0, 1, 'RID00002', '71', 0),
(14, 0, 1, 'RID00004', '63', 1),
(15, 0, 1, 'RID00004', '63', 0),
(16, 0, 1, 'RID00004', '73a', 1),
(17, 0, 1, 'RID00004', '73a', 0),
(18, 0, 1, 'RID00004', '73b', 1),
(19, 0, 1, 'RID00004', '73b', 2),
(20, 0, 1, 'RID00004', '73b', 3),
(21, 0, 1, 'RID00004', '73b', 0),
(22, 0, 1, 'RID00004', '73b', 1),
(23, 0, 1, 'RID00004', '73b', 2),
(24, 0, 1, 'RID00004', '73b', 3),
(25, 0, 1, 'RID00004', '73b', 0),
(26, 0, 1, 'RID00004', '70', 1),
(27, 0, 1, 'RID00004', '70', 2),
(28, 0, 1, 'RID00004', '70', 3),
(29, 0, 1, 'RID00004', '70', 4),
(30, 0, 1, 'RID00004', '70', 7),
(31, 0, 1, 'RID00004', '70', 0),
(32, 0, 1, 'RID00004', '71', 1),
(33, 0, 1, 'RID00004', '71', 2),
(34, 0, 1, 'RID00004', '71', 0),
(41, 0, 1, 'RID00001', '63', 0),
(42, 0, 1, 'RID00001', '73a', 0),
(43, 0, 1, 'RID00001', '73b', 0),
(44, 0, 1, 'RID00001', '73b', 0),
(45, 0, 1, 'RID00001', '70', 0),
(46, 0, 1, 'RID00001', '71', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other`
--

CREATE TABLE IF NOT EXISTS `tbl_other` (
  `idinfo` int(10) NOT NULL AUTO_INCREMENT,
  `pat_researchID` varchar(10) NOT NULL,
  `session` int(5) NOT NULL,
  `fieldNo` varchar(3) NOT NULL,
  `value` int(1) NOT NULL,
  PRIMARY KEY (`idinfo`),
  KEY `pat_researchID` (`pat_researchID`,`session`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tbl_other`
--

INSERT INTO `tbl_other` (`idinfo`, `pat_researchID`, `session`, `fieldNo`, `value`) VALUES
(1, 'RID00002', 1, '72', 1),
(2, 'RID00002', 1, '72', 2),
(3, 'RID00002', 1, '72', 0),
(4, 'RID00002', 1, '72a', 2),
(5, 'RID00002', 1, '72a', 3),
(6, 'RID00002', 1, '72a', 0),
(7, 'RID00002', 1, '72b', 0),
(8, 'RID00002', 1, '72c', 0),
(33, 'RID00004', 1, '72', 1),
(34, 'RID00004', 1, '72', 2),
(35, 'RID00004', 1, '72', 0),
(36, 'RID00004', 1, '72a', 1),
(37, 'RID00004', 1, '72a', 2),
(38, 'RID00004', 1, '72a', 0),
(39, 'RID00004', 1, '72b', 0),
(40, 'RID00004', 1, '72c', 0),
(45, 'RID00001', 1, '72', 0),
(46, 'RID00001', 1, '72a', 0),
(47, 'RID00001', 1, '72b', 0),
(48, 'RID00001', 1, '72c', 0),
(49, 'RID00005', 1, '72', 1),
(50, 'RID00005', 1, '72', 2),
(51, 'RID00005', 1, '72', 3),
(52, 'RID00005', 1, '72', 0),
(53, 'RID00005', 1, '72a', 1),
(54, 'RID00005', 1, '72a', 2),
(55, 'RID00005', 1, '72a', 0),
(56, 'RID00005', 1, '72b', 1),
(57, 'RID00005', 1, '72b', 2),
(58, 'RID00005', 1, '72b', 3),
(59, 'RID00005', 1, '72b', 0),
(60, 'RID00005', 1, '72c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_information`
--

CREATE TABLE IF NOT EXISTS `tbl_other_information` (
  `idinfo` int(5) NOT NULL AUTO_INCREMENT,
  `pat_researchID` varchar(15) NOT NULL,
  `session` int(5) NOT NULL,
  `slx72aDesc` varchar(20) NOT NULL,
  `slx72bDesc` varchar(20) NOT NULL,
  `slx72cDesc` varchar(20) NOT NULL,
  `otherInfo` text NOT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_status` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`idinfo`),
  KEY `pat_researchID` (`pat_researchID`,`session`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_other_information`
--

INSERT INTO `tbl_other_information` (`idinfo`, `pat_researchID`, `session`, `slx72aDesc`, `slx72bDesc`, `slx72cDesc`, `otherInfo`, `saved_by`, `saved_date`, `approval`, `approval_status`, `approval_by`, `approval_date`) VALUES
(1, 'RID00002', 1, '', '', '', 'gkjgjhgjhghg', 6, '2017-02-24', 1, 0, 0, '0000-00-00'),
(2, 'RID00004', 1, '', '', '', 'Patient ini sihat je, saja main2 stroke pulak, pegi balik rumah sana', 6, '2017-03-15', 1, 0, 0, '0000-00-00'),
(3, 'RID00001', 1, '', '', '', '', 6, '2017-03-16', 1, 0, 0, '0000-00-00'),
(4, 'RID00005', 1, '', '', '', '', 6, '2017-03-16', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_information`
--

CREATE TABLE IF NOT EXISTS `tbl_patient_information` (
  `idpat` int(50) NOT NULL AUTO_INCREMENT,
  `idtherapy` int(10) NOT NULL,
  `session` int(1) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `pat_rn` varchar(50) NOT NULL,
  `pat_dob` date NOT NULL,
  `pat_gender` varchar(6) NOT NULL,
  `pat_source` int(1) NOT NULL,
  `pat_sourceDesc` varchar(100) NOT NULL,
  `pat_sourceIDPatient` varchar(25) NOT NULL,
  `pat_surname` varchar(50) NOT NULL,
  `pat_firstname` varchar(100) NOT NULL,
  `pat_address` varchar(100) NOT NULL,
  `pat_address1` varchar(100) NOT NULL,
  `pat_address2` varchar(50) NOT NULL,
  `pat_postcode` int(5) NOT NULL,
  `pat_district` varchar(50) NOT NULL,
  `pat_state` varchar(15) NOT NULL,
  `pat_contactNo` varchar(14) NOT NULL,
  `pat_race` varchar(1) NOT NULL,
  `pat_raceDesc` varchar(50) NOT NULL,
  `pat_education` int(1) NOT NULL,
  `pat_employment` int(1) NOT NULL,
  `pat_employmentDesc` varchar(20) NOT NULL,
  `pat_04` int(1) NOT NULL,
  `pat_05Desc` varchar(30) NOT NULL,
  `pat_06PreStroke` int(1) NOT NULL,
  `pat_06Discharge` int(1) NOT NULL,
  `pat_07RankinPreStroke` int(1) NOT NULL,
  `pat_07RankinOnAdmission` int(1) NOT NULL,
  `pat_07RankinDischarge` int(1) NOT NULL,
  `pat_BarthelBowelPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelBowelDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelFeedingPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelFeedingDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelBladderPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelDressingPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelDressingDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelGroomingPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelGroomingDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelMobilityPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelMobilityDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelToiletPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelToiletDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelTransferPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelTransferDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelBathingPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelBathingDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelBladderDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelStairsPreStroke` int(1) NOT NULL DEFAULT '9',
  `pat_BarthelStairsDischarge` int(1) NOT NULL DEFAULT '9',
  `pat_outcome` int(1) NOT NULL,
  `doctor_who` int(5) NOT NULL,
  `saved_by` int(5) NOT NULL,
  `saved_date` date NOT NULL,
  `edit_by` int(5) NOT NULL,
  `edit_date` date NOT NULL,
  `approval` int(1) NOT NULL,
  `approval_status` int(1) NOT NULL,
  `approval_by` int(5) NOT NULL,
  `approval_date` date NOT NULL,
  PRIMARY KEY (`idpat`),
  UNIQUE KEY `idtherapy` (`idtherapy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_patient_information`
--

INSERT INTO `tbl_patient_information` (`idpat`, `idtherapy`, `session`, `pat_researchID`, `pat_rn`, `pat_dob`, `pat_gender`, `pat_source`, `pat_sourceDesc`, `pat_sourceIDPatient`, `pat_surname`, `pat_firstname`, `pat_address`, `pat_address1`, `pat_address2`, `pat_postcode`, `pat_district`, `pat_state`, `pat_contactNo`, `pat_race`, `pat_raceDesc`, `pat_education`, `pat_employment`, `pat_employmentDesc`, `pat_04`, `pat_05Desc`, `pat_06PreStroke`, `pat_06Discharge`, `pat_07RankinPreStroke`, `pat_07RankinOnAdmission`, `pat_07RankinDischarge`, `pat_BarthelBowelPreStroke`, `pat_BarthelBowelDischarge`, `pat_BarthelFeedingPreStroke`, `pat_BarthelFeedingDischarge`, `pat_BarthelBladderPreStroke`, `pat_BarthelDressingPreStroke`, `pat_BarthelDressingDischarge`, `pat_BarthelGroomingPreStroke`, `pat_BarthelGroomingDischarge`, `pat_BarthelMobilityPreStroke`, `pat_BarthelMobilityDischarge`, `pat_BarthelToiletPreStroke`, `pat_BarthelToiletDischarge`, `pat_BarthelTransferPreStroke`, `pat_BarthelTransferDischarge`, `pat_BarthelBathingPreStroke`, `pat_BarthelBathingDischarge`, `pat_BarthelBladderDischarge`, `pat_BarthelStairsPreStroke`, `pat_BarthelStairsDischarge`, `pat_outcome`, `doctor_who`, `saved_by`, `saved_date`, `edit_by`, `edit_date`, `approval`, `approval_status`, `approval_by`, `approval_date`) VALUES
(1, 2, 1, 'RID00001', 'B12345', '2017-03-15', 'female', 1, 'Ampang', 'D123456', 'Sir', 'Jimon', 'Fst', 'FST', 'FSt', 0, 'Jalan Ixora', 'Ixora', '', '', '', 0, 0, '', 0, '', 0, 0, 0, 0, 0, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 0, 2, 6, 6, '2017-03-16', 0, '0000-00-00', 2, 1, 1, '2017-02-23'),
(2, 3, 1, 'RID00002', '123456', '2016-03-14', 'male', 1, '44444', 'kkkkjjj', 'Ahmad', 'Ali', '', '', '', 0, '', '', '', '', '', 0, 0, '', 3, '', 1, 3, 4, 4, 6, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 6, 6, '2017-02-24', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(3, 4, 1, 'RID00003', 'RN11103', '1990-03-08', 'male', 1, 'HUSIM', 'RN11103', 'Zaki', 'Abu Bakar', 'No. 1 Jalan Kecubung,', '', '', 81900, 'Kota', 'Johor', '09876876', 'C', '', 1, 1, 'Lecturer', 3, '', 3, 0, 1, 0, 0, 1, 1, 0, 0, 2, 1, 1, 0, 0, 2, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 6, 6, '2017-03-08', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(4, 5, 1, 'RID00004', 'A1122345', '2017-03-15', 'female', 1, 'HUTM', 'A1122345', 'Mr', 'Nizam', 'FKB', 'FST', '', 12345, 'Jalan Tenang', 'Johor', '09876545', 'C', '', 1, 1, 'Clerk', 1, '', 1, 0, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 6, 6, '2017-03-15', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(5, 6, 1, 'RID00005', 'F45673', '2017-03-16', 'male', 1, 'HUSIM', 'H67851', 'Al-Dailamy', 'Ali', 'Serdang', '', '', 98000, 'serdang', 'Selangor', '098787657', 'O', 'Pan Arab Asean', 1, 3, '', 1, '', 1, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 6, 6, '2017-03-16', 0, '0000-00-00', 1, 0, 0, '0000-00-00'),
(6, 7, 1, 'RID00006', 'B123456', '1989-02-15', 'male', 1, 'ampang', '123456', '', 'ali mamak', 'fst', 'fst', 'fst', 12345, 'maran', 'pahang', '1234', 'M', '', 1, 5, '', 1, '', 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 2, 1, 6, 6, '2017-04-06', 0, '0000-00-00', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pat_05`
--

CREATE TABLE IF NOT EXISTS `tbl_pat_05` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `session` int(1) NOT NULL,
  `idtherapy` int(10) NOT NULL,
  `pat_rn` varchar(15) NOT NULL,
  `pat_researchID` varchar(15) NOT NULL,
  `value` int(1) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_pat_05`
--

INSERT INTO `tbl_pat_05` (`id`, `session`, `idtherapy`, `pat_rn`, `pat_researchID`, `value`, `description`) VALUES
(8, 1, 3, '123456', 'RID00002', 3, ''),
(9, 1, 3, '123456', 'RID00002', 7, ''),
(10, 1, 3, '123456', 'RID00002', 0, ''),
(11, 1, 4, 'RN11103', 'RID00003', 3, ''),
(12, 1, 4, 'RN11103', 'RID00003', 7, ''),
(13, 1, 4, 'RN11103', 'RID00003', 9, ''),
(14, 1, 4, 'RN11103', 'RID00003', 0, ''),
(15, 1, 5, 'A1122345', 'RID00004', 1, ''),
(16, 1, 5, 'A1122345', 'RID00004', 3, ''),
(17, 1, 5, 'A1122345', 'RID00004', 0, ''),
(19, 1, 2, 'B12345', 'RID00001', 0, ''),
(20, 1, 6, 'F45673', 'RID00005', 1, ''),
(21, 1, 6, 'F45673', 'RID00005', 2, ''),
(22, 1, 6, 'F45673', 'RID00005', 3, ''),
(23, 1, 6, 'F45673', 'RID00005', 7, ''),
(24, 1, 6, 'F45673', 'RID00005', 8, ''),
(25, 1, 6, 'F45673', 'RID00005', 0, ''),
(26, 1, 7, 'B123456', 'RID00006', 1, ''),
(27, 1, 7, 'B123456', 'RID00006', 2, ''),
(28, 1, 7, 'B123456', 'RID00006', 6, ''),
(29, 1, 7, 'B123456', 'RID00006', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `idprofile` int(15) NOT NULL AUTO_INCREMENT,
  `idlogin` int(15) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `telephone_no` varchar(14) NOT NULL,
  `fax_no` varchar(14) NOT NULL,
  `address` varchar(30) NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `postcode` int(5) NOT NULL,
  `state` int(5) NOT NULL,
  `district` int(5) NOT NULL,
  PRIMARY KEY (`idprofile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`idprofile`, `idlogin`, `fullname`, `image`, `telephone_no`, `fax_no`, `address`, `address1`, `address2`, `postcode`, `state`, `district`) VALUES
(1, 6, 'Razak', 'Passport Resume Radhi.jpg', '1234', '1234', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `description` (`description`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1000 ;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `description`) VALUES
(999, 'Administrator'),
(2, 'Nurse'),
(3, 'Nurse Researcher'),
(4, 'Patient'),
(5, 'Physician'),
(6, 'Physician Researcher'),
(7, 'Professor'),
(1, 'Therapist'),
(8, 'Therapist Researcher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stroke_arom`
--

CREATE TABLE IF NOT EXISTS `tbl_stroke_arom` (
  `idarom` int(5) NOT NULL AUTO_INCREMENT,
  `researchID` varchar(50) NOT NULL,
  `session` int(1) NOT NULL,
  `jenis` int(1) NOT NULL,
  `shoulderExt1` date NOT NULL,
  `shoulderExt2` date NOT NULL,
  `shoulderExt3` date NOT NULL,
  `shoulderExt4` date NOT NULL,
  `shoulderFlex1` date NOT NULL,
  `shoulderFlex2` date NOT NULL,
  `shoulderFlex3` date NOT NULL,
  `shoulderFlex4` date NOT NULL,
  `shoulderAdd1` date NOT NULL,
  `shoulderAdd2` date NOT NULL,
  `shoulderAdd3` date NOT NULL,
  `shoulderAdd4` date NOT NULL,
  `shoulderInt1` date NOT NULL,
  `shoulderInt2` date NOT NULL,
  `shoulderInt3` date NOT NULL,
  `shoulderInt4` date NOT NULL,
  `shoulderExtFlex1` date NOT NULL,
  `shoulderExtFlex2` date NOT NULL,
  `shoulderExtFlex3` date NOT NULL,
  `shoulderExtFlex4` date NOT NULL,
  `elbowExt1` date NOT NULL,
  `elbowExt2` date NOT NULL,
  `elbowExt3` date NOT NULL,
  `elbowExt4` date NOT NULL,
  `forearmPro1` date NOT NULL,
  `forearmPro2` date NOT NULL,
  `forearmPro3` date NOT NULL,
  `forearmPro4` date NOT NULL,
  `forearmSup1` date NOT NULL,
  `forearmSup2` date NOT NULL,
  `forearmSup3` date NOT NULL,
  `forearmSup4` date NOT NULL,
  `wristFlex1` date NOT NULL,
  `wristFlex2` date NOT NULL,
  `wristFlex3` date NOT NULL,
  `wristFlex4` date NOT NULL,
  `wristDorsi1` date NOT NULL,
  `wristDorsi2` date NOT NULL,
  `wristDorsi3` date NOT NULL,
  `wristDorsi4` date NOT NULL,
  `wristUlna1` date NOT NULL,
  `wristUlna2` date NOT NULL,
  `wristUlna3` date NOT NULL,
  `wristUlna4` date NOT NULL,
  `thumbMP1` date NOT NULL,
  `thumbMP2` date NOT NULL,
  `thumbMP3` date NOT NULL,
  `thumbMP4` date NOT NULL,
  `thumbIP1` date NOT NULL,
  `thumbIP2` date NOT NULL,
  `thumbIP3` date NOT NULL,
  `thumbIP4` date NOT NULL,
  `thumbCMC1` date NOT NULL,
  `thumbCMC2` date NOT NULL,
  `thumbCMC3` date NOT NULL,
  `thumbCMC4` date NOT NULL,
  `thumbPalmar1` date NOT NULL,
  `thumbPalmar2` date NOT NULL,
  `thumbPalmar3` date NOT NULL,
  `thumbPalmar4` date NOT NULL,
  `thumbOppo1` date NOT NULL,
  `thumbOppo2` date NOT NULL,
  `thumbOppo3` date NOT NULL,
  `thumbOppo4` date NOT NULL,
  `thumbBase1` date NOT NULL,
  `thumbBase2` date NOT NULL,
  `thumbBase3` date NOT NULL,
  `thumbBase4` date NOT NULL,
  `indexMCP1` date NOT NULL,
  `indexMCP2` date NOT NULL,
  `indexMCP3` date NOT NULL,
  `indexMCP4` date NOT NULL,
  `indexPIP1` date NOT NULL,
  `indexPIP2` date NOT NULL,
  `indexPIP3` date NOT NULL,
  `indexPIP4` date NOT NULL,
  `indexDIP1` date NOT NULL,
  `indexDIP2` date NOT NULL,
  `indexDIP3` date NOT NULL,
  `indexDIP4` date NOT NULL,
  `middleMCP1` date NOT NULL,
  `middleMCP2` date NOT NULL,
  `middleMCP3` date NOT NULL,
  `middleMCP4` date NOT NULL,
  `middlePIP1` date NOT NULL,
  `middlePIP2` date NOT NULL,
  `middlePIP3` date NOT NULL,
  `middlePIP4` date NOT NULL,
  `middleDIP1` date NOT NULL,
  `middleDIP2` date NOT NULL,
  `middleDIP3` date NOT NULL,
  `middleDIP4` date NOT NULL,
  `ringMCP1` date NOT NULL,
  `ringMCP2` date NOT NULL,
  `ringMCP3` date NOT NULL,
  `ringMCP4` date NOT NULL,
  PRIMARY KEY (`idarom`),
  KEY `researchID` (`researchID`),
  KEY `session` (`session`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stroke_msgarom`
--

CREATE TABLE IF NOT EXISTS `tbl_stroke_msgarom` (
  `idmsg` int(15) NOT NULL AUTO_INCREMENT,
  `researchID` varchar(50) NOT NULL,
  `session` int(5) NOT NULL,
  `jenis` int(1) NOT NULL,
  `shoulderAbd` int(5) NOT NULL,
  `shoulderAdd` int(5) NOT NULL,
  `shoulderFlex` int(5) NOT NULL,
  `shoulderExt` int(5) NOT NULL,
  `elbowFlex` int(5) NOT NULL,
  `elbowExt` int(5) NOT NULL,
  `wristFlex` int(5) NOT NULL,
  `wristExt` int(5) NOT NULL,
  `rtHand` varchar(50) NOT NULL,
  `fingerFlex` int(5) NOT NULL,
  `fingerExt` int(5) NOT NULL,
  `ltHand` varchar(50) NOT NULL,
  `rtLateral` varchar(50) NOT NULL,
  `rtPad` varchar(50) NOT NULL,
  `rt3Jaw` varchar(50) NOT NULL,
  `ltLateral` varchar(50) NOT NULL,
  `ltPad` varchar(50) NOT NULL,
  `lt3Jaw` varchar(50) NOT NULL,
  `intactSharp` varchar(50) NOT NULL,
  `intactDull` varchar(50) NOT NULL,
  `intactLight` varchar(50) NOT NULL,
  `intactDeep` varchar(50) NOT NULL,
  `impairedSharp` varchar(50) NOT NULL,
  `impairedDull` varchar(50) NOT NULL,
  `impairedLight` varchar(50) NOT NULL,
  `impairedDeep` varchar(50) NOT NULL,
  `absentSharp` varchar(50) NOT NULL,
  `absentDull` varchar(50) NOT NULL,
  `absentLight` varchar(50) NOT NULL,
  `absentDeep` varchar(50) NOT NULL,
  `hookRt` int(1) NOT NULL,
  `hookLt` int(1) NOT NULL,
  `lateralRt` int(1) NOT NULL,
  `lateralLt` int(1) NOT NULL,
  `tipRt` int(1) NOT NULL,
  `tipLt` int(1) NOT NULL,
  `cylindricalRt` int(1) NOT NULL,
  `cylindricalLt` int(1) NOT NULL,
  `padRt` int(1) NOT NULL,
  `padLt` int(1) NOT NULL,
  `JawRt` int(1) NOT NULL,
  `JawLt` int(1) NOT NULL,
  `sphericalRt` int(1) NOT NULL,
  `sphericalLt` int(1) NOT NULL,
  `otherRemarks` text NOT NULL,
  `odemaRt` text NOT NULL,
  `odemaLt` text NOT NULL,
  `odemaRemark` text NOT NULL,
  `writingRt` int(1) NOT NULL,
  `writingLt` int(1) NOT NULL,
  `coinsRt` int(1) NOT NULL,
  `coinsLt` int(1) NOT NULL,
  `buttonRt` int(1) NOT NULL,
  `buttonLt` int(1) NOT NULL,
  `spoonRt` int(1) NOT NULL,
  `spoonLt` int(1) NOT NULL,
  `handRt` int(1) NOT NULL,
  `handLt` int(1) NOT NULL,
  PRIMARY KEY (`idmsg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stroke_prom`
--

CREATE TABLE IF NOT EXISTS `tbl_stroke_prom` (
  `idprom` int(5) NOT NULL AUTO_INCREMENT,
  `researchID` varchar(50) NOT NULL,
  `session` int(1) NOT NULL,
  `jenis` int(1) NOT NULL,
  `shoulderExt` date NOT NULL,
  `shoulderFlex` date NOT NULL,
  `shoulderAdd` date NOT NULL,
  `shoulderInt` date NOT NULL,
  `shoulderExtFlex` date NOT NULL,
  `elbowExt` date NOT NULL,
  `forearmPro` date NOT NULL,
  `forearmSup` date NOT NULL,
  `wristFlex` date NOT NULL,
  `wristDorsi` date NOT NULL,
  `wristUlna` date NOT NULL,
  `thumbMP` date NOT NULL,
  `thumbIP` date NOT NULL,
  `thumbCMC` date NOT NULL,
  `thumbPalmar` date NOT NULL,
  `thumbOppo` date NOT NULL,
  `thumbBase` date NOT NULL,
  `indexMCP` date NOT NULL,
  `indexPIP` date NOT NULL,
  `indexDIP` date NOT NULL,
  `middleMCP` date NOT NULL,
  `middlePIP` date NOT NULL,
  `middleDIP` date NOT NULL,
  `ringMCP` date NOT NULL,
  PRIMARY KEY (`idprom`),
  KEY `researchID` (`researchID`),
  KEY `session` (`session`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_therapy`
--

CREATE TABLE IF NOT EXISTS `tbl_therapy` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `pat_researchID` varchar(15) NOT NULL,
  `pat_rn` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pat_researchID` (`pat_researchID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_therapy`
--

INSERT INTO `tbl_therapy` (`id`, `pat_researchID`, `pat_rn`) VALUES
(2, 'RID00001', 'B12345'),
(3, 'RID00002', '123456'),
(4, 'RID00003', 'RN11103'),
(5, 'RID00004', 'A1122345'),
(6, 'RID00005', 'F45673'),
(7, 'RID00006', 'B123456');

-- --------------------------------------------------------

--
-- Table structure for table `usim_login`
--

CREATE TABLE IF NOT EXISTS `usim_login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `katanama` varchar(100) NOT NULL,
  `katalaluan` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `role_user` int(5) NOT NULL,
  `dept_user` varchar(10) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `idno` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `usim_login`
--

INSERT INTO `usim_login` (`id`, `katanama`, `katalaluan`, `nama_user`, `role_user`, `dept_user`, `email_user`, `idno`, `status`, `last_login`, `last_logout`) VALUES
(1, 'azizee', '4d2c8af8b421e039a72a67119a3b6cc6', 'azizee', 999, '', '', '', 9, '2017-03-31 01:00:03', '2017-03-31 01:00:15'),
(4, 'ahmad', '4d2c8af8b421e039a72a67119a3b6cc6', 'Ahmad', 1, '', '', 'B012345', 9, '2017-03-31 00:56:23', '2017-02-07 23:21:59'),
(5, 'nurse@usim.edu.my', '4d2c8af8b421e039a72a67119a3b6cc6', 'Nurse', 2, '', '', 'N012345', 9, '2017-02-02 07:44:25', '2017-02-02 07:44:34'),
(6, 'razak', '4d2c8af8b421e039a72a67119a3b6cc6', 'Razak', 8, 'Medical', 'raz@ak.com.my', 'DR1234', 9, '2017-05-11 01:22:31', '2017-05-08 13:38:04'),
(7, 'physician@usim.edu.my', '4d2c8af8b421e039a72a67119a3b6cc6', 'physician', 6, '', 'physician@usim.edu.my', 'B12345898', 9, '2017-03-15 20:59:36', '2017-03-15 21:00:03');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_patient_information`
--
ALTER TABLE `tbl_patient_information`
  ADD CONSTRAINT `tbl_patient_information_ibfk_1` FOREIGN KEY (`idtherapy`) REFERENCES `tbl_therapy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
