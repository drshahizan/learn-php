--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `status_name`) VALUES
(1, 'New'),
(2, 'In Progress'),
(3, 'Pending'),
(4, 'Done');

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`id`, `title`, `description`, `project_name`, `status_id`, `created_at`) VALUES
(1, 'Tutorial CRUD', 'CRUD Job for the Tutorial functionality', 'StartTuts', 1, '2018-07-12 18:45:01'),
(2, 'Listing with Filtering and Pagination', 'Tutorial listing with search filter option and pagination links', 'StartTuts', 2, '2018-07-12 18:44:54'),
(3, 'Sorting and Change Ordering', 'Enabling dynamic sorting and change the list order with AJAX  ', 'StartTuts', 1, '2018-07-12 18:44:58'),
(4, 'Client-side and server-side Validation', 'Validating user data with client and the server side validation mechanism.', 'StartTuts', 3, '2018-07-12 18:44:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
