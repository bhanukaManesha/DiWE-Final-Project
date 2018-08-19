-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2017 at 04:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saman`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mailID` int(255) NOT NULL,
  `mailName` varchar(255) NOT NULL,
  `mailEmail` varchar(255) NOT NULL,
  `mailMessage` varchar(1000) NOT NULL,
  `mailTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mailID`, `mailName`, `mailEmail`, `mailMessage`, `mailTime`) VALUES
(5, 'Wayne White', 'waynewhite@gmail.com', 'Hi,\r\nI want to build my house. Can i know the procedure I need to follow.\r\nThanks\r\nWayne', '2017-08-19 04:42:14.000000'),
(6, 'John Green', 'johngreen@gmail.com', 'Hi, \r\nI would like to build my house.\r\nCan i get your service for this?\r\nThank You', '2017-08-19 11:45:03.000000'),
(7, 'Peter Silva', 'petersilva@gmail.com', 'Hi,\r\nI would like to renovate my house.\r\nCan I know the necessary procedures.\r\n\r\nThank You', '2017-08-19 12:39:52.000000');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(5) NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `projectStName` varchar(10) NOT NULL,
  `projectType` varchar(255) NOT NULL,
  `projectAddress` varchar(255) NOT NULL,
  `projectUserID` int(5) NOT NULL,
  `projectState` int(1) NOT NULL COMMENT 'o for finished 1 for on-going',
  `projectStDesc` varchar(500) NOT NULL,
  `projectlgDesc` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `projectName`, `projectStName`, `projectType`, `projectAddress`, `projectUserID`, `projectState`, `projectStDesc`, `projectlgDesc`) VALUES
(83, 'PROPOSED RESIDENCE FOR GEORGE HALL', 'GHR', 'House', 'No.457, Barnes Place, Colombo 7', 34, 0, 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales iaculis arcu ac imperdiet. Etiam elementum vehicula semper. Nulla pulvinar turpis nec gravida tempus. In congue interdum nunc efficitur consequat. Vivamus at mauris eu metus finibus mattis nec id justo. Aenean dignissim tempus sapien, nec feugiat neque sodales a. Vivamus at dictum velit, eget pharetra felis. Quisque lacus justo, lacinia vel cu', 'Aenean vel dui et enim semper placerat elementum eu odio. Sed sed libero volutpat enim sagittis aliquam. Pellentesque ut ipsum finibus, maximus magna at, auctor massa. Nam commodo lorem euismod orci viverra varius. Nunc urna urna, vestibulum in tincidunt suscipit, ultricies sed massa. Mauris nec pellentesque mi, id accumsan dolor. Morbi sed orci maximus, luctus magna et, posuere tortor. Proin eleifend eros quis consequat ultricies. Pellentesque quis aliquet dolor, eget posuere sapien.  Fusce euismod neque viverra, porta ipsum eget, gravida erat. Sed sit amet lorem id dui auctor rutrum quis vel turpis. Integer accumsan suscipit massa sit amet tincidunt. Morbi et ante a neque egestas condimentum. Donec vel bibendum dui. Suspendisse potenti. Vestibulum quis aliquam dolor. Duis ullamcorper erat vitae turpis rhoncus tempus. Nulla suscipit massa ante, non porttitor nisl dapibus vitae. Quisque volutpat varius iaculis. Maecenas eu ligula odio. Donec ac mauris malesuada, porttitor nunc ut, cursus augue. Curabitur nec libero risus.  Sed lobortis elit in consectetur sagittis. In consectetur et ex eget faucibus. In accumsan sit amet ante suscipit lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris vitae porta lacus. Quisque luctus, leo nec placerat tristique, dui nibh tempor lectus, sit amet tempor lorem ligula a quam. Curabitur cursus egestas metus, ac porta dolor suscipit sed. Sed aliquam porttitor ligula. Nunc id condimentum eros, u'),
(84, 'PROPOSED RESIDENCE FOR NISAL SILVA', 'NSR', 'Renovation', 'No.32, Sea Road, Colombo 5', 35, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis scelerisque accumsan. Cras rhoncus elit non enim pretium, eget convallis metus finibus. Praesent accumsan justo erat, ac feugiat augue condimentum in. Sed malesuada libero eu dui ullamcorper, sed ultricies nibh suscipit. Phasellus varius lorem purus, ac finibus nibh tincidunt eget. Sed in semper nisi. Nullam sem tellus, viverra eu feugiat vitae, mollis eget massa. Duis venenatis lectus id rhoncus posuere. Integer porta ex ve', 'Mauris mollis diam id nisl bibendum lobortis. Donec egestas finibus placerat. Donec cursus erat malesuada velit accumsan suscipit. Donec a euismod erat. Duis rutrum lobortis sapien, non vestibulum enim feugiat sit amet. Nullam eu purus tempus lacus congue tempus. Curabitur sit amet mauris dictum, faucibus sem vel, condimentum augue.  Morbi tempus, odio non scelerisque convallis, diam est pellentesque nulla, eget dapibus sem tortor et sem. Praesent pulvinar, augue id imperdiet viverra, enim dolor ultrices sapien, sed euismod nibh elit nec nisl. Aenean vitae tincidunt purus. Vestibulum non ligula eget est egestas tristique. Ut malesuada lacinia nisi, vel condimentum nulla egestas in. Nunc tempor arcu aliquam, tincidunt augue ut, rhoncus odio. Sed vitae vulputate leo, non sodales eros. Vestibulum ac metus gravida, facilisis tellus non, porta purus.  In molestie nulla et nisi scelerisque mattis. Vestibulum justo diam, rutrum et felis eu, condimentum posuere diam. Sed tincidunt cursus eros, quis ultricies sem euismod ac. Integer varius facilisis massa et dictum. Donec eleifend dapibus tellus, vitae congue nunc vehicula at. Nullam lobortis augue at tincidunt condimentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque imperdiet felis eu sapien finibus convallis. Donec placerat eros nisl, id elementum purus suscipit eu. Proin ac risus efficitur, ultrices nulla et, mattis urna. Sed non nisl et dolor placerat ultricies. Ut vehicula nibh i'),
(85, 'PROPOSED RESIDENCE FOR SHAQUILLE PERERA', 'SPR', 'House', 'No.34, Reed Avenue, Colombo 10', 36, 1, 'Vivamus nisi velit, pulvinar nec turpis non, pharetra vestibulum tellus. Integer semper vel elit ac aliquam. Aliquam ac justo id felis congue convallis et a nunc. Sed sodales rutrum augue, eu tempus arcu pulvinar non. Ut vel odio elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc accumsan lectus a ullamcorper vehicula. Suspendisse ultricies laoreet odio, ac placerat velit dapibus sit amet. Praesent commodo blandit nulla, at fringilla orci eleifend ', 'Nullam mattis tellus sit amet enim lobortis, nec ornare nisl blandit. Donec eget nisi lorem. Quisque quam magna, consequat sit amet arcu eget, sodales eleifend eros. Sed condimentum enim id enim ornare ultricies. Praesent suscipit porttitor consectetur. Phasellus sed leo scelerisque, venenatis libero at, hendrerit augue. Nullam fringilla risus vitae sollicitudin finibus. Vivamus tempus et elit vitae varius. Phasellus convallis ultrices semper. In lacinia sagittis ante vitae semper.  Vivamus imperdiet, nunc ultricies malesuada feugiat, ante risus semper nisi, non bibendum tortor ante nec dolor. Pellentesque aliquet enim massa, eget sagittis est efficitur id. Fusce blandit congue sapien nec pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus eu vulputate tellus. Etiam eros leo, mattis eget nulla vel, dapibus aliquet dui. Maecenas gravida, elit at sagittis dignissim, dui eros elementum orci, et vulputate est sem maximus risus. Cras efficitur bibendum ligula, faucibus tincidunt est pulvinar placerat. Donec et quam at tortor cursus pharetra vitae at metus. Curabitur ullamcorper, lacus a fringilla rutrum, massa enim tincidunt leo, et gravida lorem mauris eu est. Nulla facilisis nulla enim, et volutpat orci ornare ac. Nam turpis sem, condimentum nec neque nec, tempus tempor metus. Vivamus tempus elit id metus ornare, vel vestibulum est viverra. Vivamus varius vulputate consequat. Morbi sodales enim porttitor nisl aliquet pharetra. Donec bibendum tellus '),
(86, 'PROPOSED RESIDENCE FOR DERVIN GOMEZ', 'DGR', 'House', 'No.12, Flower Road, Nawinna, Maharagama', 37, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tellus est, dictum ut consectetur a, bibendum eget est. Pellentesque lacinia suscipit ultricies. Suspendisse efficitur arcu sit amet finibus efficitur. Integer dapibus luctus mattis. Integer nec mi ex. Duis a elit sollicitudin, gravida metus vel, pretium felis. Pellentesque rhoncus placerat eros in luctus.', 'Sed mollis id massa in sodales. Cras eleifend orci ante, efficitur convallis sem sollicitudin ut. Donec nibh nibh, tincidunt ac vehicula non, tincidunt quis orci. Cras dui metus, ullamcorper quis orci sit amet, hendrerit mattis augue. Vestibulum vitae lacus quis dui efficitur lobortis. Mauris porta semper tortor, ut varius ligula posuere eu. Praesent eros velit, varius eget arcu id, placerat varius dolor. Duis erat diam, aliquam nec ipsum quis, vulputate scelerisque magna. Nullam id maximus velit. Duis ornare aliquet dui, at ornare ex varius vitae. Vestibulum posuere condimentum nisi, eu blandit lorem molestie id. Nulla auctor, tellus id tempus vestibulum, dui nisi vulputate lorem, iaculis venenatis neque sem sed tortor. Curabitur semper, turpis eget ornare aliquam, dui nulla tincidunt nibh, quis facilisis nisl ante vel elit. Curabitur finibus non magna vestibulum sagittis. Duis dictum, velit semper scelerisque accumsan, neque lorem semper ipsum, ut auctor sapien dui vitae lacus.');

-- --------------------------------------------------------

--
-- Table structure for table `projectImage`
--

CREATE TABLE `projectImage` (
  `projectImageID` int(10) NOT NULL,
  `projectID` int(10) NOT NULL,
  `projectCover` varchar(255) NOT NULL,
  `projectImageRecent1` varchar(255) NOT NULL,
  `projectImageRecent2` varchar(500) NOT NULL,
  `projectImageRecent3` varchar(500) NOT NULL,
  `projectImageRecent4` varchar(500) NOT NULL,
  `projectImageRecent5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectImage`
--

INSERT INTO `projectImage` (`projectImageID`, `projectID`, `projectCover`, `projectImageRecent1`, `projectImageRecent2`, `projectImageRecent3`, `projectImageRecent4`, `projectImageRecent5`) VALUES
(13, 83, 'houses/GHR/cover 1.jpg', '', '', '', '', ''),
(14, 84, 'houses/NSR/Free-Stunning-House-Architecture-For-Saving-Space-In-France-Facade-Architect-Houses-With-Architecture-Houses.jpg', 'houses/NSR/sample.1.jpg', 'houses/NSR/house_buy.jpg', 'houses/NSR/71300566.jpg', '', ''),
(15, 85, 'houses/SPR/Cool-Best-Architecture-Design-House-On-Architecture-Houses.jpg', 'houses/SPR/sabala-crapenter-houses_under-construction.jpg', 'houses/SPR/831260-3x2-940x627.jpg', '', '', ''),
(16, 86, 'houses/DGR/Modern-Luxury-Home-Johannesburg_2.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `projectOnGoing`
--

CREATE TABLE `projectOnGoing` (
  `projectOnGoingID` int(11) NOT NULL,
  `projectID` int(10) NOT NULL,
  `projectOnGoingProgress` int(3) NOT NULL,
  `projectOnGoingDateStarted` date NOT NULL,
  `projectOnGoingDateFinish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectOnGoing`
--

INSERT INTO `projectOnGoing` (`projectOnGoingID`, `projectID`, `projectOnGoingProgress`, `projectOnGoingDateStarted`, `projectOnGoingDateFinish`) VALUES
(57, 83, 100, '2016-11-07', '2017-06-19'),
(58, 84, 67, '2017-08-20', '2017-12-24'),
(59, 85, 18, '2017-06-05', '2018-04-30'),
(60, 86, 17, '2017-08-22', '2018-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleID` int(10) NOT NULL,
  `roleType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `roleType`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(5) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userAddress` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userRole` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userAddress`, `userEmail`, `userPassword`, `userRole`) VALUES
(4, 'Bhanuka Gamage', 'No.15/1, Kotte Road, Ethul Kotte', 'bhanukamgamage@gmail.com', '0000', 1),
(34, 'George Hall', 'No.12/1, Clover Avenue, Colombo 7', 'georgehall@gmail.com', '123', 2),
(35, 'Nisal Silva', 'No.78/4, Castle Avenue, Borella', 'nisalsilva@gmail.com', '123', 2),
(36, 'Shaquille Perera', 'No.69, Ward Avanue, Colombo 12', 'shaquilleperera@gmail.com', '123', 2),
(37, 'Dervin Gomez', 'No.10, Temple Street, Kalubowila', 'dervingomez@gmail.com', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mailID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`),
  ADD KEY `projectID` (`projectID`),
  ADD KEY `projectUserID` (`projectUserID`);

--
-- Indexes for table `projectImage`
--
ALTER TABLE `projectImage`
  ADD PRIMARY KEY (`projectImageID`),
  ADD UNIQUE KEY `projectID_2` (`projectID`),
  ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `projectOnGoing`
--
ALTER TABLE `projectOnGoing`
  ADD PRIMARY KEY (`projectOnGoingID`),
  ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userRole` (`userRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mailID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `projectImage`
--
ALTER TABLE `projectImage`
  MODIFY `projectImageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `projectOnGoing`
--
ALTER TABLE `projectOnGoing`
  MODIFY `projectOnGoingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`projectUserID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `projectImage`
--
ALTER TABLE `projectImage`
  ADD CONSTRAINT `projectimage_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`);

--
-- Constraints for table `projectOnGoing`
--
ALTER TABLE `projectOnGoing`
  ADD CONSTRAINT `projectongoing_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `project` (`projectID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userRole`) REFERENCES `role` (`roleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
