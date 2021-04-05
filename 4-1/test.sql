    CREATE TABLE users2 (
      id INT AUTO_INCREMENT,
      name VARCHAR(50),
      password VARCHAR(255),
      time TIMESTAMP,
      PRIMARY KEY (id)
    )DEFAULT CHARSET=utf8;



    CREATE TABLE posts2 (
      id INT NOT NULL AUTO_INCREMENT,
      title VARCHAR(50),
      content VARCHAR(255),
      time TIMESTAMP,
      PRIMARY KEY (id)
    )DEFAULT CHARSET=utf8;

    CREATE TABLE comments (
      id INT NOT NULL AUTO_INCREMENT,
      post_id2 INT,
      name VARCHAR(20),
      content VARCHAR(255),
      time TIMESTAMP,
      PRIMARY KEY (id)
    )DEFAULT CHARSET=utf8;






    INSERT INTO 'users2' ('name', 'password') VALUES (':name', ':password');

    INSERT INTO `posts2` (`title`, `content`) VALUES
    ('今日はぽかぽか', '春がきましたね〜！'),
    ('美味しいお店発見', '今日はお休みだったので都内をブラブラしてました。そしてぶらっと立ち寄ったカツ丼のお店がこれまた美味しくて安い！また行こう！');


INSERT INTO `posts2` (`title`, `content`) VALUES ('新規作成！', '新しく作ったよ！');
