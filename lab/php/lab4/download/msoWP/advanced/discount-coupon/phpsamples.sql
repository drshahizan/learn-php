CREATE TABLE `tbl_discount_coupon` (
  `id` int(8) NOT NULL,
  `discount_code` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discount_coupon`
--

INSERT INTO `tbl_discount_coupon` (`id`, `discount_code`, `price`) VALUES
(1, 'C_USB02', 100.00),
(2, 'C_LPN45', 200.00),
(3, 'C_3DcAM01', 340.00),
(4, 'C_wristWear03', 50.00);