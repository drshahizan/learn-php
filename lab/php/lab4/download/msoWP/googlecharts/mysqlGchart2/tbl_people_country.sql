--
-- Table structure for table `tbl_people_country`
--

CREATE TABLE `tbl_people_country` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_people_country`
--

INSERT INTO `tbl_people_country` (`id`, `Name`, `Country`) VALUES
(1, 'Ingrid', 'USA'),
(2, 'Ishmael', 'USA'),
(3, 'Castor', 'USA'),
(4, 'Arsenio', 'USA'),
(5, 'Conan', 'USA'),
(6, 'Eric', 'USA'),
(7, 'Zenaida', 'USA'),
(8, 'Slade', 'USA'),
(9, 'Ingrid', 'USA'),
(10, 'Armand', 'USA'),
(11, 'Martin', 'USA'),
(12, 'Adam', 'USA'),
(13, 'Preston', 'USA'),
(14, 'Laith', 'USA'),
(15, 'Dean', 'USA'),
(16, 'Talon', 'USA'),
(17, 'Brianna', 'USA'),
(18, 'Sydnee', 'USA'),
(19, 'Britanney', 'USA'),
(20, 'Mohammad', 'USA'),
(21, 'Christopher', 'India'),
(22, 'Ursula', 'India'),
(23, 'Nehru', 'India'),
(24, 'Selma', 'India'),
(25, 'Christian', 'India'),
(26, 'Kylie', 'India'),
(27, 'Garrison', 'India'),
(28, 'Katelyn', 'India'),
(29, 'Chandler', 'India'),
(30, 'Colt', 'India'),
(31, 'Ella', 'India'),
(32, 'Rooney', 'India'),
(33, 'Honorato', 'India'),
(34, 'Herman', 'India'),
(35, 'Ainsley', 'India'),
(36, 'Sean', 'China'),
(37, 'Herman', 'China'),
(38, 'Colette', 'China'),
(39, 'Abdul', 'China'),
(40, 'Colleen', 'China'),
(41, 'Russell', 'China'),
(42, 'Wynter', 'China'),
(43, 'Iliana', 'China'),
(44, 'Nicole', 'China'),
(45, 'Hermione', 'China'),
(46, 'Adena', 'China'),
(47, 'Jane', 'China'),
(48, 'Desirae', 'China'),
(49, 'Colorado', 'China'),
(50, 'Alec', 'China'),
(51, 'Shaine', 'China'),
(52, 'Carly', 'China'),
(53, 'Hyacinth', 'China'),
(54, 'Keith', 'China'),
(55, 'Ariana', 'China'),
(56, 'Jack', 'China'),
(57, 'Octavius', 'China'),
(58, 'Miriam', 'China'),
(59, 'Wang', 'China'),
(60, 'Cleo', 'China'),
(61, 'Nathan', 'Canada'),
(62, 'Dorian', 'Canada'),
(63, 'Nomlanga', 'Canada'),
(64, 'Eve', 'Canada'),
(65, 'Jacob', 'Canada'),
(66, 'Amber', 'Canada'),
(67, 'Tana', 'Canada'),
(68, 'Erasmus', 'Canada'),
(69, 'Caldwell', 'Canada'),
(70, 'Yardley', 'Canada'),
(71, 'Carly', 'Canada'),
(72, 'Karina', 'Canada'),
(73, 'Leo', 'Canada'),
(74, 'Kitra', 'Canada'),
(75, 'Amethyst', 'Canada'),
(76, 'Murphy', 'Canada'),
(77, 'Graiden', 'Canada'),
(78, 'Drew', 'Canada'),
(79, 'Tallulah', 'Canada'),
(80, 'Grady', 'Canada'),
(81, 'Hillary', 'Japan'),
(82, 'Brent', 'Japan'),
(83, 'Hamilton', 'Japan'),
(84, 'Roary', 'Japan'),
(85, 'Lee', 'Japan'),
(86, 'Elton', 'Japan'),
(87, 'Heidi', 'Japan'),
(88, 'Wyoming', 'Japan'),
(89, 'Hyatt', 'Japan'),
(90, 'Mason', 'Japan'),
(91, 'Harlan', 'Japan'),
(92, 'Kato', 'Japan'),
(93, 'Aretha', 'Japan'),
(94, 'Leilani', 'Japan'),
(95, 'Lydia', 'Japan'),
(96, 'Dalton', 'Japan'),
(97, 'Giacomo', 'Japan'),
(98, 'Deanna', 'Japan'),
(99, 'Hamilton', 'Japan'),
(100, 'Hanae', 'Japan');

--
-- Indexes for table `tbl_people_country`
--
ALTER TABLE `tbl_people_country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_people_country`
--
ALTER TABLE `tbl_people_country`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;