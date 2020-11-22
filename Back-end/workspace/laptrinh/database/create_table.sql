use tqphuc;
CREATE TABLE role(
	id bigint NOT NULL primary key auto_increment,
    name VARCHAR(255) NOT NULL,
    code VARCHAR(255) NOT NULL,
    createddate TIMESTAMP NULL,
    modifieddate TIMESTAMP NULL,
    createdby VARCHAR(255) NOT NULL,
    modifiedby VARCHAR(255) NOT NULL
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
    createdby VARCHAR(255) NOT NULL,
    modifiedby VARCHAR(255) NOT NULL
);
ALTER TABLE user ADD CONSTRAINT fk_user_role FOREIGN KEY (roleid) REFERENCES role(id);