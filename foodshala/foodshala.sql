--
-- Database: `foodshala`
--
-- ------------------------------------------------------------------------
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
-- ----------------------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- ------------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`,`category`) VALUES
('CHIRAG', 'CHIRAG', 'chirag171922.cse@chitkara.edu.in', '9999999999', 'CHITKARA UNIVERSITY,RAJPURA', 'CHIRAG','VEG'),
('RAHUL', 'RAHUL', 'chirag171922.cse@chitkara.edu.in', '9999999999', 'CHITKARA UNIVERSITY,RAJPURA', 'RAHUL','NON-VEG'),
('KASHISH', 'KASHISH', 'chirag171922.cse@chitkara.edu.in', '9999999999', 'CHITKARA UNIVERSITY,RAJPURA', 'KASHISH','VEG'),
('ISHANT', 'ISHANT', 'chirag171922.cse@chitkara.edu.in', '9999999999', 'CHITKARA UNIVERSITY,RAJPURA', 'ISHANT','NON-VEG'),
('KARAN', 'KARAN', 'chirag171922.cse@chitkara.edu.in', '9999999999', 'CHITKARA UNIVERSITY,RAJPURA', 'KARAN','VEG');

-- -------------------------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_NAME` varchar(30) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE',
   `category` varchar(10) NOT NULL DEFAULT 'VEG'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_NAME`, `options`,`category`) VALUES
(58, 'Juicy Masala Paneer Kathi Roll', 40, 'Pure Veg and Tasty.', 'BIKANER SWEETS', 'ENABLE','VEG'),
(59, 'Meurig Fish', 60, 'Pure Veg and Tasty.', 'SINDHI SWEETS', 'ENABLE','NON-VEG'),
(60, 'Chocolate Hazelnut Truffle', 99, 'Pure Veg and Tasty.', 'HALDIRAM', 'ENABLE','VEG'),
(61, 'Choco Chip Shake', 80, 'Pure Veg and Tasty.', 'BIKANER SWEETS', 'ENABLE','VEG'),
(62, 'Spring Rolls', 65, 'Pure Veg and Tasty.', 'SINDHI SWEETS', 'ENABLE','VEG'),
(63, 'Baahubali Thali', 75, 'Pure Veg and Tasty.', 'HALDIRAM ',  'ENABLE','VEG'),
(65, 'Crabs', 25, 'Enjoy Your Food', 'HALDIRAM', 'ENABLE','NON_VEG'),
(66, 'Tea', 20, 'Pure Veg and Tasty.', 'BIKANER SWEETS ',  'DISABLE','VEG'),
(68, 'Paneer', 85, 'Pure Veg and Tasty.', 'BIKANO', 'DISABLE','VEG'),
(69, 'Coffee', 25, 'Pure Veg and Tasty.', 'BIKANO',  'ENABLE','VEG'),
(71, 'Fish', 40, 'Enjoy Your Food.', 'BIKANER SWEETS', 'ENABLE','NON-VEG'),
(72, 'Paneer Pakora', 45, 'Pure Veg and Tasty.', 'SINDHI SWEETS',  'ENABLE','VEG'),
(73, 'Puff', 35, 'Pure Veg and Tasty.', 'SINDHI SWEETS',  'ENABLE','VEG'),
(74, 'Pizza', 200, 'Good and Tasty ', 'MITHHAN SWEETS',  'DISABLE','VEG'),
(75, 'French Fries', 60, 'Pure Veg and Tasty.', 'BIKANER SWEETS', 'DISABLE','VEG'),
(76, 'Grilled Chicken', 35, 'Enjoy Your Day.', 'MITHHAN SWEETS', 'ENABLE','NON-VEG'),
(77, 'Pizza', 200, 'Pure Vegetable and Tasty.', 'SINDHI SWEETS','ENABLE','VEG'),
(78, 'French Fries', 75, 'Pure Veg and Tasty.', 'BIKANER SWEETS', 'ENABLE','VEG'),
(79, 'Pakora', 45, 'TASTY', 'MITHHAN SWEETS','ENABLE','VEG');

-- -----------------------------------------------------------------------------------------------
--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_NAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_NAME`) VALUES
(1, 58, 'Juicy Masala Paneer Kathi Roll', 40, 1, '2020-03-03', 'CHIRAG', 'BIKANER SWEETS'),
(2, 61, 'Happy Happy Choco Chip Shake', 80, 2, '2020-03-03', 'ISHANT', 'BIKANER SWEETS'),
(3, 61, 'Happy Happy Choco Chip Shake', 80, 2, '2020-03-03', 'CHIRAG', 'BIKANER SWEETS'),
(4, 65, 'Coffee', 25, 4, '2020-03-03', 'KASHISH', 'HALDIRAM'),
(5, 58, 'Juicy Masala Paneer Kathi Roll', 40, 7, '2020-03-03', 'CHIRAG', 'BIKANER SWEETS'),
(6, 65, 'Coffee', 25, 2, '2020-03-03', 'CHIRAG', 'HALDIRAM'),
(7, 58, 'Juicy Masala Paneer Kathi Roll', 40, 7, '2020-03-03', 'KARAN', 'BIKANER SWEETS'),
(8, 65, 'Coffee', 25, 2, '2020-03-03', 'CHIRAG', 'HALDIRAM'),
(9, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2020-03-03', 'CHIRAG', 'HALDIRAM'),
(10, 59, 'Meurig Fish', 60, 1, '2020-03-05', 'ISHANT', 'SINDHI SWEETS'),
(11, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2020-03-05', 'KARAN', 'HALDIRAM'),
(12, 65, 'Coffee', 25, 1, '2020-03-05', 'ISHANT', 'HALDIRAM'),
(13, 59, 'Meurig Fish', 60, 4, '2020-03-05', 'KASHISH', 'SINDHI SWEETS'),
(14, 58, 'Juicy Masala Paneer Kathi Roll', 40, 1, '2020-03-05', 'RAHUL', 'BIKANER SWEETS'),
(15, 60, 'Chocolate Hazelnut Truffle', 99, 4, '2020-03-05', 'CHIRAG', 'HALDIRAM'),
(16, 65, 'Coffee', 25, 1, '2020-03-05', 'KASHISH', 'HALDIRAM'),
(17, 66, 'Tea', 20, 7, '2020-03-05', 'ISHANT', 'BIKANER SWEETS'),
(18, 59, 'Meurig Fish', 60, 5, '2020-03-05', 'KARAN', 'SINDHI SWEETS'),
(19, 63, 'Baahubali Thali', 75, 1, '2020-03-05', 'RAHUL', 'HALDIRAM'),
(20, 68, 'Paneer Pakora', 75, 1, '2020-03-05', 'RAHUL', 'BIKANO'),
(21, 62, 'Spring Rolls', 65, 1, '2020-03-05', 'RAHUL', 'SINDHI SWEETS');

-- ---------------------------------------------------------------------------
--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `restaurants` (`R_ID`, `username`, `email`, `contact`, `address`, `password`) VALUES
(1, 'BIKANER SWEETS', 'bikaner@restaurant.com', '999999999', 'Karnataka', 'BIKANER'),
(2, 'SINDHI SWEETS', 'sindhi@restaurant.com', '999999999', 'Bihar', 'SINDHI'),
(3, 'HALDIRAM', 'haldiram@restaurant.com', '999999999', 'Goa', 'HALDIRAM'),
(4, 'BIKANO', 'bikano@gmail.com', '999999999', 'Panipat', 'BIKANO'),
(5, 'MITHHAN SWEETS', 'mithhan@gmail.com', '999999999', 'Delhi', 'MITHHAN');

-- --------------------------------------------------------------------------------
CREATE TABLE `extra` (
  `username` varchar(30) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- ----------------------------------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
