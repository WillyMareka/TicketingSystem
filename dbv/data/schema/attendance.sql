CREATE TABLE `attendance` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `present_hrs` int(11) NOT NULL DEFAULT '0',
  `absent_hrs` int(11) NOT NULL DEFAULT '0',
  `total_hrs` int(11) NOT NULL DEFAULT '8',
  `percentage_absent` varchar(4) NOT NULL DEFAULT '0',
  `lecturer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1