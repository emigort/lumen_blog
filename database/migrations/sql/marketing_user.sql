create table `marketing_user`
(
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `email` varchar(192) NOT NULL,
    `first_name` varchar(192) NOT NULL,
    `last_name` varchar(192) NOT NULL,
    `opt_in` SMALLINT DEFAULT 0,
    PRIMARY KEY(`id`)
);
