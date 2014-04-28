ALTER TABLE  `customers` CHANGE  `default_billing_address`  `default_billing_address` INT( 9 ) NULL DEFAULT  '0';
ALTER TABLE  `customers` CHANGE  `default_shipping_address`  `default_shipping_address` INT( 9 ) NULL DEFAULT  '0';
ALTER TABLE  `customers_address_bank` CHANGE  `entry_name`  `entry_name` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;
ALTER TABLE  `routes` CHANGE  `route`  `route` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;

ALTER TABLE `orders` CHANGE `order_number` `order_number` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `orders` CHANGE `shipped_on` `shipped_on` DATETIME NULL DEFAULT NULL;
ALTER TABLE `download_package_files` CHANGE `downloads` `downloads` INT(5) NOT NULL DEFAULT '0';
ALTER TABLE  `pages` CHANGE  `url`  `url` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;