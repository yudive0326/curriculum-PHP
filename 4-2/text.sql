CREATE TABLE books (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(50),
    date date,
    stock INT,
    PRIMARY KEY (id)
)DEFAULT CHARSET=utf8;



CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    password VARCHAR(255),
    PRIMARY KEY (id)
)DEFAULT CHARSET=utf8;
