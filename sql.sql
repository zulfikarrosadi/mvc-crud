CREATE DATABASE IF NOT EXISTS mvccrudabc;
CREATE TABLE user (id_user int NOT null primary key auto_increment, username varchar(100) NOT NULL, password varchar(255) NOT NULL);
CREATE TABLE buku (id_buku int NOT null primary key auto_increment, judul_buku varchar(100) NOT NULL, author varchar(100) NOT NULL, tahun year NOT NULL);