# RESTIAM PHP Complete CRUD Application

### ****Creating the Database Table****

Create a table named *clients* inside your MySQL database using the following code.

```sql
CREATE TABLE `clients` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)
```

Create a table named *team* 

```sql 
CREATE TABLE `team`(
    `id` int(255) NOT NULL AUTO_INCREMENT,
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `post` varchar(255) NOT NULL,
    `Salary` int(255) NOT NULL,
    `gender` varchar(255) NOT NULL,
    `profile` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
)
```

Create a table named *delivery* 

```sql 
CREATE TABLE `delivery`(
    `id` int(255) NOT NULL AUTO_INCREMENT,
    `first_name` varchar(255) NOT NULL,
    `last_name` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
)
```

Create a table named *menu* 

```sql 
CREATE TABLE `menu`(
    `id` int(255) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `description` varchar(255) NOT NULL,
    `price` int(255) NOT NULL,
    `profile` varchar(255) NOT NULL,
    `reviews` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
)
```

Create a table named *Order* 

```sql 
CREATE TABLE `order`(
    `id` int(255) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `Client_Id` int(255) NOT NULL,
    `shippingAgent_Id` int(255) NOT NULL, 
    `Menu_Id` int(255) NOT NULL,
    FOREIGN KEY (Client_Id) REFERENCES clients(id),
    FOREIGN KEY (shippingAgent_Id) REFERENCES delivery(id),
    FOREIGN KEY (Menu_Id) REFERENCES menu(id),
    `is_dilevered` varchar(255) NOT NULL,
    -- is_dilevered NUMBER(1),
    -- CONSTRAINT ck_testbool_ischk CHECK (is_checked IN (1,0)),
    PRIMARY KEY (`id`)
)
```

Create the *index* page table


```sql 
SELECT 
`order`.id,
 crud.first_name AS Client_name,
  crud.address AS Address_order,
  menu.name AS product_name, 
  menu.price AS total_price, 
  delivery.first_name AS shipping_Agent, 
  delivery.phone AS Agent_phone
  FROM `order` 
  INNER JOIN crud ON `order`.Client_Id = crud.id
  INNER JOIN menu ON `order`.Menu_Id = menu.id
  INNER JOIN delivery ON `order`.shippingAgent_Id = delivery.id;
 ```

















### ****Copy files to htdocs folder****

Download the above files. Create a folder named *crud* inside *htdocs* folder in *xampp* directory. Finally, copy the *crud* folder inside *htdocs* folder. Now, visit [localhost/crud](http://localhost/crud) in your browser and you should see the application.
