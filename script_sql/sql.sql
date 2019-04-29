SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lon` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;