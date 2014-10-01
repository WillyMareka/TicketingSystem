CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `othernames` varchar(255) NOT NULL,
  `student_phone` varchar(50) NOT NULL,
  `parent_phone` varchar(50) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `location` varchar(250) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `admission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `group_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1