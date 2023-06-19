-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 06:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafelia`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ph_no` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `name`, `ph_no`, `address`, `email`, `password`) VALUES
(1, 'Danial Khan', 12341234, 'H 123 ABC Street', 'mkdanialkhan@gmail.com', '1234'),
(2, 'AMNA TAHIR', 33352487, 'GULSHAN TOWER KARACHI', 'amnat@gmail.com', '159at__'),
(3, 'FARAZ KHAN', 25584496, 'JOHAT TOWN KARACHI', 'fazi@hotmail.com', 'faaz154'),
(4, 'HANNA RAZA', 21457896, 'ORANGI BLOCK 3', 'razahan12@gmail.com', 'www.raza'),
(5, 'HAMDAN ZIA', 14785235, 'JOHAR BLAOCK 10 KARACHI', 'hamdi20@gmail.com', 'hamz12'),
(6, 'ZAINAB AYAZ', 21202014, 'DEFENSE HOUSING SOCIETY', 'zayaz21g@gmail.com', 'princessa54'),
(7, 'Mazhar ', 2147483647, 'P.E.C.H.S block 3 L-157', 'mazhar298@gmail.com', 'maz27992'),
(8, 'Zahir', 2147483647, 'DHA phase 2 H#00227', 'zahir488@gmail.com', 'zahirali29'),
(9, 'Qadir ', 2147483647, 'Johar Town block 15 H#135', 'qadirbux98@gmail.com', 'qadirbux292'),
(10, 'Wajid ', 2147483647, 'Shah Latif Town sec 17/b L-37', 'wajidsarki@gmail.com', 'wajidali111'),
(11, 'Sami', 2147483647, 'Steel Town L-345', 'samikhan@gmail.com', 'sam33917'),
(12, 'Alizah Ali', 2147483647, '123 Oak Street, Anytown, NY 12345', 'alizahali@gmail.com', '123*'),
(13, 'Danial Khan', 2147483647, '654 Birch Road, Greenville, SC 78901\r', 'danialkhan@gmail.com', 'abc_'),
(14, 'Farheen Altaf', 2147483647, '321 Cedar Lane, Lexington, KY 23456\r', 'farheenaltaf@gmail.com', 'doo_1'),
(15, 'Talha Altaf', 2147483647, '987 Pine Street, Mountain View, CA 90123\r', 'talhaaltaf@gmail.com', '500a'),
(16, 'Jasmine J.', 2147483647, '789 Elm Drive, Lakeside, CA 45678', 'jasminj@gmail.com', 'a23a23'),
(17, 'Sofia Ave', 2147483647, '456 Maple Avenue, Springfield, IL 67890\r', 'sofiaave@gmail.com', '500_ave'),
(18, 'Yasir Ali Sarki', 123123123, 'haha lol me ni bataunga', 'yasirbhai@gmail.com', 'oolala'),
(19, 'test', 123456789, '12456789123456789/*', 'test@test.com', 'test'),
(20, 'Dan', 2147483647, 'karachi', 'dan@gmail.com', '123'),
(21, 'dummy', 123123123, 'dummy address', 'dummy@gmail.com', 'dummy'),
(22, 'azca', 12365478, 'abcdefty', 'azca@gmail.com', 'qwerrty'),
(23, 'Shameel Bhai', 2147483647, 'sf217', 'shameelbhai@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `jobID` int(11) DEFAULT NULL,
  `BirthDate` date NOT NULL,
  `HireDate` date NOT NULL,
  `cnic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `FirstName`, `LastName`, `jobID`, `BirthDate`, `HireDate`, `cnic`) VALUES
(2, 'Fareeha', 'Altaf', 2, '2023-06-07', '2023-06-13', '3211234567890');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(35) NOT NULL,
  `salary` float(7,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `jobTitle`, `salary`) VALUES
(1, 'Barista', 2500.0),
(2, 'Manager', 4500.0),
(3, 'Assistant Manager', 3600.0),
(4, 'Social Media Manager', 2600.0),
(5, 'Baker Chef', 3400.0),
(6, 'Coffee Roaster', 2500.0),
(7, 'Dishwasher', 650.0),
(8, 'Maintenance Staff', 1000.0),
(9, 'Customer Service Representative', 1500.0),
(10, 'Server', 2000.0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` float(5,2) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`itemID`, `itemName`, `image`, `price`, `description`) VALUES
(1, ' Acai Bowl', 'img1.jpg', 5.50, 'The acai bowlblend of frozen acai berries and luscious berries, topped with an array of crunchy granola, sliced almonds, and a drizzle of honey'),
(2, 'Turkish Coffee', 'menu-4.jpg', 3.99, 'Turkish coffee finely ground dark-roasted coffee beans, with a touch of cardamom, creating a bold and aromatic elixir'),
(3, 'Crepes de Paris', 'img3.png', 2.00, 'Crepes de Paris are thin pancakes made from a velvety batter of flour, eggs, milk, and a hint of vanilla.'),
(4, 'Cold Brew', 'img1.jpg', 2.99, 'Infused with freshly ground coffee beans with cold water over an extended period, yielding a smooth and velvety beverage.'),
(5, 'Americano', 'dish-9.png', 2.50, 'The shot of espresso topped with hot water, offering a strong and invigorating experience that highlights the deep flavors of the coffee beans.'),
(6, 'English Muffins', 'dish-8III.png', 1.00, 'English muffins are a breakfast classic, boast a soft and fluffy texture, created from a dough enriched with butter, yeast, and a touch of sugar.'),
(7, 'Nana\'s Banana Porridge', 'dish-7.png', 3.00, 'Features creamy oats cooked to perfection in milk, sweetened with ripe mashed bananas,a sprinkle of cinnamon and toasted nuts.'),
(8, 'hot coffee', 'dish-9.png', 1.50, 'Hot coffee brims with the invigorating aroma of freshly brewed beans, delivering a comforting and energizing experience.'),
(9, 'cold coffee', 'menu-5.jpg', 1.55, 'Cold coffee, a refreshing indulgence, blends chilled espresso with creamy milk, and cascade of ice.');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderDetsID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderDetsID`, `itemID`, `orderID`, `quantity`) VALUES
(15, 2, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `orderTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `orderTime`) VALUES
(13, 1, '2023-06-19 21:10:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`),
  ADD KEY `jobID` (`jobID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderDetsID`),
  ADD KEY `itemID` (`itemID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `customerID` (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderDetsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`jobID`) REFERENCES `job` (`jobID`) ON DELETE SET NULL;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `menu` (`itemID`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
