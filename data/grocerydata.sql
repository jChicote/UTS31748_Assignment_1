CREATE DATABASE store;
use store;

CREATE TABLE grocerystore(
   product_id    INTEGER  NOT NULL PRIMARY KEY,
   product_name  VARCHAR(20) NOT NULL,
   unit_price    NUMERIC(8,2) NOT NULL,
   unit_quantity VARCHAR(15) NOT NULL,
   in_stock      INTEGER  NOT NULL
);

INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (1000,'Fish Fingers',2.55,'500 gram',1500);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (1001,'Fish Fingers',5,'1000 gram',750);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (1002,'Hamburger Patties',2.35,'Pack 10',1200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (1003,'Shelled Prawns',6.9,'250 gram',300);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (1004,'Tub Ice Cream',1.8,'1 Litre',800);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (1005,'Tub Ice Cream',3.4,'2 Litre',1200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (2000,'Panadol',3,'Pack 24',2000);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (2001,'Panadol',5.5,'Bottle 50',1000);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (2002,'Bath Soap',2.6,'Pack 6',500);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (2003,'Garbage Bags Small',1.5,'Pack 10',500);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (2004,'Garbage Bags Large',5,'Pack 50',300);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (2005,'Washing Powder',4,'1000 gram',800);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (2006,'Laundry Bleach',3.55,'2 Litre bottle',250);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (3000,'Cheddar Cheese',8,'500 gram',1000);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (3001,'Cheddar Cheese',15,'1000 gram',1000);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (3002,'T''Bone Steak',7,'1000 gram',200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (3003,'Navel Oranges',3.99,'Bag 20',200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (3004,'Bananas',1.49,'Kilo',400);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (3005,'Peaches',2.99,'Kilo',500);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (3006,'Grapes',3.5,'Kilo',200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (3007,'Apples',1.99,'Kilo',500);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (4000,'Earl Grey Tea Bags',2.49,'Pack 25',1200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (4001,'Earl Grey Tea Bags',7.25,'Pack 100',1200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (4002,'Earl Grey Tea Bags',13,'Pack 200',800);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (4003,'Instant Coffee',2.89,'200 gram',500);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (4004,'Instant Coffee',5.1,'500 gram',500);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (4005,'Chocolate Bar',2.5,'500 gram',300);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (5000,'Dry Dog Food',5.95,'5 kg Pack',400);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (5001,'Dry Dog Food',1.95,'1 kg Pack',400);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (5002,'Bird Food',3.99,'500g packet',200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (5003,'Cat Food',2,'500g',200);
INSERT INTO grocerystore(product_id,product_name,unit_price,unit_quantity,in_stock)
VALUES (5004,'Fish Food',3,'500g',200);
