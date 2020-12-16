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
descripsion varchar(150) not null,
status int not null,
thumbnail varchar(150) null,
content text not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
create table kho (
id bigint not null primary key auto_increment,
tenkho varchar(150) not null
);
create table loaisim (
id bigint not null primary key auto_increment,
tenloaisim varchar(150) not null,
content text null
);
insert into loaisim(tenloaisim) values('Sim Thường');
insert into loaisim(tenloaisim) values('Sim Hiếm');
insert into loaisim(tenloaisim) values('Sim Tứ Quý');
insert into loaisim(tenloaisim) values('Sim Thần Tài');
insert into loaisim(tenloaisim) values('Sim Ông Địa');
insert into loaisim(tenloaisim) values('Sim Đại Cát');
insert into loaisim(tenloaisim) values('Sim Phong Thủy');
insert into loaisim(tenloaisim) values('Sim Tiến Lên');
insert into loaisim(tenloaisim) values('Sim Taxi');
insert into loaisim(tenloaisim) values('Sim Năm Sinh');
create table sim (
id bigint not null primary key auto_increment,
sdt varchar(20) not null,
gianhap int not null,
giaban int not null,
status int not null,
idloaisim bigint not null,
idkho bigint not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
alter table sim add constraint fk_sim_loaisim foreign key(idloaisim) references loaisim(id);
alter table sim add constraint fk_user_role foreign key(idkho) references kho(id);