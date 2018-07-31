CREATE TABLE `food_details` (
`id` int(1) NOT NULL,
 `title` varchar(25) NOT NULL,
 `description` varchar(50) NOT NULL,
 `count` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `food_details` ADD PRIMARY KEY (`id`);
ALTER TABLE `food_details` MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;