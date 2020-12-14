CREATE DATABASE `ass2`;

USE `ass2`;

-- create table save account

CREATE TABLE `tai_khoan`(
    `id` int UNIQUE NOT NULL AUTO_INCREMENT,
    `username` varchar(20) UNIQUE NOT NULL,
    `password` varchar(20) NOT NULL,
    `loai` int NOT NULL default 1,
    PRIMARY KEY(id)
);
INSERT INTO tai_khoan(id,username,password,loai) VALUES
(0,'0','0',2),
(1,'1','1',1);