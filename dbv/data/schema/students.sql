CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `othernames` varchar(255) NOT NULL,
  `student_phone` varchar(50) NOT NULL,
  `parent_phone` varchar(50) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `location` varchar(250) NOT NULL,
  `admission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1