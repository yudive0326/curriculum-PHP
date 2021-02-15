
CREATE TABLE artists (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(16))
    ENGINE = InnoDB;

INSERT INTO artists (name) VALUES ('WANIMA'),('ONE OK ROCK'),('RADWIMPS'),('BUMP OF CHICKEN'),('UVERworld');




CREATE TABLE songs (id int AUTO_INCREMENT PRIMARY KEY, name varchar(16), artists_id varchar(8)) ENGINE = InnoDB;

INSERT INTO songs (name, artists_id) VALUES ('ともに', '1'),('シグナル', '1'),('The Beginning', '2'),('キミシダイ列車', '2');





CREATE TABLE sales (id int AUTO_INCREMENT PRIMARY KEY, name varchar(16), sales varchar(8)) ENGINE = InnoDB;

INSERT INTO sales (name, sales) VALUES ('林勇太', '70'),('中コウチ', '140'),('島崎', '200'),('寺原', '30');




CREATE TABLE posts (
      id INT NOT NULL AUTO_INCREMENT,
      title VARCHAR(50),
      content VARCHAR(255),
      time TIMESTAMP,
      PRIMARY KEY (id)
    )DEFAULT CHARSET=utf8;



    CREATE TABLE comments (
      id INT NOT NULL AUTO_INCREMENT,
      post_id INT,
      name VARCHAR(20),
      content VARCHAR(255),
      time TIMESTAMP
      PRIMARY KEY (id)
    )DEFAULT CHARSET=utf8;


    CREATE TABLE users (
      id INT AUTO_INCREMENT,
      name VARCHAR(50),
      password VARCHAR(255),
      time TIMESTAMP,
      PRIMARY KEY (id)
    )DEFAULT CHARSET=utf8;