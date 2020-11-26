create table role (
id bigint not null primary key auto_increment,
name varchar (150) not null,
code varchar (150) not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);

create table user (
id bigint not null primary key auto_increment,
username varchar (150) null,
password varchar (150) null,
fullname varchar (150) null,
status int not null,
roleid bigint not null,
sdt int not null,
diachi varchar (255) not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
alter table user add constraint fk_user_role foreign key(roleid) references role(id);

create table loaidichvu (
id bigint not null primary key auto_increment,
name varchar (150) not null,
code varchar (150) not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);

create table dichvu (
id bigint not null primary key auto_increment,
name varchar (150) not null,
loaidichvuid bigint not null,
giatien int not null,
content text null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);

alter table dichvu add constraint fk_dichvu_loaidichvu foreign key(loaidichvuid) references loaidichvu(id);

create table dangkydichvu (
id bigint not null primary key auto_increment,
status int not null,
loaidichvuid bigint not null,
userid bigint not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
alter table dangkydichvu add constraint fk_dangkydichvu_user foreign key(userid) references user(id);
alter table dangkydichvu add constraint fk_dangkydichvu_loaidichvu foreign key(loaidichvuid) references loaidichvu(id);

create table category (
id bigint not null primary key auto_increment,
name varchar (150) not null,
code varchar (150) not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);

create table news (
id bigint not null primary key auto_increment,
title varchar (255) null,
thumbnail varchar (255) null,
shortdescription text null,
content text null,
categoryid bigint not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);

alter table news add constraint fk_news_category foreign key(categoryid) references category(id);

create table comment (
id bigint not null primary key auto_increment,
content text not null,
userid bigint not null,
newid bigint not null,
createddate timestamp null,
modifieddate timestamp null,
createdby varchar(255) null,
modifiedby varchar(255) null
);
alter table comment add constraint fk_comment_news foreign key(newid) references news(id);
alter table comment add constraint fk_comment_user foreign key(userid) references user(id);
