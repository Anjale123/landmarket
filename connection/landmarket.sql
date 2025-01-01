create database landmarket;
use landmarket;
create table users(userid INT primary key auto_increment,fullname VARCHAR(255),mail VARCHAR(255) UNIQUE,pwsd VARCHAR(255));

create table property(pid INT primary key auto_increment,title varchar(255),userid INT,location varchar(255),descrp text,img1 varchar(255),img2 varchar(255),img3 varchar(255),size INT,price varchar(255),phone varchar(255),surveyorok varchar(3));

create table msgs(msgid INT primary key auto_increment,msgfrom INT,msgto INT,propertyid INT,msge text);