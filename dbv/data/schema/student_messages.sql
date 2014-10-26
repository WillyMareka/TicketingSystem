CREATE TABLE `student_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecturer_id` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `destination` varchar(250) NOT NULL DEFAULT 'students',
  `sent_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `unit` int(11) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `reply` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1