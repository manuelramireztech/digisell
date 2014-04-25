ALTER TABLE  `customers` CHANGE  `default_billing_address`  `default_billing_address` INT( 9 ) NULL DEFAULT  '0';
ALTER TABLE  `customers` CHANGE  `default_shipping_address`  `default_shipping_address` INT( 9 ) NULL DEFAULT  '0';
ALTER TABLE  `customers_address_bank` CHANGE  `entry_name`  `entry_name` VARCHAR( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ;
