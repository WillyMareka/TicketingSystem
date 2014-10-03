CREATE TABLE `examinations` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `cat_1` int(11) NOT NULL,
  `cat_2` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `date_inserted` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1