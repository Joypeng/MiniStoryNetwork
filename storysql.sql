CREATE DATABASE `tushu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

use tushu;

create table log(
user varchar(16) primary key,
password varchar(16),
id varchar(18));

create table book(
title varchar(20) primary key,
author varchar(16)
);

create table content(
id int auto_increment primary key,
stat int,
title varchar(20),
chapter varchar(30),
chapters text
);


