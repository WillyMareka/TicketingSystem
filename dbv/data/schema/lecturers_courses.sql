CREATE TABLE `lecturers_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecturer_id` int(11) NOT NULL,
  `course_one` int(11) NOT NULL,
  `course_two` int(11) NOT NULL,
  `course_three` int(11) NOT NULL,
  `course_four` int(11) NOT NULL,
  `course_five` int(11) NOT NULL,
  `course_six` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `lecturers_courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1