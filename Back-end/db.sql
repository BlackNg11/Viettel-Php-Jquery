use tqphuc;
CREATE TABLE role(
	id bigint NOT NULL primary key auto_increment,
    name VARCHAR(255) NOT NULL,
    code VARCHAR(255) NOT NULL,
    createddate TIMESTAMP NULL,
    modifieddate TIMESTAMP NULL,
    createdby VARCHAR(255) NULL,
    modifiedby VARCHAR(255) NULL
);

CREATE TABLE user(
	id bigint NOT NULL primary key auto_increment,
    username VARCHAR(150) NOT NULL,
	password VARCHAR(150) NOT NULL,
    fullname VARCHAR(150) NOT NULL,
    status int NOT NULL,
    roleid bigint NOT NULL,
    createddate TIMESTAMP NULL,
    modifieddate TIMESTAMP NULL,
    createdby VARCHAR(255) NULL,
    modifiedby VARCHAR(255) NOT NULL
);
ALTER TABLE user ADD CONSTRAINT fk_user_role FOREIGN KEY (roleid) REFERENCES role(id);

CREATE TABLE sim(
	id bigint NOT NULL primary key auto_increment,
    sotb int NOT NULL,
    sothuong int NOT NULL,
    sodep int NOT NULL,
    createddate TIMESTAMP NULL,
    modifieddatsime TIMESTAMP NULL,
    createdby VARCHAR(255) NULL,
    modifiedby VARCHAR(255) NULL
);

CREATE TABLE khachhang(
	id bigint NOT NULL primary key auto_increment,
    sdt int NOT NULL,
    diachi VARCHAR(255) NOT NULL,
    dichvu VARCHAR(255) NOT NULL,
    createddate TIMESTAMP NULL,
    modifieddatsime TIMESTAMP NULL,
    createdby VARCHAR(255) NULL,
    modifiedby VARCHAR(255) NULL
);