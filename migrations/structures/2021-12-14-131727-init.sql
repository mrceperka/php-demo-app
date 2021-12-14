-- TODO feature: (db) multiple ingredients with same name should not probably exist
CREATE TABLE `ingredient`
(
	`id`   int          NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(255) NOT NULL
);
