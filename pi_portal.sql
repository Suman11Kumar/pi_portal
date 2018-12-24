-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 11:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pi_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `D10_SCHOOL` varchar(40) NOT NULL,
  `D10_BOARD` varchar(40) NOT NULL,
  `D10_YEAR` year(4) NOT NULL,
  `D10PER` float NOT NULL,
  `D12_SCHOOL` varchar(40) NOT NULL,
  `D12_BOARD` varchar(40) NOT NULL,
  `D12_YEAR` year(4) NOT NULL,
  `D12PER` float NOT NULL,
  `REG_NO` varchar(20) NOT NULL,
  `academic_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`D10_SCHOOL`, `D10_BOARD`, `D10_YEAR`, `D10PER`, `D12_SCHOOL`, `D12_BOARD`, `D12_YEAR`, `D12PER`, `REG_NO`, `academic_code`) VALUES
('asdsad', 'adasd', 2012, 98, 'sdfdsf', 'dfgdg78', 2014, 98, '2017ca31', 'AC403');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Add_code` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `street_no` varchar(30) DEFAULT NULL,
  `house_no` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_name` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `B_CODE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_name`, `course`, `B_CODE`) VALUES
('CSE', 'MCA', 'BR101');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `C_Code` varchar(20) NOT NULL,
  `C_Name` varchar(20) NOT NULL,
  `Date_Arriving` date DEFAULT NULL,
  `Deadline` date DEFAULT NULL,
  `Stipend` int(11) NOT NULL,
  `Profile` varchar(30) NOT NULL,
  `CTC` int(11) DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL,
  `PPO_Allowed` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`C_Code`, `C_Name`, `Date_Arriving`, `Deadline`, `Stipend`, `Profile`, `CTC`, `Location`, `PPO_Allowed`) VALUES
('CO101', 'Microsoft', '2018-12-10', '2018-12-08', 34000, 'Analyst', 2000000, 'Banglore', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `company_past_experiences`
--

CREATE TABLE `company_past_experiences` (
  `Exp_Id` varchar(10) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Experience` blob,
  `Profile` varchar(20) DEFAULT NULL,
  `Company_Code` varchar(20) DEFAULT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_past_experiences`
--

INSERT INTO `company_past_experiences` (`Exp_Id`, `Name`, `Experience`, `Profile`, `Company_Code`, `year`) VALUES
('EP101', 'micro', NULL, 'analyst', 'CO101', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `eligibility_criteria`
--

CREATE TABLE `eligibility_criteria` (
  `C_Code` varchar(20) NOT NULL,
  `B_Code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eligibility_criteria`
--

INSERT INTO `eligibility_criteria` (`C_Code`, `B_Code`) VALUES
('CO101', 'BR101');

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `Reg_No` varchar(20) NOT NULL,
  `Intern_id` varchar(20) NOT NULL,
  `Organisation` varchar(20) NOT NULL,
  `Duration` varchar(20) DEFAULT NULL,
  `Profile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`Reg_No`, `Intern_id`, `Organisation`, `Duration`, `Profile`) VALUES
('2017ca31', 'IT147', 'asdjsadsaj', 'dskukdskukadjahdaa', 'admsabasmdba'),
('2017ca20', 'IT149', 'rhueit', 'oiuwrietyuire', 'ekkdehr'),
('2017ca31', 'IT678', 'asdjsadsaj', 'aidjaskda', 'ekkdehr');

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--

CREATE TABLE `pg` (
  `PASS_OUT_YEAR` year(4) NOT NULL,
  `SP1` float NOT NULL,
  `SP2` float NOT NULL,
  `SP3` float DEFAULT NULL,
  `SP4` float DEFAULT NULL,
  `SP5` float DEFAULT NULL,
  `SP6` float DEFAULT NULL,
  `CPI` float DEFAULT NULL,
  `pg_id` varchar(20) NOT NULL,
  `b_code` varchar(20) DEFAULT NULL,
  `ug_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pg`
--

INSERT INTO `pg` (`PASS_OUT_YEAR`, `SP1`, `SP2`, `SP3`, `SP4`, `SP5`, `SP6`, `CPI`, `pg_id`, `b_code`, `ug_code`) VALUES
(2020, 9.8, 9.4, 0, 0, 0, 0, 9.7, 'PG403', 'BR101', 'UG403');

-- --------------------------------------------------------

--
-- Table structure for table `photo_resume`
--

CREATE TABLE `photo_resume` (
  `REG_NO` varchar(8) NOT NULL,
  `PHOTO` blob,
  `RESUME` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Reg_No` varchar(20) NOT NULL,
  `PID` varchar(20) NOT NULL,
  `Project_title` varchar(20) NOT NULL,
  `Project_description` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Reg_No`, `PID`, `Project_title`, `Project_description`) VALUES
('2017ca31', 'PR147', 'sdfjnad', 'jjgjgbnmvmbn'),
('2017ca20', 'PR149', 'sdfjnadgbbgng', 'jieeriyehhdf'),
('2017ca31', 'PR678', 'sdfjnad', 'jmgjhgfhgfgbc');

-- --------------------------------------------------------

--
-- Table structure for table `registered_companies`
--

CREATE TABLE `registered_companies` (
  `C_CODE` varchar(20) NOT NULL,
  `REG_NO` varchar(8) NOT NULL,
  `selected` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_companies`
--

INSERT INTO `registered_companies` (`C_CODE`, `REG_NO`, `selected`) VALUES
('CO101', '2017ca31', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `reg_detail`
--

CREATE TABLE `reg_detail` (
  `Name` varchar(255) NOT NULL,
  `Reg_no` varchar(8) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Credits` int(11) DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_detail`
--

INSERT INTO `reg_detail` (`Name`, `Reg_no`, `Password`, `Credits`) VALUES
('anjali', '2017ca20', '123456789', 10),
('Pooja ', '2017CA30', '12345678', 10),
('Suman', '2017CA31', '12345678', 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_personel_details`
--

CREATE TABLE `student_personel_details` (
  `Reg_No` varchar(8) NOT NULL,
  `Contact_No` bigint(11) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Sex` varchar(12) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Guardian_name` varchar(255) NOT NULL,
  `Guardian_address` varchar(255) NOT NULL,
  `Guardian_Phone` bigint(11) NOT NULL,
  `Marrital_Status` varchar(10) NOT NULL,
  `present_add_code` varchar(20) DEFAULT NULL,
  `permanent_add_code` varchar(20) DEFAULT NULL,
  `linkedinid` varchar(255) NOT NULL,
  `b_code` varchar(20) DEFAULT NULL,
  `residence_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpo_detail`
--

CREATE TABLE `tpo_detail` (
  `Name` varchar(255) NOT NULL,
  `Reg_no` varchar(8) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Contact_no` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpo_detail`
--

INSERT INTO `tpo_detail` (`Name`, `Reg_no`, `Course`, `Email_id`, `Contact_no`) VALUES
('Mohammad Farhan', '2016ca02', 'MCA', 'farhan.mnnit@gmail.com', 986531321),
('Barsha Mandal', '2016ca20', 'MCA', 'barsha.mnnit@gmail.com', 658945236),
('Vinay Bhaduria', '2016ca54', 'MCA', 'vinay.mnnit@gmail.com', 987456123),
('Ansar sharma', '2016ca76', 'MCA', 'ansar.mnnit@gmail.com', 987456123);

-- --------------------------------------------------------

--
-- Table structure for table `ug`
--

CREATE TABLE `ug` (
  `cpi` float NOT NULL,
  `pass_year` year(4) NOT NULL,
  `pass_college` varchar(40) NOT NULL,
  `ug_id` varchar(20) NOT NULL,
  `ac_code` varchar(20) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `Degree` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ug`
--

INSERT INTO `ug` (`cpi`, `pass_year`, `pass_college`, `ug_id`, `ac_code`, `university`, `Degree`) VALUES
(89, 2016, 'dgfdg', 'UG403', 'AC403', 'xzczc', 'sgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`REG_NO`),
  ADD UNIQUE KEY `academic_code` (`academic_code`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Add_code`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`B_CODE`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`C_Code`);

--
-- Indexes for table `company_past_experiences`
--
ALTER TABLE `company_past_experiences`
  ADD PRIMARY KEY (`Exp_Id`),
  ADD KEY `Company_Code` (`Company_Code`);

--
-- Indexes for table `eligibility_criteria`
--
ALTER TABLE `eligibility_criteria`
  ADD PRIMARY KEY (`C_Code`,`B_Code`);

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`Intern_id`),
  ADD KEY `Reg_No` (`Reg_No`);

--
-- Indexes for table `pg`
--
ALTER TABLE `pg`
  ADD PRIMARY KEY (`pg_id`),
  ADD KEY `b_code` (`b_code`),
  ADD KEY `fk_pg` (`ug_code`);

--
-- Indexes for table `photo_resume`
--
ALTER TABLE `photo_resume`
  ADD PRIMARY KEY (`REG_NO`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `Reg_No` (`Reg_No`);

--
-- Indexes for table `registered_companies`
--
ALTER TABLE `registered_companies`
  ADD PRIMARY KEY (`C_CODE`,`REG_NO`),
  ADD KEY `REG_NO` (`REG_NO`);

--
-- Indexes for table `reg_detail`
--
ALTER TABLE `reg_detail`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `student_personel_details`
--
ALTER TABLE `student_personel_details`
  ADD PRIMARY KEY (`Reg_No`),
  ADD UNIQUE KEY `Email_Id` (`Email_Id`),
  ADD UNIQUE KEY `linkedinid` (`linkedinid`),
  ADD KEY `present_add_code` (`present_add_code`),
  ADD KEY `permanent_add_code` (`permanent_add_code`),
  ADD KEY `b_code` (`b_code`);

--
-- Indexes for table `tpo_detail`
--
ALTER TABLE `tpo_detail`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `ug`
--
ALTER TABLE `ug`
  ADD PRIMARY KEY (`ug_id`),
  ADD KEY `fk_aug` (`ac_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
  ADD CONSTRAINT `academic_ibfk_1` FOREIGN KEY (`REG_NO`) REFERENCES `reg_detail` (`Reg_no`);

--
-- Constraints for table `company_past_experiences`
--
ALTER TABLE `company_past_experiences`
  ADD CONSTRAINT `company_past_experiences_ibfk_1` FOREIGN KEY (`Company_Code`) REFERENCES `company` (`C_Code`);

--
-- Constraints for table `intern`
--
ALTER TABLE `intern`
  ADD CONSTRAINT `intern_ibfk_1` FOREIGN KEY (`Reg_No`) REFERENCES `reg_detail` (`Reg_no`);

--
-- Constraints for table `pg`
--
ALTER TABLE `pg`
  ADD CONSTRAINT `fk_pg` FOREIGN KEY (`ug_code`) REFERENCES `ug` (`ug_id`),
  ADD CONSTRAINT `pg_ibfk_2` FOREIGN KEY (`b_code`) REFERENCES `branch` (`B_CODE`);

--
-- Constraints for table `photo_resume`
--
ALTER TABLE `photo_resume`
  ADD CONSTRAINT `photo_resume_ibfk_1` FOREIGN KEY (`REG_NO`) REFERENCES `reg_detail` (`Reg_no`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`Reg_No`) REFERENCES `reg_detail` (`Reg_no`);

--
-- Constraints for table `registered_companies`
--
ALTER TABLE `registered_companies`
  ADD CONSTRAINT `fk_ccode` FOREIGN KEY (`C_CODE`) REFERENCES `company` (`C_Code`),
  ADD CONSTRAINT `registered_companies_ibfk_1` FOREIGN KEY (`C_CODE`) REFERENCES `company` (`C_Code`),
  ADD CONSTRAINT `registered_companies_ibfk_2` FOREIGN KEY (`REG_NO`) REFERENCES `reg_detail` (`Reg_no`);

--
-- Constraints for table `student_personel_details`
--
ALTER TABLE `student_personel_details`
  ADD CONSTRAINT `fk_spd` FOREIGN KEY (`Reg_No`) REFERENCES `reg_detail` (`Reg_no`),
  ADD CONSTRAINT `student_personel_details_ibfk_1` FOREIGN KEY (`present_add_code`) REFERENCES `address` (`Add_code`),
  ADD CONSTRAINT `student_personel_details_ibfk_2` FOREIGN KEY (`permanent_add_code`) REFERENCES `address` (`Add_code`),
  ADD CONSTRAINT `student_personel_details_ibfk_3` FOREIGN KEY (`b_code`) REFERENCES `branch` (`B_CODE`);

--
-- Constraints for table `ug`
--
ALTER TABLE `ug`
  ADD CONSTRAINT `fk_aug` FOREIGN KEY (`ac_code`) REFERENCES `academic` (`academic_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
