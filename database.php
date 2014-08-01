create table phpaudit_settings(date_format varchar(255) NULL, site_name varchar(255) NULL);
ALTER TABLE `phpaudit_settings` ADD `default_email` VARCHAR(255) NULL DEFAULT NULL AFTER `site_name`;
ALTER TABLE `phpaudit_news` CHANGE `date` `date` INT(20) NULL DEFAULT NULL;
ALTER TABLE `phpaudit_news` CHANGE `news` `news` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;