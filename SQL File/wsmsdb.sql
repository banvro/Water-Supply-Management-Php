-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 07:52 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'tester1', 'admin', 7889898989, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-07-17 06:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `ID` int(10) NOT NULL,
  `UserId` char(10) DEFAULT NULL,
  `BottleId` char(10) DEFAULT NULL,
  `IsOrderPlaced` int(11) DEFAULT NULL,
  `OrderNumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcart`
--

INSERT INTO `tblcart` (`ID`, `UserId`, `BottleId`, `IsOrderPlaced`, `OrderNumber`) VALUES
(1, '1', '5', 1, '558348635'),
(2, '1', '1', 1, '697833200'),
(3, '1', '1', 1, '499828956'),
(4, '1', '5', 1, '499828956'),
(5, '1', '6', 1, '499828956'),
(6, '2', '1', 1, '634975972'),
(7, '2', '4', 1, '634975972'),
(9, '1', '5', 1, '117204599'),
(10, '1', '5', 1, '117204599'),
(12, '', '1', NULL, NULL),
(13, '', '1', NULL, NULL),
(14, '1', '2', 1, '263880631'),
(15, '1', '5', 1, '263880631'),
(16, '1', '1', NULL, NULL),
(17, '1', '5', NULL, NULL),
(18, '3', '2', 1, '983739274'),
(20, '3', '8', 1, '983739274'),
(21, '3', '6', 1, '983739274'),
(22, '4', '1', 1, '340827311'),
(24, '4', '7', 1, '340827311');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `ID` int(10) NOT NULL,
  `CompanyName` varchar(120) DEFAULT NULL,
  `CompanyImage` varchar(120) DEFAULT NULL,
  `CompanyRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`ID`, `CompanyName`, `CompanyImage`, `CompanyRegdate`) VALUES
(1, 'Aquafina', '284727d73f31a112ab3773d6e84d92ff.png', NULL),
(2, 'Dasani', '8e6e8c34178f5b7a91f1766f150796f7.jpg', '2019-07-17 12:15:48'),
(3, 'Nestle Waters', 'cdfcb8c13e33a5ddc5a24b0675e91d7c.jpg', '2019-07-17 12:17:36'),
(4, 'Glaceau SmartWater', '7ab7243ec16d3d4bbee4c59bd7479ebb.jpg', '2019-07-17 12:19:09'),
(5, 'Poland Spring', '34795dc08ff81897943880e9c5468e51.jpg', '2019-07-17 12:20:10'),
(6, 'Fiji', '7ba6cecbd8a8cebb9440192c8d717f8a.jpg', '2019-07-17 12:22:01'),
(7, 'Bisleri', 'fb5363a294b10ad27e959c6084ec03bf.jpg', '2019-07-17 12:23:18'),
(8, 'Bailey', 'ac1cc25e4ab0ccd982b876b37b4a8859.png', '2019-07-18 06:17:48'),
(9, 'Himalayan', '495b3e480c45994373d9391fb8733a62.png', '2019-07-18 06:20:34'),
(10, 'Kinley', 'c26be60cfd1ba40772b5ac48b95ab19b.png', '2019-08-08 04:22:11'),
(11, 'Test Company abc', '5e72c91a3aefb5994047764fab46d7ea.png', '2019-08-16 16:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE `tblnews` (
  `ID` int(10) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `NewsDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`ID`, `Title`, `Description`, `NewsDate`) VALUES
(1, 'Price of Biselri Increase', '2 Rs Price increases on bisleri bottles.                ', '2019-07-23 04:44:43'),
(2, 'How Much Water Should You Drink Per Day?', '<p style=\"box-sizing: inherit; margin-bottom: 25px; font-size: 18px; line-height: 26px; padding-top: 0px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">The body is about 60% water, give or take.</p><p style=\"box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">You are constantly losing water from your body, primarily via urine and sweat. To prevent dehydration, you need to drink adequate amounts of water.</p><p style=\"box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">There are many different opinions on how much water you should be drinking every day.</p><p style=\"box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">Health authorities commonly recommend eight 8-ounce glasses, which equals about 2 liters, or half a gallon. This is called the 8?????8 rule and is very easy to remember.</p><p style=\"box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">However, some health gurus believe that you need to sip on water constantly throughout the day, even when you????????re not thirsty.</p><p style=\"box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">As with most things, this depends on the individual. Many factors (both internal and external) ultimately affect your need for water.</p><p style=\"box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">This article takes a look at some water intake studies to separate fact from fiction and explains how to easily match water intake to your individual needs.</p>        ', '2019-07-23 04:48:59'),
(3, 'Does Water Intake Affect Energy Levels and Brain Function?', '<p style=\"box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">Many people claim that if you don????????t stay hydrated throughout the day, your energy levels and brain function start to suffer.</p><div><br></div>        ', '2019-07-23 04:50:10'),
(4, 'Does Drinking a Lot of Water Help You Lose Weight?', '<p style=\"box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: rgb(35, 31, 32); font-family: &quot;Proxima Nova&quot;, system-ui, sans-serif;\">There are many claims that increased water intake may reduce body weight by increasing your metabolism and reducing your appetite.</p><div><br></div>        ', '2019-07-23 04:50:57'),
(5, 'Price of Biselri Increases', 'Prices of water bottle increase', '2019-08-08 04:32:50'),
(6, 'test news ', 'This is sample text for Testing.', '2019-08-16 16:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `tblorderaddresses`
--

CREATE TABLE `tblorderaddresses` (
  `ID` int(10) NOT NULL,
  `UserId` char(100) DEFAULT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Ordernumber` char(100) DEFAULT NULL,
  `BottleQty` int(10) NOT NULL,
  `Flatnobuldngno` varchar(120) DEFAULT NULL,
  `StreetName` varchar(120) DEFAULT NULL,
  `Area` varchar(120) DEFAULT NULL,
  `Landmark` varchar(120) DEFAULT NULL,
  `City` varchar(120) DEFAULT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `OrderFinalStatus` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorderaddresses`
--

INSERT INTO `tblorderaddresses` (`ID`, `UserId`, `MobileNumber`, `Ordernumber`, `BottleQty`, `Flatnobuldngno`, `StreetName`, `Area`, `Landmark`, `City`, `OrderTime`, `OrderFinalStatus`) VALUES
(1, '1', 7879797979, '558348635', 1, 'B-150', 'Gali no 20', 'Mayur Vihar', 'near hanuman mandir', 'Allahabad', '2019-07-22 11:08:53', 'Bottle Delivered'),
(2, '1', 7979877987, '697833200', 1, 'A/10', 'Gali no 20', 'Mayur Vihar', 'near hanuman mandir', 'Ghaziabad', '2019-07-22 11:48:39', 'Order Cancelled'),
(3, '1', 4464646546, '499828956', 1, 'hhhkjh', 'hkhkj', 'kjhkj', 'kjhkj', 'kjhkj', '2019-07-22 11:49:24', 'Order On its Way'),
(4, '2', 7797797987, '634975972', 1, 'b-150', 'HK pg house', 'Assi', 'gjhgj', 'Ba', '2019-07-22 15:52:06', 'Order Accept'),
(5, '1', 7979797979, '117204599', 0, 'B-250', 'ABC', 'Mohan Nagar', 'Near Corbat Zim', 'Delhi', '2019-07-25 04:05:36', 'Order Cancelled'),
(6, '1', 7798797797, '263880631', 0, 'B-250', 'ABC', 'Mohan Nagar', 'Near Reliance Fresh', 'New Delhi', '2019-07-25 04:13:48', NULL),
(7, '3', 3712536124, '983739274', 0, 'G20', 'ABC Street', 'New XYZ', 'New Delhi', 'New Delhi 110091', '2019-08-16 15:47:53', 'Order Accept'),
(8, '4', 3453456346, '340827311', 0, 'XYZ 12312', 'ABC Street', 'EFG Road', 'Near XYZ Tower', 'New Delhi 110091', '2019-08-16 16:28:03', 'Bottle Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '                <b>        Our Mission is to deliver pure water at the tap of a button.</b><div>Potable water being one of the most critical needs of mankind, next to oxygen, triggered our journey to deliver pure &amp; hygienic drinking water at the doorstep of every resident at an affordable price, quality &amp; timely service.<br></div><div><br></div>', '', 0, '2019-08-16 16:47:45'),
(2, 'contactus', 'Contact Us', '                <div>#890 CFG Apartment, Mayur Vihar, Delhi-India.<br></div><div>&nbsp;</div>', 'info@gmail.com', 8988858695, '2019-08-16 16:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbltracking`
--

CREATE TABLE `tbltracking` (
  `ID` int(10) NOT NULL,
  `OrderId` char(100) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `status` char(100) DEFAULT NULL,
  `StatusDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `OrderCanclledByUser` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltracking`
--

INSERT INTO `tbltracking` (`ID`, `OrderId`, `remark`, `status`, `StatusDate`, `OrderCanclledByUser`) VALUES
(1, '558348635', 'Order Accepted', 'Order Accept', '2019-07-23 06:20:46', NULL),
(2, '558348635', 'Delivery person on the way', 'Order On its Way', '2019-07-23 11:02:57', NULL),
(3, '558348635', 'Delivery person on the way', 'Order On its Way', '2019-07-23 11:06:15', NULL),
(4, '558348635', 'Bottle has been deliverd', 'Bottle Delivered', '2019-07-23 11:07:09', NULL),
(5, '697833200', 'Order Cancelled', 'Order Cancelled', '2019-07-23 11:14:17', NULL),
(6, '634975972', 'Order Accept', 'Order Accept', '2019-07-23 11:16:37', NULL),
(7, '634975972', 'Delivery person is on the way', 'Order On its Way', '2019-07-23 11:17:12', NULL),
(8, '634975972', 'Delivered', 'Bottle Delivered', '2019-07-23 11:17:44', NULL),
(9, '634975972', 'Delivered', 'Bottle Delivered', '2019-07-23 11:19:00', NULL),
(10, '117204599', 'Not Available', 'Order Cancelled', '2019-07-25 04:07:05', 1),
(11, '117204599', 'Not Available', 'Order Cancelled', '2019-07-25 04:07:45', 1),
(12, '499828956', 'Order Accept', 'Order Accept', '2019-07-25 04:17:46', NULL),
(13, '499828956', 'Delivery boy is on the way', 'Order On its Way', '2019-07-25 04:19:25', NULL),
(14, '983739274', 'Orde accepted', 'Order Accept', '2019-08-16 15:53:00', NULL),
(15, '340827311', 'Order Accdepted', 'Order Accept', '2019-08-16 16:32:14', NULL),
(16, '340827311', 'On the way', 'Order On its Way', '2019-08-16 16:32:33', NULL),
(17, '340827311', 'Order Delivered.', 'Bottle Delivered', '2019-08-16 16:33:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNo` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNo`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Tarun Kishore', 4646546467, 'tarun@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-07-19 05:15:39'),
(2, 'Rajesh Singh', 6546546546, 'raj@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-07-19 05:16:14'),
(3, 'Test', 6546546524, 'test@test.com', '5c428d8875d2948607f3e3fe134d71b4', '2019-08-16 15:33:33'),
(4, 'Test User', 8242347236, 'testuser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-08-16 16:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `tblwaterbottle`
--

CREATE TABLE `tblwaterbottle` (
  `ID` int(10) NOT NULL,
  `CompanyName` varchar(120) DEFAULT NULL,
  `BottleSize` varchar(120) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Image` varchar(120) DEFAULT NULL,
  `BottleEntrydate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwaterbottle`
--

INSERT INTO `tblwaterbottle` (`ID`, `CompanyName`, `BottleSize`, `Price`, `Image`, `BottleEntrydate`) VALUES
(1, 'Bisleri', '1 ltr', 15, 'bcec4c949f554a4d62387b03422a7b29.jpg', '2019-07-18 06:14:32'),
(2, 'Bisleri', '1 ltr', 20, 'aa83b2bb503ecb8ae132c99e36261e93.jpg', '2019-07-18 06:22:11'),
(3, 'Bisleri', '2 ltr', 30, '9917ee175c3e4d653c37f5306be3aed8.jpg', '2019-07-18 06:23:09'),
(4, 'Bisleri', '5 ltr', 45, 'e529f972de9a367e1b86d01a2cd050aa.jpg', '2019-07-18 06:24:24'),
(5, 'Bisleri', '10 ltr', 65, '07b75328fb7163e6d092debc690179d1.jpg', '2019-07-18 06:25:21'),
(6, 'Bisleri', '20 ltr', 80, '8bfa9ff68bd102311302b1b1935c2ebd.jpg', '2019-07-18 06:26:06'),
(7, 'Aquafina', '20 ltr', 75, 'aa3645e5bd0ee1800220c23e518b89cb.jpg', '2019-07-18 06:27:26'),
(8, 'Dasani', '2 ltr', 75, 'c2ccda13298200d9ee50da88c86f7d64.jpg', '2019-07-18 06:28:54'),
(9, 'Aquafina', '500 ml', 440, '8c5413e3cd91ad32f98eb048f1a8fc93.jpg', '2019-08-08 04:02:51'),
(10, 'Aquafina', '20 ltr', 200, '8c5413e3cd91ad32f98eb048f1a8fc93.jpg', '2019-08-16 16:31:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblorderaddresses`
--
ALTER TABLE `tblorderaddresses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Ordernumber` (`Ordernumber`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltracking`
--
ALTER TABLE `tbltracking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblwaterbottle`
--
ALTER TABLE `tblwaterbottle`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblorderaddresses`
--
ALTER TABLE `tblorderaddresses`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltracking`
--
ALTER TABLE `tbltracking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblwaterbottle`
--
ALTER TABLE `tblwaterbottle`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
