CREATE DATABASE php2509;




CREATE TABLE `php2509`.`productType` (
	`id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'mã loại ....' , 
	`name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL 
		DEFAULT 'tên sp abc...' COMMENT 'tên loại ...' , 
	`description` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , 
	`updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
	PRIMARY KEY (`id`), 
	UNIQUE `không được trùng` (`name`)
) 
ENGINE = InnoDB COMMENT = 'lưu thông tin loại sp';




--tạo bảng
CREATE TABLE product
(
	id int(10),
	name varchar(250),
	description text,

)

--sửa bảng
ALTER TABLE product
ADD price float(20) NOT NULL DEFAULT 0 

ALTER TABLE `product` 
ADD `id_type` INT(10) UNSIGNED NOT NULL AFTER `name`;


--xóa cột
ALTER TABLE `bill` DROP `total`;


--xóa cột
DROP TABLE bill

--xoa db
DROP DATABASE php2509

--lệnh tạo liên kết bảng

ALTER TABLE product
ADD FOREIGN KEY (id_type) REFERENCES producttype(id)



	name maSP mô tả...
1	sp1	 001  23456789sdf
2	sp2  002  wrtyjgcbdc 
3
4
5
6
7
8

    