create table admin (
id bigint not null primary key auto_increment,
username varchar (150) not null,
password varchar (150) not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);

create table khachhang_thuong (
id bigint not null primary key auto_increment,
sdt int not null,
diachi varchar (255) not null,
dichvudangky varchar (255) not null,
content text null,
status int not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
create table khachhang (
id bigint not null primary key auto_increment,
username varchar (150) not null,
password varchar (150) not null,
fullname varchar (150) null,
sdt int not null,
diachi varchar (255) not null,
dichvudangky varchar (255) not null,
content text null,
status int not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
create table news (
id bigint not null primary key auto_increment,
title varchar(255) null,
thumbnail varchar(150) null,
recomment text null,
descripsion varchar(150) not null,
content text not null,
status int not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);