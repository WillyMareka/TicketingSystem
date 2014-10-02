CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `destination` varchar(250) NOT NULL DEFAULT 'students',
  `sent_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `unit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1