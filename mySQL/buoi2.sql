INSERT INTO producttype(name,description,updated_at)
VALUES ("Loại 1", 'Mô tả cho loại 1', '2017-05-12 04:05:59')

INSERT INTO product(name,id_type,description,price)
VALUES ('Sản phẩm 1', 2, 'Mô tả sản phẩm 1', 20000)

INSERT INTO `product` (`id`, `name`, `id_type`, `description`, `price`) 
VALUES (NULL, 'Sản phẩm 2', '3', 'Mô tả sản phẩm 2', '23456');


UPDATE producttype 
SET updated_at = "2017-06-25 14:25:26"
WHERE id=3


ALTER TABLE `product` 
ADD `views` BIGINT(20) NOT NULL DEFAULT '0' AFTER `price`;

-- Cập nhật số lượt xem tăng 1 cho sản phẩm có id là 1
UPDATE product
SET views = views+1
WHERE id=1

-- cập nhật đơn giá tăng 10% cho những sản phẩm thuộc loại "Apple"

UPDATE product
SET price = 1.1*price
WHERE id_type = (SELECT id FROM producttype WHERE name = "Apple")


DELETE FROM product
WHERE views<3


DELETE FROM producttype
where id=1


SELECT * FROM product
where id=1


-- lọc ra danh sách sản phẩm mà trong tên có samsung
SELECT * FROM product
WHERE name LIKE "%samsung%"

-- Lọc ra những sản phẩm thuộc loại Apple
SELECT product.* FROM product
INNER JOIN producttype 
    ON producttype.id = product.id_type
WHERE producttype.name = "Apple"



SELECT product.name, price FROM product
INNER JOIN producttype 
    ON producttype.id = product.id_type
WHERE producttype.name = "Apple"

SELECT p.name, price FROM product p
INNER JOIN producttype t
    ON t.id = p.id_type
WHERE t.name = "Apple"




SELECT p.name as "Tên Sản phẩm", price as 'Đơn giá'
FROM product p, producttype t
WHERE t.id = p.id_type 
AND t.name = "Apple" 




INSERT INTO product(name,id_type,description,price)
SELECT name,id_type,description,price FROM product b where b.name = 'Sản phẩm 1'


INSERT INTO `producttype` (`name`)
SELECT * FROM 'abc'
WHERE 1=1
LIMIT 1



    

