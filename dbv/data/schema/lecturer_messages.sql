CREATE TABLE `lecturer_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `origin` int(11) NOT NULL,
  `origin_description` varchar(250) NOT NULL,
  `destination` varchar(250) NOT NULL DEFAULT 'students',
  `sent_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `unit` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1