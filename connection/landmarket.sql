create database landmarket;
use landmarket;
create table users(userid INT primary key auto_increment,fullname VARCHAR(255),mail VARCHAR(255) UNIQUE,pwsd VARCHAR(255));