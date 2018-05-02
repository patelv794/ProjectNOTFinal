CREATE DATABASE PROJECT_CIS485;




CREATE TABLE products
(
pro_id int AUTO_INCREMENT PRIMARY KEY,
pro_img VARCHAR(600) NOT NULL,
pro_name VARCHAR(100) NOT NULL,
pro_price Double(10,2) NOT NULL,
pro_Group VARCHAR(20) NOT NULL

);


CREATE TABLE rate
(
rat_id INT AUTO_INCREMENT PRIMARY KEY,
rat_name VARCHAR(10) NOT NULL,
rat_message VARCHAR(300) NOT NULL,
rat_date DATE NOT NULL

);


create table customer_question
(
mess_id int(11) auto_increment primary key,
mess_name varchar(20) not null,
mess_email varchar(60) not null,
mess_subject varchar(50) not null,
mess_message varchar (100) not null

)

CREATE TABLE Delivery_address
(
da_id int(11) auto_increment PRIMARY key,
da_fname varchar(10) not null,
da_lname varchar(10) not null,
da_Addre varchar(50) not null,
da_Addre1 varchar(10) not null,
da_zip int(6) not null,
da_city varchar(10) not null,
da_stat varchar(10) not null,
da_phone char(12) not null,
da_mess varchar(50) not null,
da_date date
)

delimiter //
create procedure count_shoopingList()
begin
select count(*) from products;
end;


 
 delimiter //
 create procedure count_Totle_price()
 begin
 select sum(pro_price) from products;
 end;

CREATE TABLE totlePrice
(
id_Final_price INT(11) auto_increment PRIMARY key,
FinalPrice VARCHAR(11) NOT NULL
)


-- table with recordes
CREATE TABLE allproducts
(
gam_id INT AUTO_INCREMENT PRIMARY KEY,
gam_img VARCHAR(600) NOT NULL,
gam_name VARCHAR(100) NOT NULL,
gam_price Double(10,2) NOT NULL,
group_num VARCHAR(10) NOT NULL
);
 
 
INSERT INTO allproducts (gam_img,gam_name,gam_price,group_num) VALUES
('img/2gm.png','Sony - PlayStation 4 Pro Console - Jet Black','399.99','video games'),
('img/17gm.jpg','PlayStation Gold Wireless Headset - PlayStation 4','79.99','video games'),
('img/16gm.jpg','Nintendo Switch - Neon Blue and Red Joy-Con','299.99','video games'),
('img/6gm.jpeg','Call of Duty: WWII - PlayStation 4 Standard Edition','49.99','video games'),
('img/7gm.jpeg','Xbox Wireless Controller - White','59.99','video games'),
('img/1gm.jpg','Xbox One 500 GB Console - White','325.00','video games'),
('img/10gm.jpg','DualShock 4 Wireless Controller for PlayStation 4 - Jet Black','49.99','video games'),
('img/11gm.jpg','Call of Duty Infinite Warfare - PlayStation 4 - Standard Edition','19.99','video games'),
('img/12gm.jpeg','Destiny 2 - Xbox One Standard Edition','29.99','video games'),
('img/13gm.jpg','FIFA 18 Standard Edition - Xbox One','39.99','video games'),
('img/9gm.jpg','Mad Max - PlayStation 4','19.99','video games'),
('img/5gm.jpeg','Nintendo - New Nintendo 3DS ','199.99','video games'),
('img/14gm.jpg','Sony PlayStation Portable Core PSP 1000 Black','99.99','video games'),
('img/15gm.jpg','Call of Duty: Infinite Warfare - Xbox One','39.99','video games'),
('img/8gm.jpg','The Last Guardian - PlayStation 4','39.99','video games'),
('img/4gm.jpg','PlayStation Vita WiFi','299.99','video games'),
('img/18gm.jpg','PlayStation VR - Doom Bundle','299.99','video games');

