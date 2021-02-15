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
      time TIMESTAMP,
      PRIMARY KEY (id)
    )DEFAULT CHARSET=utf8;


CREATE TABLE users (
      id INT AUTO_INCREMENT,
      name VARCHAR(50),
      password VARCHAR(255),
      time TIMESTAMP,
      PRIMARY KEY (id)
    )DEFAULT CHARSET=utf8;







    