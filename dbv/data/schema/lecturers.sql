CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `o_names` varchar(100) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `registration_date` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE 'lecturers' AUTO_INCREMENT = 1000;