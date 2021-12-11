CREATE database BMS;
use BMS;


CREATE TABLE users (
  ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  DOB DATETIME DEFAULT CURRENT_TIMESTAMP,
  email varchar(255)
);

CREATE TABLE posts (
  P_ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ID INT,
  title VARCHAR(50) NOT NULL UNIQUE,
  body varchar(255),
  post_time datetime,
  likes varchar(255),
  FOREIGN KEY (ID) REFERENCES users(ID)
);

INSERT INTO `posts` (`itile`,`body`) values ([value-1],[value-2]);
