CREATE TABLE `uploaded_notes` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `path` text NOT NULL,
  `unit` int(11) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `topic_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`upload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1