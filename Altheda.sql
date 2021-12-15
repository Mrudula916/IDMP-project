-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2021 at 06:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Altheda`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `activity_name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`) VALUES
(1, 'Bird Watching'),
(2, 'Indoor Activities'),
(3, 'Water Activities'),
(4, 'Camping'),
(5, 'Spa');

-- --------------------------------------------------------

--
-- Table structure for table `activity_registration`
--

CREATE TABLE `activity_registration` (
  `customer_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `no_people` int(4) NOT NULL,
  `date` date NOT NULL,
  `time_slot` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_registration`
--

INSERT INTO `activity_registration` (`customer_id`, `activity_id`, `no_people`, `date`, `time_slot`) VALUES
(27, 4, 3, '2021-12-15', '08:00:00'),
(28, 3, 2, '2021-12-18', '12:00:00'),
(29, 3, 2, '2021-12-19', '10:00:00'),
(30, 2, 4, '2021-12-23', '16:00:00'),
(31, 1, 2, '2021-12-20', '08:00:00'),
(32, 5, 1, '2021-12-20', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `no_of_rooms` decimal(2,0) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `adult_no` decimal(2,0) NOT NULL,
  `children_no` decimal(2,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `username`, `room_type`, `no_of_rooms`, `check_in`, `check_out`, `adult_no`, `children_no`) VALUES
(7, 'meghana', 'delux', '2', '2021-12-17', '2021-12-22', '4', '0'),
(8, 'Mrudula', 'royal', '1', '2021-12-17', '2021-12-24', '2', '0'),
(9, 'Nikhitha', 'royal', '1', '2021-12-18', '2021-12-20', '2', '0'),
(10, 'Namitha', 'standard', '2', '2021-12-22', '2021-12-26', '4', '2'),
(11, 'Megh', 'royal', '1', '2021-12-23', '2021-12-24', '2', '0'),
(12, 'Amogha', 'royal', '1', '2021-12-21', '2021-12-23', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`item_id`, `item_name`, `category`, `price`) VALUES
(1, 'Grocery', NULL, '500.00'),
(2, 'Lightings', NULL, '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `cashless`
--

CREATE TABLE `cashless` (
  `customer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `amount` decimal(5,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashless`
--

INSERT INTO `cashless` (`customer_id`, `booking_id`, `amount`) VALUES
(25, 1, '100.00'),
(28, 8, '200.00');

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `customer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `room_number` decimal(3,0) NOT NULL,
  `advance_amt` decimal(5,2) DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`customer_id`, `booking_id`, `room_number`, `advance_amt`) VALUES
(27, 7, '201', '500.00'),
(28, 8, '302', '100.00'),
(29, 9, '101', '0.00'),
(30, 10, '101', '100.00'),
(31, 11, '302', '0.00'),
(32, 12, '302', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `customer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `room_tarriff` decimal(10,2) NOT NULL,
  `food_amount` decimal(5,2) NOT NULL,
  `total_amount` decimal(6,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`customer_id`, `booking_id`, `room_tarriff`, `food_amount`, `total_amount`) VALUES
(28, 8, '3500.00', '54.00', '3654.00'),
(29, 9, '400.00', '108.00', '508.00'),
(30, 10, '1600.00', '152.00', '1652.00'),
(32, 12, '1000.00', '90.00', '1090.00');

--
-- Triggers `checkout`
--
DELIMITER $$
CREATE TRIGGER `demographics_trigger` AFTER INSERT ON `checkout` FOR EACH ROW begin
if new.customer_id is not null then
call demographic_data_collector(new.customer_id);
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `nationality` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `firstname`, `lastname`, `gender`, `email`, `date_of_birth`, `nationality`, `address`, `phone`) VALUES
(27, 'meghana', 'Meghana', 'Ramesh', 'female', 'megh@g.com', '1998-12-07', 'Indian', '74 , 2nd H main,11th block, 2nd stage, Nagarbha', '8904522508'),
(28, 'Mrudula', 'Mrudula', 'KP', 'female', 'mru@g.com', '1999-03-09', 'Europian', 'Apt1 My Street Boston', '9876543456'),
(29, 'Nikhitha', 'Nikhitha', 'G', 'female', 'n@w.com', '1999-09-05', 'Indian', 'Apt 2 Street, boston', '8765784563'),
(30, 'Namitha', 'Namitha', 's', 'female', 'nam@g.com', '1999-03-09', 'American', 'Apt2 Street3 Boston', '5674835647'),
(31, 'Megh', 'Megh', 't', 'female', 'me@g.com', '1998-01-09', 'American', 'Apt2 Street3 Boston', '78945637378'),
(32, 'Amogha', 'Amogha', 'C', 'female', 'amogha@a.com', '2017-06-06', 'Europian', 'Paris, Europe', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE `customer_login` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`username`, `email`, `password`) VALUES
('meghana', 'megh@g.com', 'M123'),
('Nikhitha', 'n@w.com', 'Yr43'),
('Mrudula', 'mru@g.com', 'Mru12'),
('Namitha', 'nam@g.com', 'N123'),
('Megh', 'Me@g.com', 'Me123'),
('Amogha', 'amogha@a.com', 'Am123'),
('Bina', 'bina@g.com', 'B@123');

-- --------------------------------------------------------

--
-- Table structure for table `demographics`
--

CREATE TABLE `demographics` (
  `customer_id` int(11) NOT NULL,
  `age` int(10) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `family_size` int(10) DEFAULT NULL,
  `period_of_stay` decimal(10,2) DEFAULT NULL,
  `date_of_arrival` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demographics`
--

INSERT INTO `demographics` (`customer_id`, `age`, `nationality`, `family_size`, `period_of_stay`, `date_of_arrival`) VALUES
(27, 23, 'Indian', 4, '5.00', '2021-12-17'),
(28, 23, 'Europian', 2, '7.00', '2021-12-17'),
(29, 22, 'Indian', 2, '2.00', '2021-12-18'),
(29, 22, 'Indian', 2, '2.00', '2021-12-18'),
(28, 23, 'Europian', 2, '7.00', '2021-12-17'),
(30, 23, 'American', 6, '4.00', '2021-12-22'),
(30, 23, 'American', 6, '4.00', '2021-12-22'),
(31, 24, 'American', 2, '1.00', '2021-12-23'),
(31, 24, 'American', 2, '1.00', '2021-12-23'),
(28, 23, 'Europian', 2, '7.00', '2021-12-17'),
(29, 22, 'Indian', 2, '2.00', '2021-12-18'),
(30, 23, 'American', 6, '4.00', '2021-12-22'),
(28, 23, 'Europian', 2, '7.00', '2021-12-17'),
(32, 5, 'Europian', 3, '2.00', '2021-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `lastname` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `Address` text NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `username`, `lastname`, `gender`, `Address`, `phone`, `email`, `department`) VALUES
(1011, 'John', 'Kris', 'Male', 'Apt 12, Abc street, Boston', '1234567890', 'john@gmail.com', 'technical'),
(1012, 'Bob', 'Pete', 'Male', 'Apt 13, MNO street, California', '9876543210', 'bob@a.com', 'technical'),
(1013, 'Ana', 'Robert', 'Female', '11, Xyz, California', '8877665544', 'ana@x.gmail.com', 'Reception'),
(1014, 'Jenny', 'Joey', 'Male', '11, That street, Boston', '2233445566', 'jenny@gmail.com', 'Reception'),
(1015, 'Julia', 'Downey', 'Female', '33, this street, Boston', '7766554433', 'julia@gmail.com', 'events'),
(1016, 'Harry', 'Pop', 'Male', '44, Some street, Boston', '8877669900', 'harry@a.com', 'events'),
(1017, 'Monica', 'Green', 'female', '77, Dew Street, Boston', '9966880055', 'mon@a.com', 'house keeping'),
(1018, 'Ross', 'Downy', 'Male', '22, New Street, Boston', '7680665346', 'ross@a.com', 'house keeping'),
(1019, 'Will', 'Dinny', 'Male', '33, His street, Boston', '2345742672', 'will@gmail.com', 'Dining'),
(1020, 'Kelly', 'Clark', 'Female', '88, Pope street, Boston', '9966331188', 'kelly@gmail.com', 'Dining');

-- --------------------------------------------------------

--
-- Stand-in structure for view `emp_by_dept`
-- (See below for the actual view)
--
CREATE TABLE `emp_by_dept` (
`employee_id` int(11)
,`username` varchar(20)
,`department` varchar(50)
,`employee_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL,
  `event_type` varchar(30) DEFAULT NULL,
  `venue` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `username` varchar(20) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`username`, `item_id`, `quantity`) VALUES
('Mrudula', 2, 1),
('Mrudula', 8, 1),
('Mrudula', 19, 1),
('Nikhitha', 2, 2),
('Nikhitha', 6, 2),
('Nikhitha', 10, 2),
('Nikhitha', 12, 2),
('Namitha', 2, 3),
('Namitha', 7, 3),
('Namitha', 16, 3),
('Megh', 2, 1),
('Megh', 6, 1),
('Amogha', 2, 2),
('Amogha', 6, 2),
('Amogha', 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `profit_loss`
--

CREATE TABLE `profit_loss` (
  `_date_` date DEFAULT NULL,
  `profit_loss` decimal(8,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profit_loss`
--

INSERT INTO `profit_loss` (`_date_`, `profit_loss`) VALUES
('2021-12-13', '9594.00'),
('2021-12-13', '9594.00'),
('2021-12-13', '9594.00'),
('2021-12-13', '27850.00'),
('2021-12-13', '27850.00'),
('2021-12-13', '27850.00'),
('2021-12-13', '27850.00'),
('2021-12-13', '27850.00'),
('2021-12-13', '28586.00'),
('2021-12-13', '28586.00'),
('2021-12-13', '28586.00'),
('2021-12-14', '9528.00'),
('2021-12-14', '11008.00'),
('2021-12-14', '11008.00'),
('2021-12-14', '11008.00');

-- --------------------------------------------------------

--
-- Table structure for table `restaraunt`
--

CREATE TABLE `restaraunt` (
  `item_id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `item_description` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaraunt`
--

INSERT INTO `restaraunt` (`item_id`, `item_name`, `price`, `item_description`, `category`) VALUES
(1, 'Today\'s Soup', '5.50', '', 'Starters'),
(2, 'Bruschetta', '8.50', 'Bread with pesto, tomatoes, onion, garlic', 'Starters'),
(3, 'Garlic bread', '9.50', 'Grilled ciabatta, garlic butter, onions', 'Starters'),
(4, 'Margherita Pizza', '12.50', 'Fresh tomatoes, fresh mozzarella, fresh basil', 'Main Course'),
(5, 'Chicken Pizza', '17.00', 'Fresh tomatoes, mozzarella, chicken, onions', 'Main Course'),
(6, 'Sweet Potato Shakshuka', '25.50', 'Sweet potatoe, onions, lemon juice, eggs, cheddar cheese', 'Main Course'),
(7, 'Pineapple\'o\'clock (Pizza)', '16.50', 'Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil', 'Main Course'),
(8, 'Lobster Rolls', '30.00', 'Lobster, bun, mayonnaise, lemon juice, salt, black pepper', 'Main Course'),
(9, 'Lasagna', '13.50', 'Special sauce, mozzarella, parmesan, ground beef', 'Main Course'),
(10, 'Ravioli', '14.50', 'Ravioli filled with cheese', 'Main Course'),
(11, 'Spaghetti Classica', '11.00', 'Fresh tomatoes, onions, ground beef', 'Main Course'),
(12, 'Ice Creams', '5.50', 'Vanilla, Chocolate, Strawberry, Butterscotch, Black Current, Mango', 'Desserts'),
(13, 'Creme brulee', '11.00', 'Custard, caramelized sugar', 'Desserts'),
(14, 'Chocolate Mousse', '18.00', 'chocolate, cream, sugar, eggs, butter', 'Desserts'),
(15, 'Caramel Cake', '25.00', 'Butter, milk, egg, vanilla extract, sugar, flour', 'Desserts'),
(16, 'Paloma Fizz Mocktail', '25.50', 'Rosemary juice, grapefruit Juice, ice, soda', 'Mocktails'),
(17, 'Blue Lagoon', '18.00', 'blue Curaçao syrup, lemon juice, lemon-lime soda ', 'Mocktails'),
(18, 'Tropical punch mocktail', '15.00', 'Passionfruit, mint, lemongrass and orange, sparkling water', 'Mocktails'),
(19, 'Watermelon \'nojitos\'', '15.00', 'Watermelon, mint, soda', 'Mocktails');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_number` decimal(4,0) NOT NULL,
  `room_type` varchar(15) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `available` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_number`, `room_type`, `price`, `available`) VALUES
('100', 'standard', '200.00', 1),
('101', 'standard', '200.00', 0),
('103', 'standard', '200.00', 1),
('104', 'standard', '200.00', 0),
('201', 'delux', '300.00', 0),
('202', 'delux', '300.00', 0),
('203', 'delux', '300.00', 1),
('204', 'delux', '300.00', 0),
('301', 'royal', '500.00', 0),
('302', 'royal', '500.00', 1),
('303', 'royal', '500.00', 1),
('304', 'royal', '500.00', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `room_availability_view`
-- (See below for the actual view)
--
CREATE TABLE `room_availability_view` (
`room_type` varchar(15)
,`price` decimal(5,2)
,`available` decimal(25,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `timesheet`
--

CREATE TABLE `timesheet` (
  `employee_id` int(11) NOT NULL,
  `number_of_hours` decimal(8,2) NOT NULL,
  `compensation_per_hour` decimal(8,2) NOT NULL,
  `date_of_entry` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timesheet`
--

INSERT INTO `timesheet` (`employee_id`, `number_of_hours`, `compensation_per_hour`, `date_of_entry`) VALUES
(1011, '17.00', '20.00', '2021-11-02'),
(1014, '13.50', '30.00', '2021-10-10'),
(1015, '17.90', '45.00', '2021-12-01'),
(1016, '10.20', '45.70', '2021-09-01'),
(1020, '8.20', '35.76', '2021-12-02');

-- --------------------------------------------------------

--
-- Structure for view `emp_by_dept`
--
DROP TABLE IF EXISTS `emp_by_dept`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `altheda`.`emp_by_dept`  AS SELECT `altheda`.`employee`.`employee_id` AS `employee_id`, `altheda`.`employee`.`username` AS `username`, `altheda`.`employee`.`department` AS `department`, count(0) AS `employee_count` FROM `altheda`.`employee` GROUP BY `altheda`.`employee`.`department` ;

-- --------------------------------------------------------

--
-- Structure for view `room_availability_view`
--
DROP TABLE IF EXISTS `room_availability_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `altheda`.`room_availability_view`  AS SELECT `altheda`.`room`.`room_type` AS `room_type`, `altheda`.`room`.`price` AS `price`, sum(`altheda`.`room`.`available`) AS `available` FROM `altheda`.`room` WHERE `altheda`.`room`.`available` = 1 GROUP BY `altheda`.`room`.`room_type` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `activity_registration`
--
ALTER TABLE `activity_registration`
  ADD PRIMARY KEY (`customer_id`,`activity_id`,`date`),
  ADD KEY `fk_activity_id` (`activity_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `fk_username_name` (`username`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `cashless`
--
ALTER TABLE `cashless`
  ADD PRIMARY KEY (`customer_id`,`booking_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`customer_id`,`booking_id`,`room_number`),
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD KEY `fk_cus_name` (`customer_id`),
  ADD KEY `fk_booking_id` (`booking_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `fk_username` (`username`);

--
-- Indexes for table `customer_login`
--
ALTER TABLE `customer_login`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `demographics`
--
ALTER TABLE `demographics`
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `fk_user_name` (`username`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`username`,`item_id`),
  ADD KEY `fk_item_id` (`item_id`);

--
-- Indexes for table `restaraunt`
--
ALTER TABLE `restaraunt`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_number`);

--
-- Indexes for table `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
